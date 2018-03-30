

<!-- iCheck -->

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> User Listing</h2>

                <div class="clearfix"></div>
            </div>
            <form id="filter_form" method="get" action="">
                <input type="hidden" id="sort_by" name="sort_by" value="<?php echo $sort_by; ?>">
                <input type="hidden" id="sort_direction" name="sort_direction" value="<?php echo $sort_direction; ?>">

                <div class="row">
                    <div class="col-md-3 form-group ">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                            <input type="text" class="form-control pickadate" placeholder="<?php echo $this->lang->line('StartDate'); ?>" name="start_date" value="<?php
                            if (!empty($start_date)) {
                                echo $start_date;
                            }
                            ?>">
                        </div>


                    </div>
                    <div class="col-md-3 form-group ">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                            <input type="text" class="form-control pickadate" placeholder="End Date" name="end_date" value="<?php
                            if (!empty($end_date)) {
                                echo $end_date;
                            }
                            ?>">
                        </div>

                    </div>

                    <div class="col-md-2 form-group ">


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Firstname" name="firstname" value="<?php
                            if (!empty($firstname)) {
                                echo $firstname;
                            }
                            ?>">
                        </div>

                    </div>

                    <div class="col-md-2 form-group ">

                        <input type="text" class="form-control" placeholder="Lastname" name="lastname" value="<?php
                        if (!empty($lastname)) {
                            echo $lastname;
                        }
                        ?>">


                    </div>





                    <div class="col-md-1 form-group ">  
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Apply</button>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!--<div class="dataTables_length" id="datatable_length">-->
                        show
                        <label> 
                            <select name="record_limit" class="form-control input-sm" onchange="submitForm();">
                                <option <?php if ($record_limit == "10") { ?> selected="selected"<?php } ?> value="10">10</option>
                                <option <?php if ($record_limit == "20") { ?> selected="selected"<?php } ?> value="20">20</option>
                                <option <?php if ($record_limit == "50") { ?> selected="selected"<?php } ?> value="50">50</option>
                                <option <?php if ($record_limit == "100") { ?> selected="selected"<?php } ?> value="100">100</option>
                            </select>
                        </label>
                        entries
                        <!--</div>-->
                    </div>
                </div>
            </form>
            <div class="x_content">
                <form id="filter_form1" method="POST" action="">
                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                        <thead>
                            <tr class="headings">

                                <th class="column-title"># </th>
                                
                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.firstname" && $sort_direction == "desc") { ?> onClick="sortList('user.firstname', 'asc')"<?php } ?> <?php if ($sort_by != "user.firstname") { ?> onClick="sortList('user.firstname', 'asc')"<?php } ?><?php if ($sort_by == "user.firstname" && $sort_direction == "asc") { ?> onClick="sortList('user.firstname', 'desc')"<?php } ?>> Firstname</a>&nbsp;<?php if ($sort_by == "user.firstname" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.firstname" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.lastname" && $sort_direction == "desc") { ?> onClick="sortList('user.lastname', 'asc')"<?php } ?> <?php if ($sort_by != "user.lastname") { ?> onClick="sortList('user.lastname', 'asc')"<?php } ?><?php if ($sort_by == "user.lastname" && $sort_direction == "asc") { ?> onClick="sortList('user.lastname', 'desc')"<?php } ?>> Lastname</a>&nbsp;<?php if ($sort_by == "user.lastname" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.lastname" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                               

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.add_date" && $sort_direction == "desc") { ?> onClick="sortList('user.add_date', 'asc')"<?php } ?> <?php if ($sort_by != "user.add_date") { ?> onClick="sortList('user.add_date', 'asc')"<?php } ?><?php if ($sort_by == "user.add_date" && $sort_direction == "asc") { ?> onClick="sortList('user.add_date', 'desc')"<?php } ?>>Date</a>&nbsp;<?php if ($sort_by == "user.add_date" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.add_date" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>
                                <th class="column-title no-link last"><span class="nobr">View</span>
                                </th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            if (count($userlisting) > 0) {
                                if ($page_no > 0) {
                                    $i = $page_no;
                                } else {
                                    $i = 1;
                                }
                                foreach ($userlisting as $k => $v) {
                                    ?>
                                    <tr class="even pointer">

                                        <td class=" "><?php echo $i ?></td>
                                        
                                         <td class=" "><?php echo $v['firstname'] ?></td>
                                        <td class=" "><?php echo $v['lastname'] ?></td>
                                        
                                        <td><?php
                                            echo date("d-m-Y", strtotime($v['date']));
                                            ?></td>


                                        <td class="last"> 

                                            <a href="<?php echo BASE_URL . MASTERADMIN . '/user/details/' . $v['lend_id'] ?>" class="dark_grey " ><i class="fa fa-eye"></i> </a>
                                        </td> 

                                    </tr>
                                    <?php
                                    $i++;
                                }
                            } else {
                                ?>

                                <tr class="even pointer">

                                    <td class="text-center" colspan="6">No user found</td>
                                </tr>
                                <?php
                            }
                            ?>




                        </tbody>
                    </table>
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
</div>




<script>
    function submitForm()
    {

        var query_string = {};
        var query = window.location.search.substring(1);
        var vars = query.split("?");
        $("#filter_form").attr('action', '<?php echo BASE_URL . MASTERADMIN . '/user?' ?>' + vars);
        $("#filter_form").submit();

    }
    function submitForm1()
    {

        var query_string = {};
        var query = window.location.search.substring(1);
        var vars = query.split("?");
        $("#filter_form1").attr('action', '<?php echo BASE_URL . 'admin/user/mailsent' ?>');
        $("#filter_form1").submit();

    }
    function sortList(sortBy, sortDirection)
    {

        $("#sort_by").val(sortBy);
        $("#sort_direction").val(sortDirection);
        $("#filter_form").submit();

    }
   $("#mainchk").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
}); 
</script>
<!-- iCheck -->
