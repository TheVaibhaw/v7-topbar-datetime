<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/thevaibhaw
 * @since      1.0.0
 *
 * @package    V7_Topbar_Datetime
 * @subpackage V7_Topbar_Datetime/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    V7_Topbar_Datetime
 * @subpackage V7_Topbar_Datetime/admin
 * @author     Your Name <your.email@example.com>
 */
class V7_Topbar_Datetime_Admin
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of the plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in V7_Topbar_Datetime_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The V7_Topbar_Datetime_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/v7-topbar-datetime-admin.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in V7_Topbar_Datetime_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The V7_Topbar_Datetime_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('wp-color-picker');
        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/v7-topbar-datetime-admin.js', array('jquery', 'wp-color-picker'), $this->version, false);
    }

    /**
     * Add the plugin menu page.
     *
     * @since    1.0.0
     */
    public function add_plugin_admin_menu()
    {
        add_options_page(
            'V7 Topbar DateTime Settings',
            'Topbar DateTime',
            'manage_options',
            'v7-topbar-datetime',
            array($this, 'display_plugin_setup_page')
        );
    }

    /**
     * Register the settings.
     *
     * @since    1.0.0
     */
    public function register_settings()
    {
        register_setting('v7_topbar_datetime_settings', 'v7_topbar_datetime_date_format');
        register_setting('v7_topbar_datetime_settings', 'v7_topbar_datetime_time_format');
        register_setting('v7_topbar_datetime_settings', 'v7_topbar_datetime_short_month');
        register_setting('v7_topbar_datetime_settings', 'v7_topbar_datetime_bg_color');
        register_setting('v7_topbar_datetime_settings', 'v7_topbar_datetime_text_color');
        register_setting('v7_topbar_datetime_settings', 'v7_topbar_datetime_hide_on_scroll');
    }

    /**
     * Display the plugin setup page.
     *
     * @since    1.0.0
     */
    public function display_plugin_setup_page()
    {
?>
        <div class="wrap">
            <h1><?php _e('V7 Topbar DateTime Settings', 'v7-topbar-datetime'); ?></h1>
            <form method="post" action="options.php">
                <?php settings_fields('v7_topbar_datetime_settings'); ?>
                <?php do_settings_sections('v7_topbar_datetime_settings'); ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row"><?php _e('Date Format', 'v7-topbar-datetime'); ?></th>
                        <td>
                            <input type="text" name="v7_topbar_datetime_date_format" value="<?php echo esc_attr(get_option('v7_topbar_datetime_date_format', 'l, j F Y')); ?>" />
                            <p class="description"><?php _e('PHP date format for date. Default: l, j F Y (Monday, 3 December 2025)', 'v7-topbar-datetime'); ?></p>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><?php _e('Time Format', 'v7-topbar-datetime'); ?></th>
                        <td>
                            <input type="text" name="v7_topbar_datetime_time_format" value="<?php echo esc_attr(get_option('v7_topbar_datetime_time_format', 'h:i:s A')); ?>" />
                            <p class="description"><?php _e('PHP date format for time. Default: h:i:s A (11:22:12 AM)', 'v7-topbar-datetime'); ?></p>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><?php _e('Use Short Month Names', 'v7-topbar-datetime'); ?></th>
                        <td>
                            <input type="checkbox" name="v7_topbar_datetime_short_month" value="1" <?php checked(get_option('v7_topbar_datetime_short_month', 0), 1); ?> />
                            <p class="description"><?php _e('Check to use abbreviated month names (e.g., Dec instead of December).', 'v7-topbar-datetime'); ?></p>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><?php _e('Background Color', 'v7-topbar-datetime'); ?></th>
                        <td>
                            <input type="text" name="v7_topbar_datetime_bg_color" value="<?php echo esc_attr(get_option('v7_topbar_datetime_bg_color', '#333333')); ?>" class="color-picker" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><?php _e('Text Color', 'v7-topbar-datetime'); ?></th>
                        <td>
                            <input type="text" name="v7_topbar_datetime_text_color" value="<?php echo esc_attr(get_option('v7_topbar_datetime_text_color', '#ffffff')); ?>" class="color-picker" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><?php _e('Hide on Scroll', 'v7-topbar-datetime'); ?></th>
                        <td>
                            <input type="checkbox" name="v7_topbar_datetime_hide_on_scroll" value="1" <?php checked(get_option('v7_topbar_datetime_hide_on_scroll', 1), 1); ?> />
                            <p class="description"><?php _e('Check to hide the topbar when scrolling down the page.', 'v7-topbar-datetime'); ?></p>
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
<?php
    }
}
