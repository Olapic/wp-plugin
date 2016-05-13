# Olapic wp-plugin

Olapic WordPress Plugin. 

Wordpress doesn't like external JS being injected in post content, so this plugin allows for Olapic code injection via shortcode.

# Usage

Using this plugin requires a simple two-step process:

1. Install the plugin
	- **Option A:** Unzip the .zip file into the  WordPress Plugin Directory
	- **Option B:** Upload the .zip file via the plugin upload page (`http://yourdomain.com/wp-admin/plugin-install.php?tab=upload`)

2. Activate the plugin
	![](https://dl.dropboxusercontent.com/s/i2ppn1mew4ob5wu/2016-05-13%20at%2010.15%20AM%20%281%29.png)

3. In the Wordpress post, use the shortcode: 

	`[olapic instance-id ="WIDGET_INSTANCE_ID" apikey="OLAPIC_API_KEY" tags="PRODUCT_ID"]`. 

	See below for shortcode parameter details.

# Shortcode Parameters

The shortcode takes in 4 parameters:

* `instance-id` - **required**
	* You can find this value from the `data-instance` part of the original widget code.
* `apikey` - **required**
	* You can find this value from the `data-apikey` part of the original widget code. ()
* `tags` - *optional*
	* This serves as the dynamic identifier to pull content from a specific stream. Often, the value is the product identifier from your product feed.
* `mode` - *optional*
	* Accepted parameter value: `development`
	* You can use this flag to serve all content from the sandbox environment.
	* Note that this parameter ***should not*** be utilized for production purposes.