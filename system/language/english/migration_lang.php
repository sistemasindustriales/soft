<?php
/**
 * @copyright	Copyright (c) 2019 - Alaniz Fabian - Soft Empresarial SA
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['migration_none_found'] = 'No se encontraron migraciones.';
$lang['migration_not_found'] = 'No se pudo encontrar migración con el número de versión: %s.';
$lang['migration_sequence_gap'] = 'Hay una brecha en la secuencia de migración cerca del número de versión: %s.';
$lang['migration_multiple_version'] = 'Existen múltiples migraciones con el mismo número de versión: %s.';
$lang['migration_class_doesnt_exist'] = 'La clase de migracion "%s" no pudo ser encontrado.';
$lang['migration_missing_up_method'] = 'La clase de migracion "%s" Falta un método "subir".';
$lang['migration_missing_down_method'] = 'La clase de migracion "%s" Falta un método "bajar".';
$lang['migration_invalid_filename'] = 'Migración "%s" tiene un nombre de archivo inválido';
