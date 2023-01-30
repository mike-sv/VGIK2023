<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#",
		"RULE" => "alias=\$1",
		"ID" => "bitrix:im.router",
		"PATH" => "/desktop_app/router.php",
	),
	array(
		"CONDITION" => "#^/college/creative_life_college/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/college/creative_life_college/index.php",
	),
	array(
		"CONDITION" => "#^/vgik90/gallery/cat([0-9]+)/?#",
		"RULE" => "SECTION_ID=\$1",
		"ID" => "",
		"PATH" => "/vgik90/gallery/list.php",
	),
	array(
		"CONDITION" => "#^/today/gallery/cat([0-9]+)/?#",
		"RULE" => "SECTION_ID=\$1&",
		"ID" => "",
		"PATH" => "/today/gallery/list.php",
	),
	array(
		"CONDITION" => "#^/festival/accreditation/#",
		"RULE" => "",
		"ID" => "default:form.result.accreditation.new",
		"PATH" => "/festival/accreditation/index.php",
	),
	array(
		"CONDITION" => "#^/mmkf/item([0-9]+)/?#",
		"RULE" => "ELEMENT_ID=\$1&",
		"ID" => "",
		"PATH" => "/mmkf/detail.php",
	),
	array(
		"CONDITION" => "#^/online/(/?)([^/]*)#",
		"RULE" => "",
		"ID" => "bitrix:im.router",
		"PATH" => "/desktop_app/router.php",
	),
	array(
		"CONDITION" => "#^/stssync/calendar/#",
		"RULE" => "",
		"ID" => "bitrix:stssync.server",
		"PATH" => "/bitrix/services/stssync/calendar/index.php",
	),
	array(
		"CONDITION" => "#^/library/ebs/#",
		"RULE" => "",
		"ID" => "mcart.libereya:libereya",
		"PATH" => "/library/ebs/index.php",
	),
	array(
		"CONDITION" => "#^/#",
		"RULE" => "",
		"ID" => "bitrix:main.register",
		"PATH" => "/register.php",
	),
);

?>