# Olapic wp-plugin

Olapic WordPress Plugin. 

Wordpress doesn't like external JS being injected in post content, so this plugin allows for Olapic code injection via shortcode.

# Usage

Using this plugin requires a simple two-step process:

1. Download the plugin

	![](https://dl.dropboxusercontent.com/s/jnr6spwcpawmwy4/2016-05-18%20at%2010.53%20AM.png)

2. Install the plugin
	- **Option A:** Unzip the .zip file into the  WordPress Plugin Directory
	- **Option B:** Upload the .zip file via the plugin upload page (`http://yourdomain.com/wp-admin/plugin-install.php?tab=upload`)

3. Activate the plugin

	![](https://dl.dropboxusercontent.com/s/i2ppn1mew4ob5wu/2016-05-13%20at%2010.15%20AM%20%281%29.png)

4. In the Wordpress post, use the shortcode: 

	`[olapic instance-id ="WIDGET_INSTANCE_ID" apikey="OLAPIC_API_KEY" tags="PRODUCT_ID"]`. 

	![](https://dl.dropboxusercontent.com/s/dfmvlxrecf7ap8a/2016-05-17%20at%2011.16%20AM.png)

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
* `lang` - *optional*
	* the language code that you want the widget to be translated to. This should correspond with the language code you set in the appearance section of the platform