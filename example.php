<?php
/**
* Example web page with nc-cms integrated.
* For full documentation see the nc-cms website.
* @link http://github.com/gnat/nc-cms
*/
?>
<?php require('nc-cms/system/start.php'); $cms = new NCCms(); ?> <!-- #1 Include CMS header. -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="noindex" />
		<meta name="robots" content="nofollow" />
		<title><?php $cms->Title('home_title'); ?></title> <!-- #2 Allow website title editing. -->
		<link rel="stylesheet" type="text/css" media="screen" href="example.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php $cms->CSS(); ?>" /> <!-- #3 Include CSS. -->
	</head>
	<body>
		<?php $cms->ControlPanel(); ?> <!-- #4 Include CMS control panel. -->
		<div class="content">
			<?php $cms->ContentHTML('home_content'); ?> <!-- #5 Add editable content area. -->
		</div>
		<div class="footer">
			<?php $cms->LoginLink(); ?> <!-- #6 Generate login link. -->
		</div>
	</body>
</html>
