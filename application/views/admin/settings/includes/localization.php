<?php
$date_formats = get_available_date_formats();
?>
<div class="form-group">
    <label for="dateformat" class="control-label"><?php echo _l('settings_localization_date_format'); ?></label>
    <select name="settings[dateformat]" id="dateformat" class="form-control selectpicker" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
        <?php foreach($date_formats as $key => $val){ ?>
        <option value="<?php echo $key; ?>" <?php if($key == get_option('dateformat')){echo 'selected';} ?>><?php echo $val; ?></option>
        <?php } ?>
    </select>
</div>
<hr />
<div class="form-group">
    <label for="time_format" class="control-label"><?php echo _l('time_format'); ?></label>
    <select name="settings[time_format]" id="time_format" class="form-control selectpicker" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
        <option value="24" <?php if('24' == get_option('time_format')){echo 'selected';} ?>><?php echo _l('time_format_24'); ?></option>
        <option value="12" <?php if('12' == get_option('time_format')){echo 'selected';} ?>><?php echo _l('time_format_12'); ?></option>
    </select>
</div>


