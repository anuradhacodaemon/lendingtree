<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit State</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left admin-location-select-module" method="post" action="<?php echo base_url('admin/state/update/' . $state_id); ?>">
                    <div class="alert">
                        <?php if (!empty($flash_message)) { ?>
                            <div id="show"><?php echo $flash_message['message']; ?></div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Country <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="country_id" id="country_id" class="form-control col-md-7 col-xs-12 admin-location-country-form" data-placeholder="Select Country" required>
                                <option value=""></option>
                                <?php foreach ($countries as $country) { ?>
                                    <option value="<?php echo $country['id']; ?>" <?php if ($selected_country_id == $country['id']) echo 'selected'; ?>><?php echo htmlspecialchars($country['name']); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">State Name <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="name" class="form-control col-md-7 col-xs-12" maxlength="30" value="<?php echo htmlspecialchars($state_name); ?>" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="<?php echo base_url('admin/state'); ?>" class="btn btn-default">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('default/admin/partials/select2_location_assets'); ?>
<script>
    $(document).ready(function () {
        AdminLocationSelect.initCountryForm('#country_id');
    });
</script>
