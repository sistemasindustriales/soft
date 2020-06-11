<?php
/**
 * @copyright	Copyright (c) 2019 - Alaniz Fabian - Soft Empresarial SA
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'No se puede determinar la configuración de la base de datos en función de la cadena de conexión que envió.';
$lang['db_unable_to_connect'] = 'No se puede conectar a su servidor de base de datos utilizando la configuración proporcionada.';
$lang['db_unable_to_select'] = 'No se puede seleccionar la base de datos especificada: %s';
$lang['db_unable_to_create'] = 'No se puede crear la base de datos especificada: %s';
$lang['db_invalid_query'] = 'La consulta que ha enviado no es válida.';
$lang['db_must_set_table'] = 'Debe configurar la tabla de la base de datos que se utilizará con su consulta.';
$lang['db_must_use_set'] = 'Debe utilizar el método "set" para actualizar una entrada.';
$lang['db_must_use_index'] = 'Debe especificar un índice para que coincida en las actualizaciones por lotes.';
$lang['db_batch_missing_index'] = 'Falta una o más filas enviadas para la actualización por lotes del índice especificado.';
$lang['db_must_use_where'] = 'Las actualizaciones no están permitidas a menos que contengan una cláusula "donde".';
$lang['db_del_must_use_where'] = 'No se permiten las eliminaciones a menos que contengan una cláusula "donde" o "me gusta".';
$lang['db_field_param_missing'] = 'Para obtener los campos requiere el nombre de la tabla como parámetro.';
$lang['db_unsupported_function'] = 'Esta función no está disponible para la base de datos que está utilizando.';
$lang['db_transaction_failure'] = 'Fallo de transacción: Rollback realizado.';
$lang['db_unable_to_drop'] = 'No se puede eliminar la base de datos especificada.';
$lang['db_unsupported_feature'] = 'Característica no admitida de la plataforma de base de datos que está utilizando.';
$lang['db_unsupported_compression'] = 'El formato de compresión de archivos que eligió no es compatible con su servidor.';
$lang['db_filepath_error'] = 'No se pueden escribir datos en la ruta del archivo que ha enviado.';
$lang['db_invalid_cache_path'] = 'La ruta de la caché que ha enviado no es válida o no se puede escribir.';
$lang['db_table_name_required'] = 'Se requiere un nombre de tabla para esa operación.';
$lang['db_column_name_required'] = 'Se requiere un nombre de columna para esa operación.';
$lang['db_column_definition_required'] = 'Se requiere una definición de columna para esa operación.';
$lang['db_unable_to_set_charset'] = 'No se puede establecer el conjunto de caracteres de conexión del cliente: %s';
$lang['db_error_heading'] = 'Ocurrió Un Error en la Base de Datos';
