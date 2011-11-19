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

$temp = read_style($site_theme);

?>
		<form method="post" action="">
			<label class="kop2" for="cont1"><?php echo $edit_edit_css; ?></label>
			<br />
			<textarea name="cont1" id="cont1" cols="90" rows="20"><?php echo $temp; ?></textarea>
			<br />
			<input type="submit" name="Submit" value="<?php echo $lang_install13; ?>" />
			<input type="button" name="Cancel" value="<?php echo $lang_install14; ?>" onclick="javascript: window.location='?module=editor';" />
		</form>
		<?php
		//Save style.
		if (isset($_POST['Submit'])) {
			save_style($site_theme, $cont1);
			redirect('?module=editor', 0);
}
echo "<p><a href=\"?module=editor\"><<< $lang_theme12</a></p>";

?>