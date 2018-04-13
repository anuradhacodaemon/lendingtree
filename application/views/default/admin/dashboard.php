  <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> Dashboard</h2>

                    <div class="clearfix"></div>
                </div>


                <div class="x_content">
                   <?php $lead_approved= $this->users->checklead_approved();
                  $lend_pending=  $this->users->checklead_pending();
                 $visitor=   $this->users->checkvisitor();
                    ?>
                    <strong> Number of Pending Applications : </strong> <?php echo $lead_approved[0]['numLead'] ?>
                    <br><strong>  Number of Approved Applications :</strong><?php echo $lead_approved[0]['numLead'] ?>
                    <br><strong> Total Portal Visitors today  :</strong><?php echo $visitor[0]['numVisitor'] ?>
              
                </div>

            </div>
        </div>
    </div>