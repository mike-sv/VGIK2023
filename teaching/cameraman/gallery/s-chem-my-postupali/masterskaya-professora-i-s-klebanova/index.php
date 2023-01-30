<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мастерская профессора И.С. Клебанова");
?>
<script src="/js/unitegallery.min.js"></script>
<script src="/js/unitegaller/themes/ug-theme-tiles.js"></script>
<link href="/js/unitegaller/themes/css/unite-gallery.css" type="text/css"  rel="stylesheet" />



<div id="gallery9" style="margin:10px auto;display:none;">
<?php $files = scandir('../../../../../gallery/20230124/klebanova/');

foreach($files as $file) {

if (!in_array($file, array('.', '..', 'JPEG.zip'))) {
?>
<img alt="" data-description="" src="https://vgik.info/gallery/20230124/klebanova/<? echo $file; ?>" data-image="https://vgik.info/gallery/20230124/klebanova/<? echo $file; ?>" style="display:none">
<?php } ?>
<?php } ?>
</div>


	
<script>

var api = jQuery("#gallery9").unitegallery({
	tile_enable_textpanel:true,
	tile_textpanel_bg_color: "#DECEB4",
	tile_textpanel_bg_opacity:0.8,
	tile_textpanel_title_color: "#8B050B",
	tile_textpanel_title_text_align: "center",
	tiles_type: "justified",
			});
api.on("enter_fullscreen",function(){	//on enter fullscreen
$("img").bind("contextmenu", function(e) {
		return false;
	});
			});

api.on("item_change",function(num, data){		//on item change, get item number and item data
$("img").bind("contextmenu", function(e) {
		return false;
	});
			});

$(document).ready(function () {
$("img").bind("contextmenu", function(e) {
		return false;
	});
});

</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>