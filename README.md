# V7 Topbar DateTime

A modern, responsive WordPress plugin that displays a topbar with the current date and time. The topbar is fully animated, attractive, and customizable through the admin settings.

## Features

- **Real-time Display**: Shows current date and time, updating every second.
- **Customizable Formats**: Change date and time display formats using PHP date format strings.
- **Month Display Options**: Choose between full or abbreviated month names.
- **Color Customization**: Set background and text colors for the topbar.
- **Modern Design**: Sleek, animated topbar with slide-down effect.
- **Responsive**: Adapts to different screen sizes.
- **Easy Integration**: Hooks into `wp_body_open` for seamless display.

## Installation

1. Download the plugin zip file.
2. Go to your WordPress admin dashboard.
3. Navigate to **Plugins > Add New**.
4. Click **Upload Plugin** and select the zip file.
5. Click **Install Now** and then **Activate**.

Alternatively, upload the `v7-topbar-datetime` folder to the `/wp-content/plugins/` directory and activate it through the Plugins menu.

## Usage

Once activated, the topbar will appear at the top of your website displaying the current date and time.

### Settings

Go to **Settings > Topbar DateTime** in your WordPress admin to customize:

- **Date Format**: PHP date format for the date part (default: `l, j F Y` - Monday, 3 December 2025).
- **Time Format**: PHP date format for the time part (default: `h:i:s A` - 11:22:12 AM).
- **Use Short Month Names**: Check to use abbreviated months (e.g., Dec instead of December).
- **Background Color**: Choose the topbar background color.
- **Text Color**: Choose the text color.

### Example Output

With default settings: **Monday, 3 December 2025, 11:22:12 AM**

## Customization

The topbar uses CSS classes for easy styling overrides:

- `#v7-topbar-datetime`: Main topbar container.
- `.v7-topbar-content`: Content wrapper.
- `.v7-date`: Date span.
- `.v7-time`: Time span.

## Requirements

- WordPress 5.0 or higher
- PHP 7.0 or higher

## Changelog

### 1.0.0

- Initial release with basic date/time display and customization options.

## Support

For support or feature requests, please visit the [GitHub repository](https://github.com/thevaibhaw).

## License

This plugin is licensed under the GPL v2 or later.

## Credits

Developed by Your Name.
