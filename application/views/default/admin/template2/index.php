
<!--
<button class="btn btn-dark" type="button" onclick="location.href = '<?php echo base_url() . 'admin/template/add'; ?>'">Add</button> <div class="row">
  -->
    
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Template</h2>

                <div class="clearfix"></div>
            </div>

            <form id="filter_form" method="get" action="">
                <input type="hidden" id="sort_by" name="sort_by" value="neighborhood.domain_name">
                <input type="hidden" id="sort_direction" name="sort_direction" value="asc">

                <div class="x_content">


                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                        <thead>
                            <tr class="headings">

                                <th class="column-title">Sno </th>
                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "domain.domain" && $sort_direction == "desc") { ?> onClick="sortList('domain.domain', 'asc')"<?php } ?> <?php if ($sort_by != "domain.domain") { ?> onClick="sortList('domain.domain', 'asc')"<?php } ?><?php if ($sort_by == "domain.domain" && $sort_direction == "asc") { ?> onClick="sortList('domain.domain', 'desc')"<?php } ?>>Domain</a>&nbsp;<?php if ($sort_by == "domain.domain" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "domain.domain" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "domain.emails" && $sort_direction == "desc") { ?> onClick="sortList('domain.emails', 'asc')"<?php } ?> <?php if ($sort_by != "domain.emails") { ?> onClick="sortList('domain.emails', 'asc')"<?php } ?><?php if ($sort_by == "domain.emails" && $sort_direction == "asc") { ?> onClick="sortList('domain.emails', 'desc')"<?php } ?>>Emails</a>&nbsp;<?php if ($sort_by == "domain.emails" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "domain.emails" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                               

                                <th class="column-title no-link last"><span class="nobr"><?php echo $this->lang->line('Action'); ?></span>
                                </th>
                                <th class="bulk-actions" colspan="7">
                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            if (count($domain) > 0) {

                                if ($page_no > 0) {
                                    $i = $page_no;
                                } else {
                                    $i = 1;
                                }
                                foreach ($domain as $k => $v) {
                                    ?>
                                    <tr class="even pointer">

                                        <td class=" "><?php echo $i ?></td>
                                        <td class=" "><?php echo $v['domain_name'] ?></td>
                                        <td class=" "><?php echo $v['message'] ?></td>
                                        
                                        <td class=" last"><a href="<?php echo base_url() . 'admin/template/edit/' . $v['id']; ?>" style="color:#000"><i class="fa fa-pencil"></i></a>
                                           
                                            &nbsp;
                                            <a href="<?php echo base_url() . 'admin/template/view/' . $v['id']; ?>" style="color:#000"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                            } else {
                                ?>

                                <tr class="even pointer">

                                    <td class="text-center" colspan="6">No Page Found</td>
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
<script>
    function submitForm()
    {

        var query_string = {};
        var query = window.location.search.substring(1);
        var vars = query.split("?");
        $("#filter_form").attr('action', '<?php echo base_url() . MASTERADMIN . '/domain?' ?>' + vars);
        $("#filter_form").submit();

    }
    function sortList(sortBy, sortDirection)
    {

        $("#sort_by").val(sortBy);
        $("#sort_direction").val(sortDirection);
        $("#filter_form").submit();

    }
</script>
<script>
    function inactiveFranchise(domainid) {


        bootbox.confirm("<?php echo $this->lang->line('Inactiveq'); ?>", function (result) {
            if (result)
            {
                $.ajax({
                    type: "GET",
                    url: "<?php echo base_url() . MASTERADMIN . '/domain/delete_inactive/' ?>" + domainid,
                    success: function (data)
                    {
                        location.href = '<?php echo base_url() . MASTERADMIN . '/domain/' ?>';
                    }
                });
            } else
            {
                //alert('no');
            }
        });
        //});
    }
    function activeFranchise(domainid) {

        //$('#btnlock'+jobid).click(function() {
        bootbox.confirm("<?php echo $this->lang->line('Activeq'); ?>", function (result) {
            if (result)
            {
                $.ajax({
                    type: "GET",
                    url: "<?php echo base_url() . MASTERADMIN . '/domain/delete_active/' ?>" + domainid,
                    success: function (data)
                    {
                        location.href = '<?php echo base_url() . MASTERADMIN . '/domain/' ?>';
                    }
                });
            } else
            {
                //alert('no');
            }
        });
        //});
    }
</script>