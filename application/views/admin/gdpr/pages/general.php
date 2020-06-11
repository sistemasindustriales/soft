<h4 class="no-mtop">
   Configuración general
</h4>
<hr class="hr-panel-heading" />
<?php render_yes_no_option('enable_gdpr','Habilitar GDPR'); ?>
<hr />
<?php render_yes_no_option('show_gdpr_in_customers_menu','Mostrar enlace GDPR en la navegación del área de clientes'); ?>
<hr />
<?php render_yes_no_option('show_gdpr_link_in_footer','Mostrar enlace GDPR en el pie del área de clientes'); ?>
<hr />
<p class="">
   Bloque de información superior de página GDPR
</p>
<?php echo render_textarea('settings[gdpr_page_top_information_block]','',get_option('gdpr_page_top_information_block'),array(),array(),'','tinymce'); ?>
