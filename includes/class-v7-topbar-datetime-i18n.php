<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/thevaibhaw
 * @since      1.0.0
 *
 * @package    V7_Topbar_Datetime
 * @subpackage V7_Topbar_Datetime/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    V7_Topbar_Datetime
 * @subpackage V7_Topbar_Datetime/includes
 * @author     Your Name <imvaibhaw@gmail.com>
 */
class V7_Topbar_Datetime_i18n
{


    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain()
    {

        load_plugin_textdomain(
            'v7-topbar-datetime',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );
    }
}
