<?php

//Block any access to files that only need to be included (no direct access)
if((!ereg("index.php", $_SERVER['SCRIPT_FILENAME'])) && (!ereg("admin.php", $_SERVER['SCRIPT_FILENAME'])) && (!ereg("install.php", $_SERVER['SCRIPT_FILENAME'])) && (!ereg("login.php", $_SERVER['SCRIPT_FILENAME']))){
    //Give out an "access denied" error
    echo "access denied";
    //Block all other code
    exit();
}

//First, load the functions
include("data/modules/editor/functions.php");

//Introduction text
echo "<p><b>" . $edit_welcome . "</b></p>";

showmenudiv($edit_css,$edit_css_desc,'data/modules/editor/images/css.png','admin.php?module=editor&page=editor-css',false);
showmenudiv($edit_theme,$edit_theme_desc,'data/modules/editor/images/theme.png','admin.php?module=editor&page=editor-theme',false);

?>

