<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/thevaibhaw
 * @since      1.0.0
 *
 * @package    V7_Topbar_Datetime
 * @subpackage V7_Topbar_Datetime/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    V7_Topbar_Datetime
 * @subpackage V7_Topbar_Datetime/includes
 * @author     Your Name <imvaibhaw@gmail.com>
 */
class V7_Topbar_Datetime_Activator
{

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function activate()
    {
        // Set default options
        add_option('v7_topbar_datetime_date_format', 'l, j F Y');
        add_option('v7_topbar_datetime_time_format', 'h:i:s A');
        add_option('v7_topbar_datetime_short_month', 0);
        add_option('v7_topbar_datetime_bg_color', '#333333');
        add_option('v7_topbar_datetime_text_color', '#ffffff');
        add_option('v7_topbar_datetime_hide_on_scroll', 1);
    }

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function deactivate()
    {
        // Nothing to do on deactivate
    }
}
