<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "������, ����������");
$APPLICATION->SetPageProperty("description", "������ ����������");
$APPLICATION->SetTitle("������ ���������� ����");
?><a href="rtsp://cdn.soft-media.ru:1935/rtp-stream/mkrf" >�������� ������ ���������� (RTSP)</a> 


<!-- video player -->
<script type="text/javascript" src="jwplayer/jwplayer.js"></script>
<!-- video player -->
<script type="text/javascript" src="/jwplayer.js"></script>
<div id="player" style="width: 640px; height: 360px;">�������� ������</div>
 
<script type="text/javascript">
    jwplayer("player").setup({
        sources: [{
                file: "http://cdn.soft-media.ru/rtp-stream/mkrf/playlist.m3u8"
                         },{
                file: "rtmp://cdn.soft-media.ru:1935/rtp-stream/mkrf"
         }],
         primary: "flash",
        rtmp: {
            bufferlength: 2
        },

        primary: "flash",
        fallback: false,
        height: 410,
        width: 720
    });
</script>
 
<!-- /video player -->
 
<div style="clear: both;"></div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
