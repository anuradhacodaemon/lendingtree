<?php
//echo '<pre>';
//$this->session->userdata['export']='';
//print_r($this->session->userdata['export']);
?>

<!-- iCheck -->
<?php
$lead_approved = $this->refinance->checklead_approved_forDomain();
$lend_pending = $this->refinance->checklead_pending_forDomain();
$visitor = $this->refinance->checklead_denied_forDomain();
?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> User Refinance Listing</h2>

                <div class="clearfix"></div>
            </div>
            <div class="row tile_count">
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Number of Pending Applications</span>
                    <div class="count"><?php echo $lend_pending[0]['numLead']; ?></div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i>  Number of Approved Applications</span>
                    <div class="count"><?php echo $lead_approved[0]['numLead']; ?></div>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Number of Denied Applications</span>
                    <div class="count"><?php echo $visitor[0]['numLead']; ?></div>
                </div>
            </div>
            
            <form id="filter_form" method="get" action="">
                <input type="hidden" id="sort_by" name="sort_by" value="<?php echo $sort_by; ?>">
                <input type="hidden" id="sort_direction" name="sort_direction" value="<?php echo $sort_direction; ?>">

                <div class="row">
                    <!--<div class="col-md-3 form-group ">
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
                    </div> -->



                    <!--  
                      <div class="col-md-2 form-group ">
                      <div class="input-group">
                          <input type="text" class="form-control" placeholder="Down Payment less than" name="amount1" value="<?php
                    if (isset($_REQUEST['amount1'])) {
                        echo $_REQUEST['amount1'];
                    }
                    ?>">
                      </div>
                  </div>
                  <div class="col-md-2 form-group ">
                     <div class="input-group">
                          <input type="text" class="form-control" placeholder="Down Payment greater than" name="amount2" value="<?php
                    if (isset($_REQUEST['amount2'])) {
                        echo $_REQUEST['amount2'];
                    }
                    ?>">
                      </div>
                  </div>-->
                    <?php if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) { ?>
                    <div class="col-md-2 form-group ">


                        <div class="input-group">


                            <select class="form-control" placeholder="Domain" name="domain" >
                                <option value="">Select domain </option>
                                <option value="http://coastalcommunity.culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == "http://coastalcommunity.culoanportal.com/") echo 'selected' ?>>coastalcommunity.culoanportal.com</option>
                                <option value="http://culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == "http://culoanportal.com/") echo 'selected' ?>>culoanportal.com</option>
                                <option value="http://mct.culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == "http://mct.culoanportal.com/") echo 'selected' ?>>mct.culoanportal.com</option>
                                <option value="http://swfinancial.culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == "http://swfinancial.culoanportal.com/") echo 'selected' ?>>swfinancial.culoanportal.com</option>
                                <option value="http://bmtccu.culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == "http://bmtccu.culoanportal.com/") echo 'selected' ?>>bmtccu.culoanportal.com</option>
                            
                            </select>
                        </div>

                    </div> 
                    <?php } ?>
                    <div class="col-md-3 form-group ">


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="VIN" name="vin" value="<?php
                            if (isset($_REQUEST['vin'])) {
                                echo $_REQUEST['vin'];
                            }
                            ?>">
                        </div>

                    </div>

                    <div class="col-md-3 form-group ">


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Monthly Payment less than" name="monthly_payment1" value="<?php
                            if (isset($_REQUEST['monthly_payment1'])) {
                                echo $_REQUEST['monthly_payment1'];
                            }
                            ?>">
                        </div>

                    </div>


                    <div class="col-md-3 form-group ">

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Monthly Payment greater than" name="monthly_payment2" value="<?php
                            if (isset($_REQUEST['monthly_payment2'])) {
                                echo $_REQUEST['monthly_payment2'];
                            }
                            ?>">
                        </div>


                    </div>

