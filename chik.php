<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CModule::IncludeModule('iblock');


$not_visible = false;

$arUserGroup = $USER->GetUserGroupArray();
$arStopID = array(9,10,7,4,8);
foreach ($arStopID as $ID)
 if(in_array($ID, $arUserGroup))
 {
  $not_visible = true;
  break;
 }

if($not_visible) echo 1; else echo 2;


if(
   strpos($_SERVER['HTTP_X_REAL_IP'], '195.178.201.') !== false || 
   strpos($_SERVER['REMOTE_ADDR'], '195.178.201.') !== false ||
   strpos($_SERVER['HTTP_X_REAL_IP'], '46.73.') !== false || 
   strpos($_SERVER['REMOTE_ADDR'], '46.73.') !== false
)
{
echo 111;	
}else { echo 222;}

debug($_SERVER);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>