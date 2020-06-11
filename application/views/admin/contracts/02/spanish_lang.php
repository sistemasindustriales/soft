<?php

# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nombre';
$lang['options']              = 'Opciones';
$lang['submit']               = 'Guardar';
$lang['added_successfully']   = '%s agregado exitosamente.';
$lang['updated_successfully'] = '%s actualizado exitosamente';
$lang['edit']                 = 'Editar %s';
$lang['add_new']              = 'Añadir nuevo %s';
$lang['deleted']              = '%s eliminado';
$lang['problem_deleting']     = 'Problema de eliminación %s';
$lang['is_referenced']        = 'El ID de %s ya se está utilizando.';
$lang['close']                = 'Cerrar';
$lang['send']                 = 'Enviar';
$lang['cancel']               = 'Cancelar';
$lang['go_back']              = 'Regresar';
$lang['error_uploading_file'] = 'Error al subir el archivo';
$lang['load_more']            = 'Carga más';
$lang['cant_delete_default']  = 'No se puede eliminar por defecto %s';

# Invoice General
$lang['invoice_status_paid']                   = 'Pagado';
$lang['invoice_status_unpaid']                 = 'No pagado';
$lang['invoice_status_overdue']                = 'Atrasado';
$lang['invoice_status_not_paid_completely']    = 'Parcialmente pagado';
$lang['invoice_pdf_heading']                   = 'FACTURA';
$lang['invoice_table_item_heading']            = 'Producto';
$lang['invoice_table_quantity_heading']        = 'Cantidad';
$lang['invoice_table_rate_heading']            = 'Precio';
$lang['invoice_table_tax_heading']             = 'Impuesto';
$lang['invoice_table_amount_heading']          = 'Cantidad';
$lang['invoice_subtotal']                      = 'Sub Total';
$lang['invoice_adjustment']                    = 'Ajuste';
$lang['invoice_total']                         = 'Total';
$lang['invoice_bill_to']                       = 'Cliente:';
$lang['invoice_data_date']                     = 'Fecha de la factura:';
$lang['invoice_data_duedate']                  = 'Fecha de vencimiento:';
$lang['invoice_received_payments']             = 'Transacciones';
$lang['invoice_no_payments_found']             = 'No se han encontrado pagos para esta factura.';
$lang['invoice_note']                          = 'Nota:';
$lang['invoice_payments_table_number_heading'] = 'Pago #';
$lang['invoice_payments_table_mode_heading']   = 'Modo de pago';
$lang['invoice_payments_table_date_heading']   = 'Fecha';
$lang['invoice_payments_table_amount_heading'] = 'Cantidad';

# Announcements
$lang['announcement']                 = 'Anuncio';
$lang['announcement_lowercase']       = 'anuncio';
$lang['announcements']                = 'Anuncios';
$lang['announcements_lowercase']      = 'anuncios';
$lang['new_announcement']             = 'Nuevo anuncio';
$lang['announcement_name']            = 'Tema';
$lang['announcement_message']         = 'Mensaje';
$lang['announcement_show_to_staff']   = 'Mostrar al personal';
$lang['announcement_show_to_clients'] = 'Mostrar a los clientes';
$lang['announcement_show_my_name']    = 'Mostrar mi nombre';

# Clients
$lang['clients']                                 = 'Clientes';
$lang['client']                                  = 'Cliente';
$lang['new_client']                              = 'Nuevo cliente';
$lang['client_lowercase']                        = 'cliente';
$lang['client_firstname']                        = 'Nombre';
$lang['client_lastname']                         = 'Apellido';
$lang['client_email']                            = 'Email';
$lang['client_company']                          = 'Empresa';
$lang['client_vat_number']                       = 'Número de CUIT';
$lang['client_address']                          = 'Dirección';
$lang['client_city']                             = 'Ciudad';
$lang['client_postal_code']                      = 'Código postal';
$lang['client_state']                            = 'Provincia';
$lang['client_password']                         = 'Contraseña';
$lang['client_password_change_populate_note']    = 'Nota: si rellena este campo, la contraseña se cambiará en este contacto.';
$lang['client_password_last_changed']            = 'Contraseña modificada por última vez:';
$lang['login_as_client']                         = 'Iniciar sesión como cliente';
$lang['client_invoices_tab']                     = 'Facturas';
$lang['contracts_invoices_tab']                  = 'Proveedores';
$lang['contracts_tickets_tab']                   = 'Avisos';
$lang['contracts_notes_tab']                     = 'Notas';
$lang['note_description']                        = 'Nota descripción';
$lang['client_do_not_send_welcome_email']        = 'No enviar correo de bienvenida';
$lang['clients_notes_table_description_heading'] = 'Descripción';
$lang['clients_notes_table_addedfrom_heading']   = 'Añadido de';
$lang['clients_notes_table_dateadded_heading']   = 'Fecha Agregada';
$lang['clients_list_full_name']                  = 'Nombre completo';
$lang['clients_list_last_login']                 = 'Último acceso';

# Contracts
$lang['contracts']                = 'Proveedores';
$lang['contract']                 = 'Proveedor';
$lang['new_contract']             = 'Nueva compra';
$lang['contract_lowercase']       = 'proveedor';
$lang['contract_start_date']      = 'Fecha de inicio';
$lang['contract_end_date']        = 'Fecha de finalización';
$lang['contract_subject']         = 'Tema';
$lang['contract_description']     = 'Descripción';
$lang['contract_subject_tooltip'] = 'El tema también es visible para el cliente';
$lang['contract_client_string']   = 'Cliente';
$lang['contract_attach']          = 'Documento adjunto';
$lang['contract_list_client']     = 'Cliente';
$lang['contract_list_subject']    = 'Tema';
$lang['contract_list_start_date'] = 'Fecha de inicio';
$lang['contract_list_end_date']   = 'Fecha final';

# Currencies
$lang['currencies']                    = 'Monedas';
$lang['currency']                      = 'Moneda';
$lang['new_currency']                  = 'Nueva moneda';
$lang['currency_lowercase']            = 'moneda';
$lang['base_currency_set']             = 'Esta es ahora su moneda principal.';
$lang['make_base_currency']            = 'Hacer la moneda principal';
$lang['base_currency_string']          = 'Moneda Principal';
$lang['currency_list_name']            = 'Nombre';
$lang['currency_list_symbol']          = 'Símbolo';
$lang['currency_add_edit_description'] = 'Código de moneda';
$lang['currency_add_edit_rate']        = 'Símbolo';
$lang['currency_edit_heading']         = 'Editar moneda';
$lang['currency_add_heading']          = 'Añadir nueva moneda';

# Department
$lang['departments']                 = 'Sectores';
$lang['department']                  = 'Sector';
$lang['new_department']              = 'Nuevo sector';
$lang['department_lowercase']        = 'Sector';
$lang['department_name']             = 'Nombre de sector';
$lang['department_email']            = 'Email del sector';
$lang['department_hide_from_client'] = 'Ocultar del cliente?';
$lang['department_list_name']        = 'Nombre';

# Email Templates
$lang['email_templates']                        = 'Plantillas de correo electrónico';
$lang['email_template']                         = 'Plantilla de correo electrónico';
$lang['email_template_lowercase']               = 'plantilla de correo electrónico';
$lang['email_templates_lowercase']              = 'Plantillas de correo electrónico';
$lang['email_template_ticket_fields_heading']   = 'Avisos';
$lang['email_template_invoices_fields_heading'] = 'Facturas';
$lang['email_template_clients_fields_heading']  = 'Clientes';

$lang['template_name']                = 'Nombre de la plantilla';
$lang['template_subject']             = 'Tema';
$lang['template_fromname']            = 'De Nombre';
$lang['template_fromemail']           = 'Desde el e-mail';
$lang['send_as_plain_text']           = 'Enviar como texto sin formato';
$lang['email_template_disabled']      = 'Desactivado';
$lang['email_template_email_message'] = 'Mensaje de correo electrónico';
$lang['available_merge_fields']       = 'Campos de combinación disponibles';
# Home
$lang['dashboard_string']                          = 'Inicio';
$lang['home_latest_todos']                         = 'Pendientes';
$lang['home_no_latest_todos']                      = 'Nada para mostrar.';
$lang['home_latest_finished_todos']                = 'Realizados';
$lang['home_no_finished_todos_found']              = 'Nada para mostrar.';
$lang['home_tickets_awaiting_reply_by_department'] = 'Avisos en espera de respuesta por sector';
$lang['home_tickets_awaiting_reply_by_status']     = 'Avisos en espera de respuesta por estado';
$lang['home_this_week_events']                     = 'Eventos de la semana';
$lang['home_upcoming_events_next_week']            = 'Eventos de la próxima semana';
$lang['home_event_added_by']                       = 'Evento agregado por';
$lang['home_public_event']                         = 'Evento público';
$lang['home_weekly_payment_records']               = 'Registros de pagos semanales';
$lang['home_weekend_ticket_opening_statistics']    = 'Estadística de aperturas de entradas semanales';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Compartir';
$lang['new_post']                                           = 'Postear';
$lang['newsfeed_upload_tooltip']                            = 'Arrastra y suelta archivos para subir.';
$lang['newsfeed_all_departments']                           = 'Todos los sectoress';
$lang['newsfeed_pin_post']                                  = 'Bloquear post';
$lang['newsfeed_unpin_post']                                = 'Desbloquear publicación';
$lang['newsfeed_delete_post']                               = 'Borrar';
$lang['newsfeed_published_post']                            = 'Publicado';
$lang['newsfeed_you_like_this']                             = 'Te gusta esto';
$lang['newsfeed_like_this']                                 = 'Me gusta esto';
$lang['newsfeed_one_other']                                 = 'otro';
$lang['newsfeed_you']                                       = 'Tú';
$lang['newsfeed_and']                                       = 'y';
$lang['newsfeed_you_and']                                   = 'Vos y';
$lang['newsfeed_like_this_saying']                          = 'Me gusta esto';
$lang['newsfeed_unlike_this_saying']                        = 'No me gusta esto';
$lang['newsfeed_show_more_comments']                        = 'Mostrar mas comentarios';
$lang['comment_this_post_placeholder']                      = 'Comenta esta publicación...';
$lang['newsfeed_post_likes_modal_heading']                  = 'Compañeros que les gusta este post';
$lang['newsfeed_comment_likes_modal_heading']               = 'Compañeros que les gusta este comentario.';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Esta publicación solo es visible para los siguientes sectores: %s';

# Invoice Items
$lang['invoice_items']                     = 'Productos de factura';
$lang['invoice_item']                      = 'Producto de factura';
$lang['new_invoice_item']                  = 'Nuevo producto';
$lang['invoice_item_lowercase']            = 'Producto de factura';
$lang['invoice_items_list_description']    = 'Descripción';
$lang['invoice_items_list_rate']           = 'Precio';
$lang['invoice_item_add_edit_description'] = 'Descripción';
$lang['invoice_item_add_edit_rate']        = 'Precio';
$lang['invoice_item_edit_heading']         = 'Editar elemento';
$lang['invoice_item_add_heading']          = 'Agregar producto nuevo';

# Invoices
$lang['invoices']                                = 'Facturas';
$lang['invoice']                                 = 'Factura';
$lang['invoice_lowercase']                       = 'factura';
$lang['create_new_invoice']                      = 'Crear nueva factura';
$lang['view_invoice']                            = 'Ver la factura';
$lang['invoice_payment_recorded']                = 'Pago de factura registrado';
$lang['invoice_payment_record_failed']           = 'Error al registrar el pago de la factura';
$lang['invoice_sent_to_client_success']          = 'La factura se envía con éxito al cliente.';
$lang['invoice_sent_to_client_fail']             = 'Problema al enviar la factura';
$lang['invoice_reminder_send_problem']           = 'Problema al enviar factura recordatorio de vencimiento';
$lang['invoice_overdue_reminder_sent']           = 'Aviso de vencimiento de factura enviado con éxito';
$lang['invoice_details']                         = 'Detalles de la factura';
$lang['invoice_view']                            = 'Mirar la factura';
$lang['invoice_select_customer']                 = 'Cliente';
$lang['invoice_add_edit_number']                 = 'Número de factura';
$lang['invoice_add_edit_date']                   = 'Fecha de la factura';
$lang['invoice_add_edit_duedate']                = 'Fecha de vencimiento';
$lang['invoice_add_edit_currency']               = 'Moneda';
$lang['invoice_add_edit_client_note']            = 'Nota del cliente';
$lang['invoice_add_edit_admin_note']             = 'Nota de administrador';
$lang['invoices_toggle_table_tooltip']           = 'Tabla';
$lang['edit_invoice_tooltip']                    = 'Editar factura';
$lang['delete_invoice_tooltip']                  = 'Eliminar factura. Nota: Todos los pagos relacionados con esta factura se eliminarán (si corresponde).';
$lang['invoice_sent_to_email_tooltip']           = 'Enviar al email';
$lang['invoice_already_send_to_client_tooltip']  = 'Esta factura ya se ha enviado al cliente. %s';
$lang['send_overdue_notice_tooltip']             = 'Enviar aviso de vencimiento';
$lang['invoice_view_activity_tooltip']           = 'Registro de actividades';
$lang['invoice_record_payment']                  = 'Pago de registro';
$lang['invoice_send_to_client_modal_heading']    = 'Enviar factura al cliente';
$lang['invoice_send_to_client_attach_pdf']       = 'Adjuntar factura PDF';
$lang['invoice_send_to_client_preview_template'] = 'Vista previa de la plantilla del email';
$lang['invoice_dt_table_heading_number']         = 'Factura #';
$lang['invoice_dt_table_heading_date']           = 'Fecha';
$lang['invoice_dt_table_heading_client']         = 'Cliente';
$lang['invoice_dt_table_heading_duedate']        = 'Fecha de vencimiento';
$lang['invoice_dt_table_heading_amount']         = 'Cantidad';
$lang['invoice_dt_table_heading_status']         = 'Estado';
$lang['record_payment_for_invoice']              = 'Pagado por';
$lang['record_payment_amount_received']          = 'Cantidad recibida';
$lang['record_payment_date']                     = 'Fecha de pago';
$lang['record_payment_leave_note']               = 'Dejar una nota';
$lang['invoice_payments_received']               = 'Pagos recibidos';
$lang['invoice_record_payment_note_placeholder'] = 'Nota de administrador';
$lang['no_payments_found']                       = 'No se han encontrado pagos para esta factura.';

# Payments
$lang['payments']                             = 'Pagos';
$lang['payment']                              = 'Pago';
$lang['payment_lowercase']                    = 'pago';
$lang['payments_table_number_heading']        = 'Pago #';
$lang['payments_table_invoicenumber_heading'] = 'Factura #';
$lang['payments_table_mode_heading']          = 'Modo de pago';
$lang['payments_table_date_heading']          = 'Fecha';
$lang['payments_table_amount_heading']        = 'Cantidad';
$lang['payments_table_client_heading']        = 'Cliente';
$lang['payment_not_exists']                   = 'El pago no existe.';
$lang['payment_edit_for_invoice']             = 'Pago por factura';
$lang['payment_edit_amount_received']         = 'Cantidad recibida';
$lang['payment_edit_date']                    = 'Fecha de pago';

# Knowledge Base
$lang['kb_article_add_edit_subject']   = 'Tema';
$lang['kb_article_add_edit_group']     = 'Grupo';
$lang['kb_string']                     = 'Manuales';
$lang['kb_article']                    = 'Manual';
$lang['kb_article_lowercase']          = 'manual';
$lang['kb_article_new_article']        = 'Nuevo Manual';
$lang['kb_article_disabled']           = 'Manual desactivado';
$lang['kb_article_description']        = 'Descripción del manual';
$lang['kb_no_articles_found']          = 'No se han encontrado manuales.';
$lang['kb_dt_article_name']            = 'Nombre del manual';
$lang['kb_dt_group_name']              = 'Grupo';
$lang['new_group']                     = 'Nuevo grupo';
$lang['kb_group_add_edit_name']        = 'Nombre del grupo';
$lang['kb_group_add_edit_description'] = 'Breve descripción';
$lang['kb_group_add_edit_disabled']    = 'Desactivado';
$lang['kb_group_add_edit_note']        = 'Nota: todos los productos de este grupo se ocultarán si se selecciona deshabilitado';
$lang['group_table_name_heading']      = 'Nombre';
$lang['group_table_isactive_heading']  = 'Activo';
$lang['kb_no_groups_found']            = 'No se encontraron grupos de base de conocimiento';

# Mail Lists
$lang['mail_lists']                            = 'Listas de correo';
$lang['mail_list']                             = 'Lista de correo';
$lang['new_mail_list']                         = 'Nueva lista de correo';
$lang['mail_list_lowercase']                   = 'lista de correo';
$lang['custom_field_deleted_success']          = 'Campo personalizado eliminado';
$lang['custom_field_deleted_fail']             = 'Problema al eliminar el campo personalizado';
$lang['email_removed_from_list']               = 'Correo electrónico eliminado de la lista';
$lang['email_remove_fail']                     = 'Correo electrónico eliminado de la lista';
$lang['staff_mail_lists']                      = 'Lista de correos del personal';
$lang['clients_mail_lists']                    = 'Lista de correos de clientes';
$lang['mail_list_total_imported']              = 'Total de correos importados: %s';
$lang['mail_list_total_duplicate']             = 'Total de correos duplicados: %s';
$lang['mail_list_total_failed_to_insert']      = 'Los correos electrónicos no pudieron insertar: %s';
$lang['mail_list_total_invalid']               = 'Dirección de correo electrónico no válida: %s';
$lang['cant_edit_mail_list']                   = 'No puedes editar esta lista, esta lista se rellena automáticamente.';
$lang['mail_list_add_edit_name']               = 'Nombre de la lista de correo';
$lang['mail_list_add_edit_customfield']        = 'Añadir campo personalizado';
$lang['mail_lists_view_email_email_heading']   = 'Email';
$lang['mail_lists_view_email_date_heading']    = 'Fecha Agregada';
$lang['add_new_email_to']                      = 'Añadir nuevo correo electrónico a %s';
$lang['import_emails_to']                      = 'Importar correos electrónicos a %s';
$lang['mail_list_new_email_edit_add_label']    = 'Email';
$lang['mail_list_import_file']                 = 'Importar archivo';
$lang['mail_list_available_custom_fields']     = 'Campos personalizados disponibles';
$lang['submit_import_emails']                  = 'Importar correos electrónicos';
$lang['btn_import_emails']                     = 'Importar correos electrónicos (Excel)';
$lang['btn_add_email_to_list']                 = 'Añadir correo electrónico a esta lista';
$lang['mail_lists_dt_list_name']               = 'Lista de nombres';
$lang['mail_lists_dt_datecreated']             = 'Fecha de creación';
$lang['mail_lists_dt_creator']                 = 'Creador';
$lang['email_added_to_mail_list_successfully'] = 'Email agregado a la lista';
$lang['email_is_duplicate_mail_list']          = 'El correo electrónico ya existe en esta lista';

# Media
$lang['media_files'] = 'Archivos';

# Payment modes
$lang['new_payment_mode']           = 'Nuevo modo de pago';
$lang['payment_modes']              = 'Modos de pago';
$lang['payment_mode']               = 'Modo de pago';
$lang['payment_mode_lowercase']     = 'modo de pago';
$lang['payment_modes_dt_name']      = 'Nombre del modo de pago';
$lang['payment_mode_add_edit_name'] = 'Nombre del modo de pago';
$lang['payment_mode_edit_heading']  = 'Editar modo de pago';
$lang['payment_mode_add_heading']   = 'Añadir nuevo modo de pago';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Nueva respuesta predefinida';
$lang['predefined_replies']                = 'Respuestas predefinidas';
$lang['predefined_reply']                  = 'Respuesta predefinida';
$lang['predefined_reply_lowercase']        = 'respuesta predefinida';
$lang['predefined_replies_dt_name']        = 'Nombre de respuesta predefinido';
$lang['predefined_reply_add_edit_name']    = 'Nombre de respuesta predefinido';
$lang['predefined_reply_add_edit_content'] = 'Responder contenido';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Nueva prioridad';
$lang['ticket_priorities']             = 'Prioridades de Avisos';
$lang['ticket_priority']               = 'Prioridad de Aviso';
$lang['ticket_priority_lowercase']     = 'prioridad del aviso';
$lang['no_ticket_priorities_found']    = 'No se encontraron prioridades de Avisos';
$lang['ticket_priority_dt_name']       = 'Nombre de prioridad del Aviso';
$lang['ticket_priority_add_edit_name'] = 'Nombre de prioridad';

# Reports
$lang['kb_reports']                                       = 'Informes de manuales.';
$lang['sales_reports']                                    = 'Reportes de ventas';
$lang['reports_choose_kb_group']                          = 'Elegir grupo';
$lang['report_kb_yes']                                    = 'Sí';
$lang['report_kb_no']                                     = 'No';
$lang['report_kb_no_votes']                               = 'No hay votos todavía';
$lang['report_this_week_leads_conversions']               = 'Equipos de la semana';
$lang['report_leads_sources_conversions']                 = 'Tipos';
$lang['report_leads_monthly_conversions']                 = 'Mensual';
$lang['sales_report_heading']                             = 'Reporte de ventas';
$lang['report_sales_type_income']                         = 'Ingresos totales';
$lang['report_sales_type_customer']                       = 'Informe de clientes';
$lang['report_sales_base_currency_select_explanation']    = 'Necesita seleccionar moneda porque tiene facturas con moneda diferente';
$lang['report_sales_from_date']                           = 'Desde la fecha';
$lang['report_sales_to_date']                             = 'Hasta la fecha';
$lang['report_sales_months_all_time']                     = 'Todo el tiempo';
$lang['report_sales_months_six_months']                   = 'Últimos 6 meses';
$lang['report_sales_months_twelve_months']                = 'Últimos 12 meses';
$lang['reports_sales_generated_report']                   = 'Reporte generado';
$lang['reports_sales_dt_customers_client']                = 'Cliente';
$lang['reports_sales_dt_customers_total_invoices']        = 'Facturas Totales';
$lang['reports_sales_dt_items_customers_amount']          = 'Cantidad';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Importe con Impuesto';

# Roles
$lang['new_role']           = 'Nuevo rol';
$lang['all_roles']          = 'Todos los Roles';
$lang['roles']              = 'Roles del personal';
$lang['role']               = 'Rol';
$lang['role_lowercase']     = 'rol';
$lang['roles_total_users']  = 'Usuarios totales: ';
$lang['roles_dt_name']      = 'Nombre de rol';
$lang['role_add_edit_name'] = 'Nombre de rol';

# Service
$lang['new_service']           = 'Nueva categoría';
$lang['services']              = 'Categorías';
$lang['service']               = 'Relacionado con:';
$lang['service_lowercase']     = 'categoría';
$lang['services_dt_name']      = 'Nombre de la Categoría';
$lang['service_add_edit_name'] = 'Nombre de la Categoría';

# Settings
$lang['settings']                                                  = 'Ajustes';
$lang['settings_updated']                                          = 'Ajustes actualizan';
$lang['settings_save']                                             = 'Guardar ajustes';
$lang['settings_group_general']                                    = 'General';
$lang['settings_group_localization']                               = 'Localización';
$lang['settings_group_tickets']                                    = 'Avisos';
$lang['settings_group_sales']                                      = 'Contable';
$lang['settings_group_email']                                      = 'Email';
$lang['settings_group_clients']                                    = 'Clientes';
$lang['settings_group_newsfeed']                                   = 'Noticias';
$lang['settings_group_cronjob']                                    = 'Sistemas';
$lang['settings_yes']                                              = 'Sí';
$lang['settings_no']                                               = 'No';
$lang['settings_clients_default_theme']                            = 'Tema de clientes por defecto';
$lang['settings_clients_allow_registration']                       = 'Permitir a los clientes registrarse';
$lang['settings_clients_allow_kb_view_without_registration']       = 'Permitir que los manuales se vean sin registro';
$lang['settings_cron_send_overdue_reminder']                       = 'Enviar factura recordatorio de vencimiento';
$lang['settings_cron_send_overdue_reminder_tooltip']               = 'Envíe el correo electrónico vencido al cliente cuando el estado de la factura se actualice como vencido por sistema';
$lang['automatically_send_invoice_overdue_reminder_after']         = 'Auto enviar recordatorio después de (días)';
$lang['automatically_resend_invoice_overdue_reminder_after']       = 'Recordatorio de reenvío automático después de (días)';
$lang['settings_email_host']                                       = 'SMTP Host';
$lang['settings_email_port']                                       = 'SMTP Puerto';
$lang['settings_email']                                            = 'Email';
$lang['settings_email_password']                                   = 'SMTP Contraseña';
$lang['settings_email_charset']                                    = 'Correo electrónico Charset';
$lang['settings_email_signature']                                  = 'Firma de email';
$lang['settings_general_company_logo']                             = 'Logo de la Empresa';
$lang['settings_general_company_logo_tooltip']                     = 'Dimensiones recomendadas: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip']              = 'Quitar logo de la empresa';
$lang['settings_general_company_name']                             = 'Nombre de empresa';
$lang['settings_general_company_main_domain']                      = 'Dominio principal de empresa';
$lang['settings_general_use_knowledgebase']                        = 'Usar manuales';
$lang['settings_general_use_knowledgebase_tooltip']                = 'Si permite esta opción, la base de conocimientos se mostrará también en el lado del cliente.';
$lang['settings_general_tables_limit']                             = 'Límite de paginación de tablas';
$lang['settings_general_default_staff_role']                       = 'Rol de personal predeterminado';
$lang['settings_general_default_staff_role_tooltip']               = 'Cuando agregue un nuevo miembro del personal, esta función se seleccionará de forma predeterminada';
$lang['settings_localization_date_format']                         = 'Formato de fecha';
$lang['settings_localization_default_timezone']                    = 'Zona horaria predeterminada';
$lang['settings_localization_default_language']                    = 'Idioma predeterminado';
$lang['settings_newsfeed_max_file_upload_post']                    = 'Carga máxima de archivos en la publicación';
$lang['settings_reminders_contracts']                              = 'Recordatorio de vencimiento del proveedor antes';
$lang['settings_reminders_contracts_tooltip']                      = 'Aviso de vencimiento en días.';
$lang['settings_tickets_use_services']                             = 'Servicios de uso';
$lang['settings_tickets_max_attachments']                          = 'Entradas máximas';
$lang['settings_tickets_allow_departments_access']                 = 'Permitir que el personal acceda solo a los Aviso que pertenecen a su sector.';
$lang['settings_tickets_allowed_file_extensions']                  = 'Extensiones de archivos adjuntos permitidos';
$lang['settings_sales_general']                                    = 'General';
$lang['settings_sales_general_note']                               = 'Ajustes generales';
$lang['settings_sales_invoice_prefix']                             = 'Prefijo de número de factura';
$lang['settings_sales_decimal_separator']                          = 'Separador decimal';
$lang['settings_sales_thousand_separator']                         = 'Separador mil';
$lang['settings_sales_currency_placement']                         = 'Colocación de moneda';
$lang['settings_sales_currency_placement_before']                  = 'Antes de la cantidad';
$lang['settings_sales_currency_placement_after']                   = 'Después de la cantidad';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Requiere que el cliente esté conectado para ver la factura';
$lang['settings_sales_next_invoice_number']                        = 'Número de factura siguiente';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Establezca este campo en 1 si desea comenzar desde el principio';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Disminuir el número de factura en la eliminación';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = '¿Desea disminuir el número de factura cuando se borra la última factura? eq. Si se establece esta opción en SÍ y antes de eliminar la factura, el número de la próxima factura es 15, el número de la siguiente factura disminuirá a 14. Si se establece en NO, el número permanecerá en 15. Si ha configurado la eliminación solo en la última factura para NO Debería establecer esta opción en NO también para mantener el siguiente número de factura sin disminuir.';
$lang['settings_sales_invoice_number_format']                      = 'Formato de número de factura';
$lang['settings_sales_invoice_number_format_year_based']           = 'Basado en el año';
$lang['settings_sales_invoice_number_format_number_based']         = 'Basado en numero (000001)';
$lang['settings_sales_company_info_note']                          = 'Esta información se mostrará en las facturas / presupuestos / pagos y otros documentos PDF donde se requiera la información de la empresa.';
$lang['settings_sales_company_name']                               = 'Nombre de empresa';
$lang['settings_sales_address']                                    = 'Dirección';
$lang['settings_sales_city']                                       = 'Ciudad';
$lang['settings_sales_country_code']                               = 'Teléfono';
$lang['settings_sales_postal_code']                                = 'Código postal';
$lang['settings_sales_phonenumber']                                = 'Código de país';

# Leads
$lang['new_lead']                          = 'Nuevo Equipo';
$lang['leads']                             = 'Equipos';
$lang['lead']                              = 'Equipo';
$lang['lead_lowercase']                    = 'equipo';
$lang['leads_all']                         = 'Todos';
$lang['leads_canban_notes']                = 'Notas: %s';
$lang['leads_canban_source']               = 'Tipo: %s';
$lang['lead_new_source']                   = 'Nuevo tipo';
$lang['lead_sources']                      = 'Fuentes de equipo';
$lang['lead_source']                       = 'Fuente de equipo';
$lang['lead_source_lowercase']             = 'fuente de equipo';
$lang['leads_sources_not_found']           = 'No se han encontrado tipos de equipos.';
$lang['leads_sources_table_name']          = 'Nombre del tipo';
$lang['leads_source_add_edit_name']        = 'Nombre del tipo';
$lang['lead_new_status']                   = 'Nuevo estado de equipo';
$lang['lead_status']                       = 'Estado de equipo';
$lang['lead_status_lowercase']             = 'estado de equipo';
$lang['leads_status_table_name']           = 'Nombre de estado';
$lang['leads_status_add_edit_name']        = 'Nombre de estado';
$lang['leads_status_add_edit_order']       = 'Orden';
$lang['lead_statuses_not_found']           = 'No se han encontrado estados de Equipos';
$lang['leads_search']                      = 'Buscar equipo';
$lang['leads_table_total']                 = 'Total equipo: %s';
$lang['leads_dt_name']                     = 'Nombre';
$lang['leads_dt_email']                    = 'Email';
$lang['leads_dt_phonenumber']              = 'Teléfono';
$lang['leads_dt_assigned']                 = 'Asignado';
$lang['leads_dt_status']                   = 'Estado';
$lang['leads_dt_last_contact']             = 'Ultimo equipo';
$lang['lead_add_edit_name']                = 'Nombre';
$lang['lead_add_edit_email']               = 'Dirección de correo electrónico';
$lang['lead_add_edit_phonenumber']         = 'Teléfono';
$lang['lead_add_edit_source']              = 'Tipo';
$lang['lead_add_edit_status']              = 'Sector/cliente';
$lang['lead_add_edit_assigned']            = 'Asignado';
$lang['lead_add_edit_datecontacted']       = 'Fecha contactada';
$lang['lead_add_edit_contacted_today']     = 'Visto hoy';
$lang['lead_add_edit_activity']            = 'Registro de actividades';
$lang['lead_add_edit_notes']               = 'Notas';
$lang['lead_add_edit_add_note']            = 'Agregar nota';
$lang['lead_not_contacted']                = 'No trabaje con este equipo';
$lang['lead_add_edit_contacted_this_lead'] = 'Trabaje con este equipo';