<div class="col-md-3 form-group ">


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Amount Owe less than" name="currently_owe1" value="<?php
                            if (isset($_REQUEST['currently_owe1'])) {
                                echo $_REQUEST['currently_owe1'];
                            }
                            ?>">
                        </div>

                    </div>


                    <div class="col-md-3 form-group ">

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Amount Owe greater than" name="currently_owe2" value="<?php
                            if (isset($_REQUEST['currently_owe2'])) {
                                echo $_REQUEST['currently_owe2'];
                            }
                            ?>">
                        </div>


                    </div>

                    <div class="col-md-3 form-group ">


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Milage less than" name="current_milage1" value="<?php
                            if (isset($_REQUEST['current_milage1'])) {
                                echo $_REQUEST['current_milage1'];
                            }
                            ?>">
                        </div>

                    </div>


                    <div class="col-md-3 form-group ">

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Milage greater than" name="current_milage2" value="<?php
                            if (isset($_REQUEST['current_milage2'])) {
                                echo $_REQUEST['current_milage2'];
                            }
                            ?>">
                        </div>


                    </div>

                    <!--    <div class="col-md-2 form-group ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                            <input type="text" id="start_date" class="form-control pickadate" placeholder=" Birth Date (Age) less than" name="start_date" value="<?php
                    if (!empty($start_date)) {
                        echo $start_date;
                    }
                    ?>">
                        </div>
                    </div>
                    <div class="col-md-2 form-group ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                            <input type="text" id="end_date" class="form-control pickadate" placeholder=" Birth Date (Age) greater than" name="end_date" value="<?php
                    if (!empty($end_date)) {
                        echo $end_date;
                    }
                    ?>">
                        </div>
                    </div> -->

                    <div class="col-md-1 form-group ">  
                        <button class="btn btn-primary" type="submit">Apply</button>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-md-4">
                    <!--<div class="dataTables_length" id="datatable_length">-/->
                    Show
                    <label> 
                        <select name="record_limit" class="form-control input-sm" onchange="submitForm();">
                            <option <?php if ($record_limit == "10") { ?> selected="selected"<?php } ?> value="10">10</option>
                            <option <?php if ($record_limit == "20") { ?> selected="selected"<?php } ?> value="20">20</option>
                            <option <?php if ($record_limit == "50") { ?> selected="selected"<?php } ?> value="50">50</option>
                            <option <?php if ($record_limit == "100") { ?> selected="selected"<?php } ?> value="100">100</option>
                        </select>
                    </label>
                    entries
                    <!--</div>-/->
                </div> -->
                    <div class="col-md-12">
                        <button class="btn btn-primary pull-left" type="button" onclick="inactiveFranchiseAll();"> Delete</button>
                        <a class="btn btn-primary pull-right"  target="_blank" href="<?php echo BASE_URL . 'admin/refinance/export' ?>">Export as CSV</a>
                    </div>
                </div>
            </form>
            <div class="x_content1">
                <form id="filter_form1" method="POST" action="">
                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                        <thead>
                            <tr class="headings">

                                <!-- <th class="column-title"># </th> -->
                                <th class="column-title"> <input type="checkbox" id="mainchk" name="chk[]"  class="flat"  />
                                </th>

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.firstname" && $sort_direction == "desc") { ?> onClick="sortList('user.firstname', 'asc')"<?php } ?> <?php if ($sort_by != "user.firstname") { ?> onClick="sortList('user.firstname', 'asc')"<?php } ?><?php if ($sort_by == "user.firstname" && $sort_direction == "asc") { ?> onClick="sortList('user.firstname', 'desc')"<?php } ?>> Full Name</a>&nbsp;<?php if ($sort_by == "user.firstname" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.firstname" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.email" && $sort_direction == "desc") { ?> onClick="sortList('user.email', 'asc')"<?php } ?> <?php if ($sort_by != "user.email") { ?> onClick="sortList('user.email', 'asc')"<?php } ?><?php if ($sort_by == "user.email" && $sort_direction == "asc") { ?> onClick="sortList('user.email', 'desc')"<?php } ?>> Email</a>&nbsp;<?php if ($sort_by == "user.email" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.email" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.currently_owe" && $sort_direction == "desc") { ?> onClick="sortList('user.currently_owe', 'asc')"<?php } ?> <?php if ($sort_by != "user.currently_owe") { ?> onClick="sortList('user.currently_owe', 'asc')"<?php } ?><?php if ($sort_by == "user.currently_owe" && $sort_direction == "asc") { ?> onClick="sortList('user.currently_owe', 'desc')"<?php } ?>> Amount Owe</a>&nbsp;<?php if ($sort_by == "user.currently_owe" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.currently_owe" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>


                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.monthly_payment" && $sort_direction == "desc") { ?> onClick="sortList('user.monthly_payment', 'asc')"<?php } ?> <?php if ($sort_by != "user.monthly_payment") { ?> onClick="sortList('user.monthly_payment', 'asc')"<?php } ?><?php if ($sort_by == "user.monthly_payment" && $sort_direction == "asc") { ?> onClick="sortList('user.monthly_payment', 'desc')"<?php } ?>>Monthly payment</a>&nbsp;<?php if ($sort_by == "user.monthly_payment" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.monthly_payment" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.vin" && $sort_direction == "desc") { ?> onClick="sortList('user.vin', 'asc')"<?php } ?> <?php if ($sort_by != "user.vin") { ?> onClick="sortList('user.vin', 'asc')"<?php } ?><?php if ($sort_by == "user.vin" && $sort_direction == "asc") { ?> onClick="sortList('user.vin', 'desc')"<?php } ?>>VIN</a>&nbsp;<?php if ($sort_by == "user.vin" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.vin" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.current_milage" && $sort_direction == "desc") { ?> onClick="sortList('user.current_milage', 'asc')"<?php } ?> <?php if ($sort_by != "user.current_milage") { ?> onClick="sortList('user.current_milage', 'asc')"<?php } ?><?php if ($sort_by == "user.current_milage" && $sort_direction == "asc") { ?> onClick="sortList('user.current_milage', 'desc')"<?php } ?>> Current Milage</a>&nbsp;<?php if ($sort_by == "user.current_milage" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.current_milage" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>


                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.status" && $sort_direction == "desc") { ?> onClick="sortList('user.status', 'asc')"<?php } ?> <?php if ($sort_by != "user.status") { ?> onClick="sortList('user.status', 'asc')"<?php } ?><?php if ($sort_by == "user.status" && $sort_direction == "asc") { ?> onClick="sortList('user.status', 'desc')"<?php } ?>> Status</a>&nbsp;<?php if ($sort_by == "user.status" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.status" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>
                                <!-- <th class="column-title"><span class="nobr">View</span> -->

                                <th class="column-title no-link last"><span class="nobr">Action</span>

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

                                                <!-- <td class=" "><?php echo $i ?></td> -->
                                        <td>
                                            <input type="checkbox" id="check-all" name="c[]" value="<?php echo $v['ref_id'] ?>" class="flat" >
                                        </td>
                                        <td class=" "><?php echo $v['firstname']." ".$v['lastname'] ?></td>
                                        <td class=" "><?php echo $v['email'] ?></td>
                                        <td class=" "><?php
                                            echo $v['currently_owe'];
                                            ?></td>
                                        <td> <?php
                                    echo $v['monthly_payment'];
                                            ?></td>

                                        <td><?php echo $v['vin'] ?></td>

                                        <td><?php echo $v['current_milage']; ?></td>
                                        <td><a href="javascript:void()" id="fc_edit" data-toggle="modal" data-target="#CalenderModalView" style="color:green" onclick="getStatus(<?php echo $v['ref_id'] ?>,<?php echo $v['status'] ?>)" title="Change Status"><?php if ($v['status'] == 1) { ?>  Approved<?php } ?></a>
        <?php if ($v['status'] == 2) { ?> <a href="javascript:void()" id="fc_edit" data-toggle="modal" data-target="#CalenderModalView" style="color:darkgoldenrod" onclick="getStatus(<?php echo $v['ref_id'] ?>,<?php echo $v['status'] ?>)" title="Change Status">Pending <?php } ?>
                                            <?php if ($v['status'] == 0) { ?><a href="javascript:void()" id="fc_edit" data-toggle="modal" data-target="#CalenderModalView" style="color:red" onclick="getStatus(<?php echo $v['ref_id'] ?>,<?php echo $v['status'] ?>)" title="Change Status"> Denied<?php } ?>
                                                </a>

                                        </td>


                                                <!-- <td > 

                                                    <a href="<?php echo BASE_URL . MASTERADMIN . '/refinance/details/' . $v['ref_id'] ?>" class="dark_grey " ><i class="fa fa-eye"></i> </a>
                                                </td>  -->
                                        <td class="last">
                                            <?php if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin') { ?>
                                                <a href="<?php echo BASE_URL . MASTERADMIN . '/admin_refinance/assign_officer/' . $v['ref_id'] ?>" style="color:#000" title="Asign Loan Officer"><i class="fa fa-pencil"></i></a>
                                            <?php } ?>
                                            <a href="<?php echo BASE_URL . MASTERADMIN . '/refinance/details/' . $v['ref_id'] ?>" class="dark_grey" title="View" ><i class="fa fa-eye"></i> </a>
                                                                                       <a href="<?php echo BASE_URL . MASTERADMIN . '/refinance/pdfRefinance/' . $v['ref_id'] ?>" target="_blank" class="dark_grey" title="View" ><i class="fa fa-file-pdf-o"></i> </a>

                                            
                                            
                                            &nbsp;&nbsp;
        <?php if ($v['active_status'] == 1) { ?>
                                                <a href="javascript:" onclick="inactiveFranchise(<?php echo $v['ref_id'] ?>)" style="color:#000" title="Delete"><i class="fa fa-times fa-cog-red" aria-hidden="true"></i></a>
                                            <?php } else { ?>
                                                <a href="javascript:"  onclick="activeFranchise(<?php echo $v['ref_id'] ?>)" style="color:#000"><i class="fa fa-times-circle-o fa-cog-red" aria-hidden="true"></i></a>

        <?php } ?>    

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

