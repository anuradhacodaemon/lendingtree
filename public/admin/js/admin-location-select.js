(function ($) {
    'use strict';

    var baseConfig = {
        dropdownParent: $(document.body),
        theme: 'admin-location',
        dropdownAutoWidth: false
    };

    function wrapSelect($el, mode) {
        var $wrap = $el.parent();

        if (!$wrap.hasClass('admin-location-select-wrap')) {
            $el.wrap('<div class="admin-location-select-wrap"></div>');
            $wrap = $el.parent();
        }

        $wrap.removeClass('admin-location-select-wrap--filter admin-location-select-wrap--form');
        $wrap.addClass(mode === 'filter' ? 'admin-location-select-wrap--filter' : 'admin-location-select-wrap--form');

        return $wrap;
    }

    function getOptions($el, defaults) {
        var options = $.extend({}, baseConfig, defaults);

        if ($el.data('placeholder')) {
            options.placeholder = $el.data('placeholder');
        }

        if ($el.data('width')) {
            options.width = $el.data('width');
        }

        return options;
    }

    function getDropdownContainer(instance) {
        return instance && instance.dropdown && instance.dropdown.$dropdownContainer
            ? instance.dropdown.$dropdownContainer
            : $();
    }

    function repositionDropdown($el, searchPlaceholder) {
        var instance = $el.data('select2');

        if (!instance || !instance.isOpen()) {
            return;
        }

        var $inline = instance.$container;
        var $dropdownContainer = getDropdownContainer(instance);

        if (!$inline.length || !$dropdownContainer.length) {
            return;
        }

        var offset = $inline.offset();
        var width = $inline.outerWidth(false);
        var height = $inline.outerHeight(false);
        var dropdownHeight = $dropdownContainer.outerHeight(false) || 240;
        var windowTop = $(window).scrollTop();
        var windowBottom = windowTop + $(window).height();
        var spaceBelow = windowBottom - (offset.top + height);
        var spaceAbove = offset.top - windowTop;
        var openAbove = spaceBelow < Math.min(dropdownHeight, 260) && spaceAbove > spaceBelow;
        var top = openAbove
            ? offset.top - $dropdownContainer.outerHeight(false)
            : offset.top + height + 1;

        $dropdownContainer.css({
            position: 'absolute',
            left: Math.round(offset.left) + 'px',
            top: Math.round(top) + 'px',
            width: Math.round(width) + 'px',
            zIndex: 10060
        });

        instance.$dropdown.css({
            width: Math.round(width) + 'px',
            boxSizing: 'border-box'
        });

        instance.$dropdown
            .removeClass('select2-dropdown--above select2-dropdown--below')
            .addClass(openAbove ? 'select2-dropdown--above' : 'select2-dropdown--below');

        $inline
            .removeClass('select2-container--above select2-container--below')
            .addClass(openAbove ? 'select2-container--above' : 'select2-container--below');

        $dropdownContainer.find('.select2-search__field').attr('placeholder', searchPlaceholder);
    }

    function bindDropdownEvents($el, searchPlaceholder) {
        $el.off('.adminLocationSelect');

        $el.on('select2:open.adminLocationSelect', function () {
            window.setTimeout(function () {
                repositionDropdown($el, searchPlaceholder);
            }, 0);

            $(window).on('scroll.adminLocationSelect resize.adminLocationSelect', function () {
                repositionDropdown($el, searchPlaceholder);
            });
        });

        $el.on('select2:close.adminLocationSelect', function () {
            $(window).off('.adminLocationSelect');
        });

        $el.on('select2:select.adminLocationSelect select2:unselect.adminLocationSelect', function () {
            window.setTimeout(function () {
                repositionDropdown($el, searchPlaceholder);
            }, 0);
        });
    }

    function initSelect2($el, defaults, mode, searchPlaceholder) {
        if (!$el.length) {
            return;
        }

        wrapSelect($el, mode);

        if ($el.hasClass('select2-hidden-accessible')) {
            $el.select2('destroy');
        }

        $el.select2(getOptions($el, defaults));
        bindDropdownEvents($el, searchPlaceholder);

        var instance = $el.data('select2');

        if (instance) {
            instance.on('results:all.adminLocationSelect', function () {
                repositionDropdown($el, searchPlaceholder);
            });

            instance.on('results:append.adminLocationSelect', function () {
                repositionDropdown($el, searchPlaceholder);
            });
        }
    }

    window.AdminLocationSelect = {
        initCountryFilter: function (selector) {
            initSelect2($(selector), {
                placeholder: 'All Countries',
                allowClear: true,
                width: '100%'
            }, 'filter', 'Search countries…');
        },

        initStateFilter: function (selector) {
            initSelect2($(selector), {
                placeholder: 'All States',
                allowClear: true,
                width: '100%'
            }, 'filter', 'Search states…');
        },

        initCountryForm: function (selector) {
            initSelect2($(selector), {
                placeholder: 'Select Country',
                allowClear: true,
                width: '100%'
            }, 'form', 'Search countries…');
        },

        initStateForm: function (selector) {
            initSelect2($(selector), {
                placeholder: 'Select State',
                allowClear: true,
                width: '100%'
            }, 'form', 'Search states…');
        },

        refreshStateOptions: function ($select, states, selectedStateId, mode) {
            var defaults = mode === 'filter'
                ? { placeholder: 'All States', allowClear: true, width: '100%' }
                : { placeholder: 'Select State', allowClear: true, width: '100%' };
            var searchPlaceholder = mode === 'filter' ? 'Search states…' : 'Search states…';
            var currentMode = mode === 'filter' ? 'filter' : 'form';

            if ($select.hasClass('select2-hidden-accessible')) {
                $select.select2('destroy');
            }

            $select.empty().append(new Option('', '', false, false));

            $.each(states || [], function (index, state) {
                var isSelected = selectedStateId && String(selectedStateId) === String(state.id);
                $select.append(new Option(state.name, state.id, false, isSelected));
            });

            initSelect2($select, defaults, currentMode, searchPlaceholder);
        }
    };
})(jQuery);
