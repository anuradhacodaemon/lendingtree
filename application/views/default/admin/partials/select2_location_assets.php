<link href="<?php echo BASE_URL; ?>public/admin/css/select/select2.min.css" rel="stylesheet">
<style>
    .admin-location-select-wrap {
        position: relative;
        vertical-align: middle;
        box-sizing: border-box;
    }

    .admin-location-select-wrap--filter {
        display: inline-block;
        width: 250px;
        margin-right: 12px;
    }

    .admin-location-select-wrap--form {
        display: block;
        width: 100%;
    }

    .admin-location-select-wrap .select2-container {
        width: 100% !important;
        display: block;
    }

    .select2-container--admin-location .select2-selection--single {
        height: 34px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
    }

    .select2-container--admin-location .select2-selection--single .select2-selection__rendered {
        /*line-height: 32px;*/
        padding-left: 12px;
        padding-right: 30px;
        color: #555;
    }

    .select2-container--admin-location .select2-selection--single .select2-selection__placeholder {
        color: #999;
    }

    .select2-container--admin-location .select2-selection--single .select2-selection__arrow {
        height: 32px;
        right: 6px;
    }

    .select2-container--admin-location.select2-container--focus .select2-selection--single,
    .select2-container--admin-location.select2-container--open .select2-selection--single {
        border-color: #66afe9;
        outline: 0;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
    }

    .select2-container--admin-location.select2-container--open {
        z-index: 10059 !important;
    }

    body > .select2-container--admin-location.select2-container--open {
        z-index: 10060 !important;
    }

    .select2-container--admin-location .select2-dropdown {
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        box-sizing: border-box;
        overflow: hidden;
    }

    .select2-container--admin-location .select2-dropdown--below {
        border-top: 1px solid #ccc;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        margin-top: 0;
    }

    .select2-container--admin-location .select2-dropdown--above {
        border-bottom: 1px solid #ccc;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
        margin-bottom: 0;
        box-shadow: 0 -6px 12px rgba(0, 0, 0, 0.175);
    }

    .select2-container--admin-location .select2-search--dropdown {
        display: block;
        padding: 8px;
        box-sizing: border-box;
    }

    .select2-container--admin-location .select2-search--dropdown .select2-search__field {
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 6px 20px;
        outline: none;
    }

    .select2-container--admin-location .select2-search--dropdown .select2-search__field::placeholder {
        color: #999;
    }

    .select2-container--admin-location .select2-search--dropdown .select2-search__field:focus {
        border-color: #66afe9;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
    }

    .select2-container--admin-location .select2-results > .select2-results__options {
        max-height: 220px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .select2-container--admin-location .select2-results__option {
        padding: 8px 12px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .admin-location-filters {
        margin-bottom: 15px;
    }

    .admin-location-filters label.control-label {
        display: inline-block;
        margin: 0 8px 0 0;
        vertical-align: middle;
        font-weight: 600;
    }

    .admin-location-filters .form-control:not(.select2-hidden-accessible) {
        display: inline-block;
        vertical-align: middle;
        max-width: 200px;
    }
</style>
<script src="<?php echo BASE_URL; ?>public/admin/js/select/select2.full.js"></script>
<script src="<?php echo BASE_URL; ?>public/admin/js/admin-location-select.js"></script>