<div id="CalenderModalView" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel2">Update</h4>
            </div>
            <div class="modal-body">


                <div id="testmodal2" style="padding: 5px 20px;">
                    <form id="antoform2" class="form-horizontal calender" role="form">
                        <input id="statusId" name="statusId" type="hidden">
                        <input id="lendId" name="lendId" type="hidden">
                        <div class="form-group">
                            <label class="col-sm-9" control-label">Status</label>
                            <div class="col-sm-9">
                                <select name="status" id="status" >
                                    <option value="">select status</option> 
                                    <option value="1">Approved</option> 
                                    <option value="0">Denied</option> 
                                    <option value="2">Pending</option>    
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">close</button>
                <button type="button" id="cPrice" class="btn btn-primary antosubmit2">submit</button>
            </div>
        </div>
    </div>
</div>
<script>
    $("#cPrice").click(function () {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url() . '/admin/refinance/updatestatus' ?>",
            data: $("#antoform2").serialize(), // serializes the form's elements.
            success: function (data)
            {
                // alert(data);
                $('.modal-backdrop').removeClass('modal-backdrop fade in');
                $("#CalenderModalView").attr('class', 'modal fade');
                $("#CalenderModalView").attr("aria-hidden", "true");
                /*$("#CalenderModalEdit").css('display', 'none');*/
                $("body").attr('class', 'nav-md  pace-done');
                location.href = "<?php echo base_url() . '/admin/refinance' ?>";
            }
        });
    });
    function getStatus(id, s) {
        $('#statusId').val(s);
        $('#lendId').val(id);
        $("#status").val(s);
    }
    function submitForm()
    {
        var query_string = {};
        var query = window.location.search.substring(1);
        var vars = query.split("?");
        $("#filter_form").attr('action', '<?php echo BASE_URL . MASTERADMIN . '/refinance?' ?>' + vars);
        $("#filter_form").submit();
    }
    function submitForm1()
    {
        var query_string = {};
        var query = window.location.search.substring(1);
        var vars = query.split("?");
        $("#filter_form1").attr('action', '<?php echo BASE_URL . 'admin/refinance/mailsent' ?>');
        $("#filter_form1").submit();
    }
    function sortList(sortBy, sortDirection)
    {
        $("#sort_by").val(sortBy);
        $("#sort_direction").val(sortDirection);
        $("#filter_form").submit();
    }
    $("#mainchk").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    function inactiveFranchise(franchiseid) {
        bootbox.confirm("Do you want to delete this lead?", function (result) {
            if (result)
            {
                $.ajax({
                    type: "GET",
                    url: "<?php echo base_url() . 'admin/refinance/delete_inactive/' ?>" + franchiseid,
                    success: function (data)
                    {
                        location.href = '<?php echo base_url() . 'admin/refinance/' ?>';
                    }
                });
            } else
            {
                //alert('no');
            }
        });
        //});
    }

    function inactiveFranchiseAll() {
        var checked = $("#filter_form1 input:checked").length > 0;
        if (!checked) {
            alert("Please select at least one checkbox");
            return false;
        }
        bootbox.confirm("Do you want to delete selected lead?", function (result) {
            if (result)
            {
                $.ajax({
                    type: "POST",
                    data: $("#filter_form1").serialize(),
                    url: "<?php echo base_url() . 'admin/refinance/deleteall' ?>",
                    success: function (data)
                    {
                        //alert(data);
                        location.href = '<?php echo base_url() . 'admin/refinance/' ?>';
                    }
                });


            } else
            {
                //alert('no');
            }
        });
        //});
    }
    function pdfemailAll() {
        var checked = $("#filter_form1 input:checked").length > 0;
        if (!checked) {
            alert("Please select at least one checkbox");
            return false;
        }
        bootbox.confirm("Do you want to sent email?", function (result) {
            if (result)
            {
                $.ajax({
                    type: "POST",
                    data: $("#filter_form1").serialize(),
                    url: "<?php echo base_url() . 'admin/refinance/sentemail' ?>",
                    success: function (data)
                    {
                        //alert(data);
                        location.href = '<?php echo base_url() . 'admin/refinance/' ?>';
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
<!-- iCheck -->
<link rel="stylesheet" href="/resources/demos/style.css">
<script async src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script async src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        $("#start_date").datepicker();
        $("#end_date").datepicker();
    });
    $("#mainchk").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>