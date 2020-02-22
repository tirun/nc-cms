<?php  if (!defined('NC_BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>nc-cms | <?php echo NC_LANG_EDITOR_HTML; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<meta name="robots" content="noindex" />
		<meta name="robots" content="nofollow" />
		<link rel="stylesheet" type="text/css" media="screen" href="system/css/editor.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="system/css/editor_html.css"/>
		<script type="text/javascript" src="system/js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">	
			// see https://www.tiny.cloud/docs/demo/full-featured/ for explanation of options
			tinymce.init({
				selector: '#editordata',
				branding: false,
				images_upload_url: 'index.php?action=file_manager_upload&return',
				content_css : '<?php echo NC_EDIT_CONTENT_CSS; ?>',
				// importcss_append: true,
				height: 500,

				plugins: 'print preview paste importcss searchreplace autolink save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
				menubar: 'file edit view insert format tools table help',
				toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
				toolbar_sticky: true,
				
				// templates: [
				// 	{ title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
				// 	{ title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
				// 	{ title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
				// ],
				quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
				toolbar_drawer: 'sliding',
				contextmenu: "link image imagetools table"
			});

			// onbeforeunload() does not work correctly in certain browsers. Disable this functionality if not using Firefox/Chrome.
			var confirmed_exit = true;
			if(!navigator.appName.indexOf("Netscape")) 
				confirmed_exit = false;
				
			window.onbeforeunload = function () 
			{	
				if(!confirmed_exit)
					return "<?php echo NC_LANG_REDIRECT_WARN; ?>";
			}	
			
			function save_confirmation() 
			{
				var answer = confirm("<?php echo NC_LANG_SAVE_CONFIRM; ?>");
				if(answer)
				{
					confirmed_exit = true;
					document.editorform.submit();
				}
			}

			function cancel_confirmation() 
			{
				var answer = confirm("<?php echo NC_LANG_CANCEL_CONFIRM; ?>");
				if(answer)
				{
					confirmed_exit = true;
					this.location.href = "<?php echo $_SERVER['HTTP_REFERER']; ?>";
				}
			}

			function open_file_manager() 
			{
				window.open('index.php?action=file_manager','insert_file','width=640,height=510,screenX=200,left=200,screenY=200,top=200,status=yes,menubar=no');
			}		
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="editor">
				<div id="header"> <img src="system/images/nc_logo.png" /> </div>
				<form name="editorform" id="editorform" method="post" action="index.php?action=save&amp;ref=<?php echo $_SERVER['HTTP_REFERER']; ?>">
					<br />
					<textarea cols="102" rows="20" name="editordata" id="editordata" class="textfield"><?php echo htmlspecialchars($data); ?></textarea>
					<input name="name" id="name" type="hidden" value="<?php echo $name; ?>" />
					<p class="tip"><?php echo NC_LANG_EDITOR_HTML_HELP; ?> <?php echo NC_UPLOAD_DIRECTORY; ?></p>
					<span class="nc_button file_man"><a href="javascript:open_file_manager()"><span class="icon icon_upload"><?php echo NC_LANG_EDITOR_INSERT_FILE; ?></span></a></span>
					<span class="nc_button" style="float: right"><a href="javascript:save_confirmation()"><span class="icon icon_accept"><?php echo NC_LANG_SAVE; ?></span></a></span>
					<span class="nc_button" style="float: right"><a href="javascript:cancel_confirmation()"><span class="icon icon_delete"><?php echo NC_LANG_CANCEL; ?></span></a></span>
				</form>
				<div class="footer"></div>
			</div>
		</div>
	</body>
</html>