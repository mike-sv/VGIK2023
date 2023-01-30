<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><?$APPLICATION->IncludeComponent(
	"bitrix:socialnetwork.messages_users_messages",
	"",
	Array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"ITEMS_COUNT" => "20",
		"MESSAGE_VAR" => "",
		"PAGE_VAR" => "",
		"PATH_TO_MESSAGES_CHAT" => "",
		"PATH_TO_MESSAGES_USERS" => "",
		"PATH_TO_MESSAGES_USERS_MESSAGES" => "",
		"PATH_TO_MESSAGE_FORM" => "",
		"PATH_TO_MESSAGE_FORM_MESS" => "",
		"PATH_TO_SMILE" => "/bitrix/images/socialnetwork/smile/",
		"PATH_TO_USER" => "",
		"SET_NAVCHAIN" => "Y",
		"USER_ID" => $user_id,
		"USER_VAR" => ""
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>