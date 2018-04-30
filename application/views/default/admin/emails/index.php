

        <button class="btn btn-dark" type="button" onclick="location.href = '<?php echo base_url()  . 'admin/emails/add';?>'">Add</button> <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> Email</h2>

                    <div class="clearfix"></div>
                </div>

                <form id="filter_form" method="get" action="">
                    <input type="hidden" id="sort_by" name="sort_by" value="neighborhood.emails_name">
                    <input type="hidden" id="sort_direction" name="sort_direction" value="asc">

                    <div class="x_content">


                        <table class="table table-striped responsive-utilities jambo_table bulk_action">
                            <thead>
                                <tr class="headings">

                                    <th class="column-title">Sno </th>
                                   <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "emails.emails" && $sort_direction == "desc") { ?> onClick="sortList('emails.emails', 'asc')"<?php } ?> <?php if ($sort_by != "emails.emails") { ?> onClick="sortList('emails.emails', 'asc')"<?php } ?><?php if ($sort_by == "emails.emails" && $sort_direction == "asc") { ?> onClick="sortList('emails.emails', 'desc')"<?php } ?>>Domain</a>&nbsp;<?php if ($sort_by == "emails.emails" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        <?php } if ($sort_by == "emails.emails" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>

  <th class="column-title"><a href="javascript:void(0)" <?php if ($sort_by == "emails.emails" && $sort_direction == "desc") { ?> onClick="sortList('emails.emails', 'asc')"<?php } ?> <?php if ($sort_by != "emails.emails") { ?> onClick="sortList('emails.emails', 'asc')"<?php } ?><?php if ($sort_by == "emails.emails" && $sort_direction == "asc") { ?> onClick="sortList('emails.emails', 'desc')"<?php } ?>>emails</a>&nbsp;<?php if ($sort_by == "emails.emails" && $sort_direction == "asc") { ?><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        <?php } if ($sort_by == "emails.emails" && $sort_direction == "desc") { ?> <i class="fa fa-arrow-down" aria-hidden="true"></i> <?php } ?></th>
                                
                                    <th class="column-title">Created Date</th>

                                    <th class="column-title no-link last"><span class="nobr"><?php echo $this->lang->line('Action'); ?></span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if (count($emails) > 0) {

                                    if ($page_no > 0) {
                                        $i = $page_no;
                                    } else {
                                        $i = 1;
                                    }
                                    foreach ($emails as $k => $v) {
                                        $domain=$this->emails->get_domains($v['domain_id']);
                                        ?>
                                        <tr class="even pointer">

                                            <td class=" "><?php echo $i ?></td>
                                            <td class=" "><?php echo $domain[0]['domain'] ?></td>
             <td class=" "><?php echo $v['emails'] ?></td>
                                            <td class=" "><?php echo date('d-m-Y', strtotime($v['created_date'])); ?></td>

                                            <td class=" last"><a href="<?php echo base_url() . 'admin/emails/edit/' . $v['emails_id']; ?>" style="color:#000"><i class="fa fa-pencil"></i></a>
                                                &nbsp;
                                                  <?php if($v['status']==1) { ?>
                                            <a href="javascript:" onclick="inactiveFranchise(<?php echo $v['emails_id']?>)" style="color:#000"><i class="fa fa-check-circle fa-cog-green" aria-hidden="true"></i></a>
                                             <?php } else {?>
                                                                                        <a href="javascript:"  onclick="activeFranchise(<?php echo $v['emails_id']?>)" style="color:#000"><i class="fa fa-times-circle-o fa-cog-red" aria-hidden="true"></i></a>

                                             <?php } ?>
                                      &nbsp;
                                                <a href="<?php echo base_url() . 'admin/emails/view/' . $v['emails_id']; ?>" style="color:#000"><i class="fa fa-eye"></i></a>
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
        $("#filter_form").attr('action', '<?php echo base_url() . MASTERADMIN . '/emails?' ?>' + vars);
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
        function inactiveFranchise(emailsid) {


    bootbox.confirm("<?php echo $this->lang->line('Inactiveq'); ?>", function(result) {
     if(result)
      {   $.ajax({
                type: "GET",
                url: "<?php echo base_url() . MASTERADMIN . '/emails/delete_inactive/' ?>" + emailsid,
                success: function (data)
                {
                    location.href = '<?php echo base_url() . MASTERADMIN . '/emails/' ?>' ;
                }
            });}
     else
     {
         //alert('no');
     }
    });
  //});
  }
   function activeFranchise(emailsid) {

  //$('#btnlock'+jobid).click(function() {
    bootbox.confirm("<?php echo $this->lang->line('Activeq'); ?>", function(result) {
     if(result)
      {   $.ajax({
                type: "GET",
                url: "<?php echo base_url() . MASTERADMIN . '/emails/delete_active/' ?>" + emailsid,
                success: function (data)
                {
                    location.href = '<?php echo base_url() . MASTERADMIN . '/emails/' ?>' ;
                }
            });}
     else
     {
         //alert('no');
     }
    });
  //});
  }
</script>