<div class="modal fade" id="billing_and_shipping_details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <?php $countries = get_all_countries(); ?>


<br>
                    <div class="col-md-12">
                        <div id="billing_details">

                            <?php $selected = (isset($credit_note) ? $credit_note->billing_country : ''); ?>
                            <?php echo render_select('billing_country',$countries,array('country_id',array('short_name'),'long_name'),'billing_country',$selected); ?>
                        </div>
                    </div>
                    <div class="col-md-12">

                  
                       
                        <div class="clearfix"></div>
          
                        <div id="shipping_details" class="<?php if((isset($credit_note) && $credit_note->include_shipping != 1) || !isset($credit_note)){echo 'hide';} ?>">
                          <div class="form-group">
                            <div class="checkbox checkbox-primary checkbox-inline">
                                <input type="checkbox" id="show_shipping_on_credit_note" name="show_shipping_on_credit_note" <?php if((isset($credit_note) && $credit_note->show_shipping_on_credit_note == 1) || !isset($credit_note)){echo 'checked';} ?>>
                                <label for="show_shipping_on_credit_note"><?php echo _l('show_shipping_on_credit_note'); ?></label>
                            </div>
                        </div>
                        <?php $value = (isset($credit_note) ? $credit_note->shipping_street : ''); ?>
                        <?php echo render_textarea('shipping_street','shipping_street',$value); ?>
                        <?php $value = (isset($credit_note) ? $credit_note->shipping_city : ''); ?>
                        <?php echo render_input('shipping_city','shipping_city',$value); ?>
                        <?php $value = (isset($credit_note) ? $credit_note->shipping_state : ''); ?>
                        <?php echo render_input('shipping_state','shipping_state',$value); ?>
                        <?php $value = (isset($credit_note) ? $credit_note->shipping_zip : ''); ?>
                        <?php echo render_input('shipping_zip','shipping_zip',$value); ?>
                        <?php $selected = (isset($credit_note) ? $credit_note->shipping_country : ''); ?>
                        <?php echo render_select('shipping_country',$countries,array('country_id',array('short_name'),'iso2'),'shipping_country',$selected); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer modal-not-full-width">
            <a href="#" class="btn btn-info save-shipping-billing"><?php echo _l('apply'); ?></a>
        </div>
    </div>
</div>
</div>
