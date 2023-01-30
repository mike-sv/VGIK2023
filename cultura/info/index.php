<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости, информация");
?><a href="./videoprezentatsiya/">Видеопрезентация программы 2019</a><br>
<a href="/upload/Itogovaya_Konferencia_1.mp4">КОНФЕРЕНЦИЯ «<b>Культура цифровой эпохи</b>», ВГИК 20.11.2020</a><br><br><br>

<ul id="carousel" class="elastislide-list">
	<li> <a href="/upload/medialibrary/9eb/796a1368.jpg" name="photo"> <img src="/upload/medialibrary/9eb/796a1368.jpg" border="0"> </a> </li>
	<li> <a href="/upload/medialibrary/fcf/796a1474.jpg" name="photo"> <img src="/upload/medialibrary/fcf/796a1474.jpg" border="0"> </a> </li>
	<li> <a href="/upload/medialibrary/15b/img_20200326_wa0002.jpg" name="photo"> <img src="/upload/medialibrary/15b/img_20200326_wa0002.jpg" border="0"> </a> </li>
	<li> <a href="/upload/medialibrary/6fc/img_20200326_wa0000.jpg" name="photo"> <img src="/upload/medialibrary/6fc/img_20200326_wa0000.jpg" border="0"> </a> </li>
	<li> <a href="/upload/medialibrary/bad/snapshot_04.31.09.900-_5_.jpg" name="photo"> <img src="/upload/medialibrary/bad/snapshot_04.31.09.900-_5_.jpg" border="0"> </a> </li>
	<li> <a href="/upload/medialibrary/d02/snapshot_04.30.33.826-_4_.jpg" name="photo"> <img src="/upload/medialibrary/d02/snapshot_04.30.33.826-_4_.jpg" border="0"> </a> </li>
</ul>
<script type="text/javascript" src="https://vgik.info/js/jquerypp.custom.js"></script>
	<script type="text/javascript" src="https://vgik.info/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="https://vgik.info/js/jquery.colorbox.js"></script>
<script type="text/javascript">
		$(function () {
			$('[name=photo]').colorbox({rel:'group', scalePhotos:true, maxWidth:'95%', maxHeight:'95%'});
			$('#carousel').elastislide({onClick: event.preventDefault()});
		})
	</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>