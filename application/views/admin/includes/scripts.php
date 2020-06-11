<?php include_once(APPPATH.'views/admin/includes/helpers_bottom.php'); ?>
<?php do_action('before_js_scripts_render'); ?>
<script src="https://softindustrials1.000webhostapp.com/assets/plugins/app-build/vendor.js?v=2.1.0"></script>
<script src="https://softindustrials1.000webhostapp.com/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="https://softindustrials1.000webhostapp.com/assets/plugins/datatables/datatables.min.js?v=2.1.0"></script>
<script src="https://softindustrials1.000webhostapp.com/assets/plugins/app-build/moment.min.js"></script>
<script src='https://softindustrials1.000webhostapp.com/assets/plugins/app-build/bootstrap-select.min.js?v=2.1.0'></script>
<script src='https://softindustrials1.000webhostapp.com/assets/plugins/bootstrap-select/js/i18n/defaults-es_ES.min.js'></script>

<?php app_select_plugin_js($locale); ?>
<script src="<?php echo base_url('assets/plugins/tinymce/tinymce.min.js?v='.get_app_version()); ?>"></script>
<?php app_jquery_validation_plugin_js($locale); ?>

<script src='https://softindustrials1.000webhostapp.com/assets/plugins/jquery-validation/jquery.validate.min.js?v=2.1.0'></script>
<script src='https://softindustrials1.000webhostapp.com/assets/plugins/jquery-validation/localization/messages_es.min.js'></script>

<?php if(get_option('dropbox_app_key') != ''){ ?>
<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="<?php echo get_option('dropbox_app_key'); ?>"></script>
<?php } ?>
<?php if(isset($media_assets)){ ?>
<script src="https://softindustrials1.000webhostapp.com/assets/plugins/elFinder/js/elfinder.min.js"></script>
<?php if(file_exists(FCPATH.'assets/plugins/elFinder/js/i18n/elfinder.'.get_media_locale($locale).'.js') && get_media_locale($locale) != 'en'){ ?>
<script src="https://softindustrials1.000webhostapp.com/assets/plugins/elFinder/js/i18n/elfinder.es.js"></script>
<?php } ?>
<?php } ?>
<?php if(isset($projects_assets)){ ?>
<script src="https://softindustrials1.000webhostapp.com/assets/plugins/jquery-comments/js/jquery-comments.min.js"></script>
<script src="https://softindustrials1.000webhostapp.com/assets/plugins/gantt/js/jquery.fn.gantt.min.js"></script>
<?php } ?>
<?php if(isset($circle_progress_asset)){ ?>
<script src="https://softindustrials1.000webhostapp.com/assets/plugins/jquery-circle-progress/circle-progress.min.js"></script>
<?php } ?>
<?php if(isset($calendar_assets)){ ?>
<script src="https://softindustrials1.000webhostapp.com/assets/plugins/fullcalendar/fullcalendar.min.js?v=2.1.0"></script>

<script src="https://softindustrials1.000webhostapp.com/assets/plugins/fullcalendar/locale/es.js"></script>
<?php if(get_option('google_api_key') != ''){ ?>
<script src="https://softindustrials1.000webhostapp.com/assets/plugins/fullcalendar/gcal.min.js"></script>

<?php } ?>


<?php } ?>
<script src="https://softindustrials1.000webhostapp.com/assets/js/main.min.js?v=2.1.0"></script>
<?php
/**
 * Global function for custom field of type hyperlink
 */
echo get_custom_fields_hyperlink_js_function(); ?>
<?php
/**
 * Check for any alerts stored in session
 */
app_js_alerts();
?>
<?php
/**
 * Check pusher real time notifications
 */
if(get_option('pusher_realtime_notifications') == 1){ ?>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
<script type="text/javascript">
 $(function(){
   // Enable pusher logging - don't include this in production
   // Pusher.logToConsole = true;
   <?php $pusher_options = do_action('pusher_options',array());
   if(!isset($pusher_options['cluster']) && get_option('pusher_cluster') != ''){
     $pusher_options['cluster'] = get_option('pusher_cluster');
   } ?>
   var pusher_options = <?php echo json_encode($pusher_options); ?>;
   var pusher = new Pusher("<?php echo get_option('pusher_app_key'); ?>", pusher_options);
   var channel = pusher.subscribe('notifications-channel-<?php echo get_staff_user_id(); ?>');
   channel.bind('notification', function(data) {
      fetch_notifications();
   });
});
</script>
<?php } ?>
<?php
/**
 * End users can inject any javascript/jquery code after all js is executed
 */
do_action('after_js_scripts_render');
?>
