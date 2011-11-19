<?php

//Make sure the file isn't accessed directly
if((!ereg("index.php", $_SERVER['SCRIPT_FILENAME'])) && (!ereg("admin.php", $_SERVER['SCRIPT_FILENAME'])) && (!ereg("install.php", $_SERVER['SCRIPT_FILENAME'])) && (!ereg("login.php", $_SERVER['SCRIPT_FILENAME']))){
    //Give out an "access denied" error
    echo "access denied";
    //Block all other code
    exit();
}


function read_style($theme) {
	$temp = 'data/themes/' . $theme . '/style.css';
	$file = file_get_contents($temp);
	return $file;
}

function save_style($theme, $content) {
	$temp = 'data/themes/' . $theme . '/style.css';
	$file = fopen($temp, 'w');
	$content = stripslashes($content);
	fputs($file, $content);
	fclose($file);
	chmod($temp, 0777);
}

function read_themes($theme) {
	$temp2 = 'data/themes/' . $theme . '/theme.php';
	$file = file_get_contents($temp2);
	return $file;
}

function save_themes($theme, $content) {
	$temp2 = 'data/themes/' . $theme . '/theme.php';
	$file = fopen($temp2, 'w');
	$content = stripslashes($content);
	fputs($file, $content);
	fclose($file);
	chmod($temp2, 0777);
}
?>