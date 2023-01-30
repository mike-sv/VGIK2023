<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("2017");
?><link rel="stylesheet" href="http://vgik.info/c/colorbox.css" />

	<ul id="carousel" class="elastislide-list">
<li><a href="/educ_resource/group-practices/graduate/Scan-1.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-1.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-2.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-2.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-3.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-3.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-4.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-4.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-5.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-5.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-6.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-6.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-7.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-7.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-8.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-8.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-9.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-9.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-10.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-10.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-11.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-11.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
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