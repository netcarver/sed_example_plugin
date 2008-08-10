<?php
# --- BEGIN PLUGIN META ---
$plugin = array(
'name'=>'sed_example', # Name Your Plugin!
'version'=>'0.1',
'author'=>'Your name here!',
'author_uri'=>'http://Your site here!',
'description'=>'Describe Your Plugin!',
'type'=>1,	# Use 3 for admin-only in Txp 4.0.7+
);
# --- END PLUGIN META ---
# --- BEGIN PLUGIN CODE ---
if( 'public' == @txpinterface )
	{
	}
	
function sed_ex_install()
	{
	}

function sed_ex_cleanup()
	{
	}

function sed_ex_hello( $atts )
	{
	extract( lAtts( array( 
		'name'=> 'Fred' 
		), $atts));

	return graf("Hello $name!").n;
	}
# --- END PLUGIN CODE ---
if(0) {
?>
<!-- /*
# --- BEGIN PLUGIN CSS ---
<style type="text/css">
div#sed_example_plugin td { vertical-align:top; }
div#sed_example_plugin code { font-weight:bold; font: 105%/130% "Courier New", courier, monospace; background-color: #FFFFCC;}
div#sed_example_plugin code.sed_code_tag { font-weight:normal; border:1px dotted #999; background-color: #f0e68c; display:block; margin:10px 10px 20px; padding:10px; }
div#sed_example_plugin a:link, div#sed_example_plugin a:visited { color: blue; text-decoration: none; border-bottom: 1px solid blue; padding-bottom:1px;}
div#sed_example_plugin a:hover, div#sed_example_plugin a:active { color: blue; text-decoration: none; border-bottom: 2px solid blue; padding-bottom:1px;}
div#sed_example_plugin h1 { color: #369; font: 20px Georgia, sans-serif; margin: 0; text-align: center; }
div#sed_example_plugin h2 { border-bottom: 1px solid black; padding:10px 0 0; color: #369; font: 17px Georgia, sans-serif; }
div#sed_example_plugin h3 { color: #693; font: bold 12px Arial, sans-serif; letter-spacing: 1px; margin: 10px 0 0;text-transform: uppercase;}
</style>
# --- END PLUGIN CSS ---
# --- BEGIN PLUGIN HELP ---
 <div id="sed_example_plugin">

h1(#manual). Example Plugin

v0.1 Features of the new template & compiler...&#8230;

* Placeholder install/cleanup routines
* It doesn't need to 'include' it's compiler.
* This plugin template has a special section for storing the Help section's CSS. This section doesn't get pulled through the textile mangler, it simply gets appended at the head of your help section so you can style it properly.
* The replacement template compiler 'zem_tpl.php' also takes care of checking if a client-only plugin references admin only features and stops the compilation if it does. *Why?* If the plugin is accessing admin-side resources, it should be marked as an admin side plugin, not a client-only plugin. This saves wasted time and effort if you happen to compile and install a plugin that you expect to work on the admin side but doesn't.


h2(#tag). The @sed_ex_hello@ tag.

This is the only tag in this plugin.

|_. Attribute    |_. Default Value |_. Status   |_. Description |
| 'name'       | 'Fred'     | Optional | The name you want to display. |

*Emphasized items* have been added or changed since the last release.
-Struck out items- have been removed since the last release.

 </div>
# --- END PLUGIN HELP ---
*/
-->
<?php
}
?>