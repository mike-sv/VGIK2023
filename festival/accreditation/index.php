<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ѕресс-центр  фестивал€");
?>
<p>јккредитацию на фестиваль могут получить: </p>

<p>&mdash; представители прессы (с указанием названи€ издани€, телеканала, радиостанции или интернет-портала); 
  <br />
Ч студенты творческих вузов (имеющих отделение режиссуры кино и телевидени€, актерского и операторского мастерства, искусствоведени€ и театроведени€); 
  <br />
Ч студенты, обучающиес€ на дневной форме факультетов журналистики; 
  <br />
Ч представители кинокомпаний и продюсерских центров</p>

<p></p>

<p><u>—ъемка и участие в церемонии открыти€ и других меропри€ти€х фестивал€ будет доступна только по аккредитации.</u><b><i> </i></b></p>

<br />
<?$APPLICATION->IncludeComponent(
	"default:form.result.accreditation.new",
	".default",
	Array(
		"SEF_MODE" => "Y",
		"WEB_FORM_ID" => "1",
		"LIST_URL" => "",
		"EDIT_URL" => "",
		"SUCCESS_URL" => "ok.php",
		"CHAIN_ITEM_TEXT" => "",
		"CHAIN_ITEM_LINK" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"USE_EXTENDED_ERRORS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"SEF_FOLDER" => "/festival/accreditation/",
		"VARIABLE_ALIASES" => Array(
		)
	)
);?> 
<br />

<br />

<br />
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>