# Misc
$lang['access_denied'] = 'Acceso denegado';
$lang['prev']          = 'Ant';
$lang['next']          = 'Sig';

# Datatables
$lang['dt_paginate_first']    = 'Primera';
$lang['dt_paginate_last']     = 'Última';
$lang['dt_paginate_next']     = 'Siguiente';
$lang['dt_paginate_previous'] = 'Anterior';
$lang['dt_search']            = 'Buscar...';
$lang['dt_zero_records']      = 'No se encontraron registros coincidentes';
$lang['dt_loading_records']   = 'Cargando...';
$lang['dt_length_menu']       = 'Mostrar _MENU_ entradas';
$lang['dt_info_filtered']     = '(filtered from _MAX_ total {0})';
$lang['dt_info_empty']        = 'Viendo 0 - 0 de 0 {0}';
$lang['dt_info']              = 'Viendo _START_ - _END_ de _TOTAL_ {0}';
$lang['dt_empty_table']       = 'No hay {0}';
$lang['dt_sort_ascending']    = ' activar para ordenar la columna ascendente';
$lang['dt_sort_descending']   = ' activar para ordenar la columna descendente';

# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s sent invoice overdue reminder';

# Weekdays
$lang['wd_monday']    = 'Lunes';
$lang['wd_tuesday']   = 'Martes';
$lang['wd_wednesday'] = 'Miércoles';
$lang['wd_thursday']  = 'Jueves';
$lang['wd_friday']    = 'Viernes';
$lang['wd_saturday']  = 'Sábado';
$lang['wd_sunday']    = 'Domingo';

# Admin Left Sidebar
$lang['als_dashboard']             = 'Inicio';
$lang['als_clients']               = 'Clientes';
$lang['als_leads']                 = 'Equipos';
$lang['als_contracts']             = 'Proveedores';
$lang['als_sales']                 = 'Ventas';
$lang['als_staff']                 = 'Personal';
$lang['als_tasks']                 = 'Ordenes de trabajo';
$lang['als_kb']                    = 'Manuales';
$lang['als_surveys']               = 'Encuestas';
$lang['als_media']                 = 'Media';
$lang['als_reports']               = 'Reportes';
$lang['als_reports_sales_submenu'] = 'Ventas';
$lang['als_reports_leads_submenu'] = 'Equipos';
$lang['als_kb_articles_submenu']   = 'Manuales';
$lang['als_utilities']             = 'Utilidades';
$lang['als_announcements_submenu'] = 'Anuncios';
$lang['als_calendar_submenu']      = 'Calendario';
$lang['als_activity_log_submenu']  = 'Registro de actividades';

# Admin Customizer Sidebar
$lang['acs_ticket_priority_submenu']           = 'Prioridad de Aviso';
$lang['acs_ticket_statuses_submenu']           = 'Estados del Aviso';
$lang['acs_ticket_predefined_replies_submenu'] = 'Respuestas predefinidas';
$lang['acs_ticket_services_submenu']           = 'Categorías';
$lang['acs_departments']                       = 'Sectores';
$lang['acs_leads']                             = 'Equipos';
$lang['acs_leads_sources_submenu']             = 'Tipos';
$lang['acs_leads_statuses_submenu']            = 'Estados';
$lang['acs_sales_taxes_submenu']               = 'Las tasas de impuestos';
$lang['acs_sales_currencies_submenu']          = 'Monedas';
$lang['acs_sales_payment_modes_submenu']       = 'Modos de pago';
$lang['acs_email_templates']                   = 'Plantillas de correo electrónico';
$lang['acs_roles']                             = 'Roles';
$lang['acs_settings']                          = 'Opciones';

# Tickets
$lang['new_ticket']                                          = 'Abrir nuevo Aviso';
$lang['tickets']                                             = 'Avisos';
$lang['ticket']                                              = 'Aviso';
$lang['ticket_lowercase']                                    = 'Aviso';
$lang['support_tickets']                                     = 'Entrada de Avisos';
$lang['support_ticket']                                      = 'Entrada de Aviso';
$lang['ticket_settings_to']                                  = 'Nombre';
$lang['ticket_settings_email']                               = 'Email';
$lang['ticket_settings_departments']                         = 'Sector';
$lang['ticket_settings_service']                             = 'Relacionado con:';
$lang['ticket_settings_priority']                            = 'Prioridad';
$lang['ticket_settings_subject']                             = 'Tema';
$lang['ticket_settings_assign_to']                           = 'Asignar responsable';
$lang['ticket_add_body']                                     = 'Cuerpo del Aviso';
$lang['ticket_add_attachments']                              = 'Archivos adjuntos';
$lang['ticket_no_reply_yet']                                 = 'Aún no hay respuesta';
$lang['new_ticket_added_successfully']                       = 'Aviso #%s agregado exitosamente';
$lang['replied_to_ticket_successfully']                      = 'Respondió al Aviso #%s exitosamente';
$lang['ticket_settings_updated_successfully']                = 'Configuraciones de Avisos actualizadas exitosamente';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Configuraciones de Avisos actualizadas exitosamente - reasignadas a sector %s';
$lang['ticket_dt_subject']                                   = 'Tema';
$lang['ticket_dt_department']                                = 'Sector';
$lang['ticket_dt_service']                                   = 'Relacionado con:';
$lang['ticket_dt_submitter']                                 = 'Contacto';
$lang['ticket_dt_status']                                    = 'Estado';
$lang['ticket_dt_priority']                                  = 'Prioridad';
$lang['ticket_dt_last_reply']                                = 'Última respuesta';
$lang['ticket_single_add_reply']                             = 'Agregar respuesta';
$lang['ticket_single_add_note']                              = 'Agregar nota';
$lang['ticket_single_other_user_tickets']                    = 'Otros Avisos';
$lang['ticket_single_settings']                              = 'Opciones';
$lang['ticket_single_priority']                              = 'Prioridad: %s';
$lang['ticket_single_last_reply']                            = 'Última respuesta: %s';
$lang['ticket_single_ticket_note_by']                        = 'Avisos escrito por %s';
$lang['ticket_single_note_added']                            = 'Nota añadida: %s';
$lang['ticket_single_change_status']                         = 'Cambiar Estado';
$lang['ticket_single_assign_to_me_on_update']                = 'Asignarme este Aviso automáticamente';
$lang['ticket_single_insert_predefined_reply']               = 'Insertar respuesta predefinida';
$lang['ticket_single_insert_knowledge_base_link']            = 'Insertar enlace de manuales';
$lang['ticket_single_attachments']                           = 'Archivos adjuntos';
$lang['ticket_single_add_response']                          = 'Añadir respuesta';
$lang['ticket_single_note_heading']                          = 'Nota';
$lang['ticket_single_add_note']                              = 'Añadir nota';
$lang['ticket_settings_none_assigned']                       = 'Ninguna';
$lang['ticket_status_changed_successfully']                  = 'Estado del Aviso modificado';
$lang['ticket_status_changed_fail']                          = 'Problema al cambiar el estado del Aviso';
$lang['ticket_staff_string']                                 = 'Personal';
$lang['ticket_client_string']                                = 'Cliente';
$lang['ticket_posted']                                       = 'Publicada: %s';
$lang['ticket_access_by_department_denied']                  = 'No tienes acceso a este Aviso. Pertenece a un sector al que no está asignado.';

# Staff
$lang['new_staff']                                     = 'Nuevo miembro del personal';
$lang['staff_members']                                 = 'Miembros del personal';
$lang['staff_member']                                  = 'Miembro del personal';
$lang['staff_member_lowercase']                        = 'miembros del personal';
$lang['staff_profile_updated']                         = 'Tu perfil ha sido actualizado';
$lang['staff_old_password_incorrect']                  = 'Tu contraseña anterior es incorrecta';
$lang['staff_password_changed']                        = 'Tu contraseña ha sido cambiada';
$lang['staff_problem_changing_password']               = 'Problema al cambiar tu contraseña';
$lang['staff_profile_string']                          = 'Perfil';
$lang['staff_cant_remove_main_admin']                  = 'No puede quitar al administrador principal';
$lang['staff_cant_remove_yourself_from_admin']         = 'No puedes quitarte el rol de administrador';
$lang['staff_dt_name']                                 = 'Nombre completo';
$lang['staff_dt_email']                                = 'Email';
$lang['staff_dt_last_Login']                           = 'Último acceso';
$lang['staff_dt_active']                               = 'Activo';
$lang['staff_add_edit_firstname']                      = 'Nombre';
$lang['staff_add_edit_lastname']                       = 'Apellido';
$lang['staff_add_edit_email']                          = 'Email';
$lang['staff_add_edit_phonenumber']                    = 'Celular';
$lang['staff_add_edit_facebook']                       = ' ';
$lang['staff_add_edit_linkedin']                       = ' ';
$lang['staff_add_edit_skype']                          = ' ';
$lang['staff_add_edit_departments']                    = 'Miembros del sector';
$lang['staff_add_edit_role']                           = 'Rol';
$lang['staff_add_edit_permissions']                    = 'Permisos';
$lang['staff_add_edit_administrator']                  = 'Administrador';
$lang['staff_add_edit_password']                       = 'Contraseña';
$lang['staff_add_edit_password_note']                  = 'Nota: si llena este campo, la contraseña se cambiará en este miembro.';
$lang['staff_add_edit_password_last_changed']          = 'Contraseña modificada por última vez';
$lang['staff_add_edit_notes']                          = 'Notas';
$lang['staff_add_edit_note_description']               = 'Nota de descripción';
$lang['staff_notes_table_description_heading']         = 'Nota';
$lang['staff_notes_table_addedfrom_heading']           = 'Agregado de';
$lang['staff_notes_table_dateadded_heading']           = 'Fecha Agregada';
$lang['staff_admin_profile']                           = 'Este es el perfil de administrador';
$lang['staff_profile_notifications']                   = 'Notificaciones';
$lang['staff_profile_departments']                     = 'Sectores';
$lang['staff_edit_profile_image']                      = 'Imagen de perfil';
$lang['staff_edit_profile_your_departments']           = 'Sectores';
$lang['staff_edit_profile_change_your_password']       = 'Cambiar contraseña';
$lang['staff_edit_profile_change_old_password']        = 'Contraseña anterior';
$lang['staff_edit_profile_change_new_password']        = 'Nueva contraseña';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Repita la nueva contraseña';

# Surveys
$lang['new_survey']                                = 'Nueva encuesta';
$lang['surveys']                                   = 'Encuestas';
$lang['survey']                                    = 'Encuesta';
$lang['survey_lowercase']                          = 'encuesta';
$lang['survey_no_mail_lists_selected']             = 'No hay listas de email seleccionadas';
$lang['survey_send_success_note']                  = 'Todos los email de encuestas (%s) se enviarán a través de sistemas';
$lang['survey_result']                             = 'Resultado de la encuesta: %s';
$lang['question_string']                           = 'Pregunta';
$lang['question_field_string']                     = 'Campo';
$lang['survey_list_view_tooltip']                  = 'Ver encuesta';
$lang['survey_list_view_results_tooltip']          = 'Ver resultados';
$lang['survey_add_edit_subject']                   = 'Tema de la encuesta';
$lang['survey_add_edit_email_description']         = 'Descripción de la encuesta (Descripción del email)';
$lang['survey_include_survey_link']                = 'Incluir enlace de encuesta en la descripción';
$lang['survey_available_mail_lists_custom_fields'] = 'Campos personalizados disponibles de las listas de email';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Los campos personalizados se pueden utilizar para el editor de email.';
$lang['survey_add_edit_short_description_view']    = 'Breve descripción de la encuesta (Ver descripción)';
$lang['survey_add_edit_from']                      = 'De (se muestra en el email)';
$lang['survey_add_edit_redirect_url']              = 'Encuesta redireccionar URL';
$lang['survey_add_edit_red_url_note']              = 'Cuando el usuario finalice la encuesta dónde se redirige (deje en blanco para esta URL del sitio)';
$lang['survey_add_edit_disabled']                  = 'Desactivado';
$lang['survey_add_edit_only_for_logged_in']        = 'Solo para participantes registrados (personal, clientes)';
$lang['send_survey_string']                        = 'Enviar encuesta';
$lang['survey_send_mail_list_clients']             = 'Clientes';
$lang['survey_send_mail_list_staff']               = 'Personal';
$lang['survey_send_mail_lists_string']             = 'Listas de correo';
$lang['survey_send_mail_lists_note_logged_in']     = 'Nota: si está enviando la encuesta a las listas de email, solo debe deseleccionar a los participantes registrados.';
$lang['survey_send_string']                        = 'Enviar';
$lang['survey_send_to_total']                      = 'Enviar al total de %s email';
$lang['survey_send_till_now']                      = 'Hasta ahora';
$lang['survey_send_finished']                      = 'Encuesta terminada: %s';
$lang['survey_added_to_queue']                     = 'Esta encuesta se agrega al sistema en %s';
$lang['survey_questions_string']                   = 'Preguntas';
$lang['survey_insert_field']                       = 'Insertar campo';
$lang['survey_field_checkbox']                     = 'Casilla de verificación';
$lang['survey_field_radio']                        = 'Llegada';
$lang['survey_field_input']                        = 'Campo de entrada';
$lang['survey_field_texorden']                     = 'Area de texto';
$lang['survey_question_required']                  = 'Necesario';
$lang['survey_question_only_for_preview']          = 'Solo para previsualizar';
$lang['survey_create_first']                       = 'Primero debe crear la encuesta y luego podrá insertar las preguntas.';
$lang['survey_dt_name']                            = 'Nombre';
$lang['survey_dt_total_questions']                 = 'Total de preguntas';
$lang['survey_dt_total_participants']              = 'Participantes Totales';
$lang['survey_dt_date_created']                    = 'Fecha de creación';
$lang['survey_dt_active']                          = 'Activa';
$lang['survey_text_questions_results']             = 'Resultado de preguntas';
$lang['survey_view_all_answers']                   = 'Ver todas las respuestas';

# Staff Tasks
$lang['new_task']                           = 'Nueva orden';
$lang['tasks']                              = 'Ordenes';
$lang['task']                               = 'Orden';
$lang['task_lowercase']                     = 'orden';
$lang['comment_string']                     = 'Comentario';
$lang['task_marked_as_complete']            = 'Orden marcada como completa';
$lang['task_follower_removed']              = 'Seguidor de ordenes eliminado con éxito';
$lang['task_assignee_removed']              = 'Orden asignada eliminada con éxito';
$lang['task_no_assignees']                  = 'No hay asignados para esta orden.';
$lang['task_no_followers']                  = 'No hay seguidores para esta orden.';
$lang['task_list_all']                      = 'Todos';
$lang['task_list_not_assigned']             = 'No asignado';
$lang['task_list_duedate_passed']           = 'Fecha de vencimiento pasada';
$lang['tasks_dt_name']                      = 'Nombre';
$lang['task_single_priority']               = 'Prioridad';
$lang['task_single_start_date']             = 'Fecha de inicio';
$lang['task_single_due_date']               = 'Fecha de vencimiento';
$lang['task_single_finished']               = 'Terminado';
$lang['task_single_mark_as_complete']       = 'Marcar como terminado';
$lang['task_single_edit']                   = 'Editar';
$lang['task_single_delete']                 = 'Borrar';
$lang['task_single_assignees']              = 'Responsables';
$lang['task_single_assignees_select_title'] = 'Asignar orden a';
$lang['task_single_followers']              = 'Seguidores';
$lang['task_single_followers_select_title'] = 'Añadir seguidores';
$lang['task_single_add_new_comment']        = 'Agregar comentario';
$lang['task_add_edit_subject']              = 'Tema';
$lang['task_add_edit_priority']             = 'Prioridad';
$lang['task_priority_low']                  = 'Baja';
$lang['task_priority_medium']               = 'Media';
$lang['task_priority_high']                 = 'Alta';
$lang['task_priority_urgent']               = 'Urgente';
$lang['task_add_edit_start_date']           = 'Fecha de inicio';
$lang['task_add_edit_due_date']             = 'Fecha de vencimiento';
$lang['task_add_edit_description']          = 'Descripción de la orden';

# Taxes
$lang['new_tax']           = 'Nuevo impuesto';
$lang['taxes']             = 'Impuestos';
$lang['tax']               = 'Impuesto';
$lang['tax_lowercase']     = 'impuesto';
$lang['tax_dt_name']       = 'Nombre del impuesto';
$lang['tax_dt_rate']       = 'Tasa (porcentaje)';
$lang['tax_add_edit_name'] = 'Nombre del impuesto';
$lang['tax_add_edit_rate'] = 'Tasa de impuestos (porcentaje)';
$lang['tax_edit_title']    = 'Editar impuesto';
$lang['tax_add_title']     = 'Añadir nuevo impuesto';

# Ticket Statuses
$lang['new_ticket_status']            = 'Nuevo estado del Aviso';
$lang['ticket_statuses']              = 'Estados del Aviso';
$lang['ticket_status']                = 'Estado del Aviso';
$lang['ticket_status_lowercase']      = 'Estado del Aviso';
$lang['ticket_statuses_dt_name']      = 'Nombre del estado del Aviso';
$lang['no_ticket_statuses_found']     = 'No se han encontrado estados de Aviso';
$lang['ticket_statuses_table_total']  = 'Total %s';
$lang['ticket_status_add_edit_name']  = 'Nombre del estado del Aviso';
$lang['ticket_status_add_edit_color'] = 'Elegir color';
$lang['ticket_status_add_edit_order'] = 'Estado de la orden';

# Todos
$lang['new_todo']                  = 'Agregar nota';
$lang['my_todos']                  = 'Mis trabajos para hacer';
$lang['todo']                      = 'Hacer un trabajo';
$lang['todo_lowercase']            = 'hacer';
$lang['todo_status_changed']       = 'el trabajo para hacer cambio de estado';
$lang['todo_add_title']            = 'Agregar nuevos pendientes';
$lang['add_new_todo_description']  = 'Descripción';
$lang['no_finished_todos_found']   = 'No hay trabajos terminados';
$lang['no_unfinished_todos_found'] = 'No se encontraron trabajos';
$lang['unfinished_todos_title']    = 'Pendientes';
$lang['finished_todos_title']      = 'Realizados';

# Utilities
$lang['utility_activity_log']                        = 'Registro de actividades';
$lang['utility_activity_log_filter_by_date']         = 'Filtrar por fecha';
$lang['utility_activity_log_dt_description']         = 'Descripción';
$lang['utility_activity_log_dt_date']                = 'Fecha';
$lang['utility_activity_log_dt_staff']               = 'Personal';
$lang['utility_calendar_new_event_title']            = 'Agregar nuevo evento';
$lang['utility_calendar_new_event_start_date']       = 'Fecha de inicio';
$lang['utility_calendar_new_event_end_date']         = 'Fecha final';
$lang['utility_calendar_new_event_make_public']      = 'Evento público';
$lang['utility_calendar_event_added_successfully']   = 'Nuevo evento agregado exitosamente';
$lang['utility_calendar_event_deleted_successfully'] = 'Evento eliminado';
$lang['utility_calendar_new_event_placeholder']      = 'Título del evento';

# Navigation
$lang['nav_notifications']          = 'Notificaciones';
$lang['nav_my_profile']             = 'Mi perfil';
$lang['nav_edit_profile']           = 'Editar perfil';
$lang['nav_logout']                 = 'Cerrar sesión';
$lang['nav_no_notifications']       = 'No se encontraron notificaciones';
$lang['nav_view_all_notifications'] = 'Ver todas las notificaciones';
$lang['nav_notifications_tooltip']  = 'Ver notificaciones';

# Footer
$lang['clients_copyright'] = 'Derechos de autor %s';

# Contracts
$lang['clients_contracts']               = 'Proveedores';
$lang['clients_contracts_dt_subject']    = 'Tema';
$lang['clients_contracts_dt_start_date'] = 'Fecha de inicio';
$lang['clients_contracts_dt_end_date']   = 'Fecha finalización';

# Home
$lang['clients_quick_invoice_info']           = 'Información de facturas';
$lang['clients_home_currency_select_tooltip'] = 'Necesita seleccionar moneda porque tiene facturas con moneda diferente';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Descargar';
$lang['clients_my_invoices']               = 'Facturas';
$lang['clients_invoice_dt_number']         = 'Factura #';
$lang['clients_invoice_dt_date']           = 'Fecha';
$lang['clients_invoice_dt_duedate']        = 'Fecha de vencimiento';
$lang['clients_invoice_dt_amount']         = 'Cantidad';
$lang['clients_invoice_dt_status']         = 'Estado';

# Profile
$lang['clients_profile_heading'] = 'Perfil';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Nombre';
$lang['clients_lastname']  = 'Apellido';
$lang['clients_email']     = 'Email';
$lang['clients_company']   = 'Empresa';
$lang['clients_vat']       = 'CUIT/CUIL';
$lang['clients_phone']     = 'Teléfono';
$lang['clients_country']   = 'País';
$lang['clients_city']      = 'Ciudad';
$lang['clients_address']   = 'Dirección';
$lang['clients_zip']       = 'Código postal';
$lang['clients_state']     = 'Provincia';
# Used for edit profile and register END

$lang['clients_register_password']                    = 'Contraseña';
$lang['clients_register_password_repeat']             = 'Repita la contraseña';
$lang['clients_edit_profile_update_btn']              = 'Actualizar';
$lang['clients_edit_profile_change_password_heading'] = 'Cambiar la contraseña';
$lang['clients_edit_profile_old_password']            = 'Contraseña anterior';
$lang['clients_edit_profile_new_password']            = 'Nueva contraseña';
$lang['clients_edit_profile_new_password_repeat']     = 'Repita la contraseña';
$lang['clients_edit_profile_change_password_btn']     = 'Cambia la contraseña';
$lang['clients_profile_last_changed_password']        = 'Contraseña modificada por última vez %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Manual';
$lang['clients_knowledge_base_articles_not_found'] = 'No se han encontrado manuales.';
$lang['clients_knowledge_base_find_useful']        = '¿Te ha resultado útil este manual?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Sí';
$lang['clients_knowledge_base_find_useful_no']     = 'No';
$lang['clients_article_only_1_vote_today']         = 'Puedes votar una vez en 24 horas.';
$lang['clients_article_voted_thanks_for_feedback'] = 'Gracias por sus comentarios';

# Tickets
$lang['clients_ticket_open_subject']               = 'Abrir Aviso';
$lang['clients_ticket_open_departments']           = 'Sectores';
$lang['clients_tickets_heading']                   = 'Aviso de soporte';
$lang['clients_ticket_open_service']               = 'Relacionado con:';
$lang['clients_ticket_open_priority']              = 'Prioridad';
$lang['clients_ticket_open_body']                  = 'Cuerpo del Aviso';
$lang['clients_ticket_attachments']                = 'Archivos adjuntos';
$lang['clients_single_ticket_string']              = 'Aviso';
$lang['clients_single_ticket_replied']             = 'Respondido: %s';
$lang['clients_single_ticket_information_heading'] = 'información del Aviso';
$lang['clients_tickets_dt_number']                 = 'Aviso #';
$lang['clients_tickets_dt_subject']                = 'Tema';
$lang['clients_tickets_dt_department']             = 'Sector';
$lang['clients_tickets_dt_service']                = 'Relacionado con:';
$lang['clients_tickets_dt_status']                 = 'Estado';
$lang['clients_tickets_dt_last_reply']             = 'Última respuesta';
$lang['clients_ticket_single_department']          = 'Sector: %s';
$lang['clients_ticket_single_submitted']           = 'Encargado: %s';
$lang['clients_ticket_single_status']              = 'Estado:';
$lang['clients_ticket_single_priority']            = 'Prioridad: %s';
$lang['clients_ticket_single_add_reply_btn']       = 'Añadir respuesta';
$lang['clients_ticket_single_add_reply_heading']   = 'Añadir respuesta a este Aviso';

# Login
$lang['clients_login_heading_no_register'] = 'Iniciar Sesión';
$lang['clients_login_heading_register']    = 'Por favor, inicie sesión o regístrese';
$lang['clients_login_email']               = 'Email';
$lang['clients_login_password']            = 'Contraseña';
$lang['clients_login_remember']            = 'Recordarme';
$lang['clients_login_login_string']        = 'Iniciar sesión';

# Register
$lang['clients_register_string']  = 'Registrarse';
$lang['clients_register_heading'] = 'Registrarse';

# Navigation
$lang['clients_nav_login']     = 'Iniciar sesión';
$lang['clients_nav_register']  = 'Registrarse';
$lang['clients_nav_invoices']  = 'Facturas';
$lang['clients_nav_contracts'] = 'Proveedores';
$lang['clients_nav_kb']        = 'Manuales';
$lang['clients_nav_profile']   = 'Perfil';
$lang['clients_nav_logout']    = 'Cerrar sesión';

# Version 1.0.1
$lang['payment_receipt']                               = 'Recibo de pago';
$lang['payment_for_string']                            = 'Pagado por';
$lang['payment_date']                                  = 'Fecha de pago:';
$lang['payment_view_mode']                             = 'Metodo de pago:';
$lang['payment_total_amount']                          = 'Cantidad total';
$lang['payment_table_invoice_number']                  = 'Número de factura';
$lang['payment_table_invoice_date']                    = 'Fecha de la factura';
$lang['payment_table_invoice_amount_total']            = 'Importe de la factura';
$lang['payment_table_payment_amount_total']            = 'Monto del pago';
$lang['payments_table_transaction_id']                 = 'ID de transacción: %s';
$lang['payment_getaway_token_not_found']               = 'Token no encontrado';
$lang['online_payment_recorded_success']               = 'Pago registrado exitosamente';
$lang['online_payment_recorded_success_fail_database'] = 'El pago se realizó correctamente pero no se pudo insertar el pago en la base de datos. Póngase en contacto con el administrador.';

# Leads
$lang['lead_convert_to_client']                = 'Convertir equipo';
$lang['lead_convert_to_email']                 = 'Email';
$lang['lead_convert_to_client_firstname']      = 'Nombre';
$lang['lead_convert_to_client_lastname']       = 'Apellido';
$lang['lead_email_already_exists']             = 'El email ya existe en los datos de los clientes.';
$lang['lead_to_client_base_converted_success'] = 'Equipo convertido al cliente con éxito';
$lang['lead_have_client_profile']              = 'Este equipo tiene perfil de cliente.';
$lang['lead_converted_edit_client_profile']    = 'Editar equipo';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Ver factura como cliente';
$lang['invoice_add_edit_recurring']                                           = '¿Factura recurrente?';
$lang['invoice_add_edit_recurring_no']                                        = 'No';
$lang['invoice_add_edit_recurring_month']                                     = 'Cada %s mes';
$lang['invoice_add_edit_recurring_months']                                    = 'Cada %s meses';
$lang['invoices_list_all']                                                    = 'Todos';
$lang['invoices_list_not_have_payment']                                       = 'Facturas sin registro de pagos.';
$lang['invoices_list_recurring']                                              = 'Facturas recurrentes';
$lang['invoices_list_made_payment_by']                                        = 'Hecho el pago por %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = '¿Crear una nueva factura a partir de una factura recurrente solo si la factura tiene el estado pagado?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Si este campo se establece en SÍ y las facturas recurrentes no tienen el estado PAGADO, la nueva factura NO se creará.';
$lang['view_invoice_pdf_link_pay']                                            = 'Factura de pago';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Cuentas bancarias / Descripción';
$lang['payment_mode_add_edit_description_tooltip'] = 'Puede configurar aquí la información de las cuentas bancarias. Se mostrará en la factura HTML';
$lang['payment_modes_dt_description']              = 'Cuentas bancarias / Descripción';
$lang['payment_modes_add_edit_announcement']       = 'Nota: los modos de pago que se enumeran a continuación son modos fuera de línea. Los modos de pago en línea se pueden configurar en Configuración -> Configuración -> Formas de pago';
$lang['payment_mode_add_edit_active']              = 'Activo';
$lang['payment_modes_dt_active']                   = 'Activo';

# Contracts
$lang['contract_not_found'] = 'Proveedor no encontrado. Tal vez se borre, verifique el registro de actividad';

# Settings
$lang['setting_bar_heading']                               = 'Ajustes';
$lang['settings_group_online_payment_modes']               = 'Forma de pago';
$lang['settings_paymentmethod_mode_label']                 = 'Etiqueta';
$lang['settings_paymentmethod_active']                     = 'Activo';
$lang['settings_paymentmethod_currencies']                 = 'Monedas (coma para separar)';
$lang['settings_paymentmethod_testing_mode']               = 'Habilitar el modo de prueba';
$lang['settings_paymentmethod_paypal_username']            = 'Nombre de usuario API de PayPal';
$lang['settings_paymentmethod_paypal_password']            = 'Contraseña API de PayPal';
$lang['settings_paymentmethod_paypal_signature']           = 'API Firma';
$lang['settings_paymentmethod_stripe_api_secret_key']      = 'API Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Key publica';
$lang['settings_limit_top_search_bar_results']             = 'Limitar los resultados de la barra de búsqueda superior a';

## Clients
$lang['client_phonenumber'] = 'Teléfono';

