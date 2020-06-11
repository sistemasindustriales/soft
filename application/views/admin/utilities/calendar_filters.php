<div id="calendar_filters" style="<?php if(!$this->input->post('calendar_filters')){ echo 'display:none;'; } ?>">
    <?php echo form_open(); ?>
    <?php echo form_hidden('calendar_filters',true); ?>
    <div class="row">
        <div class="col-md-3">
            <div class="checkbox">
                <input type="checkbox" value="1" name="events" id="cf_events"<?php if($this->input->post('events')){echo ' checked';} ?>>
                <label for="cf_events"><?php echo _l('events'); ?></label>
            </div>
            <?php if(get_option('show_tasks_on_calendar') == 1){ ?>
            <div class="checkbox">
                <input type="checkbox" value="1" name="tasks" id="cf_tasks"<?php if($this->input->post('tasks')){echo ' checked';} ?>>
                <label for="cf_tasks"><?php echo _l('tasks'); ?></label>
            </div>
            <?php } ?>
            <?php if(get_option('show_projects_on_calendar') == 1){ ?>
            <div class="checkbox">
                <input type="checkbox" value="1" name="projects" id="cf_projects"<?php if($this->input->post('projects')){echo ' checked';} ?>>
                <label for="cf_projects"><?php echo _l('projects'); ?></label>
            </div>
            <?php } ?>
           
            
        </div>
        <div class="col-md-3">
           
        
        <?php if(get_option('show_customer_reminders_on_calendar') == 1){ ?>
        <div class="checkbox">
            <input type="checkbox" value="1" name="customer_reminders" id="cf_customers_reminders"<?php if($this->input->post('customer_reminders')){echo ' checked';} ?>>
            <label for="cf_customers_reminders"><?php echo _l('show_customer_reminders_on_calendar'); ?></label>
        </div>
        <?php } ?>

        
          <?php if(get_option('show_lead_reminders_on_calendar') == 1){ ?>
        <div class="checkbox">
            <input type="checkbox" value="1" name="lead_reminders" id="cf_leads_reminders"<?php if($this->input->post('lead_reminders')){echo ' checked';} ?>>
            <label for="cf_leads_reminders"><?php echo _l('show_lead_reminders_on_calendar'); ?></label>
        </div>
        <?php } ?>
    </div>
    <div class="col-md-3">

        <?php if(get_option('show_estimate_reminders_on_calendar') == 1){ ?>
        <div class="checkbox">
            <input type="checkbox" value="1" name="estimate_reminders" id="cf_estimates_reminders"<?php if($this->input->post('estimate_reminders')){echo ' checked';} ?>>
            <label for="cf_estimates_reminders"><?php echo _l('show_estimate_reminders_on_calendar'); ?></label>
        </div>
        <?php } ?>

    
        <?php if(get_option('show_credit_note_reminders_on_calendar') == 1){ ?>
        <div class="checkbox">
            <input type="checkbox" value="1" name="credit_note_reminders" id="cf_credit_note_reminders"<?php if($this->input->post('credit_note_reminders')){echo ' checked';} ?>>
            <label for="cf_credit_note_reminders"><?php echo _l('show_credit_note_reminders_on_calendar'); ?></label>
        </div>
        <?php } ?>

    </div>
    <div class="col-md-3 text-right">
        <a class="btn btn-default" href="<?php echo site_url($this->uri->uri_string()); ?>"><?php echo _l('clear'); ?></a>
        <button class="btn btn-success" type="submit"><?php echo _l('apply'); ?></button>
    </div>

</div>
<hr class="mbot15" />
<div class="clearfix"></div>
<?php echo form_close(); ?>
</div>
