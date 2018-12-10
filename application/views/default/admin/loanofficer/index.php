<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Loan Officer Listing</h2>

                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a class="btn btn-primary pull-right" target="_blank" href="<?php echo BASE_URL . 'admin/loanofficer/add' ?>">Add</a>
                </div>
            </div>
            <div class="x_content1">
                <?php

                if($this->session->flashdata('item')) {
                    $message = $this->session->flashdata('item');
                ?>
                <div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?>

                </div>
                <?php
                }
                ?>
                <form id="filter_form1" method="POST" action="">
                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">Name
                                </th>
                                <th class="column-title">ID
                                </th>
                                <th class="column-title">Email
                                </th>
                                <th class="column-title">Phone
                                </th>
                                <th class="column-title">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($loan_officerArray as $loan_officer) { ?>
                            <tr class="even pointer">
                                <td><?php echo $loan_officer['name'] ?></td>
                                <td><?php echo $loan_officer['officer_id'] ?></td>
                                <td><?php echo $loan_officer['email'] ?></td>
                                <td><?php echo $loan_officer['phone'] ?></td>
                                <td class=" last">
                                    <a href="<?php echo base_url() . 'admin/loanofficer/edit/' . $loan_officer['id']; ?>" style="color:#000" title="Edit"><i class="fa fa-pencil"></i></a>
                                    &nbsp;
                                    <a href="javascript:" onclick="inactiveFranchise(<?php echo $loan_officer['id'] ?>)" style="color:#000" title="Delete"><i class="fa fa-times fa-cog-red"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function inactiveFranchise(officerid) {
    bootbox.confirm("Do you want to delete loan officer?", function (result) {
        if (result)
        {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url() . 'admin/loanofficer/delete_inactive/' ?>" + officerid,
                success: function (data)
                {
                    location.href = '<?php echo base_url() . 'admin/loanofficer/' ?>';
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