# Main Clients
$lang['clients_register']                          = 'Registro';
$lang['clients_profile_updated']                   = 'Tu perfil ha sido actualizado';
$lang['clients_successfully_registered']           = 'Gracias por registrarte';
$lang['clients_account_created_but_not_logged_in'] = 'Su cuenta ha sido creada pero no ha iniciado sesión en nuestro sistema automáticamente. Por favor intenta iniciar sesión';

# Tickets
$lang['clients_tickets_heading'] = 'Avisos de soporte';

# Payments
$lang['payment_for_invoice'] = 'Pago por factura';
$lang['payment_total']       = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Pago en línea';
$lang['invoice_html_online_payment_button_text'] = 'Pague ahora';
$lang['invoice_html_payment_modes_not_selected'] = 'Seleccione el modo de pago';
$lang['invoice_html_amount_blank']               = 'La cantidad total no puede estar en blanco o cero';
$lang['invoice_html_offline_payment']            = 'Pago offline';
$lang['invoice_html_amount']                     = 'Cantidad';
# Version 1.0.2
# DataTables
$lang['dt_button_column_visibility'] = 'Visibilidad';
$lang['dt_button_reload']            = 'Actualizar';
$lang['dt_button_excel']             = 'Excel';
$lang['dt_button_csv']               = 'CSV';
$lang['dt_button_pdf']               = 'PDF';
$lang['dt_button_print']             = 'Imprimir';
$lang['is_not_active_export']        = 'No';
$lang['is_active_export']            = 'Sí';

# Invoice
$lang['invoice_add_edit_advanced_options']                = 'Opciones avanzadas';
$lang['invoice_add_edit_allowed_payment_modes']           = 'Modos de pago permitidos para esta factura.';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Facturas creadas a partir de esta factura recurrente.';
$lang['invoice_add_edit_no_payment_modes_found']          = 'No se encontraron modos de pago.';
$lang['invoice_html_total_pay']                           = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Nombre de la plantilla';

# General
$lang['discount_type']            = 'Tipo de descuento';
$lang['discount_type_after_tax']  = 'Despues del impuesto';
$lang['discount_type_before_tax'] = 'Antes de impuestos';
$lang['terms_and_conditions']     = 'Términos y condiciones';
$lang['reference_no']             = 'Referencia #';
$lang['no_discount']              = 'Sin descuento';
$lang['view_stats_tooltip']       = 'Ver estadísticas rápidas';

# Clients
$lang['zip_from_date']            = 'Desde de la fecha:';
$lang['zip_to_date']              = 'Hasta la fecha:';
$lang['client_zip_payments']      = 'Pagos';
$lang['client_zip_invoices']      = 'Facturas';
$lang['client_zip_estimates']     = 'Presupuestos';
$lang['client_zip_status']        = 'Estado';
$lang['client_zip_status_all']    = 'Todos';
$lang['client_zip_payment_modes'] = 'Pago realizado por';
$lang['client_zip_no_data_found'] = 'No %s encontrado';

# Payments
$lang['payment_mode']         = 'Modo de pago';
$lang['payment_view_heading'] = 'Pago';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Permitir al cliente modificar la cantidad a pagar (para pagos en línea)';
$lang['settings_survey_send_emails_per_cron_run']                   = '¿Cuántos correos electrónicos se envían por hora?';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Esta opción se utiliza al enviar encuestas. El sistema de la encuesta enviará X correos electrónicos por hora. Algunos proveedores de alojamiento tienen límite para enviar correos electrónicos por hora.';
$lang['settings_delete_only_on_last_invoice']                       = 'Borrar factura permitida solo en la ultima factura';
$lang['settings_sales_estimate_prefix']                             = 'Prefijo de número de presupuesto';
$lang['settings_sales_next_estimate_number']                        = 'Próximo número de presupuesto';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Establezca este campo en 1 si desea comenzar desde el principio';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Número de Presupuesto de decremento en eliminar';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = '¿Desea disminuir el número de presupuesto cuando se elimina el último presupuesto? Ej. Si se configura esta opción en SÍ y antes de eliminar el presupuesto, el próximo número de presupuesto es 15, el próximo presupuesto se reducirá a 14.Si se establece en NO, el número permanecerá en 15. Si ha configurado la eliminación solo en el último presupuesto a NO, debe establecer esta opción en NO también para mantener el siguiente número de presupuesto no disminuido.';
$lang['settings_sales_estimate_number_format']                      = 'Formato del número de presupuesto';
$lang['settings_sales_estimate_number_format_year_based']           = 'Basado en el año';
$lang['settings_sales_estimate_number_format_number_based']         = 'Basado en número (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Eliminar presupuesto permitido solo en la última factura';
$lang['settings_send_test_email_heading']                           = 'Enviar email de prueba';
$lang['settings_send_test_email_subheading']                        = 'Envía un email de prueba para asegurarte de que la configuración de SMTP esté configurada correctamente.';
$lang['settings_send_test_email_string']                            = 'Dirección de correo electrónico';
$lang['settings_smtp_settings_heading']                             = 'SMTP Ajustes';
$lang['settings_smtp_settings_subheading']                          = 'Configurar email principal';
$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Factura';
$lang['settings_sales_heading_estimates']                           = 'Presupuestos';
$lang['settings_sales_cron_invoice_heading']                        = 'Factura';

# Tasks
$lang['tasks_dt_datestart'] = 'Fecha de inicio';

# Invoice General
$lang['invoice_discount'] = 'Descuento';

# Settings
$lang['settings_rtl_support_admin']                                   = 'Área de administración de RTL (de derecha a izquierda)';
$lang['settings_rtl_support_client']                                  = 'Área de clientes RTL (derecha a izquierda)';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Convertir automáticamente el presupuesto a factura después de que el cliente acepte';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Excluir presupuestos con estado de borrador del área de clientes';

# Months
$lang['January']   = 'Enero';
$lang['February']  = 'Febrero';
$lang['March']     = 'Marzo';
$lang['April']     = 'Abril';
$lang['May']       = 'Mayo';
$lang['June']      = 'Junio';
$lang['July']      = 'Julio';
$lang['August']    = 'Agosto';
$lang['September'] = 'Septiembre';
$lang['October']   = 'Octubre';
$lang['November']  = 'Noviembre';
$lang['December']  = 'Diciembre';

# Time ago function translate
$lang['time_ago_just_now']  = 'Justo ahora';
$lang['time_ago_minute']    = 'hace un minuto';
$lang['time_ago_minutes']   = 'hace %s minutos';
$lang['time_ago_hour']      = 'hace una hora';
$lang['time_ago_hours']     = 'hace %s horas';
$lang['time_ago_yesterday'] = 'ayer';
$lang['time_ago_days']      = 'hace %s días';
$lang['time_ago_week']      = 'Hace una semana';
$lang['time_ago_weeks']     = 'hace %s semanas';
$lang['time_ago_month']     = 'hace un mes';
$lang['time_ago_months']    = 'hace %s meses';
$lang['time_ago_year']      = 'hace un año';
$lang['time_ago_years']     = 'hace %s años';

# Estimates
$lang['estimates']                                = 'Presupuestos';
$lang['estimate']                                 = 'Presupuestar';
$lang['estimate_lowercase']                       = 'presupuestar';
$lang['create_new_estimate']                      = 'Crear nuevo presupuesto';
$lang['view_estimate']                            = 'Ver presupuesto';
$lang['estimate_sent_to_client_success']          = 'El presupuesto se envía con éxito al cliente.';
$lang['estimate_sent_to_client_fail']             = 'Problema al enviar el presupuesto';
$lang['estimate_view']                            = 'Ver Presupuesto';
$lang['estimate_select_customer']                 = 'Cliente';
$lang['estimate_add_edit_number']                 = 'Número de presupuesto';
$lang['estimate_add_edit_date']                   = 'Fecha estimada';
$lang['estimate_add_edit_expirydate']             = 'Fecha de caducidad';
$lang['estimate_add_edit_currency']               = 'Moneda';
$lang['estimate_add_edit_client_note']            = 'Nota del cliente';
$lang['estimate_add_edit_admin_note']             = 'Nota de administrador';
$lang['estimates_toggle_table_tooltip']           = 'Tabla';
$lang['estimate_add_edit_advanced_options']       = 'Opciones avanzadas';
$lang['estimate_to']                              = 'Cliente:';
$lang['estimates_list_all']                       = 'Todos';
$lang['estimate_invoiced_date']                   = 'Presupuesto facturado en %s';
$lang['edit_estimate_tooltip']                    = 'Editar presupuesto';
$lang['delete_estimate_tooltip']                  = 'Eliminar presupuesto';
$lang['estimate_sent_to_email_tooltip']           = 'Enviar al correo electrónico';
$lang['estimate_already_send_to_client_tooltip']  = 'Este presupuesto ya se ha enviado al cliente. %s';
$lang['estimate_view_activity_tooltip']           = 'Registro de actividades';
$lang['estimate_send_to_client_modal_heading']    = 'Enviar presupuesto al cliente';
$lang['estimate_send_to_client_attach_pdf']       = 'Adjuntar presupuesto PDF';
$lang['estimate_send_to_client_preview_template'] = 'Vista previa de la plantilla de correo electrónico';
$lang['estimate_dt_table_heading_number']         = 'Presupuesto #';
$lang['estimate_dt_table_heading_date']           = 'Fecha';
$lang['estimate_dt_table_heading_client']         = 'Cliente';
$lang['estimate_dt_table_heading_expirydate']     = 'Fecha de caducidad';
$lang['estimate_dt_table_heading_amount']         = 'Cantidad';
$lang['estimate_dt_table_heading_status']         = 'Estado';
$lang['estimate_convert_to_invoice']              = 'Convertir a factura';

# Clients
$lang['client_payments_tab'] = 'Pagos';

# Estimate General
$lang['estimate_pdf_heading']            = ' ';
$lang['estimate_table_item_heading']     = 'Producto';
$lang['estimate_table_quantity_heading'] = 'Cantidad';
$lang['estimate_table_rate_heading']     = 'Precio';
$lang['estimate_table_tax_heading']      = 'Impuesto';
$lang['estimate_table_amount_heading']   = 'Cantidad';
$lang['estimate_subtotal']               = 'Sub Total';
$lang['estimate_adjustment']             = 'Ajuste';
$lang['estimate_discount']               = 'Descuento';
$lang['estimate_total']                  = 'Total';
$lang['estimate_to']                     = ' ';
$lang['estimate_data_date']              = 'Fecha estimada';
$lang['estimate_data_expiry_date']       = 'Fecha de caducidad';
$lang['estimate_note']                   = 'Nota:';
$lang['estimate_status_draft']           = 'Borrador';
$lang['estimate_status_sent']            = 'Enviado';
$lang['estimate_status_declined']        = 'Rechazado';
$lang['estimate_status_accepted']        = 'Aceptado';
$lang['estimate_status_expired']         = 'Expirado';
$lang['estimate_note']                   = 'Nota:';

## Clients
$lang['clients_estimate_dt_number']             = 'Presupuesto #';
$lang['clients_estimate_dt_date']               = 'Fecha';
$lang['clients_estimate_dt_duedate']            = 'Fecha de caducidad';
$lang['clients_estimate_dt_amount']             = 'Cantidad';
$lang['clients_estimate_dt_status']             = 'Estado';
$lang['clients_nav_estimates']                  = 'Presupuestos';
$lang['clients_decline_estimate']               = 'Rechazar';
$lang['clients_accept_estimate']                = 'Aceptar';
$lang['clients_my_estimates']                   = 'Presupuestos';
$lang['clients_estimate_invoiced_successfully'] = 'Gracias por aceptar el presupuesto. Por favor revise la factura creada para el presupuesto';
$lang['clients_estimate_accepted_not_invoiced'] = 'Gracias por aceptar este presupuesto';
$lang['clients_estimate_declined']              = 'Presupuesto rechazado. Puede aceptar el presupuesto en cualquier momento antes de la fecha de caducidad.';
$lang['clients_estimate_failed_action']         = 'No se pudo tomar acción en este presupuesto';
$lang['client_add_edit_profile']                = 'Perfil';

# Custom Fields
$lang['custom_field']                          = 'Campo personalizado';
$lang['custom_field_lowercase']                = 'campo personalizado';
$lang['custom_fields']                         = 'Campos Personalizados';
$lang['new_custom_field']                      = 'Nuevo campo personalizado';
$lang['custom_field_name']                     = 'Nombre del campo';
$lang['custom_field_add_edit_type']            = 'Tipo';
$lang['custom_field_add_edit_belongs_top']     = 'Campo pertenece a';
$lang['custom_field_add_edit_options']         = 'Opciones';
$lang['custom_field_add_edit_options_tooltip'] = 'Sólo se utiliza para seleccionar, tipos de casilla de verificación. Rellene el campo separando las opciones por coma.';
$lang['custom_field_add_edit_order']           = 'Orden';
$lang['custom_field_dt_field_to']              = 'Pertenece a';
$lang['custom_field_dt_field_name']            = 'Nombre';
$lang['custom_field_dt_field_type']            = 'Tipo';
$lang['custom_field_add_edit_active']          = 'Activo';
$lang['custom_field_add_edit_disabled']        = 'Desactivado';

# Ticket replies
$lang['ticket_reply'] = 'Respuesta de Aviso';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Campos Personalizados';

# Contracts
$lang['contract_types']           = 'Tipos de proveedores';
$lang['contract_type']            = 'Tipo de proveedor';
$lang['new_contract_type']        = 'Nuevo tipo de proveedor';
$lang['contract_type_lowercase']  = 'proveedor';
$lang['contract_type_name']       = 'Nombre';
$lang['contract_types_list_name'] = 'Tipo de Proveedor';

# Customizer Menu
$lang['acs_contracts']      = 'Proveedores';
$lang['acs_contract_types'] = 'Tipos de proveedor';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description'] = 'Descripción larga';

# Customers
$lang['clients_list_phone']                = 'Teléfono';
$lang['client_expenses_tab']               = 'Gastos';
$lang['customers_summary']                 = 'Resumen de clientes';
$lang['customers_summary_active']          = 'Contactos activos';
$lang['customers_summary_inactive']        = 'Contactos inactivos';
$lang['customers_summary_logged_in_today'] = 'Nuevos';

# Authentication
$lang['admin_auth_forgot_password_email']     = 'Email';
$lang['admin_auth_forgot_password_heading']   = 'Se te olvidó tu contraseña';
$lang['admin_auth_login_heading']             = 'Iniciar sesión';
$lang['admin_auth_login_email']               = 'Email';
$lang['admin_auth_login_password']            = 'Contraseña';
$lang['admin_auth_login_remember_me']         = 'Recordarme';
$lang['admin_auth_login_button']              = 'Iniciar sesión';
$lang['admin_auth_login_fp']                  = '¿Se te olvidó tu contraseña?';
$lang['admin_auth_reset_password_heading']    = 'Restablecer la contraseña';
$lang['admin_auth_reset_password']            = 'Contraseña';
$lang['admin_auth_reset_password_repeat']     = 'Repite la contraseña';
$lang['admin_auth_invalid_email_or_password'] = 'Correo electrónico o contraseña no válidos';
$lang['admin_auth_inactive_account']          = 'Cuenta inactiva';

# Calender
$lang['calendar_estimate']          = 'Presupuesto';
$lang['calendar_invoice']           = 'Factura';
$lang['calendar_contract']          = 'Proveedor';
$lang['calendar_customer_reminder'] = 'Recordatorio del cliente';
$lang['calendar_event']             = 'Evento';
$lang['calendar_task']              = 'Orden';

# Leads
$lang['lead_edit_delete_tooltip'] = 'Eliminar equipo';
$lang['lead_attachments']         = 'Archivos adjuntos';

# Admin Customizer Sidebar
$lang['acs_finance'] = 'Contable';

# Settings
$lang['settings_show_sale_agent_on_invoices']       = 'Mostrar agente de ventas en factura';
$lang['settings_show_sale_agent_on_estimates']      = 'Mostrar agente de ventas en presupuesto';
$lang['settings_predefined_predefined_term']        = 'Términos y condiciones predefinidos';
$lang['settings_predefined_clientnote']             = 'Nota de cliente predefinida';
$lang['settings_custom_pdf_logo_image_url']         = 'URL del logo, para personalizar PDF';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Probablemente tendrá problemas con las imágenes PNG con transparencia que se manejan de manera diferente según la versión de php-imagick o php-gd utilizada. Intente actualizar php-imagick y deshabilitar php-gd
. Si deja este campo en blanco, se utilizará el logotipo cargado.';

# General
$lang['sale_agent_string']               = 'Agente de venta';
$lang['amount_display_in_base_currency'] = 'El monto se muestra en su moneda base: solo use este informe si está usando 1 moneda para pagos y gastos.';
# Leads
$lang['leads_summary'] = 'Resumen de equipos';

# Contracts
$lang['contract_value']                       = 'Puntos del proveedor';
$lang['contract_trash']                       = 'Papelera';
$lang['contracts_view_trash']                 = 'Ver Papelera';
$lang['contracts_view_all']                   = 'Todos';
$lang['contracts_view_exclude_trashed']       = 'Excluir los proveedores de la papelera';
$lang['contract_value_tooltip']               = 'Se utilizará la moneda base.';
$lang['contract_trash_tooltip']               = 'Si agrega el proveedor a la papelera, no se mostrará en el lado del cliente, no se incluirá en el gráfico y otras estadísticas y, de forma predeterminada, no se mostrará cuando se enumeren todos los Proveedores.';
$lang['contract_summary_active']              = 'Activo';
$lang['contract_renew_heading']               = 'Renovar proveedor';
$lang['contract_summary_heading']             = 'Resumen del proveedor';
$lang['contract_summary_expired']             = 'Vencido';
$lang['contract_summary_about_to_expire']     = 'A punto de expirar';
$lang['contract_summary_recently_added']      = 'Recientemente agregado';
$lang['contract_summary_trash']               = 'Papelera';
$lang['contract_summary_by_type']             = 'Proveedores por tipo';
$lang['contract_summary_by_type_value']       = 'Puntos por categoría';
$lang['contract_renewed_successfully']        = 'Proveedor renovado con éxito';
$lang['contract_renewed_fail']                = 'Problema al renovar el proveedor. Contactar administrador';
$lang['no_contract_renewals_found']           = 'No se encuentran renovaciones para este proveedor.';
$lang['no_contract_renewals_history_heading'] = 'Historial de renovación de proveedores';
$lang['contract_renewed_by']                  = 'Renovaste este proveedor %s ';
$lang['contract_renewal_deleted']             = 'Renovación eliminada exitosamente';
$lang['contract_renewal_delete_fail']         = 'Error al eliminar la renovación del proveedor. Contactar administrador';
$lang['contract_renewal_new_value']           = 'Nuevo valor de proveedor: %s';
$lang['contract_renewal_old_value']           = 'Valor del proveedor anterior: %s';
$lang['contract_renewal_new_start_date']      = 'Nueva fecha de inicio: %s';
$lang['contract_renewal_old_start_date']      = 'La fecha de inicio del proveedor anterior era: %s';
$lang['contract_renewal_new_end_date']        = 'Nueva fecha de finalización: %s';
$lang['contract_renewal_old_end_date']        = 'La fecha de finalización del proveedor anterior era: %s';
$lang['contract_attachment']                  = 'Archivo adjunto';

# Admin Aside Menu
$lang['als_goals_tracking']     = ' ';
$lang['als_expenses']           = 'Gastos';
$lang['als_reports_expenses']   = 'Gastos';
$lang['als_expenses_vs_income'] = 'Gastos vs Ingresos';

# Invoices
$lang['invoice_attach_file']           = 'Adjuntar archivo';
$lang['invoice_mark_as_sent']          = 'Enviado';
$lang['invoice_marked_as_sent']        = 'Factura marcada como enviada correctamente';
$lang['invoice_marked_as_sent_failed'] = 'Error al marcar la factura como enviada';

# Goals Tracking
$lang['goals']                                                          = 'Objetivos';
$lang['goal']                                                           = 'Objetivo';
$lang['goals_tracking']                                                 = ' ';
$lang['new_goal']                                                       = 'Nuevo Objetivo';
$lang['goal_lowercase']                                                 = 'objetivo';
$lang['goal_start_date']                                                = 'Fecha de inicio';
$lang['goal_end_date']                                                  = 'Fecha de finalización';
$lang['goal_subject']                                                   = 'Tema';
$lang['goal_description']                                               = 'Descripción';
$lang['goal_type']                                                      = 'Tipo de objetivo';
$lang['goal_achievement']                                               = 'Logro';
$lang['goal_contract_type']                                             = 'Tipo de proveedor';
$lang['goal_notify_when_fail']                                          = 'Notificar a los miembros del personal cuando si objetivo no se logró';
$lang['goal_notify_when_achieve']                                       = 'Notificar a los miembros del personal cuando el objetivo se alcance';
$lang['goal_progress']                                                  = 'Progreso';
$lang['goal_total']                                                     = 'Total: %s';
$lang['goal_result_heading']                                            = 'Progreso del objetivo';
$lang['goal_income_shown_in_base_currency']                             = 'El ingreso total se muestra en su moneda base';
$lang['goal_notify_when_end_date_arrives']                              = 'Se notificará a los miembros del personal cuando llegue la fecha de finalización (Requiere sistema).';
$lang['goal_staff_members_notified_about_achievement']                  = 'Los miembros del personal son notificados sobre el logro de este objetivo';
$lang['goal_staff_members_notified_about_failure']                      = 'Miembro del personal son notificados sobre el fallo.';
$lang['goal_notify_staff_manually']                                     = 'Notificar manualmente a los miembros del personal';
$lang['goal_notify_staff_notified_manually_success']                    = 'Los miembros del personal son notificados sobre este resultado del objetivo';
$lang['goal_notify_staff_notified_manually_fail']                       = 'Error al notificar a los miembros del personal sobre este resultado del objetivo';
$lang['goal_achieved']                                                  = 'Logrado';
$lang['goal_failed']                                                    = 'No se logro';
$lang['goal_close']                                                     = 'Muy cerca';
$lang['goal_type_total_income']                                         = 'Lograr el ingreso total';
$lang['goal_type_convert_leads']                                        = 'Convertir X Objetivos';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Tipos de equipos';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = ' ';
$lang['goal_type_increase_customers_with_leads_conversions']            = 'Cambio de estado de equipos';
$lang['goal_type_increase_customers_with_leads_conversions_subtext']    = ' ';
$lang['goal_type_make_contracts_by_type_calc_database']                 = 'Hacer Proveedores';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']         = ' ';
$lang['goal_type_make_contracts_by_type_calc_date']                     = 'Crear Proveedores';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']             = ' ';
$lang['goal_type_total_estimates_converted']                            = 'Conversión X Presupuestos ';
$lang['goal_type_total_estimates_converted_subtext']                    = ' ';
$lang['goal_type_income_subtext']                                       = ' ';

# Payments
$lang['payment_transaction_id'] = 'Transaction ID';

# Expenses
$lang['acs_expense_categories']                       = 'Categorías de gastos';
$lang['expense_category']                             = 'Categoría de gastos';
$lang['expense_category_lowercase']                   = 'categoría de gastos';
$lang['new_expense']                                  = 'Registrar gastos';
$lang['expense_add_edit_name']                        = 'Nombre de la categoría';
$lang['expense_add_edit_description']                 = 'Descripción de categoría';
$lang['expense_categories']                           = 'Categorías de gastos';
$lang['new_expense_category']                         = 'Nueva categoría';
$lang['dt_expense_description']                       = 'Descripción';
$lang['expense']                                      = 'Gasto';
$lang['expenses']                                     = 'Gastos';
$lang['expense_lowercase']                            = 'gasto';
$lang['expense_add_edit_customer']                    = 'Cliente';
$lang['expense_add_edit_note']                        = 'Nota';
$lang['expense_add_edit_date']                        = 'Fecha de gastos';
$lang['expense_add_edit_amount']                      = 'Cantidad';
$lang['expense_add_edit_billable']                    = 'Facturable';
$lang['expense_add_edit_attach_receipt']              = 'Adjuntar recibo';
$lang['expense_add_edit_reference_no']                = 'Referencia #';
$lang['expense_receipt']                              = 'Recibo de gastos';
$lang['expense_receipt_lowercase']                    = 'recibo de gastos';
$lang['expense_dt_table_heading_category']            = 'Categoría';
$lang['expense_dt_table_heading_amount']              = 'Cantidad';
$lang['expense_dt_table_heading_date']                = 'Fecha';
$lang['expense_dt_table_heading_reference_no']        = 'Referencia #';
$lang['expense_dt_table_heading_customer']            = 'Cliente';
$lang['expense_dt_table_heading_payment_mode']        = 'Modo de pago';
$lang['expense_converted_to_invoice']                 = 'Gastos convertidos exitosamente a factura';
$lang['expense_converted_to_invoice_fail']            = 'Error al convertir este gasto en el registro de errores de verificación de facturas.';
$lang['expense_copy_success']                         = 'El gasto se copia con éxito.';
$lang['expense_copy_fail']                            = 'Error al copiar el gasto. Por favor verifique los campos requeridos e intente nuevamente';
$lang['expenses_list_all']                            = 'Todos';
$lang['expenses_list_billable']                       = 'Facturable';
$lang['expenses_list_non_billable']                   = 'No facturable';
$lang['expenses_list_invoiced']                       = 'Facturado';
$lang['expenses_list_unbilled']                       = 'No facturado';
$lang['expenses_list_recurring']                      = 'Periódico';
$lang['expense_invoice_delete_not_allowed']           = 'No puedes borrar este gasto. El gasto ya está facturado.';
$lang['expense_convert_to_invoice']                   = 'Convertir a factura';
$lang['expense_edit']                                 = 'Editar Gasto';
$lang['expense_delete']                               = 'Borrar';
$lang['expense_copy']                                 = 'Copiar';
$lang['expense_invoice_not_created']                  = 'Factura no creada';
$lang['expense_billed']                               = 'Facturado';
$lang['expense_not_billed']                           = 'Factura no pagada';
$lang['expense_customer']                             = 'Cliente';
$lang['expense_note']                                 = 'Nota:';
$lang['expense_date']                                 = 'Fecha:';
$lang['expense_ref_noe']                              = 'Ref #:';
$lang['expense_amount']                               = 'Cantidad:';
$lang['expense_recurring_indicator']                  = 'Recurrente';
$lang['expense_already_invoiced']                     = 'Este gasto ya está facturado.';
$lang['expense_recurring_auto_create_invoice']        = 'Auto crear factura';
$lang['expense_recurring_send_custom_on_renew']       = 'Envíe la factura al correo electrónico del cliente cuando se vuelva a crear el gasto.';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'Si se marca esta opción, la factura del cliente se creará automáticamente cuando se renueve el gasto.';
$lang['expenses_yearly_by_categories']                = 'Gastos anuales por categorías';
$lang['total_expenses_for']                           = 'Gastos totales para'; // year
$lang['expenses_report_for']                          = 'Gastos para'; // year

# Custom fields
$lang['custom_field_required']    = 'Necesario';
$lang['custom_field_show_on_pdf'] = 'Mostrar en PDF';
$lang['custom_field_leads']       = 'Equipos';
$lang['custom_field_customers']   = 'Clientes';
$lang['custom_field_staff']       = 'Personal';
$lang['custom_field_contracts']   = 'Proveedores';
$lang['custom_field_tasks']       = 'Ordenes';
$lang['custom_field_expenses']    = 'Gastos';
$lang['custom_field_invoice']     = 'Factura';
$lang['custom_field_estimate']    = ' ';

# Tickets
$lang['ticket_single_private_staff_notes'] = 'Notas privadas del personal';

# Business News
$lang['business_news'] = 'Noticias de la empresa';

# Navigation
$lang['nav_todo_items'] = 'Pendientes';

# Contracts
$lang['clients_contracts_type'] = 'Tipo de proveedor';

# Version 1.0.5
# General
$lang['no_tax']                              = 'Sin impuestos';
$lang['numbers_not_formatted_while_editing'] = ' ';
# Contracts
$lang['contracts_view_expired']         = 'Expirada';
$lang['contracts_view_without_dateend'] = 'Proveedores sin fecha';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Proveedores';

# Invoices General
$lang['invoice_estimate_general_options'] = 'Opciones generales';
$lang['invoice_table_item_description']   = 'Descripción';
$lang['invoice_recurring_indicator']      = 'Recurrente';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Presupuesto convertido a factura exitosamente';
$lang['estimate_table_item_description']          = 'Descripción';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'No puedes borrar la moneda base. Debe asignar una nueva moneda base y luego realizar la eliminación.';
$lang['invoice_copy']              = 'Copiar factura';
$lang['invoice_copy_success']      = 'Factura copiada correctamente';
$lang['invoice_copy_fail']         = 'Error al copiar la factura';
$lang['invoice_due_after_help']    = 'Establecer cero para evitar el cálculo';
$lang['show_shipping_on_invoice']  = 'Mostrar detalles de envío en factura';

# Estimates
$lang['show_shipping_on_estimate']         = 'Mostrar detalles de envío en presupuesto';
$lang['is_invoiced_estimate_delete_error'] = 'Este presupuesto es facturado. No puedes borrar el presupuesto';

# Customers & Invoices / Estimates
$lang['ship_to']                            = 'Enviar a';
$lang['customer_profile_details']           = 'Detalles del cliente';
$lang['billing_shipping']                   = 'Facturación y envío';
$lang['billing_address']                    = 'Dirección de Envio';
$lang['shipping_address']                   = 'Dirección de Envío';
$lang['billing_street']                     = 'Calle';
$lang['billing_city']                       = 'Ciudad';
$lang['billing_state']                      = 'Provincia';
$lang['billing_zip']                        = 'Codigo postal';
$lang['billing_country']                    = 'País';
$lang['shipping_street']                    = 'Calle';
$lang['shipping_city']                      = 'Ciudad';
$lang['shipping_state']                     = 'Provincia';
$lang['shipping_zip']                       = 'Codigo postal';
$lang['shipping_country']                   = 'País';
$lang['get_shipping_from_customer_profile'] = 'Obtener detalles de envío del perfil del cliente';

