<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("С Новым 2022 годом!");
?><script src="/js/unitegallery.min.js"></script>
<script src="/js/unitegaller/themes/ug-theme-grid.js"></script>
<link href="/js/unitegaller/themes/css/unite-gallery.css" type="text/css"  rel="stylesheet" />

<div id="gallery" style="margin:0px auto;display:none;">

<img alt="Новогоднее поздравление" data-type="youtube" data-videoid="wba_Xmiqkkg" data-description="Новогоднее поздравление">
<img alt="Новогоднее поздравление" data-type="youtube" data-videoid="n9D55SUs9EQ" data-description="Новогоднее поздравление">
<img alt="Новогоднее поздравление" data-type="youtube" data-videoid="2aGRgk8lc9Y" data-description="Новогоднее поздравление">


			
		</div>

<script>
jQuery("#gallery").unitegallery({
				gallery_theme: "grid",
gallery_height: 690,
thumb_width: 120,
thumb_height: 74,
				theme_panel_position: "bottom"				
			});
</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>