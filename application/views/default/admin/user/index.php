

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
           <option value="">Type of Loan</option>
         <option value="1" <?php if(isset($_REQUEST['type'])) if($_REQUEST['type']==1) echo 'selected';?>>New Car Purchase</option>
         <option value="2" <?php if(isset($_REQUEST['type'])) if($_REQUEST['type']==2) echo 'selected';?>>Used Car Purchase</option>
         <option value="3" <?php if(isset($_REQUEST['type'])) if($_REQUEST['type']==3) echo 'selected';?>>Refinance</option>
         <option value="4"<?php if(isset($_REQUEST['type'])) if($_REQUEST['type']==4) echo 'selected';?>>Lease Buy Out</option>
       
     </select>


                    </div>
                     <div class="col-md-2 form-group ">

     <select name="years_emt" class="form-control">
           <option value="">Desired Term of loans</option>
         <option value="7"<?php if(isset($_REQUEST['years_emt'])) if($_REQUEST['years_emt']==7) echo 'selected';?>>7 years(84 Months)</option>
         <option value="6" <?php if(isset($_REQUEST['years_emt'])) if($_REQUEST['years_emt']==6) echo 'selected';?>>6 years(72 Months)</option>
         <option value="5" <?php if(isset($_REQUEST['years_emt'])) if($_REQUEST['years_emt']==5) echo 'selected';?>>5 years (60 Months)</option>
         <option value="4" <?php if(isset($_REQUEST['years_emt'])) if($_REQUEST['years_emt']==4) echo 'selected';?>>4 years ((48 Months)</option>
          <option value="3" <?php if(isset($_REQUEST['years_emt']))  if($_REQUEST['years_emt']==3) echo 'selected';?>>3 years(36 Months)</option>
           <option value="2" <?php if(isset($_REQUEST['years_emt'])) if($_REQUEST['years_emt']==2) echo 'selected';?>>2 years(24 Months)</option> 
           <option value="1" <?php if(isset($_REQUEST['years_emt'])) if($_REQUEST['years_emt']==1) echo 'selected';?>>1 year (12 Months)</option>
       
     </select>


                    </div>

<div class="col-md-2 form-group ">

     <select name="buying_from" class="form-control">
           <option value="">Buying From</option>
         <option value="1"<?php if(isset($_REQUEST['buying_from'])) if($_REQUEST['buying_from']==1) echo 'selected';?>>Dealer</option>
         <option value="2"<?php if(isset($_REQUEST['buying_from'])) if($_REQUEST['buying_from']==2) echo 'selected';?>>Private Seller</option>
         <option value="3"<?php if(isset($_REQUEST['buying_from'])) if($_REQUEST['buying_from']==3) echo 'selected';?>>Don't know</option>
         
       
     </select>


                    </div>
                        
                        <div class="col-md-2 form-group ">

     <select name="pre_approved" class="form-control">
           <option value="">Pre-approved</option>
         <option value="1"<?php if(isset($_REQUEST['pre_approved'])) if($_REQUEST['pre_approved']==1) echo 'selected';?>>Yes</option>
         <option value="0"<?php if(isset($_REQUEST['pre_approved'])) if($_REQUEST['pre_approved']==0) echo 'selected';?>>No</option>
         
       
     </select>


                    </div>
                        
                        <div class="col-md-2 form-group ">


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Down Payment less than" name="amount1" value="<?php
                            if(isset($_REQUEST['amount1'])){
                                echo $_REQUEST['amount1'];
                            }
                            ?>">
                        </div>

                    </div>

                    <div class="col-md-2 form-group ">

                       <div class="input-group">
                            <input type="text" class="form-control" placeholder="Down Payment greater than" name="amount2" value="<?php
                            if(isset($_REQUEST['amount2'])){
                                echo $_REQUEST['amount2'];
                            }
                            ?>">
                        </div>


                    </div>
                        
                         <div class="col-md-2 form-group ">


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Yearly income less than" name="pre_tax_income1" value="<?php
                            if(isset($_REQUEST['pre_tax_income1'])){
                                echo $_REQUEST['pre_tax_income1'];
                            }
                            ?>">
                        </div>

                    </div>

                    <div class="col-md-2 form-group ">

                       <div class="input-group">
                            <input type="text" class="form-control" placeholder="Yearly income greater than" name="pre_tax_income2" value="<?php
                            if(isset($_REQUEST['pre_tax_income2'])){
                                echo $_REQUEST['pre_tax_income2'];
                            }
                            ?>">
                        </div>


                    </div>
                        
                        <div class="col-md-2 form-group ">

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
            <div class="x_content"><!--<a class="btn btn-primary"  target="_blank" href="<?php echo BASE_URL.'admin/user/export' ?>">Export as CSV</a>
               --> <form id="filter_form1" method="POST" action="">
                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                        <thead>
                            <tr class="headings">

                                <th class="column-title"># </th>
                                
                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.firstname" && $sort_direction == "desc") { ?> onClick="sortList('user.firstname', 'asc')"<?php } ?> <?php if ($sort_by != "user.firstname") { ?> onClick="sortList('user.firstname', 'asc')"<?php } ?><?php if ($sort_by == "user.firstname" && $sort_direction == "asc") { ?> onClick="sortList('user.firstname', 'desc')"<?php } ?>> Firstname</a>&nbsp;<?php if ($sort_by == "user.firstname" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.firstname" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.lastname" && $sort_direction == "desc") { ?> onClick="sortList('user.lastname', 'asc')"<?php } ?> <?php if ($sort_by != "user.lastname") { ?> onClick="sortList('user.lastname', 'asc')"<?php } ?><?php if ($sort_by == "user.lastname" && $sort_direction == "asc") { ?> onClick="sortList('user.lastname', 'desc')"<?php } ?>> Lastname</a>&nbsp;<?php if ($sort_by == "user.lastname" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.lastname" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>
 <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.email" && $sort_direction == "desc") { ?> onClick="sortList('user.email', 'asc')"<?php } ?> <?php if ($sort_by != "user.email") { ?> onClick="sortList('user.email', 'asc')"<?php } ?><?php if ($sort_by == "user.email" && $sort_direction == "asc") { ?> onClick="sortList('user.email', 'desc')"<?php } ?>> Email</a>&nbsp;<?php if ($sort_by == "user.email" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.email" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

                               <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.type" && $sort_direction == "desc") { ?> onClick="sortList('user.type', 'asc')"<?php } ?> <?php if ($sort_by != "user.type") { ?> onClick="sortList('user.type', 'asc')"<?php } ?><?php if ($sort_by == "user.type" && $sort_direction == "asc") { ?> onClick="sortList('user.type', 'desc')"<?php } ?>> Type</a>&nbsp;<?php if ($sort_by == "user.type" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.type" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>


                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.years_emt" && $sort_direction == "desc") { ?> onClick="sortList('user.years_emt', 'asc')"<?php } ?> <?php if ($sort_by != "user.years_emt") { ?> onClick="sortList('user.years_emt', 'asc')"<?php } ?><?php if ($sort_by == "user.years_emt" && $sort_direction == "asc") { ?> onClick="sortList('user.years_emt', 'desc')"<?php } ?>> Desired terms of loan</a>&nbsp;<?php if ($sort_by == "user.years_emt" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.years_emt" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>
                              
<th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.buying_from" && $sort_direction == "desc") { ?> onClick="sortList('user.buying_from', 'asc')"<?php } ?> <?php if ($sort_by != "user.buying_from") { ?> onClick="sortList('user.buying_from', 'asc')"<?php } ?><?php if ($sort_by == "user.buying_from" && $sort_direction == "asc") { ?> onClick="sortList('user.buying_from', 'desc')"<?php } ?>> Buying from</a>&nbsp;<?php if ($sort_by == "user.buying_from" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.buying_from" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>
<th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.pre_tax_income" && $sort_direction == "desc") { ?> onClick="sortList('user.pre_tax_income', 'asc')"<?php } ?> <?php if ($sort_by != "user.pre_tax_income") { ?> onClick="sortList('user.pre_tax_income', 'asc')"<?php } ?><?php if ($sort_by == "user.pre_tax_income" && $sort_direction == "asc") { ?> onClick="sortList('user.pre_tax_income', 'desc')"<?php } ?>> Yearly Income</a>&nbsp;<?php if ($sort_by == "user.pre_tax_income" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.pre_tax_income" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>



<th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.pre_approved" && $sort_direction == "desc") { ?> onClick="sortList('user.pre_approved', 'asc')"<?php } ?> <?php if ($sort_by != "user.pre_approved") { ?> onClick="sortList('user.pre_approved', 'asc')"<?php } ?><?php if ($sort_by == "user.pre_approved" && $sort_direction == "asc") { ?> onClick="sortList('user.pre_approved', 'desc')"<?php } ?>> Pre approved</a>&nbsp;<?php if ($sort_by == "user.pre_approved" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.pre_approved" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>
                                <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "user.dob" && $sort_direction == "desc") { ?> onClick="sortList('user.dob', 'asc')"<?php } ?> <?php if ($sort_by != "user.dob") { ?> onClick="sortList('user.dob', 'asc')"<?php } ?><?php if ($sort_by == "user.dob" && $sort_direction == "asc") { ?> onClick="sortList('user.dob', 'desc')"<?php } ?>>DOB</a>&nbsp;<?php if ($sort_by == "user.dob" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    <?php } if ($sort_by == "user.dob" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>
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
                                         <td class=" "><?php echo $v['email'] ?></td>
                                          <td class=" "><?php 
                                if($v['type']==1)
                                    $type='New Car Purchase';
                                 if($v['type']==2)
                                    $type='Used Car Purchase';
                                  if($v['type']==3)
                                    $type='Refinance';
                                   if($v['type']==4)
                                    $type='Lease Buy Out';
                                
                                
                                echo $type; ?></td>
                                          <td> <?php  if($v['years_emt']==7)
                                    $years='7 Years (84 Months)';
                                        if($v['years_emt']==6)
                                    $years='6 Years (72 Months)';
                                        if($v['years_emt']==5)
                                    $years='5 Years (60 Months)';
                                        if($v['years_emt']==4)
                                    $years='4 Years (48 Months)';
                                        if($v['years_emt']==3)
                                    $years='3 Years (36 Months)';
                                        if($v['years_emt']==2)
                                    $years='2 Years (24 Months)';
                                        if($v['years_emt']==1)
                                    $years='1 Years (12 Months)';
                                        
                                        echo $years;
                                        
                                         ?></td>
                                          <td class=" "><?php 
                                if($v['buying_from']==1)
                                    $type='Dealer';
                                 if($v['buying_from']==2)
                                    $type='Private seller';
                                  if($v['buying_from']==3)
                                    $type='Don\'t Know';
                                 
                                
                                
                                echo $type; ?></td>
                                          <td><?php echo $v['pre_tax_income'];?></td>
                                           <td class=" "><?php 
                                if($v['pre_approved']==1)
                                    $type='Yes';
                                 if($v['pre_approved']==0)
                                    $type='No';
                                  
                                 
                                
                                
                                echo $type; ?></td>
                                        <td><?php
                                            echo date("d-m-Y", strtotime($v['dob']));
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
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#start_date" ).datepicker();
     $( "#end_date" ).datepicker();
  } );
  </script>
