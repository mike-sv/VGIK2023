<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("2019");
?><link rel="stylesheet" href="http://vgik.info/c/colorbox.css" />

	<ul id="carousel" class="elastislide-list">
		<li><a href="/educ_resource/group-practices/graduate/Scan-16.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-16.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
	<li><a href="/educ_resource/group-practices/graduate/Scan-18.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-18.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-19.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-19.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-20.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-20.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-21.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-21.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-17.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-17.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-24.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-24.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>
<li><a href="/educ_resource/group-practices/graduate/Scan-23.jpg" name="photo"> <img class="img-responsive" src="/educ_resource/group-practices/graduate/Scan-23.jpg" border="0" title="Во ВГИКе состоялось заседание Ученого совета "> </a> </li>


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