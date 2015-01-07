# wp-plugin

Olapic WordPress Plugin. Wordpress doesn't like external JS being injected in post content, so this plugin allows for Olapic code injection via shortcode.

# Usage

Using this plugin requires 2 step process:

1. Install the plugin
2. Use the shortcode (e.g., `[olapic data_instance ="ABC" data_apikey="XYZ" data_tags="PID"]`

# Parameters

The shortcode takes in 3 params:

* `data_instance` - **required**
	* You can find this value from the `data-instance` part of the original widget code.
* `data_apikey` - **required**
	* You can find this value from the `data-apikey` part of the original widget code.
* `data_tags` - *optional*
	* This serves as the dynamic identifier that you wish to get all related UGC for. The value usually is the product identifier from your product feed which we ingest during integration.
* `data_mode` - *optional*
	* Accepted value: `development`
	* You can use this flag to serve all content from the sandbox environment.
	* Note that this parameter **SHOULD NOT** be utilized for production purposes.


## Installing the plugin.
Either:

* Copy the `olapic-widget` folder from this repo to your `wp-content/plugins` folder

OR.

* Upload the `wp-olapic-widget.tar.gz` from this repo using the "Plugins" section of WordPress.