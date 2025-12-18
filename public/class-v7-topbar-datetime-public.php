<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/thevaibhaw
 * @since      1.0.0
 *
 * @package    V7_Topbar_Datetime
 * @subpackage V7_Topbar_Datetime/public
 */

/*
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    V7_Topbar_Datetime
 * @subpackage V7_Topbar_Datetime/public
 * @author     Your Name <imvaibhaw@gmail.com>
 */
class V7_Topbar_Datetime_Public
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
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
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

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/v7-topbar-datetime-public.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
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

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/v7-topbar-datetime-public.js', array('jquery'), $this->version, false);

        $date_format = get_option('v7_topbar_datetime_date_format', 'l, j F Y');
        $time_format = get_option('v7_topbar_datetime_time_format', 'h:i:s A');
        $short_month = get_option('v7_topbar_datetime_short_month', 0);
        $bg_color = get_option('v7_topbar_datetime_bg_color', '#333333');
        $text_color = get_option('v7_topbar_datetime_text_color', '#ffffff');
        $hide_on_scroll = get_option('v7_topbar_datetime_hide_on_scroll', 1);

        wp_localize_script($this->plugin_name, 'v7_topbar_datetime_vars', array(
            'date_format' => $date_format,
            'time_format' => $time_format,
            'short_month' => $short_month,
            'bg_color' => $bg_color,
            'text_color' => $text_color,
            'hide_on_scroll' => $hide_on_scroll,
        ));
    }

    /**
     * Display the topbar.
     *
     * @since    1.0.0
     */
    public function display_topbar()
    {
        $date_format = get_option('v7_topbar_datetime_date_format', 'l, j F Y');
        $time_format = get_option('v7_topbar_datetime_time_format', 'h:i:s A');
        $short_month = get_option('v7_topbar_datetime_short_month', 0);
        $bg_color = get_option('v7_topbar_datetime_bg_color', '#333333');
        $text_color = get_option('v7_topbar_datetime_text_color', '#ffffff');

        if ($short_month) {
            $date_format = str_replace('F', 'M', $date_format);
        }

        $current_date = wp_date($date_format);
        $current_time = wp_date($time_format);

        echo '<div id="v7-topbar-datetime" style="background-color: ' . esc_attr($bg_color) . '; color: ' . esc_attr($text_color) . ';">';
        echo '<div class="v7-topbar-content"><span class="v7-date">' . esc_html($current_date) . '</span>, <span class="v7-time">' . esc_html($current_time) . '</span></div>';
        echo '</div>';
    }
}