# Customer
$lang['customer_default_currency']                             = 'Moneda predeterminada';
$lang['customer_update_address_info_on_invoices']              = 'Actualice la información de envío / facturación en todas las facturas / presupuestos anteriores';
$lang['customer_update_address_info_on_invoices_help']         = 'Si marca este campo, la información de envío y facturación se actualizará a todas las facturas y Presupuestos. Nota: Las facturas con estado pagado no se verán afectadas.';
$lang['setup_google_api_key_customer_map']                     = 'Configurar la clave de Google Api para ver el mapa del cliente';
$lang['customer_attachments_file']                             = 'Archivo';
$lang['client_send_set_password_email']                        = 'Enviar email de contraseña SET';
$lang['customer_billing_same_as_profile']                      = 'Igual que la información del cliente';
$lang['customer_billing_copy']                                 = 'Copiar dirección de facturación';
$lang['customer_map']                                          = 'Mapa';
$lang['set_password_email_sent_to_client']                     = 'Correo electrónico para establecer la contraseña se envía con éxito al contacto';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Perfil actualizado y correo electrónico para establecer la contraseña se envía con éxito al contacto';
$lang['customer_attachments']                                  = 'Archivos';
$lang['customer_longitude']                                    = 'Longitud (Google Maps)';
$lang['customer_latitude']                                     = 'Latitud (Google Maps)';

# Authentication
$lang['admin_auth_set_password']         = 'Contraseña';
$lang['admin_auth_set_password_repeat']  = 'Repite la contraseña';
$lang['admin_auth_set_password_heading'] = 'Configurar la contraseña';

# General
$lang['apply']                         = 'Aplicar';
$lang['department_calendar_id']        = 'ID';
$lang['localization_default_language'] = 'Idioma predeterminado';
$lang['system_default_string']         = 'Sistema por defecto';
$lang['advanced_options']              = 'Opciones avanzadas';

# Expenses
$lang['expense_list_invoice']  = 'Factura';
$lang['expense_list_billed']   = 'Facturado';
$lang['expense_list_unbilled'] = 'No facturado';

# Leads
$lang['lead_merge_custom_field']          = 'Fusionar como campo personalizado';
$lang['lead_merge_custom_field_existing'] = 'Fusionar con el campo de la base de datos';
$lang['lead_dont_merge_custom_field']     = 'No fusionar';
$lang['lost_leads']                       = 'Equipos con fallas';
$lang['junk_leads']                       = 'Equipos borrados';
$lang['lead_mark_as_lost']                = 'Indicar fallas';
$lang['lead_unmark_as_lost']              = 'Quitar fallas';
$lang['lead_marked_as_lost']              = 'Equipo fallando';
$lang['lead_unmarked_as_lost']            = 'Equipo funcionando';
$lang['leads_status_color']               = 'Color';
$lang['lead_mark_as_junk']                = 'Marcar como inactivo';
$lang['lead_unmark_as_junk']              = 'Marcar como activo';
$lang['lead_marked_as_junk']              = 'Marcado como borrado';
$lang['lead_unmarked_as_junk']            = 'Desmarcado como borrado';
$lang['lead_not_found']                   = 'Equipo no encontrado';
$lang['lead_lost']                        = 'Con fallas';
$lang['lead_junk']                        = 'INACTIVO';
$lang['leads_not_assigned']               = 'No asignado';

# Contacts
$lang['contract_not_visible_to_client'] = 'Ocultar del cliente';
$lang['contract_edit_overview']         = 'Resumen del proveedor';
$lang['contract_attachments']           = 'Archivos adjuntos';

# Tasks
$lang['task_view_make_public']     = 'Hacer público';
$lang['task_is_private']           = 'Orden privada';
$lang['task_finished']             = 'Terminado';
$lang['task_single_related']       = 'Relacionado';
$lang['task_unmark_as_complete']   = 'Abrir de nuevo';
$lang['task_unmarked_as_complete'] = 'Orden sin marcar';
$lang['task_relation']             = 'Relacionado';
$lang['task_public']               = 'Visible para todo el personal';
$lang['task_public_help']          = 'Si acepta la OT estará visible para todos los miembros del personal. De lo contrario, solo será visible para los miembros asignados, seguidores, creadores o administradores.';

# Settings
$lang['settings_general_favicon']                                            = 'Icono';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Imprima documentos PDF del cliente desde el área de administración en el idioma del cliente';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Si esta opción está configurada en SI y ej. el idioma predeterminado del sistema es el español y el cliente tiene el idioma de configuración en Ingles; los documentos pdf se emitirán en el idioma del cliente';
$lang['settings_cron_surveys']                                               = 'Encuestas';
$lang['settings_default_tax']                                                = 'Impuesto por Defecto';
$lang['setup_calendar_by_departments']                                       = 'Configurar calendario por sectores';
$lang['settings_calendar']                                                   = 'Calendario';
$lang['settings_sales_invoice_due_after']                                    = 'Factura con vencimiento después de (días)';
$lang['settings_google_api']                                                 = 'Clave API de Google';
$lang['settings_gcal_main_calendar_id']                                      = 'ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Este es el calendario principal de la empresa. Se mostrarán todos los eventos de este calendario. Si desea especificar un calendario según los sectores, puede agregarlo en el ID del sector.';
$lang['show_on_calendar']                                                    = 'Mostrar en el calendario';
$lang['show_invoices_on_calendar']                                           = 'Facturas';
$lang['show_estimates_on_calendar']                                          = 'Presupuestos';
$lang['show_contracts_on_calendar']                                          = 'Proveedores';
$lang['show_tasks_on_calendar']                                              = 'Ordenes';
$lang['show_customer_reminders_on_calendar']                                 = 'Recordatorios del cliente';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copiar campos personalizados al perfil del cliente';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Si alguno de los siguientes campos personalizados no existe para el cliente, se creará automáticamente con el mismo nombre, de lo contrario, solo se copiará el valor del perfil principal.';
$lang['lead_profile']                                                = 'Datos';
$lang['lead_is_client']                                              = 'Equipo';
$lang['leads_email_integration_folder_no_encryption']                = 'Sin cifrar';
$lang['leads_email_integration']                                     = 'Integración de email';
$lang['leads_email_active']                                          = 'Activo';
$lang['leads_email_integration_imap']                                = 'IMAP Servidor';
$lang['leads_email_integration_email']                               = 'Email (Iniciar sesión)';
$lang['leads_email_integration_password']                            = 'Contraseña';
$lang['leads_email_integration_default_source']                      = 'Tipo';
$lang['leads_email_integration_check_every']                         = 'Comprobar cada (minutos)';
$lang['leads_email_integration_default_assigned']                    = 'Responsable de la nueva ventaja.';
$lang['leads_email_encryption']                                      = 'Cifrado';
$lang['leads_email_integration_updated']                             = 'Integración email actualizada';
$lang['leads_email_integration_default_status']                      = 'Estado predeterminado';
$lang['leads_email_integration_folder']                              = 'Carpeta';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notificar cuando el cliente sea importado';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Sólo revisar email no abiertos';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'El script configurará automáticamente el correo electrónico para que se abra después de la verificación. Esto se utiliza para evitar la comprobación de todos los correos electrónicos una y otra vez. No se recomienda desmarcar esta opción si tiene muchos correos electrónicos y ha configurado mucho el reenvío al correo electrónico que ha configurado para los clientes potenciales.';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notificar si se envía un correos varias veces por un equipo';
$lang['leads_email_integration_test_connection']                     = 'Probar la conexión IMAP';
$lang['lead_email_connection_ok']                                    = 'La conexión IMAP es buena';
$lang['lead_email_connection_not_ok']                                = 'La conexión IMAP no está bien';
$lang['lead_email_activity']                                         = 'Actividad de correo electrónico';
$lang['leads_email_integration_notify_roles']                        = 'Funciones a notificar';
$lang['leads_email_integration_notify_staff']                        = 'Notificar amiembros del personal';
$lang['lead_public']                                                 = 'Visible para todo el personal';

# Knowledge Base
$lang['kb_group_color'] = 'Color';
$lang['kb_group_order'] = 'Orden';

# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Exportación de PDF';
$lang['bulk_export_pdf_payments']      = 'Pagos';
$lang['bulk_export_pdf_estimates']     = 'Presupuestos';
$lang['bulk_export_pdf_invoices']      = 'Facturas';
$lang['bulk_pdf_export_button']        = 'Exportar';
$lang['bulk_pdf_export_select_type']   = 'Seleccione tipo';
$lang['no_data_found_bulk_pdf_export'] = 'No se han encontrado datos para exportar';
$lang['bulk_export_status_all']        = 'Todos';
$lang['bulk_export_status']            = 'Estado';
$lang['bulk_export_zip_payment_modes'] = 'Pagos hechos por';
$lang['bulk_export_include_tag']       = 'Incluir etiqueta';
$lang['bulk_export_include_tag_help']  = 'Ej. Original o Copia. La etiqueta se imprimirá en el PDF. Recomendado para usar sólo 1 etiqueta';

## Clients area
$lang['auto_backup_options_updated']     = 'Opciones de copia de seguridad automática actualizadas';
$lang['auto_backup_every']               = 'Crea copias de seguridad cada X días';
$lang['auto_backup_enabled']             = 'Habilitado (requiere sistema)';
$lang['auto_backup']                     = 'Copia de seguridad automática';
$lang['backup_delete']                   = 'Copia de seguridad eliminada';
$lang['backup_success']                  = 'Copia de seguridad se realiza con éxito';
$lang['utility_backup']                  = 'Copia de seguridad de la base de datos';
$lang['utility_create_new_backup_db']    = 'Crear una copia de seguridad de la base de datos';
$lang['utility_backup_table_backupname'] = 'Avisos';
$lang['utility_backup_table_backupsize'] = 'Tamaño de copia de seguridad';
$lang['utility_backup_table_backupdate'] = 'Fecha';
$lang['utility_db_backup_note']          = ' ';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Remitos';
$lang['clients_nav_support']   = 'Avisos';

# General
$lang['more']            = 'Más';
$lang['add_item']        = 'Añadir producto';
$lang['goto_admin_area'] = 'Ir al área de administración';
$lang['delete']          = 'Borrar %s';
$lang['welcome_top']     = 'Usuario: %s';

# Customers
$lang['customer_permissions']         = 'Permisos';
$lang['customer_permission_invoice']  = 'Facturas';
$lang['customer_permission_estimate'] = 'Presupuestos';
$lang['customer_permission_proposal'] = 'Remitos';
$lang['customer_permission_contract'] = 'Proveedores';
$lang['customer_permission_support']  = 'Avisos';

#Tasks
$lang['task_related_to'] = 'Relacionado con';

# Send file
$lang['custom_file_fail_send']    = 'Error al enviar el archivo';
$lang['custom_file_success_send'] = 'El archivo se envío con éxito a %s';
$lang['send_file_subject']        = 'Asunto del email';
$lang['send_file_email']          = 'Email';
$lang['send_file_message']        = 'Mensaje';
$lang['send_file']                = 'Enviar archivo';
$lang['add_checklist_item']       = 'Elementos de la lista de verificación';
$lang['task_checklist_items']     = 'Elementos de la lista de verificación';

# Import
$lang['default_pass_clients_import'] = 'Contraseña predeterminada para todos los contactos';
$lang['simulate_import']             = 'Simular importación';
$lang['import_upload_failed']        = 'Error al subir';
$lang['import_total_imported']       = 'Total importado: %s';
$lang['import_leads']                = 'Importar equipos';
$lang['import_customers']            = 'Importar clientes';
$lang['choose_csv_file']             = 'Elegir archivo CSV';
$lang['import']                      = 'Importar';
$lang['lead_import_status']          = 'Estado';
$lang['lead_import_source']          = 'Tipo';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Remitos';

# Invoices
$lang['delete_invoice'] = 'Borrar';
$lang['items']          = 'Productos';
$lang['support']        = 'Avisos';
$lang['new_ticket']     = 'Nuevo Aviso';

# Reminders
$lang['calendar_lead_reminder']  = 'Recordatorio de equipo';
$lang['lead_set_reminder_title'] = 'Añadir recordatorio de equipo';
$lang['set_reminder_tooltip']    = 'Esta opción le permite nunca olvidar nada de sus clientes.';
$lang['client_reminders_tab']    = 'Recordatorios';
$lang['leads_reminders_tab']     = 'Recordatorios';

# Tickets
$lang['delete_ticket_reply']  = 'Eliminar respuesta';
$lang['ticket_priority_edit'] = 'Editar prioridad';
$lang['ticket_priority_add']  = 'Añadir prioridad';
$lang['ticket_status_edit']   = 'Editar estado del Aviso';
$lang['ticket_service_edit']  = 'Editar categorías de Avisos';
$lang['edit_department']      = 'Editar sector';

# Expenses
$lang['edit_expense_category'] = 'Editar categoría de gastos';

# Settings
$lang['customer_default_country']                                 = 'País predeterminado';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Requiere que el cliente esté conectado para ver el presupuesto';
$lang['set_reminder']                                             = 'Establecer recordatorio';
$lang['set_reminder_date']                                        = 'Fecha para ser notificado';
$lang['reminder_description']                                     = 'Descripción del lugar';
$lang['reminder_notify_me_by_email']                              = 'Enviar también un correo electrónico para este recordatorio';
$lang['reminder_added_successfully']                              = 'Recordatorio añadido con éxito. Se le notificará a tiempo.';
$lang['reminder_description']                                     = 'Descripción';
$lang['reminder_date']                                            = 'Fecha';
$lang['reminder_staff']                                           = 'Recordatorio';
$lang['reminder_is_notified']                                     = 'Quieres ser notificado?';
$lang['reminder_is_notified_boolean_no']                          = 'No';
$lang['reminder_is_notified_boolean_yes']                         = 'Sí';
$lang['reminder_set_to']                                          = 'Establecer recordatorio para';
$lang['reminder_deleted']                                         = 'Recordatorio eliminado con éxito';
$lang['reminder_failed_to_delete']                                = 'Error al eliminar el recordatorio';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Mostrar factura / estado de presupuesto en PDF';
$lang['email_piping_default_priority']                            = 'Prioridad predeterminada en el Aviso';
$lang['show_lead_reminders_on_calendar']                          = 'Recordatorios de equipos';
$lang['tickets_piping']                                           = 'Email';
$lang['email_piping_only_replies']                                = 'Sólo respuestas permitidas por correo electrónico';
$lang['email_piping_only_registered']                             = 'Solo en usuarios registrados';

# Estimates
$lang['view_estimate_as_client']         = 'Ver presupuesto como cliente';
$lang['estimate_mark_as']                = ' %s';
$lang['estimate_status_changed_success'] = 'Estado del presupuesto cambiado';
$lang['estimate_status_changed_fail']    = 'Error al cambiar el estado del presupuesto';

# Proposals
$lang['proposal_to']                            = 'Nombre de empresa';
$lang['proposal_date']                          = 'Fecha';
$lang['proposal_address']                       = 'Dirección';
$lang['proposal_phone']                         = 'Teléfono';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Fecha de creación';
$lang['proposal_open_till']                     = 'Abierto hasta';
$lang['proposal_status_open']                   = 'Abierto';
$lang['proposal_status_accepted']               = 'Aceptado';
$lang['proposal_status_declined']               = 'Rechazado';
$lang['proposal_status_sent']                   = 'Enviado';
$lang['proposal_expired']                       = 'Remito';
$lang['proposal_subject']                       = 'Remito';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Estado';
$lang['proposals_list_all']                     = 'Todos';
$lang['proposals_leads_related']                = 'Equipos relacionados';
$lang['proposals_customers_related']            = 'Clientes relacionados';
$lang['proposal_related']                       = 'Relacionado';
$lang['proposal_for_lead']                      = 'Equipo';
$lang['proposal_for_customer']                  = 'Cliente';
$lang['proposal']                               = 'Remito';
$lang['proposal_lowercase']                     = 'remito';
$lang['proposals']                              = 'Remitos';
$lang['proposals_lowercase']                    = 'Remitos';
$lang['new_proposal']                           = 'Nuevo remito';
$lang['proposal_currency']                      = 'Moneda';
$lang['proposal_allow_comments']                = 'Permitir comentarios';
$lang['proposal_allow_comments_help']           = 'Si marca esta opción, se permitirán comentarios cuando su cliente vea el remito.';
$lang['proposal_edit']                          = 'Editar';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Enviar al email';
$lang['proposal_send_to_email_title']           = 'Enviar remito al correo electrónico';
$lang['proposal_attach_pdf']                    = 'Adjuntar PDF';
$lang['proposal_preview_template']              = 'Vista previa';
$lang['proposal_view']                          = 'Ver Remito';
$lang['proposal_copy']                          = 'Copiar';
$lang['proposal_delete']                        = 'Borrar';
$lang['proposal_to']                            = 'Cliente:';
$lang['proposal_add_comment']                   = 'Agregar comentario';
$lang['proposal_sent_to_email_success']         = 'Remito enviado al email correctamente';
$lang['proposal_sent_to_email_fail']            = 'Error al enviar el remito al correo electrónico.';
$lang['proposal_copy_fail']                     = 'No se pudo copiar el remito';
$lang['proposal_copy_success']                  = 'Remito copiado exitosamente';
$lang['proposal_status_changed_success']        = 'El estado del remito cambió con éxito';
$lang['proposal_status_changed_fail']           = 'Error al cambiar el estado del remito';
$lang['proposal_assigned']                      = 'Asignado';
$lang['proposal_comments']                      = 'Comentarios';
$lang['proposal_convert']                       = 'Convertir';
$lang['proposal_convert_estimate']              = 'Presupuesto';
$lang['proposal_convert_invoice']               = 'Factura';
$lang['proposal_convert_to_estimate']           = 'Convertir a presupuesto';
$lang['proposal_convert_to_invoice']            = 'Convertir a factura';
$lang['proposal_convert_to_lead_disabled_help'] = 'Necesitas convertir el equipo %s';
$lang['proposal_convert_not_related_help']      = 'El remito debe estar relacionado con el cliente para poder convertir. %s';
$lang['proposal_converted_to_estimate_success'] = 'Remito convertido con éxito.';
$lang['proposal_converted_to_invoice_success']  = 'Remito convertido exitosamente.';
$lang['proposal_converted_to_estimate_fail']    = 'Error al convertir el remito';
$lang['proposal_converted_to_invoice_fail']     = 'Error al convertir el remito';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Aceptar';
$lang['proposal_decline_info'] = 'Rechazar';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Reiniciar';
$lang['customer_reset_password_heading']  = 'Restablecer su contraseña';
$lang['customer_forgot_password_heading'] = 'Se te olvidó tu contraseña';
$lang['customer_forgot_password']         = '¿Se te olvidó tu contraseña?';
$lang['customer_reset_password']          = 'Contraseña';
$lang['customer_reset_password_repeat']   = 'Repite la contraseña';
$lang['customer_forgot_password_email']   = 'Email';
$lang['customer_forgot_password_submit']  = 'Enviar';
$lang['customer_ticket_subject']          = 'Tema';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Remitos';

# Tasks
$lang['add_task_attachments']  = 'Adjunto archivo';
$lang['task_view_attachments'] = 'Archivos adjuntos';
$lang['task_view_description'] = 'Descripción';

# Customer Groups
$lang['customer_group_add_heading']      = 'Agregar nuevo grupo de clientes';
$lang['customer_group_edit_heading']     = 'Editar grupo de clientes';
$lang['new_customer_group']              = 'Nuevo grupo de clientes';
$lang['customer_group_name']             = 'Nombre';
$lang['customer_groups']                 = 'Grupos';
$lang['customer_group']                  = 'Grupo de clientes';
$lang['customer_group_lowercase']        = 'grupo de clientes';
$lang['customer_have_invoices_by']       = ' %s';
$lang['customer_have_estimates_by']      = ' %s';
$lang['customer_have_contracts_by_type'] = 'Tener proveedores por tipo %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Ver en la tabla';
$lang['custom_field_show_on_client_portal']      = 'Mostrar en el portal del cliente';
$lang['custom_field_show_on_client_portal_help'] = 'Si este campo está marcado también se mostrará en tablas.';
$lang['custom_field_visibility']                 = 'Visibilidad';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'Usted puede agregar aquí otros idiomas.';
$lang['utilities_menu_icon']                = 'Icono';
$lang['active_menu_items']                  = 'Elementos del menú activo';
$lang['inactive_menu_items']                = 'Elementos de menú inactivos';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Nombre';
$lang['utilities_menu_save']                = 'Guardar menú';

# Knowledge Base
$lang['view_articles_list']     = 'Ver artículos';
$lang['view_articles_list_all'] = 'Todos los artículos';
$lang['als_all_articles']       = 'Artículos';
$lang['als_kb_groups']          = 'Grupos';

# Customizer Menu
$lang['menu_builder']            = 'Configuración del menú';
$lang['main_menu']               = 'Menú principal';
$lang['setup_menu']              = 'Configuración del menú';
$lang['utilities_menu_url_help'] = '%s se adjunta automáticamente a la url';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Filtros de Spam';
$lang['spam_filter']                  = 'Filtro de spam';
$lang['new_spam_filter']              = 'Nuevo filtro de spam';
$lang['spam_filter_blocked_senders']  = 'Remitentes bloqueados';
$lang['spam_filter_blocked_subjects'] = 'Temas bloqueados';
$lang['spam_filter_blocked_phrases']  = 'Frases bloqueadas';
$lang['spam_filter_content']          = 'Contenido';
$lang['spamfilter_edit_heading']      = 'Editar filtro de spam';
$lang['spamfilter_add_heading']       = 'Añadir filtro de spam';
$lang['spamfilter_type']              = 'Tipo';
$lang['spamfilter_type_subject']      = 'Tema';
$lang['spamfilter_type_sender']       = 'Remitente';
$lang['spamfilter_type_phrase']       = 'Frase';

# Tickets
$lang['block_sender']                = 'Bloquear remitente';
$lang['sender_blocked']              = 'Remitente bloqueado';
$lang['sender_blocked_successfully'] = 'Remitente bloqueado exitosamente';
$lang['ticket_date_created']         = 'Creado';

#KB
$lang['edit_kb_group'] = 'Editar grupo';

# Leads
$lang['edit_source'] = 'Editar tipo';
$lang['edit_status'] = 'Editar estado';

# Contacts
$lang['contract_type_edit'] = 'Editar tipo de proveedor';

# Reports
$lang['report_by_customer_groups'] = 'Valor total por grupos de clientes';

#Utilities
$lang['ticket_pipe_log']      = 'Registro de Avisos';
$lang['ticket_pipe_name']     = 'De';
$lang['ticket_pipe_email_to'] = 'A';
$lang['ticket_pipe_email']    = 'Desde el e-mail';
$lang['ticket_pipe_subject']  = 'Tema';
$lang['ticket_pipe_message']  = 'Mensaje';
$lang['ticket_pipe_date']     = 'Fecha';
$lang['ticket_pipe_status']   = 'Estado';

# Home
$lang['home_latest_activity']   = 'Última actividad';
$lang['home_my_tasks']          = 'Mis ordenes';
$lang['home_latest_activity']   = 'Última actividad';
$lang['home_my_todo_items']     = 'Notas (privadas)';
$lang['home_widget_view_all']   = 'Ver todo';
$lang['home_stats_full_report'] = 'Reporte completo';

# Validation
$lang['form_validation_required']    = 'Ingrese su {field}.';
$lang['form_validation_valid_email'] = 'Los {field} El campo debe contener una dirección de email válida.';
$lang['form_validation_matches']     = 'Los {field} no coincide con el {param} campo.';
$lang['form_validation_is_unique']   = 'Los {field} El campo debe contener un valor único.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event']                                    = 'Calendario de eventos de hoy - %s ...';
$lang['not_event_public']                             = 'Evento público comienza hoy - %s ...';
$lang['not_contract_expiry_reminder']                 = 'Recordatorio de expiración del proveedor - %s ...';
$lang['not_recurring_expense_cron_activity_heading']  = 'Gastos recurrentes';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Facturas recurrentes';
$lang['not_recurring_total_renewed']                  = 'Total Renovado: %s';
$lang['not_recurring_expenses_action_taken_from']     = 'Acción tomada de gastos recurrentes';
$lang['not_invoice_created']                          = 'Factura creada:';
$lang['not_invoice_renewed']                          = 'Factura renovada:';
$lang['not_expense_renewed']                          = 'Gastos renovados:';
$lang['not_invoice_sent_to_customer']                 = 'Factura enviada al cliente: %s';
$lang['not_invoice_sent_yes']                         = 'Sí';
$lang['not_invoice_sent_not']                         = 'No';
$lang['not_action_taken_from_recurring_invoice']      = 'Acción tomada de factura recurrente:';
$lang['not_new_reminder_for']                         = 'Nuevo recordatorio para %s';
$lang['not_received_one_or_more_messages_lead']       = 'Recibió un email asociado con un equipo';
$lang['not_received_lead_imported_email_integration'] = 'Importado desde la integración de email';
$lang['not_lead_imported_attachment']                 = 'Archivo adjunto importado de email';
$lang['not_estimate_status_change']                   = 'Archivo adjunto importado de email';
$lang['not_estimate_status_updated']                  = 'Estado de presupuesto actualizado: desde: %s a %s';
$lang['not_goal_message_success']                     = '¡Felicidades! Logramos un nuevo objetivo.<br /> Tipo de objetivo: %s
<br />Logro de objetivos: %s
<br />Objetivos en  total: %s
<br />Fecha de inicio: %s
<br />Fecha final: %s';
$lang['not_assigned_lead_to_you']                                 = 'Equipo %s asignado para ti';
$lang['not_lead_activity_assigned_to']                            = '%s asignado a %s';
$lang['not_lead_activity_attachment_deleted']                     = 'Adjunto eliminado';
$lang['not_lead_activity_status_updated']                         = '%s estado actualizado de equipo de %s a %s';
$lang['not_lead_activity_contacted']                              = '%s contactado este equipo en %s';
$lang['not_lead_activity_created']                                = '%s equipo creado';
$lang['not_lead_activity_marked_lost']                            = 'Marcado como borrado';
$lang['not_lead_activity_unmarked_lost']                          = 'Sin  borrado';
$lang['not_lead_activity_marked_junk']                            = 'Marcado como borrado';
$lang['not_lead_activity_unmarked_junk']                          = 'Sin  borrado';
$lang['not_lead_activity_added_attachment']                       = 'Archivo adjunto';
$lang['not_lead_activity_converted_email']                        = 'El correo electrónico principal ha cambiado. El primer correo electrónico principal fue: %s y se agregó como cliente con correo electrónico %s';
$lang['not_lead_activity_converted']                              = '%s Convertido este equipo.';
$lang['not_liked_your_post']                                      = '%s le gustó tu publicación %s ...';
$lang['not_commented_your_post']                                  = '%s comentó tu publicación %s ...';
$lang['not_liked_your_comment']                                   = '%s le gustó tu comentario %s ...';
$lang['not_proposal_assigned_to_you']                             = 'Remito asignado a usted - %s ...';
$lang['not_proposal_comment_from_client']                         = 'Nuevo comentario del cliente sobre el remito. %s ...';
$lang['not_proposal_proposal_accepted']                           = 'Remito aceptado - %s';
$lang['not_proposal_proposal_declined']                           = 'Remito rechazado - %s';
$lang['not_task_added_you_as_follower']                           = 'te agregó como seguidor en la orden %s ...';
$lang['not_task_added_someone_as_follower']                       = 'Agregado %s como seguidor en la orden %s ...';
$lang['not_task_added_himself_as_follower']                       = 'se agregó como seguidor en la orden %s ...';
$lang['not_task_assigned_to_you']                                 = 'te asignó una orden %s ...';
$lang['not_task_assigned_someone']                                = 'asignado %s a la orden %s ...';
$lang['not_task_will_do_user']                                    = 'hará orden %s ...';
$lang['not_task_new_attachment']                                  = 'Nuevo archivo adjunto agregado';
$lang['not_task_marked_as_complete']                              = 'Orden marcada como completa %s';
$lang['not_task_unmarked_as_complete']                            = 'Orden sin  completa %s';
$lang['not_ticket_assigned_to_you']                               = 'Aviso asignado a ti - %s ...';
$lang['not_ticket_reassigned_to_you']                             = 'Aviso reasignado a usted - %s ...';
$lang['not_estimate_customer_accepted']                           = '¡Felicidades! Presupuesto aceptado por el cliente con número %s';
$lang['not_estimate_customer_declined']                           = 'Cliente rechazó el presupuesto con el número %s';
$lang['estimate_activity_converted']                              = 'Convertido el presupuesto a la factura.<br /> %s';
$lang['estimate_activity_created']                                = 'Creó el presupuesto';
$lang['invoice_estimate_activity_removed_item']                   = 'elemento eliminado <b>%s</b>';
$lang['estimate_activity_number_changed']                         = 'Número de presupuesto desde %s a %s';
$lang['invoice_activity_number_changed']                          = 'Número de factura cambiado de %s a %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'producto actualizado de la descripción corta %s a %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = 'elemento actualizado descripción larga de <b>%s</b> a <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = 'tasa de producto actualizada de %s a %s';
$lang['invoice_estimate_activity_updated_qty_item']               = 'cantidad actualizada en el producto <b>%s</b> desde %s a %s';
$lang['invoice_estimate_activity_added_item']                     = 'añadido nuevo producto <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = 'Presupuesto enviado al cliente';
$lang['estimate_activity_client_accepted_and_converted']          = 'El cliente aceptó este Presupuesto. El presupuesto se convierte a factura con número. %s';
$lang['estimate_activity_client_accepted']                        = 'El cliente aceptó este Presupuesto';
$lang['estimate_activity_client_declined']                        = 'El cliente rechazó este Presupuesto';
$lang['estimate_activity_marked']                                 = 'Presupuesto marcado como %s';
$lang['invoice_activity_status_updated']                          = 'Estado de factura actualizada desde %s a %s';
$lang['invoice_activity_created']                                 = 'creó la factura';
$lang['invoice_activity_from_expense']                            = 'convertido a factura de gastos';
$lang['invoice_activity_recurring_created']                       = '[Recurrente] Factura creada por sistema';
$lang['invoice_activity_recurring_from_expense_created']          = '[Factura de gastos] Factura creada por sistema';
$lang['invoice_activity_sent_to_client_cron']                     = 'Factura enviada al cliente por sistema';
$lang['invoice_activity_sent_to_client']                          = 'factura enviada al cliente';
$lang['invoice_activity_marked_as_sent']                          = 'factura marcada como enviada';
$lang['invoice_activity_payment_deleted']                         = 'Se eliminó el pago de la factura. Pago #%s, cantidad total %s';
$lang['invoice_activity_payment_made_by_client']                  = 'El cliente realizó el pago de la factura del total. <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = 'pago registrado del total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = 'Agregado adjunto';

