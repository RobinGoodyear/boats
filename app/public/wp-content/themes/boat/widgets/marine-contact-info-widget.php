<?php
class Marine_Contact_Info_Widget extends WP_Widget {

public function __construct() {
    parent::__construct(
        'marine_contact_info_widget', // Base ID
        'Marine Contact Info', // Name
        array('description' => __('Displays contact info for Marine Loisirs', 'text_domain')) // Args
    );
}

public function widget($args, $instance) {
    echo $args['before_widget'];
    if (!empty($instance['title'])) {
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
    }
    ?>
    <div class="container flex flex-wrap gap-10 mx-auto text-amber-100">
        <div class="px-4">
            <p>Marine Loisirs <br />Rte suisse <br />1297 Founex</p>
        </div>
        <div>
            Tél: 022 776 22 47<br>
            Fax: 022 776 01 84<br>
            info@marine-loisirs.ch
        </div>
        <div class="container mx-auto">
            <p class="p-4 text-xs text-amber-100">Copyright 2024</p>
        </div>
    </div>
    <?php
    echo $args['after_widget'];
}

public function form($instance) {
    $title = !empty($instance['title']) ? $instance['title'] : __('New title', 'text_domain');
    ?>
    <p>
    <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:'); ?></label> 
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
    </p>
    <?php 
}

public function update($new_instance, $old_instance) {
    $instance = array();
    $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
    return $instance;
}
}