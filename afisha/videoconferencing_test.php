<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Видеоконференция тест");
?><p> Тестовая страница для прямого эфира.<br>
Тестовое окно должно быть ниже. Точка вещания: mms://195.178.211.10:8888/presa3</p>
<p><!-- экран -->
				</p><div style="margin: 10px; float: left;z-index:10">
					<object id="MediaPlayer1" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701" standby="Loading Microsoft Windows® Media Player components..." type="application/x-mplayer2" height="606" width="720">
						<param name="fileName" value="mms://195.178.211.10:8888/presa3">
						<param name="animationatStart" value="true">
						<param name="transparentatStart" value="false">
						<param name="autoStart" value="true">
						<param name="autoSize" value="true">

						<param name="AutoRewind" value="0">
						<param name="ShowStatusBar" value="0">
						<param name="VideoBorder3D" value="1">
						<param name="showControls" value="true">
						<param name="Volume" value="-450">
						<embed type="application/x-mplayer2" pluginspage="http://www.microsoft.com/Windows/MediaPlayer/" src="mms://195.178.211.10:8888/presa3" autostart="1" showcontrols="1" volume="-450" height="606" width="720">   
					</object>
				</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>