# Navigation
$lang['top_search_placeholder'] = 'Buscar...';

# Staff
$lang['staff_profile_inactive_account'] = 'La cuenta de este miembro del personal está inactiva.';

# Estimates
$lang['copy_estimate']                = 'Copiar presupuesto';
$lang['estimate_copied_successfully'] = 'Presupuesto copiado exitosamente';
$lang['estimate_copied_fail']         = 'Error al copiar el presupuesto';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Mis Ordenes';
$lang['tasks_view_follower_by_user'] = 'Ordenes que estoy siguiendo';
$lang['no_tasks_found']              = 'No se encontraron ordenes';

# Leads
$lang['leads_dt_datecreated']       = 'Creado';
$lang['leads_sort_by']              = 'Ordenar por';
$lang['leads_sort_by_datecreated']  = 'Fecha de creación';
$lang['leads_sort_by_kanban_order'] = 'Ver Kanban';

# Authentication
$lang['check_email_for_resetting_password'] = 'Revise su correo electrónico para obtener más instrucciones para restablecer su contraseña';
$lang['inactive_account']                   = 'Cuenta inactiva';
$lang['error_setting_new_password_key']     = 'Error al establecer nueva contraseña';
$lang['password_reset_message']             = 'Tu contraseña ha sido restablecida. Por favor inicie sesión ahora!';
$lang['password_reset_message_fail']        = 'Error al restablecer su contraseña. Inténtalo de nuevo.';
$lang['password_reset_key_expired']         = 'Clave de contraseña caducada o usuario inválido';
$lang['auth_reset_pass_email_not_found']    = 'Email no encontrado';
$lang['auth_reset_password_submit']         = 'Restablecer la contraseña';

# Settings
$lang['settings_amount_to_words']          = 'Cantidad de palabras';
$lang['settings_amount_to_words_desc']     = 'Salida total del importe a palabras en factura / presupuesto.';
$lang['settings_amount_to_words_enabled']  = 'Habilitar';
$lang['settings_total_to_words_lowercase'] = 'Cantidad de palabras en minúsculas';
$lang['settings_show_tax_per_item']        = 'Mostrar IMPUESTO por producto';

# Reports
$lang['report_sales_months_three_months'] = 'Últimos 3 meses';
$lang['report_invoice_number']            = 'Factura #';
$lang['report_invoice_customer']          = 'Cliente';
$lang['report_invoice_date']              = 'Fecha';
$lang['report_invoice_duedate']           = 'Fecha de vencimiento';
$lang['report_invoice_amount']            = 'Cantidad';
$lang['report_invoice_amount_with_tax']   = 'Cantidad con impuesto';
$lang['report_invoice_amount_open']       = 'Cantidad abierta';
$lang['report_invoice_status']            = 'Estado';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Estadísticas por estado del proyecto';
$lang['home_invoice_overview']        = 'Resumen de facturas';
$lang['home_estimate_overview']       = 'Resumen de presupuestos';
$lang['home_proposal_overview']       = 'Resumen de remitos';
$lang['home_lead_overview']           = 'Descripción general del mantenimiento';
$lang['home_my_projects']             = 'Mis proyectos';
$lang['home_announcements']           = 'Anuncios';

# Settings
$lang['settings_leads_kanban_limit']                                    = 'Kanban por estado';
$lang['settings_group_misc']                                            = 'Carpeta';
$lang['show_projects_on_calendar']                                      = 'Proyectos';
$lang['settings_media_max_file_size_upload']                            = 'Tamaño máximo de archivo cargado en Archivos (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Permitir que el cliente / personal agregue / edite comentarios de ordenes solo en la primera hora (no se aplican los administradores)';

# Email templates
$lang['email_template_only_domain_email'] = 'Solo email de dominio';

# Announcements
$lang['dismiss_announcement']   = 'Quitar anuncio';
$lang['announcement_from']      = 'Desde:';
$lang['announcement_date']      = 'Fecha de publicación: %s';
$lang['announcement_not_found'] = 'Anuncio no encontrado';
$lang['announcements_recent']   = 'Anuncios recientes';

# General
$lang['zip_invoices']         = 'Facturas';
$lang['zip_estimates']        = 'Presupuestos';
$lang['zip_payments']         = 'Pagos';
$lang['setup_help']           = ' ';
$lang['clients_list_company'] = 'Empresa';
$lang['dt_button_export']     = 'Exportar';
$lang['dt_entries']           = 'entradas';
$lang['invoice_total_paid']   = 'Total pagado';
$lang['invoice_amount_due']   = 'Cantidad debida';

# Calendar
$lang['calendar_project'] = 'Proyecto';

# Leads
$lang['leads_import_assignee']     = 'Responsable (Asignado)';
$lang['customer_from_lead']        = 'Cliente de %s';
$lang['lead_kan_ban_attachments']  = 'Archivos adjuntos: %s';
$lang['leads_sort_by_lastcontact'] = 'Info';

# Tasks
$lang['task_comment_added']     = 'Comentario agregado exitosamente';
$lang['task_duedate']           = 'Fecha de vencimiento';
$lang['task_view_comments']     = 'Comentarios';
$lang['task_comment_updated']   = 'Comentario actualizado';
$lang['task_visible_to_client'] = 'Visible al cliente';
$lang['task_hourly_rate']       = 'Precio por hora';
$lang['hours']                  = 'Houras';
$lang['seconds']                = 'Segundos';
$lang['minutes']                = 'Minutos';
$lang['task_start_timer']       = 'Cargar horas';
$lang['task_stop_timer']        = 'Parar el temporizador';
$lang['task_billable']          = 'Facturable';
$lang['task_billable_yes']      = 'Facturable';
$lang['task_billable_no']       = 'No facturable';
$lang['task_billed']            = 'Facturado';
$lang['task_billed_yes']        = 'Facturado';
$lang['task_billed_no']         = 'No facturado';
$lang['task_user_logged_time']  = 'Su tiempo registrado:';
$lang['task_total_logged_time'] = 'Tiempo total registrado:';
$lang['task_is_billed']         = 'Esta orden se factura con número. %s';
$lang['task_statistics']        = 'Estadísticas';
$lang['task_milestone']         = 'Objetivo';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Mensaje actualizado exitosamente';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Las ordenes de proyectos no están incluidas en esta lista.';
$lang['show_quantity_as']                             = 'Mostrar cantidad como:';
$lang['quantity_as_qty']                              = 'Cantidad';
$lang['quantity_as_hours']                            = 'Horas';
$lang['invoice_table_hours_heading']                  = 'Horas';
$lang['bill_tasks']                                   = 'Contador de ordenes';
$lang['invoice_estimate_sent_to_email']               = 'Email para';

# Estimates
$lang['estimate_table_hours_heading'] = 'Horas';

# General
$lang['is_customer_indicator']         = 'Cliente';
$lang['print']                         = 'Imprimir';
$lang['customer_permission_projects']  = 'Proyectos';
$lang['no_timers_found']               = 'No se encontraron temporizadores iniciados';
$lang['timers_started_confirm_logout'] = 'Se iniciaron cronómetros! <br /> ¿Está seguro de que desea cerrar la sesión sin detener los temporizadores?';
$lang['confirm_logout']                = 'Cerrar sesión';
$lang['timer_top_started']             = 'Empezó a las %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found']         = 'No puede cambiar el tipo de facturación. Ordenes facturadas ya encontradas para este proyecto.';
$lang['project_customer_permission_warning']                 = 'El sistema indicó que el contacto principal no tiene permisos para los proyectos. El contacto principal no podrá ver el proyecto. Considere agregar los permisos en el perfil de contacto.';
$lang['project_invoice_timesheet_start_time']                = 'Hora de inicio: %s';
$lang['project_invoice_timesheet_end_time']                  = 'Hora de finalización: %s';
$lang['project_invoice_timesheet_total_logged_time']         = 'Tiempo registrado: %s';
$lang['project_view_as_client']                              = 'Ver proyecto como cliente';
$lang['project_mark_all_tasks_as_completed']                 = 'Marque todas las ordenes como Cerradas y detenga todos los temporizadores (no se envían notificaciones a los miembros del proyecto)';
$lang['project_not_started_status_tasks_timers_found']       = 'Temporizadores de ordenes encontrados para este proyecto, pero el proyecto tiene el estado No iniciado. Recomendado para cambiar el estado del proyecto a En curso';
$lang['project_status']                                      = 'Estado';
$lang['project_status_1']                                    = 'Abiertos';
$lang['project_status_2']                                    = 'En curso';
$lang['project_status_3']                                    = 'En espera';
$lang['project_status_4']                                    = 'Terminados';
$lang['project_file_dateadded']                              = 'Fecha de subida';
$lang['project_file_filename']                               = 'Nombre del archivo';
$lang['project_file__filetype']                              = 'Tipo de archivo';
$lang['project_file_visible_to_customer']                    = 'Visible para el cliente';
$lang['project_file_uploaded_by']                            = 'subido por';
$lang['edit_project']                                        = 'Editar proyecto';
$lang['copy_project']                                        = 'Copiar Proyecto';
$lang['delete_project']                                      = 'Eliminar proyecto';
$lang['project_task_assigned_to_user']                       = 'Orden asignada a usted';
$lang['seconds']                                             = 'Segundos';
$lang['hours']                                               = 'Horas';
$lang['minutes']                                             = 'Minutos';
$lang['project']                                             = 'Proyecto';
$lang['project_lowercase']                                   = 'proyecto';
$lang['projects']                                            = 'Proyectos';
$lang['projects_lowercase']                                  = 'proyectos';
$lang['project_settings']                                    = 'Ajustes del proyecto';
$lang['project_invoiced_successfully']                       = 'Proyecto facturado con éxito';
$lang['new_project']                                         = 'Nuevo proyecto';
$lang['project_files']                                       = 'Archivos';
$lang['project_activity']                                    = 'Actividad';
$lang['project_name']                                        = 'Nombre del proyecto';
$lang['project_description']                                 = 'Descripción';
$lang['project_customer']                                    = 'Cliente';
$lang['project_start_date']                                  = 'Fecha de inicio';
$lang['project_datecreated']                                 = 'Fecha de creación';
$lang['project_deadline']                                    = 'Fecha tope';
$lang['project_billing_type']                                = 'Tipo de facturación';
$lang['project_billing_type_fixed_cost']                     = 'Tipo de interés fijo';
$lang['project_billing_type_project_hours']                  = 'Horas del proyecto';
$lang['project_billing_type_project_task_hours']             = 'Horas de orden';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'Basado en el precio por hora de la orden';
$lang['project_rate_per_hour']                               = 'Precio por hora';
$lang['project_total_cost']                                  = 'Precio total';
$lang['project_members']                                     = 'Miembros';
$lang['project_member_removed']                              = 'Miembro del proyecto eliminado exitosamente';
$lang['project_overview']                                    = 'Descripción del proyecto';
$lang['project_gant']                                        = 'Diagrama de Gantt';
$lang['project_milestones']                                  = 'Objetivos';
$lang['project_milestone_order']                             = 'Orden';
$lang['project_milestone_duedate_passed']                    = 'Fecha de vencimiento pasada';
$lang['record_timesheet']                                    = 'Registro de tiempo';
$lang['new_milestone']                                       = 'Nuevo objetivo';
$lang['edit_milestone']                                      = 'Editar Objetivo';
$lang['milestone_name']                                      = 'Nombre';
$lang['milestone_due_date']                                  = 'Fecha de vencimiento';
$lang['project_milestone']                                   = 'Objetivo';
$lang['project_notes']                                       = 'Notas';
$lang['project_timesheets']                                  = 'Horas de trabajo';
$lang['project_timesheet']                                   = 'Registro de tiempo';
$lang['milestone_total_logged_time']                         = 'Tiempo registrado';
$lang['project_overview_total_logged_hours']                 = 'Total de horas registradas';
$lang['milestones_uncategorized']                            = 'Sin categorizar';
$lang['milestone_no_tasks_found']                            = 'No se encontraron ordenes';
$lang['project_copied_successfully']                         = 'Datos del proyecto copiados exitosamente';
$lang['failed_to_copy_project']                              = 'Error al copiar el proyecto';
$lang['copy_project_task_include_check_list_items']          = 'Copiar los elementos de la lista de verificación';
$lang['copy_project_task_include_assignees']                 = 'Copia los mismos asignados.';
$lang['copy_project_task_include_followers']                 = 'Copia los mismos seguidores';
$lang['project_days_left']                                   = 'Días totales';
$lang['project_open_tasks']                                  = 'Pendientes';
$lang['timesheet_stop_timer']                                = 'Parar el Temporizador';
$lang['failed_to_add_project_timesheet_end_time_smaller']    = 'Error al agregar la hoja de tiempo. La hora de finalización es más pequeña que la de inicio.';
$lang['project_timesheet_user']                              = 'Miembro';
$lang['project_timesheet_start_time']                        = 'Hora de inicio';
$lang['project_timesheet_end_time']                          = 'Hora de finalización';
$lang['project_timesheet_time_spend']                        = 'Tiempo';
$lang['project_timesheet_task']                              = 'Orden';
$lang['project_invoices']                                    = 'Facturas';
$lang['total_logged_hours_by_staff']                         = 'Tiempo total registrado';
$lang['invoice_project']                                     = 'Facturar';
$lang['invoice_project_info']                                = 'Información de la factura del proyecto';
$lang['invoice_project_data_single_line']                    = 'Linea sola';
$lang['invoice_project_data_task_per_item']                  = 'Orden por producto';
$lang['invoice_project_data_timesheets_individually']        = 'Todas las hojas de tiempo individualmente';
$lang['invoice_project_item_name_data']                      = 'Nombre del producto';
$lang['invoice_project_description_data']                    = 'Descripción';
$lang['invoice_project_projectname_taskname']                = 'Nombre del proyecto + Nombre de la orden';
$lang['invoice_project_all_tasks_total_logged_time']         = 'Todas las ordenes + tiempo total registrado por orden';
$lang['invoice_project_project_name_data']                   = 'Nombre del proyecto';
$lang['invoice_project_timesheet_individually_data']         = 'Hora de inicio de la hoja de tiempo + hora de finalización + tiempo total registrado';
$lang['invoice_project_total_logged_time_data']              = 'Tiempo total registrado';
$lang['project_allow_client_to']                             = 'Permitir al cliente %s';
$lang['project_setting_view_task_attachments']               = 'ver adjuntos de ordenes';
$lang['project_setting_view_task_checklist_items']           = 'ver los elementos de la lista de verificación de ordenes';
$lang['project_setting_upload_files']                        = 'subir archivos';
$lang['project_setting_view_task_comments']                  = 'ver comentarios de ordenes';
$lang['project_setting_upload_on_tasks']                     = 'subir archivos adjuntos en ordenes';
$lang['project_setting_view_task_total_logged_time']         = 'ver el tiempo total registrado de la orden';
$lang['project_setting_open_discussions']                    = 'discusiones abiertas';
$lang['project_setting_comment_on_tasks']                    = 'comentar sobre las ordenes del proyecto';
$lang['project_setting_view_tasks']                          = 'ver ordenes';
$lang['project_setting_view_milestones']                     = 'ver objetivos';
$lang['project_setting_view_gantt']                          = 'ver Gantt';
$lang['project_setting_view_timesheets']                     = 'ver hojas de tiempo';
$lang['project_setting_view_activity_log']                   = 'ver registro de actividad';
$lang['project_setting_view_team_members']                   = 'ver los miembros del equipo';
$lang['project_discussion_visible_to_customer_yes']          = 'Visible';
$lang['project_discussion_visible_to_customer_no']           = 'No visible';
$lang['project_discussion_posted_on']                        = 'Publicado en %s';
$lang['project_discussion_posted_by']                        = 'Publicado por %s';
$lang['project_discussion_failed_to_delete']                 = 'Error al eliminar la discusión';
$lang['project_discussion_deleted']                          = 'Discusión eliminada exitosamente';
$lang['project_discussion_no_activity']                      = 'Ninguna actividad';
$lang['project_discussion']                                  = 'Debate';
$lang['project_discussions']                                 = 'Debates';
$lang['edit_discussion']                                     = 'Editar Debate';
$lang['new_project_discussion']                              = 'Crear Debate';
$lang['project_discussion_subject']                          = 'Tema';
$lang['project_discussion_description']                      = 'Descripción';
$lang['project_discussion_show_to_customer']                 = 'Visible para el cliente';
$lang['project_discussion_total_comments']                   = 'Total de comentarios';
$lang['project_discussion_last_activity']                    = 'Última actividad';
$lang['discussion_add_comment']                              = 'Agregar comentario';
$lang['discussion_newest']                                   = 'El más nuevo';
$lang['discussion_oldest']                                   = 'El más antiguo';
$lang['discussion_attachments']                              = 'Archivos adjuntos';
$lang['discussion_send']                                     = 'Enviar';
$lang['discussion_reply']                                    = 'Responder';
$lang['discussion_edit']                                     = 'Editar';
$lang['discussion_edited']                                   = 'Modificar';
$lang['discussion_you']                                      = 'Tú';
$lang['discussion_save']                                     = 'Guardar';
$lang['discussion_delete']                                   = 'Borrar';
$lang['discussion_view_all_replies']                         = 'Mostrar todas las respuestas';
$lang['discussion_hide_replies']                             = 'Ocultar respuestas';
$lang['discussion_no_comments']                              = 'Sin comentarios';
$lang['discussion_no_attachments']                           = 'Sin adjuntos';
$lang['discussion_attachments_drop']                         = 'Arrastra y suelta para subir el archivo';
$lang['project_note']                                        = 'Nota';
$lang['project_note_private']                                = 'Notas privadas';
$lang['project_save_note']                                   = 'Guardar nota';

# Project Activity
$lang['project_activity_created']                      = 'Creó el proyecto';
$lang['project_activity_updated']                      = 'Proyecto actualizado';
$lang['project_activity_removed_team_member']          = 'Miembro del equipo eliminado';
$lang['project_activity_added_team_member']            = 'Nuevo miembro del equipo agregado';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marcó todas las ordenes como completas';
$lang['project_activity_recorded_timesheet']           = 'Registro de tiempo agregado';
$lang['project_activity_task_name']                    = 'Orden:';
$lang['project_activity_deleted_discussion']           = 'Discusión eliminada';
$lang['project_activity_created_discussion']           = 'Discusión creada';
$lang['project_activity_updated_discussion']           = 'Discusión actualizada';
$lang['project_activity_commented_on_discussion']      = 'Comentó en la discusión';
$lang['project_activity_deleted_discussion_comment']   = 'Comentario de discusión eliminado';
$lang['project_activity_deleted_milestone']            = 'Objetivo eliminado';
$lang['project_activity_updated_milestone']            = 'Objetivo actualizado';
$lang['project_activity_created_milestone']            = 'Creado nuevo objetivo';
$lang['project_activity_invoiced_project']             = 'Proyecto facturado';
$lang['project_activity_task_marked_complete']         = 'Orden marcada como completa';
$lang['project_activity_task_unmarked_complete']       = 'Orden abierta nuevamente';
$lang['project_activity_task_deleted']                 = 'Orden eliminada';
$lang['project_activity_new_task_comment']             = 'Comentado en la orden';
$lang['project_activity_new_task_attachment']          = 'Adjunto cargado en la orden';
$lang['project_activity_new_task_assignee']            = 'Agrego nuevo asignado de ordenes';
$lang['project_activity_task_assignee_removed']        = 'Orden asignada eliminada';
$lang['project_activity_task_timesheet_deleted']       = 'Hoja de tiempo eliminada';
$lang['project_activity_uploaded_file']                = 'Archivo de proyecto subido';
$lang['project_activity_status_updated']               = 'Estado actualizado del proyecto';
$lang['project_activity_visible_to_customer']          = 'Visible al cliente';
$lang['project_activity_project_file_removed']         = 'Archivo de proyecto eliminado';

# Customers area
$lang['clients_my_estimates']                                  = 'Presupuestos';
$lang['client_no_reply']                                       = 'Sin respuesta';
$lang['clients_nav_projects']                                  = 'Proyectos';
$lang['clients_my_projects']                                   = 'Proyectos';
$lang['client_profile_image']                                  = 'Imagen de perfil';
$lang['sales_report_cancelled_invoices_not_included']          = 'Las facturas canceladas quedan excluidas del informe.';
$lang['invoices_merge_cancel_merged_invoices']                 = 'Marcar facturas fusionadas como canceladas en lugar de eliminarlas';
$lang['invoice_marked_as_cancelled_successfully']              = 'Factura marcada como cancelada con éxito';
$lang['invoice_unmarked_as_cancelled']                         = 'Factura no marcada como cancelada con éxito';
$lang['tasks_reminder_notification_before']                    = 'Recordatorio de la fecha límite de la orden antes (días)';
$lang['not_task_deadline_reminder']                            = 'Recordatorio de la fecha límite de la orden';
$lang['dt_length_menu_all']                                    = 'Todos';
$lang['task_not_finished']                                     = 'Sin completar';
$lang['task_billed_cant_start_timer']                          = 'Orden facturada. Temporizador no se puede iniciar';
$lang['invoice_task_billable_timers_found']                    = 'Se iniciaron los temporizadores';
$lang['project_timesheet_not_updated']                         = 'Hoja de tiempo no afectada';
$lang['project_invoice_task_no_timers_found']                  = 'No se encontraron temporizadores para esta orden';
$lang['invoice_project_tasks_not_started']                     = 'Aún no ha comenzado | Fecha de inicio: %s';
$lang['invoice_project_see_billed_tasks']                      = 'Ver las ordenes que se facturarán.';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Todas las ordenes facturadas se marcarán como finalizadas.';
$lang['invoice_project_nothing_to_bill']                       = 'No hay ordenes para facturar. Puede agregar lo que quiera en la factura.';
$lang['invoice_project_start_date_tasks_not_passed']           = 'Las ordenes con fecha de inicio futura no se pueden facturar';
$lang['invoice_project_stop_all_timers']                       = 'Detener todos los temporizadores';
$lang['invoice_project_stop_billable_timers_only']             = 'Detener solo temporizadores facturables';
$lang['project_tasks_total_timers_stopped']                    = 'Total %s temporizadores detenidos';
$lang['project_invoice_timers_started']                        = 'Los temporizadores de ordenes que se encuentran ejecutándose en ordenes facturables, no se pueden crear facturas. Detenga los temporizadores de ordenes para crear la factura.';
$lang['task_start_timer_only_assignee']                        = '¡Debes ser asignado en esta orden para iniciar el temporizador!';
$lang['task_comments']                                         = 'Comentarios';
$lang['invoice_total_tax']                                     = 'Total impuestos';
$lang['estimates_total_tax']                                   = 'Total impuestos';
$lang['report_invoice_total_tax']                              = 'Total impuestos';
$lang['home_tickets']                                          = 'Avisos';
$lang['home_project_activity']                                 = 'Actividad más reciente del proyecto';
$lang['view_tracking']                                         = 'Seguimiento de vistas';
$lang['view_date']                                             = 'Fecha';
$lang['view_ip']                                               = 'Dirección IP';
$lang['article_total_views']                                   = 'Vistas totales';
$lang['leads_source']                                          = 'Tipo';
$lang['invoices_available_for_merging']                        = 'Facturas disponibles para fusionar';
$lang['invoices_merge_discount']                               = 'Usted tendrá que aplicar el descuento del total %s manualmente a esta factura';
$lang['invoice_merge_number_warning']                          = 'La fusión de facturas creará vacíos en los números de factura. No fusione las facturas si no desea que haya vacíos en su historial de facturas. También tiene la opción de ajustar manualmente los números de factura si desea llenar los vacíos.';
$lang['invoice_mark_as']                                       = ' %s';
$lang['invoice_unmark_as']                                     = 'Des %s';
$lang['invoice_status_cancelled']                              = 'Cancelado';
$lang['tasks_reminder_notification_before_help']               = 'Notificar a las personas asignadas sobre el plazo antes de X días. La notificación / correo electrónico se envía sólo a los asignados. Si la diferencia entre la fecha de inicio de la orden y la fecha de vencimiento de la orden es menor, el día de recordatorios no se enviará ninguna notificación.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Seleccionar todas las ordenes';
$lang['lead_company']                     = 'Hijos';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']       = 'Confirmar';
$lang['task_assigned']                           = 'Asignado a';
$lang['switch_to_pipeline']                      = 'Cambiar a Kanban';
$lang['switch_to_list_view']                     = 'Cambiar a tabla';
$lang['estimates_pipeline']                      = 'Presupuestos';
$lang['estimates_pipeline_sort']                 = 'Ordenar por';
$lang['estimates_sort_expiry_date']              = 'Fecha de caducidad';
$lang['estimates_sort_pipeline']                 = 'Ordenes';
$lang['estimates_sort_datecreated']              = 'Fecha de creación';
$lang['estimates_sort_estimate_date']            = 'Fecha estimada';
$lang['estimate_set_reminder_title']             = 'Establecer recordatorio de presupuesto';
$lang['invoice_set_reminder_title']              = 'Establecer recordatorio de factura';
$lang['estimate_reminders']                      = 'Recordatorios';
$lang['invoice_reminders']                       = 'Recordatorios';
$lang['estimate_notes']                          = 'Notas';
$lang['estimate_add_note']                       = 'Agregar nota';
$lang['dropdown_non_selected_tex']               = 'Nada seleccionado';
$lang['auto_close_ticket_after']                 = 'Auto cierre de Aviso después (Horas)';
$lang['event_description']                       = 'Descripción';
$lang['delete_event']                            = 'Borrar';
$lang['not_new_ticket_created']                  = 'Nuevo Aviso abierto en tu sector. - %s';
$lang['receive_notification_on_new_ticket']      = 'Recibir notificación sobre nuevo Aviso abierto.';
$lang['receive_notification_on_new_ticket_help'] = 'Todos los miembros del personal que pertenezcan al sector de los Avisos recibirán una notificación de que el nuevo Aviso está abierto.';
$lang['event_updated']                           = 'Evento actualizado exitosamente';
$lang['customer_contacts']                       = 'Contactos';
$lang['new_contact']                             = 'Nuevo contacto';
$lang['contact']                                 = 'Contacto';
$lang['contact_lowercase']                       = 'contacto';
$lang['contact_primary']                         = 'Contacto primario';
$lang['contact_position']                        = 'Posición';
$lang['contact_active']                          = 'Activo';
$lang['client_company_info']                     = 'Detalles de la empresa';
$lang['proposal_save']                           = 'Guardar remito';
$lang['calendar']                                = 'Calendario';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'PDF Fuente';
$lang['settings_pdf_table_heading_color']        = 'Color de encabezado de tabla de productos';
$lang['settings_pdf_table_heading_text_color']   = 'Color del texto del encabezado de la tabla de elementos';
$lang['settings_pdf_font_size']                  = 'Tamaño de fuente predeterminado';
$lang['proposal_status_draft']                   = 'Borrador';
$lang['custom_field_contacts']                   = 'Contactos';
$lang['company_primary_email']                   = 'Correo electrónico principal';
$lang['client_register_contact_info']            = 'Información de contacto principal';
$lang['client_register_company_info']            = 'Información de la empresa';
$lang['contact_permissions_info']                = 'Asegúrese de establecer los permisos apropiados para este contacto';
$lang['default_leads_kanban_sort']               = 'Predeterminado Kanban';
$lang['default_leads_kanban_sort_type']          = 'Ordenar';
$lang['order_ascending']                         = 'Ascendente';
$lang['order_descending']                        = 'Descendiente';
$lang['calendar_expand']                         = 'expandir';
$lang['proposal_reminders']                      = 'Recordatorios';
$lang['proposal_set_reminder_title']             = 'Establecer recordatorio de remito';
$lang['settings_allowed_upload_file_types']      = 'Tipos de archivo permitidos';
$lang['no_primary_contact']                      = 'Este cliente tiene contacto primario. Debe configurar el inicio de sesión de contacto primario como cliente. Se recomienda a todos los clientes tener contactos primarios.';
$lang['leads_merge_customer']                    = 'Fusión de campos de equipos';
$lang['leads_merge_contact']                     = 'Campos de equipos que se fusionan';
$lang['leads_merge_as_contact_field']            = 'Fusionar como campo de equipo';
$lang['lead_convert_to_client_phone']            = 'Teléfono';
$lang['invoice_status_report_all']               = 'Todos';
$lang['import_contact_field']                    = 'Campo de contacto';
$lang['file_uploaded_success']                   = 'No hay error, el archivo subido con éxito.';
$lang['file_exceeds_max_filesize']               = 'El archivo cargado excede la directiva upload_max_filesize en php.ini';
$lang['file_exceeds_maxfile_size_in_form']       = 'El archivo cargado excede la directiva MAX_FILE_SIZE que se especificó en el formulario HTML';
$lang['file_uploaded_partially']                 = 'El archivo cargado solo fue subido parcialmente';
$lang['file_not_uploaded']                       = 'ningun archivo fue subido';
$lang['file_missing_temporary_folder']           = 'Falta una carpeta temporal';
$lang['file_failed_to_write_to_disk']            = 'Error al escribir el archivo en el disco.';
$lang['file_php_extension_blocked']              = 'Una extensión de PHP detuvo la carga del archivo.';
$lang['calendar_expand']                         = 'expandir';
$lang['view_pdf']                                = 'Ver PDF';
$lang['expense_repeat_every']                    = 'Repite cada';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Cambiar a Kanban';
$lang['survey_no_questions']                      = 'Esta encuesta aún no tiene preguntas añadidas.';
$lang['survey_submit']                            = 'Enviar';
$lang['contract_content']                         = 'Proveedor';
$lang['contract_save']                            = 'Guardar proveedor';
$lang['contract_send_to_email']                   = 'Enviar al correo electrónico';
$lang['contract_send_to_client_modal_heading']    = 'Enviar proveedor al correo electrónico';
$lang['contract_send_to']                         = 'Enviar a';
$lang['contract_send_to_client_attach_pdf']       = 'Adjuntar PDF';
$lang['contract_send_to_client_preview_template'] = 'Vista previa de la plantilla de correo electrónico';
$lang['include_attachments_to_email']             = 'Incluir archivos adjuntos al correo electrónico';
$lang['contract_sent_to_client_success']          = 'El proveedor se envía con éxito al cliente.';
$lang['contract_sent_to_client_fail']             = 'No se pudo enviar el proveedor';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'usuario o contraseña invalido';
$lang['client_old_password_incorrect']       = 'Tu contraseña anterior es incorrecta';
$lang['client_password_changed']             = 'Tu contraseña ha sido cambiada';

