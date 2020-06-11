<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active">
    <a href="#set_tickets_general" aria-controls="set_tickets_general" role="tab" data-toggle="tab"><?php echo _l('settings_group_general'); ?></a>
  </li>


</ul>
<div class="tab-content mtop30">
  <div role="tabpanel" class="tab-pane active" id="set_tickets_general">

    <?php render_yes_no_option('staff_access_only_assigned_departments','settings_tickets_allow_departments_access'); ?>
    <hr />
    <?php render_yes_no_option('receive_notification_on_new_ticket','receive_notification_on_new_ticket', 'receive_notification_on_new_ticket_help'); ?>
    <hr />
    <?php render_yes_no_option('receive_notification_on_new_ticket_replies','receive_notification_on_new_ticket_replies', 'receive_notification_on_new_ticket_reply_help'); ?>
    <hr />
    <?php render_yes_no_option('staff_members_open_tickets_to_all_contacts','staff_members_open_tickets_to_all_contacts','staff_members_open_tickets_to_all_contacts_help'); ?>
    <hr />
    <?php render_yes_no_option('access_tickets_to_none_staff_members','access_tickets_to_none_staff_members'); ?>
    <hr />
    <?php render_yes_no_option('allow_non_admin_staff_to_delete_ticket_attachments','allow_non_admin_staff_to_delete_ticket_attachments'); ?>
    <hr />
    <?php render_yes_no_option('allow_customer_to_change_ticket_status','allow_customer_to_change_ticket_status'); ?>
    <hr />
    <?php render_yes_no_option('only_show_contact_tickets','only_show_contact_tickets'); ?>
    <hr />
    <?php render_yes_no_option('ticket_replies_order','ticket_replies_order','ticket_replies_order_notice',_l('order_ascending'),_l('order_descending'),'asc','desc'); ?>
    <hr />
    <?php
      $this->load->model('tickets_model');
      $statuses = $this->tickets_model->get_ticket_status();
      $statuses['callback_translate'] = 'ticket_status_translate';
      echo render_select('settings[default_ticket_reply_status]',$statuses,array('ticketstatusid','name'),'default_ticket_reply_status',get_option('default_ticket_reply_status'),array(),array(),'','',false); ?>
    <hr />
    <?php echo render_input('settings[maximum_allowed_ticket_attachments]','settings_tickets_max_attachments',get_option('maximum_allowed_ticket_attachments'),'number'); ?>
    <hr />
    <?php echo render_input('settings[ticket_attachments_file_extensions]','settings_tickets_allowed_file_extensions',get_option('ticket_attachments_file_extensions')); ?>
  </div>


