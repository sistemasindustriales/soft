<?php if(isset($client)){ ?>
<h4 class="customer-profile-group-heading"><?php echo _l('client_payments_tab'); ?></h4>

<?php $this->load->view('admin/payments/table_html', array('class'=>'payments-single-client')); ?>
<?php include_once(APPPATH . 'views/admin/clients/modals/zip_payments.php'); ?>
<?php } ?>