# Version 1.1.4
$lang['total_leads_deleted']                              = 'Total de equipos eliminados: %s';
$lang['total_clients_deleted']                            = 'Total de clientes eliminados: %s';
$lang['confirm_action_prompt']                            = '¿Estás seguro de que quieres realizar esta acción?';
$lang['mass_delete']                                      = 'Eliminar en masa';
$lang['email_protocol']                                   = 'Protocolo de correo electrónico';
$lang['add_edit_members']                                 = 'Añadir / Editar Miembros';
$lang['project_overview_logged_hours']                    = 'Horas registradas:';
$lang['project_overview_billable_hours']                  = 'Horas facturables:';
$lang['project_overview_billed_hours']                    = 'Horas facturadas:';
$lang['project_overview_unbilled_hours']                  = 'Horas sin facturar:';
$lang['calendar_first_day']                               = 'Primer día';
$lang['permission_view']                                  = 'Ver';
$lang['permission_edit']                                  = 'Editar';
$lang['permission_create']                                = 'Crear';
$lang['permission_delete']                                = 'Borrar';
$lang['permission']                                       = 'Permiso';
$lang['permissions']                                      = 'Permisos';
$lang['proposals_pipeline']                               = 'Remitos';
$lang['proposals_pipeline_sort']                          = 'Ordenar por';
$lang['proposals_sort_open_till']                         = 'Abierto hasta';
$lang['proposals_sort_pipeline']                          = 'Ordenes';
$lang['proposals_sort_datecreated']                       = 'Fecha de creación';
$lang['proposals_sort_proposal_date']                     = 'Fecha de remito';
$lang['is_not_staff_member']                              = 'No hay miembro del personal';
$lang['lead_created']                                     = 'Creado';
$lang['access_tickets_to_none_staff_members']             = 'Permitir el acceso a los Avisos para los no miembros del personal';
$lang['project_expenses']                                 = 'Gastos';
$lang['expense_currency']                                 = 'Moneda';
$lang['currency_valid_code_help']                         = 'Asegúrese de ingresar el código ISO de la moneda válida.';
$lang['week']                                             = 'Semana';
$lang['weeks']                                            = 'Semanas';
$lang['month']                                            = 'Mes';
$lang['months']                                           = 'Meses';
$lang['year']                                             = 'Año';
$lang['years']                                            = 'Años';
$lang['expense_report_category']                          = 'Categoría';
$lang['expense_paid_via']                                 = 'Pagado a través de %s';
$lang['item_as_expense']                                  = '[Gastos]';
$lang['show_help_on_setup_menu']                          = 'Mostrar el elemento del menú de ayuda en el menú de configuración';
$lang['customers_summary_total']                          = 'Clientes en total';
$lang['filter_by']                                        = 'Filtrar';
$lang['re_captcha']                                       = 'reCAPTCHA';
$lang['recaptcha_site_key']                               = 'Clave del sitio';
$lang['recaptcha_secret_key']                             = 'Clave secreta';
$lang['recaptcha_error']                                  = 'El campo reCAPTCHA indica que no eres un robot.';
$lang['smtp_username']                                    = 'Nombre de usuario SMTP';
$lang['smtp_username_help']                               = 'Rellene solo si su cliente de correo electrónico utiliza el nombre de usuario para el inicio de sesión SMTP.';
$lang['pinned_project']                                   = 'Proyecto anclado';
$lang['pin_project']                                      = 'Anclar proyecto';
$lang['unpin_project']                                    = 'Quitar proyecto';
$lang['smtp_encryption']                                  = 'Cifrado de correo electrónico';
$lang['smtp_encryption_none']                             = 'Ninguna';
$lang['show_proposals_on_calendar']                       = 'Remitos';
$lang['invoice_project_see_billed_expenses']              = 'Ver gastos que se facturarán.';
$lang['project_overview_expenses']                        = 'Gastos totales';
$lang['project_overview_expenses_billable']               = 'Gastos facturables';
$lang['project_overview_expenses_billed']                 = 'Gastos facturados';
$lang['project_overview_expenses_unbilled']               = 'Gastos no facturados';
$lang['announcement_date_list']                           = 'Fecha';
$lang['project_setting_view_finance_overview']            = 'ver resumen de finanzas';
$lang['show_all_tasks_for_project_member']                = 'Permitir que todo el personal vea todas las ordenes relacionadas con los proyectos (incluidos los no empleados)';
$lang['not_staff_added_as_project_member']                = 'Te agrego como miembro del proyecto';
$lang['report_expenses_base_currency_select_explanation'] = 'Debe seleccionar la moneda porque el sistema encontró diferentes monedas utilizadas para los gastos.';

# Version 1.1.6
$lang['project_activity_recorded_expense']   = 'Gastos registrados';
$lang['save_customer_and_add_contact']       = 'Guardar y crear contacto';
$lang['tickets_chart_weekly_opening_stats']  = 'Estadísticas semanales';
$lang['related_knowledgebase_articles']      = 'Productos relacionados';
$lang['detailed_overview']                   = 'Resumen de ordenes';
$lang['tasks_total_checklists_finished']     = 'Total de elementos de la lista de verificación marcados como finalizados';
$lang['tasks_total_added_attachments']       = 'Total de adjuntos agregados';
$lang['tasks_total_comments']                = 'Total de comentarios';
$lang['task_finished_on_time']               = 'Terminado a tiempo?';
$lang['task_finished_on_time_indicator']     = 'Sí';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['filter']                              = 'Filtrar';
$lang['task_filter_detailed_all_months']     = 'Todos los meses';
$lang['kb_article_slug']                     = 'Manual';

# Version 1.1.7
$lang['email_template_ticket_warning']          = 'Si el Aviso se importa con canalización de correo electrónico y el contacto no existe en el Soft, los campos no serán reemplazados.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Detenga todos los otros temporizadores iniciados al iniciar un nuevo temporizador';
$lang['notification_when_customer_pay_invoice'] = 'Recibir notificación cuando el cliente pague la factura (incorporada)';
$lang['not_invoice_payment_recorded']           = 'Nuevo pago factura - %s';
$lang['email_template_contact_warning']         = 'Si el contacto no se registra mientras se realiza la acción, los campos de combinación de contactos no se reemplazarán.';
$lang['theme_style']                            = 'Estilo del tema';
$lang['change_role_permission_warning']         = 'El cambio de los permisos de los roles no afectó los permisos de los miembros actuales del personal que utilizan este rol.';
$lang['task_copied_successfully']               = 'Orden copiada';
$lang['failed_to_copy_task']                    = 'Error al copiar la orden';
$lang['not_project_file_uploaded']              = 'Nuevo archivo de proyecto agregado';
$lang['settings_calendar_color']                = '%s Color';
$lang['settings_calendar_colors_heading']       = 'Estilo';
$lang['reminder']                               = 'Recordatorio';
$lang['back_to_tasks_list']                     = 'Volver a la lista de ordenes';
$lang['copy_task_confirm']                      = 'Confirmar';
$lang['changing_items_affect_warning']          = 'Cambiar la información del producto no afectará las facturas / presupuestos / remitos creados.';
$lang['tax_is_used_in_expenses_warning']        = 'No puede actualizar este impuesto porque el impuesto es utilizado por las transacciones de gastos.';
$lang['note']                                   = 'Nota';
$lang['leads_staff_report_converted']           = 'Total de equipos convertidos';
$lang['leads_staff_report_created']             = 'Total de equipos creados';
$lang['leads_staff_report_lost']                = 'Total de equipos con fallas';
$lang['client_go_to_dashboard']                 = 'Volver al portal';
$lang['show_estimate_reminders_on_calendar']    = 'Recordatorios';
$lang['show_invoice_reminders_on_calendar']     = 'Recordatorios de factura';
$lang['show_proposal_reminders_on_calendar']    = 'Recordatorios del remito';
$lang['calendar_estimate_reminder']             = 'Recordatorio de presupuesto';
$lang['calendar_invoice_reminder']              = 'Recordatorio de factura';
$lang['calendar_proposal_reminder']             = 'Recordatorio de remito';
$lang['proposal_due_after']                     = 'Remito Vencido Después (días)';
$lang['project_progress']                       = 'Progreso del';
$lang['calculate_progress_through_tasks']       = 'Calcular el progreso a través de las ordenes.';
$lang['allow_customer_to_change_ticket_status'] = 'Permitir que el cliente cambie el estado del Aviso desde el área de clientes';
$lang['switch_to_general_report']               = 'Cambiar al informe del personal';
$lang['switch_to_staff_report']                 = 'Cambiar a informe general';
$lang['generate']                               = 'Generar';
$lang['from_date']                              = 'Desde la fecha';
$lang['to_date']                                = 'Hasta la fecha';
$lang['not_results_found']                      = 'No se han encontrado resultados';
$lang['lead_lock_after_convert_to_customer']    = 'No permitir que se editen los equipos después de que se conviertan a clientes (no se aplican los administradores)';
$lang['default_pipeline_sort']                  = 'Orden de canalización por defecto';
$lang['not_goal_message_failed']                = '¡No logramos el objetivo!<br /> Tipo de objetivo: %s
<br />Logro de objetivos: %s
<br />Objetivos en  total: %s
<br />Fecha de inicio: %s
<br />Fecha final: %s';
$lang['toggle_full_view']             = 'Alternar vista completa';
$lang['not_estimate_invoice_deleted'] = 'La factura creada fue eliminada';
$lang['not_task_new_comment']         = 'comentó la orden %s';

# Version 1.1.8
$lang['invoice_number_exists']                  = 'Este número de factura existe para el año en curso.';
$lang['estimate_number_exists']                 = 'Este número de presupuesto existe para el año en curso.';
$lang['email_exists']                           = 'el Email ya existe';
$lang['not_uploaded_project_file']              = 'Nuevo archivo subido';
$lang['not_created_new_project_discussion']     = 'Se crea nuevo debate de proyecto.';
$lang['not_commented_on_project_discussion']    = 'Nuevo comentario sobre la discusión del proyecto.';
$lang['all_staff_members']                      = 'Todos los miembros del personal';
$lang['help_project_permissions']               = 'VER le permite al miembro del personal ver TODOS los proyectos. Si solo desea que vean los proyectos que tienen asignados (agregados como miembros), no le dé permisos de VER.';
$lang['help_tasks_permissions']                 = 'VER permite al miembro del personal ver TODAS las ordenes. Si solo desea que vean las ordenes a las que están asignadas o que siguen, no le dé permisos de VER.';
$lang['expense_recurring_days']                 = 'Día(s)';
$lang['expense_recurring_weeks']                = 'Semana(s)';
$lang['expense_recurring_months']               = 'Mes(s)';
$lang['expense_recurring_years']                = 'Años(s)';
$lang['reset_to_default_color']                 = 'Restablecer el color predeterminado';
$lang['pdf_logo_width']                         = 'Ancho del logotipo (PX)';
$lang['drop_files_here_to_upload']              = 'Arrastra los archivos aquí para subirlos';
$lang['browser_not_support_drag_and_drop']      = 'Su navegador no admite arrastrar y soltar archivos subidos';
$lang['remove_file']                            = 'Remover archivo';
$lang['you_can_not_upload_any_more_files']      = 'No puedes subir más archivos.';
$lang['custom_field_only_admin']                = 'Restrinja la visibilidad solo para administradores';
$lang['leads_default_source']                   = 'Tipo predeterminado';
$lang['clear_activity_log']                     = 'Borrar registro';
$lang['default_contact_permissions']            = 'Permisos de contacto predeterminados';
$lang['invoice_activity_marked_as_cancelled']   = 'Factura marcada como cancelada';
$lang['invoice_activity_unmarked_as_cancelled'] = 'Factura sin  cancelada';
$lang['wait_text']                              = 'Por favor espera...';
$lang['projects_summary']                       = 'Resumen de proyectos';
$lang['dept_imap_host']                         = 'IMAP Host';
$lang['dept_encryption']                        = 'Cifrado';
$lang['dept_email_password']                    = 'Contraseña';
$lang['dept_email_no_encryption']               = 'Sin cifrar';
$lang['failed_to_decrypt_password']             = 'Error al descifrar la contraseña';
$lang['delete_mail_after_import']               = '¿Borrar correo después de importar?';
$lang['expiry_reminder_enabled']                = 'Enviar recordatorio de caducidad';
$lang['send_expiry_reminder_before']            = 'Enviar recordatorio de vencimiento antes (DÍAS)';
$lang['not_expiry_reminder_sent']               = 'Recordatorio de expiración enviado.';
$lang['send_expiry_reminder']                   = 'Enviar recordatorio de caducidad';
$lang['sent_expiry_reminder_success']           = 'Recordatorio de caducidad enviado con éxito.';
$lang['sent_expiry_reminder_fail']              = 'Error al enviar recordatorio de caducidad';
$lang['leads_default_status']                   = 'Estado por defecto';
$lang['item_description_placeholder']           = 'Descripción';
$lang['item_long_description_placeholder']      = 'Descripción larga';
$lang['item_quantity_placeholder']              = 'Cantidad';
$lang['item_rate_placeholder']                  = 'Precio';
$lang['tickets_summary']                        = 'Resumen de Avisos';
$lang['tasks_list_priority']                    = 'Prioridad';
$lang['ticket_status_db_2']                     = 'En curso';
$lang['ticket_status_db_1']                     = 'Abierto';
$lang['ticket_status_db_3']                     = 'Resuelta';
$lang['ticket_status_db_4']                     = 'En espera';
$lang['ticket_status_db_5']                     = 'Cerrado';
$lang['ticket_priority_db_1']                   = 'Bajo';
$lang['ticket_priority_db_2']                   = 'Medio';
$lang['ticket_priority_db_3']                   = 'Alto';
$lang['customer_have_projects_by']              = ' %s';
$lang['customer_have_proposals_by']             = ' %s';
$lang['do_not_redirect_payment']                = 'No me redireccione al procesador de pagos.';
$lang['project_tickets']                        = 'Avisos';
$lang['invoice_report']                         = 'Informe de facturas';
$lang['payment_modes_report']                   = 'Modos de Pago (Transacciones)';
$lang['customer_admins']                        = 'Administradores de clientes';
$lang['assign_admin']                           = 'Asignar administrador';
$lang['customer_admin_date_assigned']           = 'Fecha asignada';
$lang['customer_admin_login_as_client_message'] = 'Hola %s. Estás agregado como administrador a este cliente.';
$lang['ticket_form_validation_file_size']       = 'El tamaño del archivo debe ser menor que %s';
$lang['has_transactions_currency_base_change']  = 'Cambiar la moneda base solo es posible si no hay transacciones registradas en esa moneda. Eliminar las transacciones para cambiar la moneda base.';
$lang['customers_sort_all']                     = 'Todos';

# Version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Habilitar reCAPTCHA en el área de clientes (Iniciar sesión / Registrarse)';
$lang['project_marked_as_finished']      = 'Proyecto completado';
$lang['project_status_updated']          = 'Estado del proyecto actualizado';
$lang['remove_decimals_on_zero']         = 'Eliminar decimales en números / dinero con cero decimales (2.00 se convertirán en 2, 2.25 permanecerán 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Eliminar el nombre de impuesto de la fila de la tabla de elementos';

# Version 1.2.0
$lang['not_billable_expenses_by_categories']      = 'Gastos no facturables por categorías.';
$lang['billable_expenses_by_categories']          = 'Gastos facturables por categorías';
$lang['format_letter_size']                       = 'Hoja A4';
$lang['pdf_formats']                              = 'Formatos de documentos';
$lang['swap_pdf_info']                            = 'Intercambiar detalles de la compañía / cliente (detalles de la compañía al lado derecho, detalles del cliente al lado izquierdo)';
$lang['expenses_filter_by_categories']            = 'Por categorias';
$lang['task_copy']                                = 'Copiar';
$lang['estimate_status']                          = 'Estado';
$lang['expenses_report_exclude_billable']         = 'Excluir gastos facturables';
$lang['expenses_total']                           = 'Total';
$lang['estimate_activity_added_attachment']       = 'Agregado adjunto';
$lang['show_to_customer']                         = 'Mostrar al cliente';
$lang['hide_from_customer']                       = 'Ocultar del cliente';
$lang['expenses_report_total']                    = 'Total';
$lang['expenses_report']                          = 'Reporte de gastos';
$lang['expenses_report_total_tax']                = 'Total impuestos';
$lang['expenses_detailed_report']                 = 'Reporte detallado';
$lang['expense_not_billable']                     = 'No facturable';
$lang['notification_settings']                    = 'Configuración de las notificaciones';
$lang['staff_with_roles']                         = 'Miembros del personal con roles';
$lang['specific_staff_members']                   = 'Miembros específicos del personal';
$lang['proposal_mark_as']                         = ' %s';
$lang['kb_report_total_answers']                  = 'Total';
$lang['ticket_message_edit']                      = 'Editar';
$lang['invoice_files']                            = 'Archivos de factura';
$lang['estimate_files']                           = 'Archivos de presupuesto';
$lang['proposal_files']                           = 'Archivos de remitos';
$lang['invoices_awaiting_payment']                = 'Facturas en espera';
$lang['tasks_not_finished']                       = 'Progreso de las Ordenes';
$lang['outstanding_invoices']                     = 'Facturas pendientes';
$lang['past_due_invoices']                        = 'Facturas vencidas';
$lang['paid_invoices']                            = 'Facturas pagadas';
$lang['invoice_estimate_year']                    = 'Año';
$lang['task_stats_logged_hours']                  = 'Horas registradas';
$lang['leads_converted_to_client']                = 'Equipos';
$lang['task_assigned_from']                       = 'Esta orden fue asignada por %s';
$lang['new_note']                                 = 'Nueva nota';
$lang['my_tickets_assigned']                      = 'Avisos asignados a mi';
$lang['filter_by_assigned']                       = 'Por miembro asignado';
$lang['staff_stats_total_logged_time']            = 'Tiempo total registrado';
$lang['staff_stats_last_month_total_logged_time'] = 'Tiempo registrado del </br>mes pasado';
$lang['staff_stats_this_month_total_logged_time'] = 'Tiempo registrado de </br>este mes';
$lang['staff_stats_last_week_total_logged_time']  = 'Tiempo registrado de la </br>semana pasada';
$lang['staff_stats_this_week_total_logged_time']  = 'Tiempo registrado de </br>esta semana';
// Dont change this because are translated before for the projects timesheets and now are only used for readability.
$lang['timesheet_user']       = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time']   = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets']      = $lang['project_timesheets'];
$lang['task_log_time_start']  = $lang['project_timesheet_start_time'];
$lang['task_log_time_end']    = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description']                      = 'Descripción';
$lang['description_visible_to_customer']            = 'Mostrar descripción al cliente';
$lang['upcoming_tasks']                             = 'Próximas ordenes';
$lang['paymentmethod_two_checkout_account_number']  = 'Número de cuenta (ID de vendedor)';
$lang['paymentmethod_two_checkout_private_key']     = 'Llave privada';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Clave Publica';
$lang['payment_credit_card_number']                 = 'Número de tarjeta';
$lang['payment_credit_card_expiration_date']        = 'Fecha de caducidad';
$lang['payment_billing_email']                      = 'Email';
$lang['submit_payment']                             = 'Enviar pago';
$lang['2checkout_notice_payment']                   = 'Los detalles de la tarjeta de crédito se procesan mediante un token seguro proporcionado por 2Checkout';
$lang['2checkout_usage_notice']                     = 'Se requiere SSL si está utilizando la API de pago 2Checkout. Se requiere llamar de forma segura a la tokenización y autorizaciones. El sistema funcionará sin SSL, sin embargo, esto lo dejará fuera de cumplimiento, lo que conlleva el riesgo de desactivación de sus permisos de API.';
$lang['custom_field_disallow_customer_to_edit']     = 'No permitir al cliente editar este campo';
$lang['project_due_notice']                         = 'Este proyecto está vencido por %s dias';
$lang['not_lead_added_attachment']                  = 'agregado nuevo adjunto al equipo %s';
$lang['lead_note_date_added']                       = 'Nota agregada: %s';
$lang['recurring_custom']                           = 'Personalizado';
// don't translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction']                                 = 'Dirección';
$lang['notify_project_members_status_change']               = 'Notificar a los miembros del proyecto que el estado ha cambiado';
$lang['not_project_status_updated']                         = 'Estado del proyecto actualizado desde %s a %s';
$lang['ticket_not_found']                                   = 'Aviso no encontrado';
$lang['project_not_found']                                  = 'Proyecto no encontrado';
$lang['export_project_data']                                = 'Exportar datos del proyecto';
$lang['total_project_members']                              = 'Miembros Totales del Proyecto';
$lang['total_project_files']                                = 'Archivos adjuntos';
$lang['total_project_discussions_created']                  = 'Discusiones creadas';
$lang['project_member']                                     = 'Miembro';
$lang['total_project_discussions_comments']                 = 'Total comentarios del debate';
$lang['staff_total_task_assigned']                          = 'Total de ordenes asignadas';
$lang['staff_total_comments_on_tasks']                      = 'Comentarios sobre ordenes';
$lang['project_members_overview']                           = 'Resumen de los miembros del proyecto';
$lang['project_milestones_overview']                        = 'Resumen de objetivos';
$lang['total_tasks_in_milestones']                          = 'Total de ordenes asignadas';
$lang['total_task_members_assigned']                        = 'Total de miembros asignados';
$lang['total_task_members_followers']                       = 'Total de seguidores';
$lang['total_milestones']                                   = 'Total de objetivos';
$lang['total_project_worked_days']                          = 'Total de días trabajados';
$lang['finance_overview']                                   = 'Resumen de Finanzas';
$lang['project_custom_fields']                              = 'Campos Personalizados';
$lang['total_tickets_related_to_project']                   = 'Entradas totales vinculadas al proyecto';
$lang['projects_total_invoices_created']                    = 'Total de facturas creadas';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'No enviar facturas por correo electrónico registrado a los contactos del cliente.';
$lang['no_preview_available_for_file']                      = 'No hay vista previa disponible para este archivo.';
$lang['project_activity_deleted_file_discussion_comment']   = 'Comentario de debate de archivo eliminado';
$lang['email_template_discussion_info']                     = 'Esta plantilla se utiliza para los correos de comentarios de debates de proyectos. (archivos de debates y debates regulares)';
$lang['format_a4_portrait_size']                            = 'Retrato';
$lang['only_show_contact_tickets']                          = 'En el área de clientes solo se muestran las entradas relacionadas con el contacto registrado (contacto principal no aplicado)';
$lang['cancel_overdue_reminders_invoice']                   = 'Evitar el envío de recordatorios de vencimiento para esta factura';
$lang['customer_shipping_address_notice']                   = 'No complete la información de la dirección de envío si no usará la dirección de envío en las facturas de los clientes';
$lang['timesheets_overview']                                = 'Resumen de tiempos';
$lang['invoice_status_draft']                               = 'Borrador';
$lang['save_as_draft']                                      = 'Guardar como borrador';
$lang['convert_and_save_as_draft']                          = 'Convertir y guardar como borrador';
$lang['convert']                                            = 'Convertir';
$lang['exclude_invoices_draft_from_client_area']            = 'Excluir facturas con estado de borrador del área de clientes';
$lang['invoice_draft_status_info']                          = 'Esta factura es con estado Borrador, el estado se cambiará automáticamente cuando envíe la factura al cliente o marque como se envió.';
$lang['task_info']                                          = 'Información de la orden';
$lang['recurring_tasks']                                    = 'Recurrente';
// don't translate these, already translated
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                              = 'Ordenes de hoy';
$lang['payment_mode_invoices_only']                = 'Solo facturas';
$lang['payment_mode_expenses_only']                = 'Sólo gastos';
$lang['task_no_checklist_items_found']             = 'Elementos de la lista de verificación no encontrados para esta orden';
$lang['task_no_description']                       = 'No hay descripción para esta orden.';
$lang['expenses_reminders']                        = 'Recordatorios';
$lang['expense_set_reminder_title']                = 'Establecer recordatorio de gastos';
$lang['calendar_expense_reminder']                 = 'Recordatorios de gastos';
$lang['recurring_task']                            = 'Orden recurrente';
$lang['disable_email_from_being_sent']             = 'Deshabilitar este correo de ser enviado';
$lang['not_sent_indicator']                        = 'No enviado';
$lang['proposal_status_revised']                   = 'Visto';
$lang['customer_currency_change_notice']           = 'Si el cliente utiliza otra moneda, entonces la moneda base debe asegurarse de seleccionar la moneda adecuada para este cliente. No es posible cambiar la moneda después de registrar las transacciones.';
$lang['click_to_add_content']                      = 'Haga clic aquí para agregar contenido';
$lang['related_to_project']                        = 'Este %s está relacionado con %s: %s';
$lang['back_to_lead']                              = 'Volver al equipo';
$lang['add_task_timer_started_warning']            = 'Detenga el temporizador que tiene iniciado para que esta orden pueda agregar el nuevo temporizador manualmente.';
$lang['sending_email_contact_permissions_warning'] = 'Error al seleccionar automáticamente los contactos del cliente. Por favor, asegúrese de que el cliente tenga contactos asociados con permiso %s';

# Version 1.2.6
$lang['currently_supported_currencies']                       = 'Monedas actualmente permitidas';
$lang['authorize_notice']                                     = 'Se requiere SSL si está utilizando la API de pago AIM de Authorize.Net. Authorize.net solo soporta 1 moneda por cuenta. Asegúrese de agregar solo 1 moneda asociada con su cuenta de Autorización en el campo de monedas.';
$lang['settings_paymentmethod_developer_mode']                = 'Modo desarrollador';
$lang['payment_cardholder_name']                              = 'Nombre de la tarjeta';
$lang['settings_paymentmethod_authorize_api_login_id']        = 'API Ingresar identificación';
$lang['settings_paymentmethod_mollie_api_key']                = 'API Key';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'API ID de transacción';
$lang['settings_paymentmethod_authorize_secret_key']          = 'Secret Key';
$lang['leads_report_converted_notice']                        = 'Solo los equipos que pertenezcan al estado predeterminado del Cliente se tomarán como equipos convertidos, si los equipos pertenecen al estado predeterminado del cliente y no se convierten al cliente todavía se contarán como equipos convertidos';
$lang['payment_method']                                       = 'Método de pago';
$lang['payment_method_info']                                  = 'Algunos links de pago admiten métodos de pago diferentes / múltiples como tarjeta de crédito, PayPal, banco.';

# Version 1.2.7
$lang['dropbox_app_key']                                    = 'Dropbox APP Key';
$lang['project_invoice_select_all_expenses']                = 'Selecciona todos los gastos';
$lang['role_update_staff_permissions']                      = 'Actualizar todos los permisos de los miembros del personal que están usando este rol';
$lang['customer_active']                                    = 'Activo';
$lang['note_updated_successfully']                          = 'Nota actualizada con éxito';
$lang['update_note']                                        = 'Actualizar nota';
$lang['update_comment']                                     = 'Actualizar comentario';
$lang['comment_updated_successfully']                       = 'Comentario actualizado exitosamente';
$lang['staff_send_welcome_email']                           = 'Enviar correo de bienvenida';
$lang['proposal_warning_email_change']                      = 'Correo electrónico cambiado para %s. Esta %s esta vinculado a remito/s. ¿Quieres actualizar todos los correos electrónicos de remitos vinculados a %s?';
$lang['update_proposal_email_yes']                          = 'Sí actualizar todos los correos electrónicos vinculados.';
$lang['update_proposal_email_no']                           = 'No, voy a actualizar manualmente.';
$lang['proposals_emails_updated']                           = 'Todos los correos electrónicos de remitos vinculados a este %s actualizados a %s';
$lang['custom_field_company']                               = 'Empresa';
$lang['actions']                                            = 'Comportamiento';
$lang['project_mark_as']                                    = ' %s';
$lang['todo_edit_title']                                    = 'Editar';
$lang['additional_action_required']                         = 'Acción adicional requerida!';
$lang['project_mark_tasks_finished_confirm']                = 'Confirmar';
$lang['project_marked_as_success']                          = 'Proyecto marcado como %s';
$lang['project_marked_as_failed']                           = 'Error al marcar el proyecto como %s';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Asignación automática como administrador al equipo después de convertir';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Si esta opción se establece en SÍ, el miembro del personal que convirtió el equipo en cliente se asignará automáticamente como administrador del cliente. NOTA: Esta opción se aplicará solo a los miembros del personal que no tienen permiso para los clientes VER';
$lang['auto_close_tickets_disable']                         = 'Establecer 0 para deshabilitar';
$lang['task_checklist_item_completed_by']                   = 'Completado por %s';
$lang['staff_email_signature_help']                         = 'Si se utilizará la firma de correo electrónico predeterminada vacía de la configuración';
$lang['default_task_priority']                              = 'Prioridad predeterminada';
$lang['project_send_created_email']                         = 'Enviar proyecto creado por email';
$lang['survey_send_to_lists']                               = 'Encuesta enviar listas';
$lang['survey_send_notice']                                 = 'Los correos electrónicos serán enviados vía sistema por hora.';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Mostrar facturas pagos (transacciones) en PDF';
$lang['bulk_actions']                                = 'Acciones masivas';
$lang['additional_filters']                          = 'Filtros adicionales';
$lang['expenses_available_to_bill']                  = 'Gastos disponibles para facturar.';
$lang['bulk_action_customers_groups_warning']        = 'Si no selecciona ningún grupo, se eliminarán todos los grupos asignados a los clientes seleccionados.';
$lang['customer_attachments_show_in_customers_area'] = 'Mostrar al área de clientes.';
$lang['customer_attachments_show_notice']            = 'Solo los archivos cargados desde el perfil del cliente tienen la capacidad de mostrar / ocultar en el área de clientes.';
$lang['customer_profile_files']                      = 'Archivos';
$lang['no_files_found']                              = 'No se encontraron archivos';
$lang['survey_customers_all']                        = 'Todos los clientes';
$lang['custom_field_column']                         = 'Cuadrícula (Bootstrap Column eq. 12) - Max es 12';
$lang['task_status']                                 = 'Estado';
$lang['task_status_1']                               = 'Abiertas';
$lang['task_status_2']                               = 'En espera';
$lang['task_status_3']                               = 'Pruebas';
$lang['task_status_4']                               = 'En curso';
$lang['task_status_5']                               = 'Cerradas';
$lang['task_mark_as']                                = ' %s';
$lang['task_marked_as_success']                      = 'Orden marcada como %s';
$lang['search_tasks']                                = 'Buscar orden';
$lang['tasks_kanban_limit']                          = 'Limitar ordenes por estado';
$lang['show_on_invoice_on_pdf']                      = 'Mostrar %s en factura PDF';
$lang['show_pay_link_to_invoice_pdf']                = 'Mostrar enlace a PDF de factura de pago (no se aplica si el estado de la factura está cancelado)';
$lang['no_leads_found']                              = 'No se encontraron equipos';
$lang['created_today']                               = 'Creado hoy';
$lang['total_tasks_deleted']                         = 'Total de ordenes eliminadas: %s';
$lang['total_tickets_delete']                        = 'Total de Avisos eliminados: %s';
$lang['total_tickets_delete']                        = 'Total de Avisos eliminados: %s';
$lang['format_letter_portrait']                      = 'Letra de carta';
$lang['format_letter_landscape']                     = 'Letra de Paisaje';
$lang['period_datepicker']                           = 'Período';
$lang['total_by_hourly_rate']                        = 'Total por precio por hora';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'Ej. Producto IMPUESTO 15 & # 37; se mostrará como 15 & # 37; sin el nombre del impuesto (No se aplica si se encontraron varios impuestos con el mismo nombre y porcentaje de impuesto para el producto)';
$lang['back_to_project']                      = 'Volver al proyecto';
$lang['view_kanban']                          = 'Ver Kanban';
$lang['invoice_is_overdue']                   = 'Esta factura está vencida por%s días';

