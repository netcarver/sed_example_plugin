<?php
// This is a PLUGIN TEMPLATE.
// Copy this file to a new name like abc_myplugin.php.  Edit the code, then
// run this file at the command line to produce a plugin for distribution:
// $ php abc_myplugin.php > abc_myplugin-0.1.txt

// Plugin name is optional.  If unset, it will be extracted from the current
// file name. Uncomment and edit this line to override:
$plugin['name'] = 'Name Your Plugin!';
$plugin['version'] = '0.1';
$plugin['author'] = 'Your name here!';
$plugin['author_uri'] = 'http://Your site here!';
$plugin['description'] = 'Describe Your Plugin!';

// Plugin types:
// 0 = regular plugin; loaded on the public web side only
// 1 = admin plugin; loaded on both the public and admin side
// 2 = library; loaded only when include_plugin() or require_plugin() is called
$plugin['type'] = 1; 

@include_once('../zem_tpl.php');

if (0) {
?>
<!-- CSS SECTION
# --- BEGIN PLUGIN CSS ---
<style type="text/css">
div#sed_help td { vertical-align:top; }
div#sed_help code { font-weight:bold; font: 105%/130% "Courier New", courier, monospace; background-color: #FFFFCC;}
div#sed_help code.sed_code_tag { font-weight:normal; border:1px dotted #999; background-color: #f0e68c; display:block; margin:10px 10px 20px; padding:10px; }
div#sed_help a:link, div#sed_help a:visited { color: blue; text-decoration: none; border-bottom: 1px solid blue; padding-bottom:1px;}
div#sed_help a:hover, div#sed_help a:active { color: blue; text-decoration: none; border-bottom: 2px solid blue; padding-bottom:1px;}
div#sed_help h1 { color: #369; font: 20px Georgia, sans-serif; margin: 0; text-align: center; }
div#sed_help h2 { border-bottom: 1px solid black; padding:10px 0 0; color: #369; font: 17px Georgia, sans-serif; }
div#sed_help h3 { color: #693; font: bold 12px Arial, sans-serif; letter-spacing: 1px; margin: 10px 0 0;text-transform: uppercase;}
</style>
# --- END PLUGIN CSS ---
-->
<!-- HELP SECTION
# --- BEGIN PLUGIN HELP ---
<div id="sed_help">

h1(#manual). Example Plugin

v0.1 Features of the new template & compiler...&#8230;

* This plugin template has a special section for storing the Help section's CSS. This section doesn't get pulled through the textile mangler, it simply gets appended at the head of your help section so you can style it properly.
* The replacement template compiler 'zem_tpl.php' also takes care of checking if a client-only plugin references admin only features and stops the compilation if it does. *Why?* If the plugin is accessing admin-side resources, it should be marked as an admin side plugin, not a client-only plugin. This saves wasted time and effort if you happen to compile and install a plugin that you expect to work on the admin side but doesn't.


h2(#tag). The @sed_hello@ tag.

This is the only tag in this plugin.

|_. Attribute    |_. Default Value |_. Status   |_. Description |
| 'name'       | 'Fred'     | Optional | The name you want to display. |

*Emphasized items* have been added or changed since the last release.
-Struck out items- have been removed since the last release.

</div>
# --- END PLUGIN HELP ---
-->
<?php
}
# --- BEGIN PLUGIN CODE ---


//
// 	The following snippet is typical of an admin-side plugin. If you try compiling this plugin with the plugin set 
// to type 0 (regular, user-only plugin) The compilation will fail with a message to check your plugin's type.
// You can change the type at the head of this file, line 19 for the default file.
//
if( 'admin' == @txpinterface )
	{
	}

// Your plugin code goes here.  No need to escape quotes.
function sed_hello( $atts )
	{
	extract( lAtts( array( 
		'name'=> 'Fred' 
		), $atts));

	return "Hello $name!".br.n; 
	}
# --- END PLUGIN CODE ---
?>
