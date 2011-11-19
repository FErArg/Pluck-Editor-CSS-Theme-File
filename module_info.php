<?php
//MODULE NAME: style-editor and theme-editor

//Make sure the file isn't accessed directly
if((!ereg("index.php", $_SERVER['SCRIPT_FILENAME'])) && (!ereg("admin.php", $_SERVER['SCRIPT_FILENAME'])) && (!ereg("install.php", $_SERVER['SCRIPT_FILENAME'])) && (!ereg("login.php", $_SERVER['SCRIPT_FILENAME']))){
    //Give out an "access denied" error
    echo "access denied";
    //Block all other code
    exit();
}


//Include language-items
include ("data/settings/langpref.php");
include ("data/inc/lang/en.php");
include ("data/inc/lang/$langpref");
include ("data/modules/editor/lang/$langpref");

//Module name
$module_name = "editor css";

//Short module introduction
$module_intro = $edit_intro;

//Module dir
$module_dir = "editor";

//Filename of the module-icon
$module_icon = "images/style-edit.png";

//Version of the module
$module_version = "0.4";

//Author of the module
$module_author = "A_Bach & SerInformaticos.es";

//Website of the module
$module_website = "http://www.pluck.ekyo.pl & SerInformaticos.es";

//Compatibility
$module_compatibility = "4.6.4";

?>