# Version 1.2.9
$lang['time_decimal']                            = 'Total';
$lang['time_h']                                  = 'Horas';
$lang['proposal_number_prefix']                  = 'Prefijo de remito';
$lang['settings_number_padding_prefix']          = 'Número de relleno cero para los formatos de prefijo <br /> <small>Ej. Si este valor es 3, el número será formateado: 005 o 025</small>';
$lang['this_week_payments']                      = 'Pagos de esta semana';
$lang['last_week_payments']                      = 'Pagos de la semana pasada';
$lang['not_published_new_post']                  = 'Hacer una publicación';
$lang['expense_name']                            = 'Nombre';
$lang['expense_name_help']                       = 'Para uso personal';
$lang['adjustments']                             = 'Ajustes';
$lang['payments_received']                       = 'Pagos recibidos';
$lang['not_lead_activity_created_proposal']      = 'Nuevo remito creado - %s';
$lang['lead_title']                              = 'Zona Física';
$lang['lead_address']                            = 'Número de serie';
$lang['lead_city']                               = 'Zona Lógica';
$lang['lead_state']                              = 'Marca';
$lang['lead_country']                            = 'País de origen';
$lang['lead_zip']                                = 'Contacto para consultas';
$lang['lead_is_public_yes']                      = 'Si';
$lang['lead_is_public_no']                       = 'No';
$lang['lead_info']                               = 'Información del equipo';
$lang['lead_general_info']                       = 'Información general';
$lang['lead_latest_activity']                    = 'Última actividad';
$lang['item_description_new_lines_notice']       = 'No se admiten nuevas líneas para la descripción del producto. Utilice la descripción larga del producto en su lugar.';
$lang['estimates_report']                        = 'Informe de presupuestos';
$lang['confirm']                                 = 'Confirmar';
$lang['delete_staff']                            = 'Eliminar miembro del personal';
$lang['delete_staff_info']                       = 'Algunos datos de este miembro del personal deben transferirse a otro usuario. Seleccione el usuario al que desea transferir los datos.';
$lang['estimate_items']                          = 'Productos presupuestados';
$lang['no_proposals_found']                      = 'No se encontraron remitos';
$lang['no_estimates_found']                      = 'No se encontraron presupuestos';
$lang['pipeline_limit_status']                   = 'Límite por estado';
$lang['settings_update']                         = 'Actualizacion del sistema';
$lang['purchase_key']                            = 'Clave de compra';
$lang['update_now']                              = 'Actualizar ahora';
$lang['update_available']                        = 'Hay disponible una actualización';
$lang['latest_version']                          = 'Ultima versión';
$lang['your_version']                            = 'Tu versión';
$lang['using_latest_version']                    = 'Estás utilizando la última versión';
$lang['mark_as_active']                          = ' activo';
$lang['customer_inactive_message']               = 'Este es el perfil de cliente inactivo y algunas características pueden estar deshabilitadas';
$lang['active_customers']                        = 'Clientes Activos';
$lang['inactive_active_customers']               = 'Clientes inactivos';
$lang['include_proposal_items_merge_field_help'] = ' ';
$lang['all_data_synced_successfully']            = 'Todos los datos sincronizados con éxito';
$lang['sync_now']                                = 'Sincronizar ahora';
$lang['sync_data']                               = 'Sincronizar datos';
$lang['sync_proposals_up_to_date']               = 'Todas los remitos están actualizados, nada para sincronizar.';
$lang['proposal_sync_1_info']                    = 'Todos los datos de los remitos se almacenan por separado para cada remito después de la creación. Actualizar la información de %s no afectará los remitos creados anteriormente para esto %s.';
$lang['proposal_sync_2_info']                    = 'Si ha actualizado recientemente la información de %s, puede sincronizar todos los datos nuevos con los remitos asociados. Aquí hay una lista de campos que puedes sincronizar.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Incluya detalles adicionales a la descripción larga del producto tomada de este gasto.';

# Version 1.4.0
$lang['calendar_events_limit']                              = 'Calendario de eventos límite (mes y semana)';
$lang['show_page_number_on_pdf']                            = 'Mostrar número de página en PDF';
$lang['customer_active_inactive_help']                      = 'No se mostrará en los menús desplegables al crear nuevos registros';
$lang['item_groups']                                        = 'Grupos';
$lang['item_group']                                         = 'Grupo de productos';
$lang['item_group_name']                                    = 'Nombre del grupo';
$lang['new_item_group']                                     = 'Nuevo grupo';
$lang['show_setup_menu_item_only_on_hover']                 = 'Mostrar el elemento del menú de configuración solo cuando se desplaza con el mouse en el área de barra lateral';
$lang['internal_article']                                   = 'Manual de uso interno';
$lang['expenses_created_from_this_recurring_expense']       = 'Gastos creados a partir de este gasto recurrente.';
$lang['convert_to_task']                                    = 'Convertir a orden';
$lang['next_invoice_date']                                  = 'Fecha de la próxima factura: %s';
$lang['next_expense_date']                                  = 'Siguiente Fecha de Gastos: %s';
$lang['invoice_recurring_from']                             = 'Esta factura se crea a partir de una factura recurrente con número: %s';
$lang['expense_recurring_from']                             = 'Este gasto se crea a partir del siguiente gasto recurrente: %s';
$lang['child_invoices']                                     = 'Facturas';
$lang['child_expenses']                                     = 'Gastos';
$lang['no_announcements']                                   = 'No hay anuncios';
$lang['unit']                                               = 'Unidades';
$lang['permission_view_own']                                = 'Ver (Propio)';
$lang['permission_global']                                  = 'Global';
$lang['permission_customers_based_on_admins']               = 'Basado en el cliente admin';
$lang['permission_payments_based_on_invoices']              = 'Basado en facturas permiso VER (Propio)';
$lang['permission_projects_based_on_assignee']              = 'Si el miembro del personal no tiene permiso, VER (Global) se mostrará solo en los proyectos donde el miembro del personal se agregue como miembro del proyecto.';
$lang['permission_tasks_based_on_assignee']                 = 'Si el miembro del personal no tiene permiso, VER (Global) mostrará solo las ordenes donde el miembro del personal es seguidor, asignado, la orden es pública o en Configuración-> Configuración-> Ordenes-> Permitir que todo el personal vea todas las ordenes relacionadas con los proyectos. a SÍ cuando la orden está vinculada al proyecto.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Seleccionado por defecto en la factura';
$lang['paymentmethod_braintree_merchant_id']                = 'Comerciante ID';
$lang['paymentmethod_braintree_private_key']                = 'Llave privada';
$lang['paymentmethod_braintree_public_key']                 = 'Llave pública';
$lang['company_requires_vat_number_field']                  = 'La empresa requiere el uso del campo Número de IVA';
$lang['no_company_view_profile']                            = 'Persona - Ver perfil';
$lang['company_is_required']                                = '¿Campo de la empresa es obligatorio?';
$lang['estimate_invoiced']                                  = 'Facturado';
$lang['file_date_uploaded']                                 = 'Fecha de subida';
$lang['allow_contact_to_delete_files']                      = 'Permitir que los contactos eliminen los propios archivos cargados desde el área de clientes';
$lang['file']                                               = 'Archivo';
$lang['customer_contact_person_only_one_allowed']           = 'Solo se permite 1 contacto cuando el campo de la compañía no se llena. El sistema emitirá este cliente como persona.';
$lang['web_to_lead']                                        = 'Web para el equipo';
$lang['web_to_lead_form']                                   = 'Formulario web para el equipo';
$lang['new_form']                                           = 'Nuevo formulario';
$lang['form_name']                                          = 'Nombre del formulario';
$lang['cf_option_in_use']                                   = 'Una opción que ha eliminado está en uso y no se puede eliminar. La opción se adjunta automáticamente a las opciones existentes.';
$lang['form_builder']                                       = 'Formulario -';
$lang['form_information']                                   = 'Información y configuración del formulario';
$lang['form_builder_create_form_first']                     = 'Cree el formulario primero para poder utilizar el generador de formularios.';
$lang['notify_assigned_user']                               = 'Persona responsable';
$lang['form_recaptcha']                                     = 'Usar Google Recaptcha';
$lang['form_lang_validation']                               = 'Idioma';
$lang['form_lang_validation_help']                          = 'Para mensajes de validación.';
$lang['form_btn_submit_text']                               = '(Enviar) texto del botón';
$lang['form_success_submit_msg']                            = 'Mensaje para mostrar después de que el formulario se haya enviado correctamente';
$lang['total_submissions']                                  = 'Sumisiones totales';
$lang['form_integration_code']                              = 'Codigo de integracion';
$lang['not_lead_imported_from_form']                        = 'Nuevo equipo importado de la web al formulario de clientes - %s';
$lang['not_lead_activity_log_attachment']                   = 'Archivo adjunto importado de forma - %s';
$lang['form_integration_code_help']                         = 'Copie y pegue el código en cualquier lugar de su sitio para mostrar el formulario, además, puede ajustar el ancho y el alto de px para que se ajusten a su sitio web.';
$lang['invoice_not_found']                                  = 'Factura no encontrada';
$lang['estimate_not_found']                                 = 'Presupuesto no encontrado';
$lang['expense_not_found']                                  = 'Gastos no encontrados';
$lang['proposal_not_found']                                 = 'Remito no encontrado';
$lang['new_task_assigned_non_user']                         = 'Se te asigna una nueva orden. - %s';
$lang['no_child_found']                                     = 'No %s encontrado';
$lang['company_vat_number']                                 = 'CUIT';
$lang['not_lead_assigned_from_form']                        = 'Se te asigna un equipo.';
$lang['not_lead_activity_assigned_from_form']               = 'Equipo asignado a %s';
$lang['form_allow_duplicate']                               = '¿Permitir que se inserte %s duplicado en la base de datos?';
$lang['track_duplicate_by_field']                           = 'Prevenir duplicar en el campo';
$lang['and_track_duplicate_by_field']                       = '+ campo (deje en blanco para rastrear duplicados solo por 1 campo)';
$lang['create_the_duplicate_form_data_as_task']             = 'Cree datos %s duplicados como orden y asigne a un miembro del personal responsable';
$lang['create_the_duplicate_form_data_as_task_help']        = 'Se utiliza para una revisión adicional de la presentación y para tomar las medidas necesarias.';
$lang['currently_selected']                                 = 'Actualmente seleccionado';
$lang['search_ajax_empty']                                  = 'Seleccione y comience a escribir';
$lang['search_ajax_placeholder']                            = 'Escribe para buscar...';
$lang['search_ajax_searching']                              = 'Buscando...';
$lang['search_ajax_initialized']                            = 'Empieza a escribir para buscar';
$lang['lead_description']                                   = 'Descripción';
$lang['lead_website']                                       = 'Sitio web';
$lang['invoice_activity_auto_converted_from_estimate']      = 'Factura auto creada a partir de presupuesto con número. %s';
$lang['hour_of_day_perform_auto_operations']                = 'Hora del día para realizar operaciones automáticas.';
$lang['hour_of_day_perform_auto_operations_format']         = 'Formato 24 horas Ej. 9 para las 9am o 15 para las 3pm.';
$lang['inv_hour_of_day_perform_auto_operations_help']       = 'Se utiliza para facturas recurrentes, avisos de vencimiento, etc.';
$lang['use_minified_files']                                 = 'Use la versión de archivos minificados para css y js (solo archivos de sistema)';

# Version 1.5.0
$lang['logo_favicon_changed_notice']       = 'Logo o cambio de Favicon detectado.';
$lang['kb_search_articles']                = 'Buscar manuales';
$lang['kb_search']                         = 'Buscar';
$lang['have_a_question']                   = '¿Alguna pregunta?';
$lang['card_expiration_year']              = 'Año de expiración';
$lang['card_expiration_month']             = 'Mes de expiración';
$lang['client_website']                    = 'Sitio web';
$lang['search_project_members']            = 'Buscar miembros del proyecto ...';
$lang['cf_translate_input_link_title']     = 'Título';
$lang['cf_translate_input_link_url']       = 'URL';
$lang['cf_translate_input_link_tip']       = 'Haga clic aquí para agregar un enlace';
$lang['task_edit_delete_timesheet_notice'] = 'La orden de la hoja de tiempo es %s, no puede %s la hoja de tiempo.';
$lang['department_username']               = 'IMAP Nombre de usuario';
$lang['department_username_help']          = 'Solo llene este campo si su IMAP El servidor usa el nombre de usuario para iniciar sesión en lugar de la dirección de correo electrónico. Tenga en cuenta que todavía necesitará agregar una dirección de correo electrónico.';
$lang['total_tickets_deleted']             = 'Total de Avisos eliminados: %s';

# Version 1.5.1
$lang['ticket_linked_to_project']                                = 'Este Aviso está vinculado al proyecto: %s';
$lang['only_own_files_contacts']                                 = 'Los contactos solo ven los archivos propios cargados en el área del cliente (archivos cargados en el perfil del cliente)';
$lang['only_own_files_contacts_help']                            = 'Si comparte el archivo manualmente desde el perfil del cliente a otros contactos, podrán ver el archivo.';
$lang['share_file_with']                                         = 'Compartir archivo con';
$lang['file_share_visibility_notice']                            = 'Este archivo no se comparte con los contactos, alterne la visibilidad nuevamente para recargar';
$lang['share_file_with_show']                                    = 'Este archivo se comparte con: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Permitir que el contacto principal vea / edite los detalles de facturación y envío';
$lang['estimate_due_after']                                      = 'Presupuesto Vencido Después (días)';

# Version 1.6.0
$lang['my_timesheets']                                   = 'Ver mis registros';
$lang['today']                                           = 'Hoy';
$lang['open_in_dropbox']                                 = 'Abrir en Dropbox';
$lang['show_primary_contact']                            = 'Mostrar el nombre completo del contacto principal en %s';
$lang['view_members_timesheets']                         = 'Ver registro completo';
$lang['priority']                                        = 'Prioridad';
$lang['fetch_from_google']                               = 'Obtener de google';
$lang['customer_fetch_lat_lng_usage']                    = 'Llene la dirección, ciudad y país antes de buscarlos para obtener el mejor resultado.';
$lang['g_search_address_not_found']                      = 'No se pudo encontrar la dirección, por favor intente nuevamente';
$lang['proposals_report']                                = 'Informe de remitos';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Si el miembro del personal no tiene permiso para los clientes, VER solo podrá crear nuevos tickets desde el área de administración a los contactos de los clientes que se asignen como administrador del cliente.';
$lang['staff_members_open_tickets_to_all_contacts']      = '¿Permitir a los miembros del personal abrir Avisos para todos los contactos?';
$lang['charts_based_report']                             = 'Informe basado en gráficos';
$lang['delete_backups_older_then']                       = 'Eliminar automáticamente las copias de seguridad más antiguas que X días (configure 0 para deshabilitar)';
$lang['responsible_admin']                               = 'Administrador responsable';
$lang['tags']                                            = 'Etiquetas';
$lang['tag']                                             = 'Etiqueta';
$lang['customer_map_notice']                             = 'Agregue longitud y latitud en el perfil del cliente para mostrar el mapa aquí';
$lang['default_view']                                    = 'Vista predeterminada';
$lang['day']                                             = 'Día';
$lang['agenda']                                          = 'Agenda';
$lang['timesheet_tags']                                  = 'Etiquetas de parte de horas';
$lang['show_more']                                       = 'Mostrar más';
$lang['show_less']                                       = 'Mostrar menos';
$lang['project_completed_date']                          = 'Fecha Cerrada';
$lang['language']                                        = 'Idioma';
$lang['this_week']                                       = 'Esta semana';
$lang['last_week']                                       = 'La semana pasada';
$lang['this_month']                                      = 'Este mes';
$lang['last_month']                                      = 'El mes pasado';
$lang['no_description_project']                          = 'No hay descripción para este proyecto.';
$lang['sales_string']                                    = 'Ventas';
$lang['no_project_members']                              = 'No hay miembros para este proyecto';
$lang['search_by_tags']                                  = '# + Etiqueta para buscar';
$lang['project_status_5']                                = 'Cancelado';

# Version 1.7.0
$lang['not_activity_new_reminder_created']        = 'establecer un nuevo recordatorio para %s con fecha %s';
$lang['not_activity_new_task_created']            = 'Nueva orden creada - %s';
$lang['recurring_invoice_draft_notice']           = 'Esta factura es con borrador de estado, debe marcar esta factura como enviada. Las facturas recurrentes con borrador de estado no serán recreadas por el trabajo sistema.';
$lang['recurring_recreate_hour_notice']           = '%s se recreará en una hora específica del día según la configuración ubicada en Configuración-> Configuración-Orden sistemas';
$lang['invoice_project_include_timesheets_notes'] = 'Incluir cada nota de la hoja de tiempo en la descripción del Producto';
$lang['events']                                   = 'Eventos';
$lang['clear']                                    = 'Limpiar';
$lang['auto_mark_as_public']                      = 'Marcado automático como público';
$lang['time_format']                              = 'Formato de tiempo';
$lang['time_format_24']                           = '24 horas';
$lang['time_format_12']                           = '12 horas';
$lang['delete_activity_log_older_then']           = 'Eliminar el registro de actividad del sistema anterior a X meses';
$lang['mark_as_read']                             = ' leído';
$lang['mark_all_as_read']                         = 'Marcar todo como leido';
$lang['tax_1']                                    = 'Impuesto 1';
$lang['tax_2']                                    = 'Impuesto 2';
$lang['total_with_tax']                           = 'Total con impuestos';
$lang['new_task_auto_assign_current_member']      = 'Asignar automáticamente creador de ordenes cuando se crea una nueva orden';
$lang['new_task_auto_assign_current_member_help'] = 'No se aplica si la orden está vinculada al proyecto y el creador no es miembro del proyecto';
$lang['copy_project_tasks_status']                = 'Estado de las ordenes';
$lang['tasks_summary']                            = 'Resumen de ordenes';
$lang['vault']                                    = 'Bóveda';
$lang['new_vault_entry']                          = 'Entrada nueva bóveda';
$lang['server_address']                           = 'Dirección del servidor';
$lang['port']                                     = 'Puerto';
$lang['vault_username']                           = 'Nombre de usuario';
$lang['vault_password']                           = 'Contraseña';
$lang['vault_description']                        = 'Breve descripción';
$lang['vault_entry']                              = 'Entrada de bóveda';
$lang['no_port_provided']                         = 'No provisto';
$lang['view_password']                            = 'Ver contraseña';
$lang['security_reasons_re_enter_password']       = 'Por razones de seguridad ingrese su contraseña a continuación';
$lang['password_change_fill_notice']              = 'Solo rellene el campo de contraseña si desea cambiar la contraseña';
$lang['vault_password_user_not_correct']          = 'Su contraseña no es correcta, por favor intente de nuevo';
$lang['no_vault_entries']                         = 'Entradas de bóveda no encontradas para este cliente.';
$lang['vault_entry_created_from']                 = 'Esta entrada de bóveda es creada por %s';
$lang['vault_entry_last_update']                  = 'Última actualización por %s';
$lang['vault_entry_visible_to_all']               = 'Visible para todos los miembros del personal que tienen acceso a este cliente';
$lang['vault_entry_visible_creator']              = 'Visible solo para mi (administrador no excluido)';
$lang['vault_entry_visible_administrators']       = 'Visible solo para administradores';
$lang['my_reminders']                             = 'Mis recordatorios';
$lang['reminder_related']                         = 'Relacionado con';
$lang['event_notification']                       = 'Notificación';
$lang['days']                                     = 'Días';
$lang['reminder_notification_placeholder']        = 'Ej. 30 minutos antes';
$lang['event_color']                              = 'Color de evento';
$lang['group_by_task']                            = 'Agrupar (orden)';
$lang['save']                                     = 'Guardar';
$lang['disable_languages']                        = 'Deshabilitar idiomas';

# Version 1.8.0
$lang['not_customer_viewed_invoice']                         = 'Una factura con numero %s ha sido visto';
$lang['not_customer_viewed_estimate']                        = 'Un Presupuesto con numero %s ha sido visto';
$lang['not_customer_viewed_proposal']                        = 'Un remito con número %s ha sido visto';
$lang['display_inline']                                      = 'Mostrar en línea';
$lang['email_header']                                        = 'Encabezado predefinido';
$lang['email_footer']                                        = 'Pie de página predefinido';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Excluir remitos con estado de borrador del área de clientes.';
$lang['pusher_app_key']                                      = 'APP Key';
$lang['pusher_app_secret']                                   = 'APP Secreto';
$lang['pusher_app_id']                                       = 'APP ID';
$lang['pusher_cluster_notice']                               = 'Deje en blanco para usar el grupo de pulsadores predeterminado.';
$lang['pusher_enable_realtime_notifications']                = 'Habilitar notificaciones en tiempo real';
$lang['task_is_overdue']                                     = 'Esta orden está atrasada';
$lang['this_year']                                           = 'Este año';
$lang['last_year']                                           = 'El año pasado';
$lang['customer_statement']                                  = 'Declaración';
$lang['customer_statement_for']                              = 'Declaración de cliente para %s';
$lang['account_summary']                                     = 'Resumen de la cuenta';
$lang['statement_beginning_balance']                         = 'Saldo inicial';
$lang['invoiced_amount']                                     = 'Cantidad facturada';
$lang['amount_paid']                                         = 'Cantidad pagada';
$lang['statement_from_to']                                   = '%s A %s';
$lang['customer_statement_info']                             = 'Mostrando todas las facturas y pagos entre %s y %s';
$lang['balance_due']                                         = 'Saldo adeudado';
$lang['statement_heading_date']                              = 'Fecha';
$lang['statement_heading_details']                           = 'Detalles';
$lang['statement_heading_amount']                            = 'Cantidad';
$lang['statement_heading_payments']                          = 'Pagos';
$lang['statement_heading_balance']                           = 'Equilibrar';
$lang['statement_invoice_details']                           = 'Factura %s - debido a %s';
$lang['statement_payment_details']                           = 'Pago (%s) de la factura %s';
$lang['statement_bill_to']                                   = 'Cliente:';
$lang['send_to_email']                                       = 'Enviar al correo electrónico';
$lang['statement_sent_to_client_success']                    = 'La declaración fue enviada al cliente.';
$lang['statement_sent_to_client_fail']                       = 'Problema al enviar la declaración';
$lang['view_account_statement']                              = 'Ver el estado de cuenta';
$lang['text_not_recommended_for_servers_limited_resources']  = 'No se recomienda si el servidor tiene recursos limitados. Ej. alojamiento compartido';
$lang['tasks_bull_actions_assign_notice']                    = 'Si la orden está vinculada al proyecto y el miembro del personal al que está asignando la orden no es miembro del proyecto, este personal se agregará automáticamente como miembro.';
$lang['company_information']                                 = 'Información de la empresa';
$lang['ticket_form']                                         = 'Formulario de Aviso';
$lang['ticket_form_subject']                                 = 'Tema';
$lang['ticket_form_name']                                    = 'Tu nombre';
$lang['ticket_form_email']                                   = 'Dirección de correo electrónico';
$lang['ticket_form_department']                              = 'Sector';
$lang['ticket_form_message']                                 = 'Mensaje';
$lang['ticket_form_priority']                                = 'Prioridad';
$lang['ticket_form_service']                                 = 'Relacionado con:';
$lang['ticket_form_submit']                                  = 'Enviar';
$lang['ticket_form_attachments']                             = 'Archivos adjuntos';
$lang['success_submit_msg']                                  = 'Gracias por contactarnos. Nos pondremos en contacto con usted en breve.';
$lang['vault_entry_share_on_projects']                       = 'Comparte esta entrada de bóveda en proyectos con miembros del proyecto.';
$lang['project_shared_vault_entry_login_details']            = 'Ver los detalles de acceso del sitio del cliente';
$lang['iso_code']                                            = 'ISO Código';
$lang['estimates_not_invoiced']                              = 'No facturado';
$lang['show_on_ticket_form']                                 = 'Mostrar en forma de Aviso';
$lang['cancel_upload']                                       = 'Cancelar subida';
$lang['show_table_export_button']                            = 'Mostrar el botón exportar tabla';
$lang['show_table_export_all']                               = 'A todos los miembros del personal.';
$lang['show_table_export_admins']                            = 'Solo a administradores';
$lang['show_table_export_hide']                              = 'Ocultar el botón de exportación para todos los miembros del personal';
$lang['task_created_by']                                     = 'Creado por %s';
$lang['validation_extension_not_allowed']                    = 'Extensión de archivo no permitida';
$lang['allow_staff_view_proposals_assigned']                 = 'Permitir que los miembros del personal vean las remitos donde están asignados';
$lang['task_users_working_on_tasks_multiple']                = 'Actualmente %s están trabajando en esta orden';
$lang['task_users_working_on_tasks_single']                  = 'Actualmentey %s esta trabajando en esta orden';

# Version 1.9.0
$lang['estimated_hours']                               = 'Horas estimadas';
$lang['two_factor_auth_failed_to_send_code']           = 'Error al enviar el código de autenticación de dos pasos al correo electrónico, es posible que la configuración SMTP no esté configurada correctamente';
$lang['two_factor_auth_code_sent_successfully']        = 'Se ha enviado un correo electrónico a %s con el código de verificación para verificar su inicio de sesión';
$lang['enable_two_factor_authentication']              = 'Habilitar la autenticación de dos pasos';
$lang['two_factor_authentication_info']                = 'La autenticación de dos factores se proporciona por correo electrónico. Antes de habilitar la autenticación de dos pasos, asegúrese de que la configuración de SMTP esté correctamente configurada y que el sistema pueda enviar un correo electrónico. La clave de autenticación única se enviará al correo electrónico al iniciar sesión.';
$lang['timesheets_overview_all_members_notice_admins'] = 'El resumen de las hojas de tiempo para todos los miembros del personal solo está disponible para los administradores.';
$lang['two_factor_authentication']                     = 'Autenticación de dos factores';
$lang['two_factor_authentication_code']                = 'Código';
$lang['admin_two_factor_auth_heading']                 = 'Código de autenticación';
$lang['two_factor_code_not_valid']                     = 'Código de autenticación no válido';
$lang['back_to_login']                                 = 'Volver al inicio de sesión';
$lang['enter_activity']                                = 'Entrar en actividad';
$lang['attach_files']                                  = 'Adjuntar archivos';
$lang['no_tags_used']                                  = 'No hay etiquetas utilizadas por el sistema.';
$lang['exclude_completed_tasks']                       = 'Excluir ordenes Cerradas';
$lang['modal_width_class']                             = 'Clase';
$lang['contract_copy']                                 = 'Copiar';
$lang['contract_copied_successfully']                  = 'Proveedor copiado exitosamente';
$lang['contract_copied_fail']                          = 'No se pudo copiar el proveedor';
$lang['project_marked_as_finished_to_contacts']        = '<b>Confirmar </b> ';
$lang['only_admins']                                   = 'Solo administradores';
$lang['new_notification']                              = 'Nueva notificación!';
$lang['enable_desktop_notifications']                  = 'Habilitar notificaciones de escritorio';
$lang['save_and_send']                                 = 'Guardar y Enviar';
$lang['private']                                       = 'Privado';
$lang['task_created_at']                               = 'Creado el %s';
$lang['hide_notified_reminders_from_calendar']         = 'Ocultar avisos notificados del calendario';
$lang['last_active']                                   = 'Última vez activo';
$lang['open_ticket']                                   = 'Abrir Aviso';
$lang['task_add_description']                          = 'Agregar descripción';
$lang['project_setting_create_tasks']                  = 'crear ordenes';
$lang['project_setting_edit_tasks']                    = 'editar ordenes (solo ordenes creadas desde contacto)';

