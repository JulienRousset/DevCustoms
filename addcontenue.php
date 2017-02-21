<meta charset="utf-8">
<?php

	include('./global.php');
	include('./template/header.php');
if(isset($_POST['title']) || isset($_POST['description']) || isset($_POST['image']) || isset($_POST['contenue']) || isset($_POST['lien'])) {
  
   $title = Securise($_POST['title']);
   $description = Securise($_POST['description']);
   $categorie = Securise($_POST['categorie']);
   $contenue = $_POST['contenue'];
   $image = $_POST['image'];
   $lien = Securise($_POST['lien']);
   
       if($title != "" && $description != "" && $image != "" && $contenue != "") {
		
	  mysql_query("INSERT INTO contenue (`title`,`description`,`categorie`,`image`,`contenue`,`lien`) VALUES ('".$title."','".$description."','".$categorie."','".$image."','".addslashes($contenue)."','".$lien."')") or die(mysql_error());
	  echo '<div id="ok">L\'article vient d\'&ecirc;tre ajout&eacute;.</div>';
	    } else {
	  echo '<div id="pasok">PAS OK CHEFFFFFFFFFFF</div>';
	  }
}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<div id="structure">
	<div id="content1">
		<div class="titlee">testbox</div>
		<div class="box">
		</div>
	</div>
	<div id="content2" style="width: auto;">
		<div class="titlee">Bienvenue Sur DevCustoms</div>
		<div class="box">
			 <script type="text/javascript" src="editeur_html/jscripts/tiny_mce/tiny_mce.js"></script>
 <script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "editeur_html/lists/template_list.js",
		external_link_list_url : "editeur_html/lists/link_list.js",
		external_image_list_url : "editeur_html/lists/image_list.js",
		media_external_list_url : "editeur_html/lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
	</script>
 <form name='editor' method='post' action="?do=credits">
<td width='100' class='tbl'><b>Titre:</b><br></td>
<td width='80%' class='tbl'><input type='text' name='title' value='' class='text' style='width: 240px'><br></td>
<br>
<td width='100' class='tbl'><b>Description:</b><br></td>
<td width='80%' class='tbl'><input type='text' name='description' value='' class='text' style='width: 240px'><br></td>
<br>
<td width='100' class='tbl'><b>Image:</b><br></td>
<td width='80%' class='tbl'><input type='text' name='image' value='' class='text' style='width: 240px'><br></td>
<br>
<td width='100' class='tbl'><b>Categorie:</b><br></td>
<td width='80%' class='tbl'><input type='text' name='categorie' value='' class='text' style='width: 240px'><br></td>
<br>
<td width='100' class='tbl'><b>Contenue:</b><br></td>
<td width='80%' class='tbl'><textarea name='contenue' wrap="discuss rows=12 cols=154" ></textarea><br></td>
<tr>
<td width='100' class='tbl'><b>Lien:</b><br></td>
<td width='80%' class='tbl'><input type='text' name='lien' value='' class='text' style='width: 240px'><br></td>
<br>
<td align='center' colspan='2' class='tbl'>
<input type='submit' name='submit' value='Ex&eacute;cuter' class='submit'></form>
</tr>
<br>

</tr>

	</div>
	</div>

</div>


<footer>
	<div id="structure">
		<span style="float:left">Layout by Fix0r<br>Jordan edit</span>
		<span style="float:right">http://http://devcustoms.fr/</span>
	</div>
</FOOTER>

</body>
</html>