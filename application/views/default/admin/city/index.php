<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>City Management</h2>
                <button class="btn btn-dark pull-right" type="button" onclick="location.href = '<?php echo base_url() . 'admin/city/add'; ?>'">Add City</button>
                <div class="clearfix"></div>
            </div>

            <form id="filter_form" method="get" action="<?php echo base_url('admin/city'); ?>">
                <input type="hidden" id="sort_by" name="sort_by" value="<?php echo htmlspecialchars($sort_by); ?>">
                <input type="hidden" id="sort_direction" name="sort_direction" value="<?php echo htmlspecialchars($sort_direction); ?>">

                <div class="x_content">
                    <?php if (!empty($flash_message)) { ?>
                        <div class="alert"><div id="show"><?php echo $flash_message['message']; ?></div></div>
                    <?php } ?>
                    <div class="form-group admin-location-filters admin-location-select-module">
                        <label class="control-label">Country</label>
                        <select name="country_id" id="filter_country_id" class="form-control admin-location-country-filter" data-placeholder="All Countries">
                            <option value=""></option>
                            <?php foreach ($countries as $country) { ?>
                                <option value="<?php echo $country['id']; ?>" <?php if ((string) $selected_country_id === (string) $country['id']) echo 'selected'; ?>><?php echo htmlspecialchars($country['name']); ?></option>
                            <?php } ?>
                        </select>
                        <label class="control-label">State</label>
                        <select name="state_id" id="filter_state_id" class="form-control admin-location-state-filter" data-placeholder="All States">
                            <option value=""></option>
                            <?php foreach ($states as $state) { ?>
                                <option value="<?php echo $state['id']; ?>" <?php if ((string) $selected_state_id === (string) $state['id']) echo 'selected'; ?>><?php echo htmlspecialchars($state['name']); ?></option>
                            <?php } ?>
                        </select>
                        <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Search city" class="form-control">
                        <button type="submit" class="btn btn-primary">Filter</button>
                        <a href="<?php echo base_url('admin/city'); ?>" class="btn btn-default">Reset</a>
                    </div>

                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">Sno</th>
                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "city.name" && $sort_direction == "desc") { ?> onClick="sortList('city.name', 'asc')"<?php } else if ($sort_by == "city.name" && $sort_direction == "asc") { ?> onClick="sortList('city.name', 'desc')"<?php } else { ?> onClick="sortList('city.name', 'asc')"<?php } ?>>City</a>&nbsp;<?php if ($sort_by == "city.name" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i><?php } if ($sort_by == "city.name" && $sort_direction == "desc") { ?><i class="fa fa-arrow-down" aria-hidden="true"></i><?php } ?></th>
                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "state.name" && $sort_direction == "desc") { ?> onClick="sortList('state.name', 'asc')"<?php } else if ($sort_by == "state.name" && $sort_direction == "asc") { ?> onClick="sortList('state.name', 'desc')"<?php } else { ?> onClick="sortList('state.name', 'asc')"<?php } ?>>State</a>&nbsp;<?php if ($sort_by == "state.name" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i><?php } if ($sort_by == "state.name" && $sort_direction == "desc") { ?><i class="fa fa-arrow-down" aria-hidden="true"></i><?php } ?></th>
                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "country.name" && $sort_direction == "desc") { ?> onClick="sortList('country.name', 'asc')"<?php } else if ($sort_by == "country.name" && $sort_direction == "asc") { ?> onClick="sortList('country.name', 'desc')"<?php } else { ?> onClick="sortList('country.name', 'asc')"<?php } ?>>Country</a>&nbsp;<?php if ($sort_by == "country.name" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i><?php } if ($sort_by == "country.name" && $sort_direction == "desc") { ?><i class="fa fa-arrow-down" aria-hidden="true"></i><?php } ?></th>
                                <th class="column-title no-link last"><span class="nobr"><?php echo $this->lang->line('Action'); ?></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (count($cities) > 0) {
                                if ($page_no > 0) {
                                    $i = $page_no;
                                } else {
                                    $i = 1;
                                }
                                foreach ($cities as $city) {
                                    ?>
                                    <tr class="even pointer">
                                        <td class=" "><?php echo $i; ?></td>
                                        <td class=" "><?php echo htmlspecialchars($city['name']); ?></td>
                                        <td class=" "><?php echo htmlspecialchars($city['state_name']); ?></td>
                                        <td class=" "><?php echo htmlspecialchars($city['country_name']); ?></td>
                                        <td class=" last">
                                            <a href="<?php echo base_url() . 'admin/city/edit/' . $city['id']; ?>" style="color:#000"><i class="fa fa-pencil"></i></a>
                                            &nbsp;
                                            <a href="javascript:" onclick="deleteCity(<?php echo $city['id']; ?>)" style="color:#000"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                            } else {
                                ?>
                                <tr class="even pointer">
                                    <td class="text-center" colspan="5">No cities found.</td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite"><?php echo $this->lang->line('showing'); ?> <?php
            if ($total_rows > 0) {
                echo ($page_no + 1);
            } else {
                echo "0";
            }
            ?> to <?php
            if (($page_no + $record_limit) < $total_rows) {
                echo ($page_no + $record_limit);
            } else {
                echo $total_rows;
            }
            ?> of <?php echo $total_rows; ?> entries</div>
        <div id="datatable-fixed-header_paginate" class="dataTables_paginate paging_simple_numbers">
            <?php echo $pagination; ?>
        </div>
    </div>
</div>
<?php $this->load->view('default/admin/partials/select2_location_assets'); ?>
<script>
    function sortList(sortBy, sortDirection) {
        $("#sort_by").val(sortBy);
        $("#sort_direction").val(sortDirection);
        $("#filter_form").submit();
    }

    function deleteCity(cityId) {
        bootbox.confirm("Are you sure you want to delete this city?", function (result) {
            if (result) {
                location.href = '<?php echo base_url() . MASTERADMIN . '/city/delete/'; ?>' + cityId;
            }
        });
    }

    function loadFilterStates(countryId, selectedStateId) {
        var $stateSelect = $('#filter_state_id');

        if (!countryId) {
            AdminLocationSelect.refreshStateOptions($stateSelect, [], '', 'filter');
            return;
        }

        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() . MASTERADMIN . '/city/get_states/'; ?>' + countryId,
            dataType: 'json',
            success: function (states) {
                AdminLocationSelect.refreshStateOptions($stateSelect, states, selectedStateId, 'filter');
            }
        });
    }

    $(document).ready(function () {
        AdminLocationSelect.initCountryFilter('#filter_country_id');
        AdminLocationSelect.initStateFilter('#filter_state_id');

        $('#filter_country_id').on('change', function () {
            loadFilterStates($(this).val(), '');
        });
    });
</script>