# Version 1.9.2
$lang['items_report']                            = 'Informe de Productos';
$lang['reports_item']                            = 'Productos';
$lang['quantity_sold']                           = 'Cantidad vendida';
$lang['total_amount']                            = 'Cantidad total';
$lang['avg_price']                               = 'Precio promedio';
$lang['item_report_paid_invoices_notice']        = 'El informe de productos se genera solo a partir de facturas pagadas antes de descuentos e impuestos.';
$lang['overview']                                = 'Visión general';
$lang['timer_started_change_status_in_progress'] = 'Cambie el estado de la orden a En curso al iniciarse el temporizador (válido solo si el estado de la orden no está iniciado)';
$lang['company_info_format']                     = 'Formato de información de la empresa (PDF y HTML)';
$lang['customer_info_format']                    = 'Formato de información del cliente (PDF y HTML)';
$lang['custom_field_info_format_embed_info']     = 'Los campos personalizados para %s se pueden incrustar fácilmente en documentos PDF y HTML agregando los campos de combinación en el formato de página en la siguiente página: %s';
$lang['transfer_lead_notes_to_customer']         = 'Transfiera las notas de equipos al perfil del cliente';
$lang['authorized_signature_text']               = 'Firma autorizada';
$lang['show_pdf_signature_invoice']              = 'Mostrar firma PDF en factura';
$lang['show_pdf_signature_estimate']             = 'Mostrar firma PDF en el presupuesto';
$lang['signature']                               = 'Firma';
$lang['signature_image']                         = 'Imagen de firma';
$lang['insert_checklist_templates']              = 'Insertar plantillas de lista de verificación';
$lang['save_as_template']                        = 'Guardar como plantilla';
$lang['scroll_responsive_tables_help']           = 'Las tablas con una gran cantidad de datos tendrán filas de desplazamiento horizontal envueltas en el icono +.';
$lang['scroll_responsive_tables']                = 'Activar Tablas responsivas de desplazamiento';
$lang['invoice_item_add_edit_rate_currency']     = 'Precio - %s';
$lang['total_files_deleted']                     = 'Total de archivos borrados: %s';
$lang['invalid_transaction']                     = 'Transacción inválida. Inténtalo de nuevo.';
$lang['payment_gateway_payu_money_key']          = 'PayU Llave del dinero';
$lang['payment_gateway_payu_money_salt']         = 'PayU Dinero';
$lang['settings_paymentmethod_description']      = 'Descripción del pago';

# Version 1.9.3
$lang['default_ticket_reply_status']          = 'Estado predeterminado seleccionado al responder Aviso';
$lang['ticket_add_response_and_back_to_list'] = 'Volver a la lista de Avisos después de enviar la respuesta';

# Version 1.9.4
$lang['default_task_status']                               = 'Estado predeterminado cuando se crea una nueva orden';
$lang['custom_field_pdf_html_help']                        = 'Asegúrate de revisar' . $lang['custom_field_show_on_client_portal'] . ' campo si desea que los campos personalizados sean visibles para el área de clientes y cuando el cliente descarga PDF o recibe PDF por correo electrónico.';
$lang['auto']                                              = 'Auto';
$lang['email_queue']                                       = 'Cola de correo electrónico';
$lang['email_queue_enabled']                               = 'Habilitar la cola de correo electrónico';
$lang['email_queue_skip_attachments']                      = '¿No agrega correos electrónicos con archivos adjuntos en la cola?';
$lang['disable']                                           = 'Inhabilitar';
$lang['enable']                                            = 'Habilitar';
$lang['auto_dismiss_desktop_notifications_after']          = 'Notificaciones de despido automático después de X segundos (0 para deshabilitar)';
$lang['proposal_info_format']                              = 'Formato de información del remito (PDF y HTML)';
$lang['hide_tasks_on_main_tasks_table']                    = 'Ocultar ordenes de proyecto en la tabla de ordenes principales (área de administración)';
$lang['ticket_replies_order']                              = 'Orden de las respuestas del Aviso';
$lang['ticket_replies_order_notice']                       = 'El mensaje inicial del Aviso siempre se mostrará como primero.';
$lang['invoice_cancelled_email_disabled']                  = 'Se cancela la factura. Des cancelado para habilitar el correo electrónico al cliente';
$lang['email_notifications']                               = 'Notificaciónes de Correo Electrónico';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Pago registrado, correo electrónico enviado a: %s';
$lang['exclude_inactive']                                  = 'Ocultar inactivos -';
$lang['disable_all']                                       = 'Desactivar todo';
$lang['enable_all']                                        = 'Activar todo';
$lang['reccuring_invoice_option_gen_and_send']             = 'Generar y auto-enviar la factura renovada al cliente.';
$lang['reccuring_invoice_option_gen_unpaid']               = 'Generar una factura sin pagar';
$lang['reccuring_invoice_option_gen_draft']                = 'Generar un proyecto de factura';
$lang['event_created_by']                                  = 'Este evento es creado por %s';

# Version 1.9.5
$lang['customers_assigned_to_me']              = 'Clientes asignados a mi';
$lang['bcc_all_emails']                        = 'BCC Todos los correos electrónicos a';
$lang['confirmation_of_identity']              = 'Confirmación de identidad';
$lang['accept_identity_confirmation']          = 'Requerir confirmación de identidad en aceptar';
$lang['accepted_identity_info']                = 'Este %s es aceptado por %s en %s desde la dirección IP %s';
$lang['clear_this_information']                = 'Borrar esta información';
$lang['new_task_auto_follower_current_member'] = 'Agregar automáticamente creador de ordenes como seguidor de ordenes cuando se crea una nueva orden';
$lang['expenses_report_net']                   = 'Importe neto (subtotal)';
$lang['expense_field_billable_help']           = 'Si es facturable, %s se puede agregar a la descripción larga de la factura.';
$lang['task_biillable_checked_on_creation']    = '¿Se verifica la opción facturable por defecto cuando se crea una nueva orden?';
$lang['pause_overdue_reminders']               = 'Pausar recordatorios vencidos';
$lang['resume_overdue_reminders']              = 'Reanudar recordatorios de vencimiento';
# Credit Notes
$lang['credit_notes']                                            = 'Or. de Compras';
$lang['credit_note']                                             = 'Or. de Compra';
$lang['credit_note_lowercase']                                   = 'or. de compra';
$lang['credit_note_not_found']                                   = 'Orden no encontrada';
$lang['credit_note_date']                                        = 'Fecha de or. de compra';
$lang['credit_date']                                             = 'Fecha';
$lang['settings_sales_next_credit_note_number']                  = 'Próximo número de or. de compra';
$lang['credit_note_number_prefix']                               = 'Prefijo del número de or. de compra';
$lang['credit_note_number']                                      = 'Or. de compra #';
$lang['credit_note_number_exists']                               = 'El número de or. de compra ya existe';
$lang['show_shipping_on_credit_note']                            = 'Mostrar detalles de envío en or. de compra';
$lang['credit_note_number_decrement_on_delete']                  = 'Disminuir el número de or. de compra cuando se eliminan.';
$lang['credit_note_number_decrement_on_delete_help']             = 'El número se reducirá solo si se crea la última or. de compra.';
$lang['credit_note_status']                                      = 'Estado';
$lang['credit_note_status_open']                                 = 'Abierto';
$lang['credit_note_status_closed']                               = 'Cerrado';
$lang['credit_note_status_void']                                 = 'Anulada';
$lang['credit_note_mark_as_open']                                = ' abierto';
$lang['new_credit_note']                                         = 'Nueva or. de compra';
$lang['credit_note_amount']                                      = 'Cantidad';
$lang['credit_note_remaining_credits']                           = 'Cantidad restante';
$lang['credit_note_client_note']                                 = 'Nota';
$lang['invoices_credited']                                       = 'Facturas Acreditadas';
$lang['apply_credits']                                           = 'Aplicar';
$lang['x_credits_available']                                     = '%s disponibles.';
$lang['credit_amount']                                           = 'Monto de crédito';
$lang['credits_available']                                       = 'Creditos disponibles';
$lang['amount_to_credit']                                        = 'Monto de crédito';
$lang['invoice_credits_applied']                                 = 'Créditos aplicados a la factura.';
$lang['applied_credits']                                         = 'Créditos Aplicados';
$lang['credit_amount_bigger_then_invoice_balance']               = 'El monto total de los créditos es mayor que el saldo de la factura pendiente.';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'La cantidad total de créditos es mayor que los créditos restantes';
$lang['credited_invoices_not_found']                             = 'Facturas acreditadas no encontradas';
$lang['credit_invoice_number']                                   = 'Número de factura';
$lang['credits_used']                                            = 'Creditos utilizados';
$lang['credits_remaining']                                       = 'Créditos restantes';
$lang['amount_credited']                                         = 'Cantidad acreditada';
$lang['credits_applied_cant_delete_status_closed']               = 'Esta or. de compra tiene el estado Cerrado; primero debe eliminar la or. de compra.';
$lang['credits_applied_cant_delete_credit_note']                 = 'Esta or. de compra tiene créditos aplicados, primero debe eliminar los créditos para eliminarla.';
$lang['credit_note_pdf_heading']                                 = 'Orden de Compra';
$lang['show_status_on_pdf']                                      = 'Mostrar el estado de %s en documentos PDF';
$lang['show_pdf_signature_credit_note']                          = 'Mostrar firma PDF en or. de compra';
$lang['calendar_credit_note_reminder']                           = 'Recordatorio de or. de compra';
$lang['show_credit_note_reminders_on_calendar']                  = 'Recordatorios de Or. de Compra';
$lang['reminders']                                               = 'Recordatorios';
$lang['invoice_activity_applied_credits']                        = 'Créditos aplicados de %s desde %s';
$lang['create_credit_note']                                      = 'Crear or. de compra';
$lang['confirm_invoice_credits_from_credit_note']                = '¿Está seguro de que desea crear la or. de compra?';
$lang['credit_invoice_date']                                     = 'Fecha de la factura';
$lang['apply_to_invoice']                                        = 'Aplicar a factura';
$lang['apply_credits_from']                                      = 'Aplicar créditos de %s';
$lang['credits_successfully_applied_to_invoices']                = 'Facturas créditos aplicados.';
$lang['credit_note_send_to_client_modal_heading']                = 'Enviar or. de compra al cliente';
$lang['credit_note_sent_to_client_success']                      = 'La or. de compra se envio al cliente.';
$lang['credit_note_sent_to_client_fail']                         = 'Problema al enviar la or. de compra al correo electrónico';
$lang['credit_note_no_invoices_available']                       = 'No hay facturas disponibles para este cliente.';
$lang['show_total_paid_on_invoice']                              = 'Mostrar el total pagado en la factura';
$lang['show_credits_applied_on_invoice']                         = 'Mostrar los créditos aplicados en la factura';
$lang['show_amount_due_on_invoice']                              = 'Mostrar la cantidad debida en la factura';
$lang['customer_profile_update_credit_notes']                    = 'Actualice la información de envío / facturación en todas las or. de compras anteriores (las or. de compras cerradas no se ven afectadas)';
$lang['zip_credit_notes']                                        = 'Or. de Compras Zip';
$lang['statement_credit_note_details']                           = 'Or. de Compra %s';
$lang['statement_credits_applied_details']                       = 'Or. de Compra %s - %s para pago de %s';
$lang['credit_note_files']                                       = 'Archivos de or. de compras';
$lang['credit_notes_report']                                     = 'Informe de or. de compras';

$lang['credit_note_set_reminder_title']     = 'Establecer recordatorio de or. de compra';
$lang['credit_note_add_edit_client_note']   = $lang['invoice_add_edit_client_note'];
$lang['credit_note_bill_to']                = $lang['invoice_bill_to'];
$lang['credit_note_prefix']                 = $lang['settings_sales_invoice_prefix'];
$lang['credit_note_admin_note']             = $lang['invoice_add_edit_admin_note'];
$lang['credit_note_total']                  = $lang['invoice_total'];
$lang['credit_note_adjustment']             = $lang['invoice_adjustment'];
$lang['credit_note_discount']               = $lang['invoice_discount'];
$lang['credit_note_subtotal']               = $lang['invoice_subtotal'];
$lang['credit_note_table_quantity_heading'] = $lang['invoice_table_quantity_heading'];
$lang['credit_note_table_hours_heading']    = $lang['invoice_table_hours_heading'];
$lang['credit_note_table_item_heading']     = $lang['invoice_table_item_heading'];
$lang['credit_note_table_item_description'] = $lang['invoice_table_item_description'];
$lang['credit_note_table_rate_heading']     = ' ';
$lang['credit_note_table_tax_heading']      = ' ';
$lang['credit_note_table_amount_heading']   = $lang['invoice_table_amount_heading'];
$lang['credit_notes_list_all']              = $lang['invoices_list_all'];

# Version 1.9.7
$lang['ticket_assigned']                          = 'Asignado';
$lang['dashboard_options']                        = 'Opciones de Tablero';
$lang['reset_dashboard']                          = 'Reiniciar el tablero';
$lang['widgets']                                  = 'Widgets';
$lang['s_chart']                                  = '%s Gráfico';
$lang['quick_stats']                              = 'Estadísticas rápidas';
$lang['user_widget']                              = 'Widget de usuario';
$lang['widgets_visibility_help_text']             = 'Los widgets que se muestran solo si tienen suficientes datos no tienen opciones para ocultarse o mostrarse.';
$lang['show_project_on_estimate']                 = 'Mostrar el nombre del proyecto en el Presupuesto';
$lang['show_project_on_invoice']                  = 'Mostrar el nombre del proyecto en la factura';
$lang['show_project_on_credit_note']              = 'Mostrar el nombre del proyecto en la or. de compra';
$lang['visible_tabs']                             = 'Pestañas visibles';
$lang['all']                                      = 'Todos';
$lang['view_widgetable_area']                     = 'Ver el área de widgets';
$lang['hide_widgetable_area']                     = 'Ocultar área de widgets';
$lang['no_items_warning']                         = 'Introduzca al menos un elemento.';
$lang['item_forgotten_in_preview']                = '¿Has olvidado añadir este producto?';
$lang['not_task_status_changed']                  = '%s - el estado de la orden cambió a %s';
$lang['not_project_activity_task_status_changed'] = 'Estado de orden cambiado';
$lang['reset']                                    = 'Reiniciar';
$lang['save_message_as_predefined_reply']         = 'Guardar mensaje como respuesta predefinida';
$lang['inline_create_option']                     = '¿Permitir que los miembros del personal que no son administradores creen %s en el área de creación / edición de %s?';
$lang['inline_create']                            = 'Crear en línea';
$lang['inline_create_option_predefined_replies']  = 'Permitir que los miembros del personal que no son administradores guarden respuestas predefinidas del mensaje del ticket';
$lang['reminders_view_none_admin']                = 'Mostrando tus recordatorios y recordatorios creados por ti.';
$lang['show_tabs_and_options']                    = 'Mostrar pestañas y opciones';
$lang['no_milestones_found']                      = 'Este proyecto no tiene objetivos.';
$lang['lead_is_contact_create_task']              = 'Crear orden de equipo y asignarlo a un miembro del personal responsable.';
$lang['existing_customer']                        = 'Cliente existente';
$lang['use_company_name_instead']                 = 'Utilice el nombre de la empresa en su lugar';
$lang['customer_delete_transactions_warning']     = 'Este cliente tiene transacciones, %s, debe eliminar las transacciones o mudarse a otro cliente para realizar esta acción.';

# Version 1.9.8
$lang['sending_email_contact_permissions_warning'] = 'Error al seleccionar automáticamente los contactos del cliente. Asegúrese de que el cliente tenga contactos activos y contactos asociados con notificaciones de correo electrónico para %s habilitado.';
$lang['help_leads_create_permission']              = 'Todo el personal puede crear equipos, excepto los miembros marcados como no miembros del personal';
$lang['help_leads_edit_permission']                = 'Todos los que tienen acceso a equipos específicos pueden editar la mayor parte de la información de equipos.';
$lang['triggers']                                  = 'Gatillos';
$lang['notice_only_one_active_sms_gateway']        = ' ';
$lang['sms_trigger_disable_tip']                   = ' ';
$lang['tables']                                    = 'Tablas';
$lang['only_project_tasks']                        = 'Solo ordenes relacionadas con el proyecto.';
$lang['download_all']                              = 'Descargar todo';
$lang['settings_sales_credit_note_number_format']  = 'Formato de número de or. de compra';
$lang['sms_reminder_sent_to']                      = 'recordatorio enviado a %s';
$lang['ideal_customer_statement_descriptor']       = 'Descriptor de estado de cuenta (mostrado en el estado de cuenta bancario del cliente)';
$lang['payment_received_awaiting_confirmation']    = 'Su pago fue recibido y está en espera de confirmación.';
$lang['discount_fixed_amount']                     = 'Cantidad fija';
$lang['timesheet_duration_instead']                = 'Introduzca la duración del tiempo en su lugar';
$lang['timesheet_date_instead']                    = 'Establecer hora de inicio y final en su lugar';
$lang['allow_non_admin_members_to_import_leads']   = 'Permitir que los miembros del personal que no son administradores importen equipos';
$lang['project_hide_tasks_settings_info']          = 'Las ordenes se excluyen de la tabla de ordenes principales para este proyecto, puede ver las ordenes del proyecto solo en esta área.';

# Version 1.9.9
$lang['ticket_create_no_contact']            = 'Aviso Interno';
$lang['ticket_create_to_contact']            = 'Asignar Cliente';
$lang['showing_billable_tasks_from_project'] = 'Mostrando ordenes facturables de proyecto';
$lang['no_billable_tasks_found']             = 'Ordenes facturables no encontradas';
$lang['help_leads_permission_view']          = 'Si este permiso no está marcado, un miembro del personal solo podrá ver los prospectos donde se asignan, los candidatos creados por el miembro del personal y los candidatos que están marcados como públicos.';

# Version 2.0.0

$lang['customers']                                              = $lang['clients'];
$lang['knowledge_base']                                         = $lang['kb_string'];
$lang['staff']                                                  = $lang['als_staff'];
$lang['checklist_templates']                                    = 'Plantillas de lista de ordenes';
$lang['emails_tracking']                                        = 'Seguimiento de correos electrónicos';
$lang['no_tracked_emails_sent']                                 = 'No se han enviado correos electrónicos rastreados.';
$lang['tracked_emails_sent']                                    = 'Correos electrónicos seguidos enviados';
$lang['tracked_email_date']                                     = 'Fecha';
$lang['tracked_email_subject']                                  = 'Tema';
$lang['tracked_email_to']                                       = 'A';
$lang['tracked_email_opened']                                   = 'Abierto';
$lang['tracked_email_not_opened']                               = 'Cerrado';
$lang['not_viewed_yet']                                         = 'Este %s no es visto todavía por el cliente';
$lang['undo']                                                   = 'Deshacer';
$lang['sign_document_validation']                               = 'Por favor firme el documento.';
$lang['document_customer_signature_text']                       = 'Firma (Cliente)';
$lang['accept_identity_confirmation_and_signature_sign']        = 'Requerir firma digital y confirmación de identidad al aceptar.';
$lang['legal_bound_text']                                       = 'Texto legal encuadernado';
$lang['e_signature_sign']                                       = 'Firmar';
$lang['is_signed']                                              = 'Firmado';
$lang['is_not_signed']                                          = 'No firmado';
$lang['download']                                               = 'Descargar';
$lang['view_pdf_in_new_window']                                 = 'Ver PDF en Nueva pestaña';
$lang['show_pdf_signature_contract']                            = 'Mostrar firma PDF en el proveedor';
$lang['document_signed_successfully']                           = 'Has firmado este documento';
$lang['document_signed_info']                                   = 'Este documento está firmado por %s en %s desde la dirección IP %s';
$lang['keep_signature']                                         = 'Mantener la firma del cliente';
$lang['view_contract']                                          = 'Ver Proveedor';
$lang['summary']                                                = 'Resumen';
$lang['discussion']                                             = 'Discusión';
$lang['general_information']                                    = 'Información general';
$lang['proposal_information']                                   = 'Información del remito';
$lang['contract_comments']                                      = 'Comentarios';
$lang['not_contract_comment_from_client']                       = 'Nuevo comentario del cliente en el proveedor %s ...';
$lang['contract_files']                                         = 'Archivos de proveedor';
$lang['date_signed']                                            = 'Fecha de firma';
$lang['clear_signature']                                        = 'Quitar firma';
$lang['recurring_has_ended']                                    = 'Esta recurrente %s ha terminado.';
$lang['cycles_remaining']                                       = 'Ciclos restantes';
$lang['cycles_infinity']                                        = 'Infinito';
$lang['recurring_total_cycles']                                 = 'Ciclos totales';
$lang['cycles_passed']                                          = 'Pasado %s';
$lang['api_key_not_set_error_message']                          = 'Clave API no configurada';
$lang['subscription']                                           = 'Actualizar';
$lang['subscription_lowercase']                                 = 'Actualizar';
$lang['subscriptions']                                          = 'Actualizar';
$lang['tax_is_used_in_subscriptions_warning']                   = 'No puede actualizar este impuesto porque lo utilizan las suscripciones.';
$lang['credit_card']                                            = 'Tarjeta de crédito';
$lang['update_credit_card']                                     = 'Actualizar tarjeta de crédito';
$lang['credit_card_update_info']                                = '¿Quieres actualizar la tarjeta de crédito que tenemos archivada? Proporcione los nuevos detalles aquí. La información de su tarjeta nunca tocará directamente nuestro servidor.';
$lang['update_card_details']                                    = 'Detalles de la tarjeta de actualización';
$lang['update_card_btn']                                        = 'Tarjeta de actualización';
$lang['subscription_name']                                      = 'Actualizar';
$lang['subscriptions_description']                              = 'Descripción';
$lang['subscribe']                                              = 'Suscribir';
$lang['subscription_date']                                      = 'Fecha';
$lang['first_billing_date']                                     = 'Primera fecha de facturación';
$lang['allow_primary_contact_to_update_credit_card']            = '¿Permitir que el contacto principal actualice el token de la tarjeta de crédito almacenado?';
$lang['show_subscriptions_in_customers_area']                   = 'Actualizar';
$lang['show_subscriptions_in_customers_area_help']              = 'Esta opción es válida solo para el contacto principal del cliente.';
$lang['subscription_sent_to_email_success']                     = 'Suscripción enviada al email correctamente';
$lang['subscription_sent_to_email_fail']                        = 'Error al enviar la suscripción al correo electrónico';
$lang['new_subscription']                                       = 'Actualizar cliente';
$lang['subscription_status']                                    = 'Estado';
$lang['next_billing_cycle']                                     = 'Próximo ciclo de facturación';
$lang['subscription_not_subscribed']                            = 'No suscrito';
$lang['send_subscription']                                      = 'Enviar suscripción';
$lang['subscription_will_send_to_primary_contact']              = 'La suscripción será enviada al contacto principal.';
$lang['subscription_resumed']                                   = 'La suscripción está configurada para activarse con éxito';
$lang['subscription_canceled']                                  = 'Suscripción cancelada con éxito';
$lang['no_credit_card_found']                                   = 'No se encontró tarjeta de crédito';
$lang['cancel_immediately']                                     = 'Cancelar inmediatamente';
$lang['cancel_at_end_of_billing_period']                        = 'Cancelar al final del período de facturación';
$lang['view_subscription']                                      = 'Ver suscripción';
$lang['subscription_future']                                    = 'Futuro';
$lang['subscription_active']                                    = 'Activo';
$lang['subscription_past_due']                                  = 'Atrasado';
$lang['subscription_canceled']                                  = 'Cancelado';
$lang['subscription_unpaid']                                    = 'No pagado';
$lang['billing_plan']                                           = 'Plan de facturación';
$lang['upcoming_invoice']                                       = 'Próxima factura';
$lang['resume_now']                                             = 'Reanudar ahora';
$lang['subscription_not_yet_subscribed']                        = 'El cliente aún no está suscrito a esta suscripción.';
$lang['subscription_is_canceled_no_resume']                     = 'Esta suscripción se cancela y no se puede reanudar.';
$lang['subscription_will_be_canceled_at_end_of_billing_period'] = 'Esta suscripción será cancelada al final del período de facturación.';
$lang['customer_successfully_subscribed_to_subscription']       = 'Gracias por suscribirte a %s';
$lang['date_subscribed']                                        = 'Fecha de suscripcion';
$lang['reports']                                                = 'Informes';
$lang['subscriptions_summary']                                  = 'Resumen de suscripciones';
$lang['calendar_only_assigned_tasks']                           = 'Mostrar solo las ordenes asignadas al miembro registrado del personal';
$lang['invoice_activity_subscription_payment_succeeded']        = 'Pago de la suscripción, correo electrónico enviado a: %s';
$lang['mail_engine']                                            = 'Motor de correo';
$lang['settings_require_client_logged_in_to_view_contract']     = 'Requerir que el cliente esté conectado para ver el proveedor';
$lang['privacy_policy']                                         = 'Política de privacidad';
$lang['gdpr_terms_agree']                                       = 'Estoy de acuerdo con la <a href="%s" target="_blank">Términos y condiciones</a>';
$lang['terms_and_conditions_validation']                        = 'Debes aceptar los Términos y Condiciones para continuar.';
$lang['gdpr']                                                   = 'Reglamento General de Protección de Datos';
$lang['data_removal_request_sent']                              = 'Aviso de eliminación de datos enviada con éxito';
$lang['gdpr_consents']                                          = 'Consentimientos';
$lang['gdpr_consent']                                           = 'Consentimiento';
$lang['gdpr_consent_purpose']                                   = 'Propósito';
$lang['gdpr_consent_opt_in']                                    = 'Optar en';
$lang['gdpr_consent_opt_out']                                   = 'Optar por no';
$lang['gdpr_consent_agree']                                     = 'Estoy de acuerdo';
$lang['gdpr_consent_disagree']                                  = 'Estoy en desacuerdo';
$lang['view_consent']                                           = 'Ver consentimiento';
$lang['transfer_consent']                                       = 'Consentimiento de transferencia';
$lang['view_public_form']                                       = 'Ver formulario público';
$lang['update_consent']                                         = 'Consentimiento de actualización';
$lang['update_consent']                                         = 'Consentimiento de actualización';
$lang['consent_last_updated']                                   = 'Última actualización: %s';
$lang['showing_search_result']                                  = 'Mostrando resultados de búsqueda de: %s';
$lang['per_page']                                               = 'Por página';
$lang['allow_staff_view_invoices_assigned']                     = 'Permitir que los miembros del personal vean las facturas donde están asignadas';
$lang['allow_staff_view_estimates_assigned']                    = 'Permitir que los miembros del personal vean los presupuestos donde están asignados';
$lang['gdpr_right_to_be_informed']                              = 'Derecho a ser informado';
$lang['gdpr_right_of_access']                                   = 'Derecho de acceso';
$lang['gdpr_right_to_data_portability']                         = 'Derecho a la portabilidad de datos';
$lang['gdpr_right_to_erasure']                                  = 'Derecho a borrar';
$lang['edit_my_information']                                    = 'Editar mi información';
$lang['export_my_data']                                         = 'Exportar mis datos';
$lang['request_data_removal']                                   = 'Aviso de eliminación de datos';
$lang['explanation_for_data_removal']                           = 'Explicación para la eliminación de datos';
$lang['briefly_describe_why_remove_data']                       = 'Describa brevemente por qué quiere eliminar los datos';
$lang['date_published']                                         = 'Fecha de publicación';
$lang['view']                                                   = 'Ver';
$lang['customer_is_subscribed_to_subscription_info']            = 'El cliente está suscrito a esta suscripción.';
$lang['save_last_order_for_tables']                             = 'Guardar el último pedido de tablas';
$lang['date_created']                                           = 'Fecha de creación';

# Version 2.0.1
$lang['company_logo_dark']                                      = 'Logotipo de la empresa oscuro';
$lang['customers_register_require_confirmation']                = 'Requiere confirmación de registro del administrador después del registro de cliente';
$lang['customer_requires_registration_confirmation']            = 'Requiere confirmación de registro';
$lang['confirm_registration']                                   = 'Confirmar registro';
$lang['customer_registration_successfully_confirmed']           = 'Registro de cliente confirmado exitosamente';
$lang['customer_register_account_confirmation_approval_notice'] = 'Gracias por registrarse, su cuenta está pendiente de aprobación y será confirmada pronto.';
$lang['after_subscription_payment_succeeded']                   = 'Después del pago de la suscripción se realiza correctamente';
$lang['subscription_option_send_invoice']                       = 'Enviar la factura';
$lang['subscription_option_send_payment_receipt']               = 'Enviar recibo de pago';
$lang['subscription_option_send_payment_receipt_and_invoice']   = 'Enviar factura y recibo de pago';
$lang['subscription_option_do_nothing']                         = 'No hacer nada';
$lang['gdpr_not_enabled']                                       = 'GDPR no disponible';
$lang['enable_gdpr']                                            = 'Habilitar GDPR';
$lang['gdpr_right_to_rectification']                            = 'Derecho de rectificación';
$lang['test_sms_config']                                        = ' ';
$lang['test_sms_message']                                       = ' ';
$lang['send_test_sms']                                          = '';
$lang['gdpr_short']                                             = 'Perfil';
$lang['allow_non_admin_staff_to_delete_ticket_attachments']     = 'Permitir que los miembros del personal que no son administradores eliminen el adjunto del Aviso';

# Version 2.1.0
$lang['contract_number']                                = 'Número de proveedor';
$lang['project_changing_status_recurring_tasks_notice'] = 'Estás cambiando el estado a {0}, Todas las ordenes recurrentes serán canceladas.';
$lang['not_contract_signed']                            = 'El proveedor con el sujeto %s ha sido firmado por el cliente.';
$lang['the_number_sign']                                = '#';
$lang['not_new_ticket_reply']                           = 'El cliente respondió al Aviso - %s';
$lang['receive_notification_on_new_ticket_replies']     = 'Recibir notificación cuando el cliente responda a un Aviso.';
$lang['receive_notification_on_new_ticket_reply_help']  = 'Todos los miembros del personal que pertenecen al sector de Avisos recibirán una notificación cuando el cliente responda a un Aviso.';
$lang['payment_gateway_enable_paypal']                  = 'Habilitar pagos de PayPal';
$lang['project_member']                                 = 'Miembro del Proyecto';
$lang['contract_notes']                                 = 'Notas';
$lang['contract_add_note']                              = 'Agregar nota';
