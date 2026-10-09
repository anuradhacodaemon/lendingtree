<?php
//echo '<pre>';
//$this->session->userdata['export']='';
//print_r($this->session->userdata['export']);	
?>

<!-- iCheck -->
<?php
$lead_approved = $this->vsc->checklead_approved_forDomain();
$lend_pending = $this->vsc->checklead_pending_forDomain();
$visitor = $this->vsc->checklead_denied_forDomain();
?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Vehicle Service Contract Listing</h2>

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

                    <div class="col-md-2 form-group ">

                        <select name="type" class="form-control">
                            <option value="">Type of Vehicle</option>
                            <option value="1" <?php if (isset($_REQUEST['type'])) if ($_REQUEST['type'] == 1) echo 'selected'; ?>>Vehicle</option>
                            <option value="2" <?php if (isset($_REQUEST['type'])) if ($_REQUEST['type'] == 2) echo 'selected'; ?>>Motorcycle</option>
                            <option value="3" <?php if (isset($_REQUEST['type'])) if ($_REQUEST['type'] == 3) echo 'selected'; ?>>Motorhome</option>


                        </select>


                    </div>

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
                                <option value= "<?php echo $_SERVER['REQUEST_SCHEME']; ?>://coastalcommunity.culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == "http://coastalcommunity.culoanportal.com/") echo 'selected' ?>>coastalcommunity.culoanportal.com</option>
                                <option value="<?php echo $_SERVER['REQUEST_SCHEME']; ?>://culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == "http://culoanportal.com/") echo 'selected' ?>>culoanportal.com</option>
                                <option value="<?php echo $_SERVER['REQUEST_SCHEME']; ?>://mct.culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == "http://mct.culoanportal.com/") echo 'selected' ?>>mct.culoanportal.com</option>
                                <option value="<?php echo $_SERVER['REQUEST_SCHEME']; ?>://swfinancial.culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == "http://swfinancial.culoanportal.com/") echo 'selected' ?>>swfinancial.culoanportal.com</option>
                                <option value="<?php echo $_SERVER['REQUEST_SCHEME']; ?>://bmtccu.culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == "http://bmtccu.culoanportal.com/") echo 'selected' ?>>bmtccu.culoanportal.com</option>
                                <option value="<?php echo $_SERVER['REQUEST_SCHEME']; ?>://demo.culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == $_SERVER['REQUEST_SCHEME']."://demo.culoanportal.com/") echo 'selected' ?>>demo.culoanportal.com</option>
                                <option value="<?php echo $_SERVER['REQUEST_SCHEME']; ?>://texasbridge.culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == $_SERVER['REQUEST_SCHEME']."://texasbridge.culoanportal.com/") echo 'selected' ?>>taxasbridge.culoanportal.com</option>
                                <option value="<?php echo $_SERVER['REQUEST_SCHEME']; ?>://jcfcu.culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == $_SERVER['REQUEST_SCHEME']."://jcfcu.culoanportal.com/") echo 'selected' ?>>jcfcu.culoanportal.com</option>
                                <option value="<?php echo $_SERVER['REQUEST_SCHEME']; ?>://jctfcu.culoanportal.com/" <?php if (isset($_REQUEST['domain'])) if ($_REQUEST['domain'] == $_SERVER['REQUEST_SCHEME']."://jctfcu.culoanportal.com/") echo 'selected' ?>>jctfcu.culoanportal.com</option>  
                            </select>
                        </div>

                    </div> 
                    <?php } ?>
                    <div class="col-md-3 form-group ">


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="VIN Number" name="vin" value="<?php
                            if (isset($_REQUEST['vin'])) {
                                echo $_REQUEST['vin'];
                            }
                            ?>">
                        </div>

                    </div>

                    <div class="col-md-3 form-group ">


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Current Milage" name="current_milage" value="<?php
                            if (isset($_REQUEST['current_milage'])) {
                                echo $_REQUEST['current_milage'];
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
                        <div class="col-md-8 text-center">                        
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
                        </div>                    
                        <a class="btn btn-primary pull-right"  target="_blank" href="<?php echo BASE_URL . 'admin/vsc/export' ?>">Export as CSV</a>
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

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "vsc.type" && $sort_direction == "desc") { ?> onClick="sortList('vsc.type', 'asc')"<?php } ?> <?php if ($sort_by != "vsc.type") { ?> onClick="sortList('vsc.type', 'asc')"<?php } ?><?php if ($sort_by == "vsc.type" && $sort_direction == "asc") { ?> onClick="sortList('vsc.type', 'desc')"<?php } ?>> Vechile Type</a>&nbsp;<?php if ($sort_by == "vsc.type" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "vsc.type" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "vsc.email" && $sort_direction == "desc") { ?> onClick="sortList('vsc.email', 'asc')"<?php } ?> <?php if ($sort_by != "vsc.email") { ?> onClick="sortList('vsc.email', 'asc')"<?php } ?><?php if ($sort_by == "vsc.email" && $sort_direction == "asc") { ?> onClick="sortList('vsc.email', 'desc')"<?php } ?>> Email</a>&nbsp;<?php if ($sort_by == "vsc.email" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "vsc.email" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "vsc.vin" && $sort_direction == "desc") { ?> onClick="sortList('vsc.vin', 'asc')"<?php } ?> <?php if ($sort_by != "vsc.vin") { ?> onClick="sortList('vsc.vin', 'asc')"<?php } ?><?php if ($sort_by == "vsc.vin" && $sort_direction == "asc") { ?> onClick="sortList('vsc.vin', 'desc')"<?php } ?>> VIN Number</a>&nbsp;<?php if ($sort_by == "vsc.vin" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "vsc.vin" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>


                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "vsc.current_milage" && $sort_direction == "desc") { ?> onClick="sortList('vsc.current_milage', 'asc')"<?php } ?> <?php if ($sort_by != "vsc.current_milage") { ?> onClick="sortList('vsc.current_milage', 'asc')"<?php } ?><?php if ($sort_by == "vsc.current_milage" && $sort_direction == "asc") { ?> onClick="sortList('vsc.current_milage', 'desc')"<?php } ?>> Current Milage</a>&nbsp;<?php if ($sort_by == "vsc.current_milage" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "vsc.current_milage" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "vsc.vehicle_year" && $sort_direction == "desc") { ?> onClick="sortList('vsc.vehicle_year', 'asc')"<?php } ?> <?php if ($sort_by != "vsc.vehicle_year") { ?> onClick="sortList('vsc.vehicle_year', 'asc')"<?php } ?><?php if ($sort_by == "vsc.vehicle_year" && $sort_direction == "asc") { ?> onClick="sortList('vsc.vehicle_year', 'desc')"<?php } ?>> Vehicle Year</a>&nbsp;<?php if ($sort_by == "vsc.vehicle_year" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "vsc.vehicle_year" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>
                                
                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "vsc.vehicle_make_brand" && $sort_direction == "desc") { ?> onClick="sortList('vsc.vehicle_make_brand', 'asc')"<?php } ?> <?php if ($sort_by != "vsc.vehicle_make_brand") { ?> onClick="sortList('vsc.vehicle_make_brand', 'asc')"<?php } ?><?php if ($sort_by == "vsc.vehicle_make_brand" && $sort_direction == "asc") { ?> onClick="sortList('vsc.vehicle_make_brand', 'desc')"<?php } ?>> Vehicle Brand</a>&nbsp;<?php if ($sort_by == "vsc.vehicle_make_brand" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "vsc.vehicle_make_brand" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>
                                    
                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "vsc.vehicle_model" && $sort_direction == "desc") { ?> onClick="sortList('vsc.vehicle_model', 'asc')"<?php } ?> <?php if ($sort_by != "vsc.vehicle_model") { ?> onClick="sortList('vsc.vehicle_model', 'asc')"<?php } ?><?php if ($sort_by == "vsc.vehicle_model" && $sort_direction == "asc") { ?> onClick="sortList('vsc.vehicle_model', 'desc')"<?php } ?>> Vehicle Model</a>&nbsp;<?php if ($sort_by == "vsc.vehicle_model" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "vsc.vehicle_model" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                               <!-- <th class="column-title"><a href="javascript:void(0)" <?php // if ($sort_by == "user.status" && $sort_direction == "desc") { ?> onClick="sortList('user.status', 'asc')"<?php// } ?> <?php// if ($sort_by != "user.status") { ?> onClick="sortList('user.status', 'asc')"<?php //} ?><?php // if ($sort_by == "user.status" && $sort_direction == "asc") { ?> onClick="sortList('user.status', 'desc')"<?php // } ?>> Status</a>&nbsp;<?php //if ($sort_by == "user.status" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php // } if ($sort_by == "user.status" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php // } ?></th>
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
                                            <input type="checkbox" id="check-all" name="c[]" value="<?php echo $v['vsc_id'] ?>" class="flat" >
                                        </td>
                                        <td class=" "><?php
                                            $type = '';
                                            if ($v['type'] == 1)
                                                $type = 'Vehicle';
                                            if ($v['type'] == 2)
                                                $type = 'Motorcycle';
                                            if ($v['type'] == 3)
                                                $type = 'Motorhome';
                                            echo $type;
                                            ?></td>
                                        <td class=" "><?php echo $v['email'] ?></td>
                                        <td class=" "><?php echo $v['vin'] ?></td>
                                        <td class=" "><?php echo $v['current_milage'] ?></td>
                                        <td class=" "><?php echo $v['vehicle_year'] ?></td>
                                        <td class=" "><?php echo $v['vehicle_make_brand'] ?></td>
                                        <td><?php echo $v['vehicle_model']; ?></td>

                                                <!-- <td > 

                                                    <a href="<?php echo BASE_URL . MASTERADMIN . '/vsc/details/' . $v['vsc_id'] ?>" class="dark_grey " ><i class="fa fa-eye"></i> </a>
                                                </td>  -->
                                        <td class="last">
                                            <a href="<?php echo BASE_URL . MASTERADMIN . '/vsc/details/' . $v['vsc_id'] ?>" class="dark_grey" title="View" ><i class="fa fa-eye"></i> </a>
                                            <a href="<?php echo BASE_URL . MASTERADMIN . '/vsc/vscpdf/' . $v['vsc_id'] ?>" target="_blank" class="dark_grey" title="View" ><i class="fa fa-file-pdf-o"></i> </a>

                                            &nbsp;&nbsp;
                                            <?php if ($v['active_status'] == 1) { ?>
                                                <a href="javascript:" onclick="inactiveFranchise(<?php echo $v['vsc_id'] ?>)" style="color:#000" title="Delete"><i class="fa fa-times fa-cog-red" aria-hidden="true"></i></a>
                                            <?php } else { ?>
                                                <a href="javascript:"  onclick="activeFranchise(<?php echo $v['vsc_id'] ?>)" style="color:#000"><i class="fa fa-times-circle-o fa-cog-red" aria-hidden="true"></i></a>

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
            url: "<?php echo base_url() . '/admin/vsc/updatestatus' ?>",
            data: $("#antoform2").serialize(), // serializes the form's elements.
            success: function (data)
            {
                $('.modal-backdrop').removeClass('modal-backdrop fade in');
                $("#CalenderModalView").attr('class', 'modal fade');
                $("#CalenderModalView").attr("aria-hidden", "true");
                /*$("#CalenderModalEdit").css('display', 'none');*/
                $("body").attr('class', 'nav-md  pace-done');
                location.href = "<?php echo base_url() . '/admin/vsc' ?>";
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
        $("#filter_form").attr('action', '<?php echo BASE_URL . MASTERADMIN . '/vsc?' ?>' + vars);
        $("#filter_form").submit();
    }
    function submitForm1()
    {
        var query_string = {};
        var query = window.location.search.substring(1);
        var vars = query.split("?");
        $("#filter_form1").attr('action', '<?php echo BASE_URL . 'admin/vsc/mailsent' ?>');
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
                    url: "<?php echo base_url() . 'admin/vsc/delete_inactive/' ?>" + franchiseid,
                    success: function (data)
                    {
                        location.href = '<?php echo base_url() . 'admin/vsc/' ?>';
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
                    url: "<?php echo base_url() . 'admin/vsc/deleteall' ?>",
                    success: function (data)
                    {
                        
                        location.href = '<?php echo base_url() . 'admin/vsc/' ?>';
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        $("#start_date").datepicker();
        $("#end_date").datepicker();
    });
    $("#mainchk").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>