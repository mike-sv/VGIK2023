var id_menu = '0'; // id всплывающего подменю
var timerOn = false;
var timerID; // переменна€ таймера
var delay=500; // задержка в мс

// получение абсолютных координат объекта
function getPosX(obj)
{
var curleft = 0;
if (obj.offsetParent)
{
while (obj.offsetParent)
{
curleft += obj.offsetLeft;
obj = obj.offsetParent;
}
}
else if (obj.x)
{
curleft += obj.x;
}
return curleft;
}

function getPosY(obj)
{
var curtop = 0;
if (obj.offsetParent)
{
while (obj.offsetParent)
{
curtop += obj.offsetTop;
obj = obj.offsetParent;
}
}
else if (obj.x)
{
curtop += obj.x;
}
return curtop;
}

// вывод подменю
function showMenu(id, obj)
{
if (id==id_menu || id_menu=='0') {} else { document.getElementById(id_menu).style.display = 'none';}
id_menu = id;
var object=document.getElementById(id_menu);
hideMenuAll(id_menu);
object.style.display = 'block';
object.style.position = 'absolute';
object.style.left=getPosX(obj);
object.style.top=getPosY(obj)+17;
stopTime();
}


// скрытие подменю
function hideMenuAll(id)
{
var object=document.getElementById(id_menu);
object.style.display = 'none';
stopTime ();
}

function hideMenu()
{
startTime ();
}

// включение задержки скрыти€ подменю
function startTime()
{
if (timerOn == false)
{
timerID=setTimeout( "hideMenuAll(id_menu)" , delay);
timerOn = true;
}
}

// —брос параметров
function stopTime()
{
if (timerOn)
{
clearTimeout(timerID);
timerID = null;
timerOn = false;
}
}

// вывод подменю в левом меню
startList = function() {
if (document.all&&document.getElementById) {
navRoot = document.getElementById("nav");
for (i=0; i<navRoot.childNodes.length; i++) {
node = navRoot.childNodes[i];
if (node.nodeName=="LI") {
node.onmouseover=function() {
this.className+=" over";
}
node.onmouseout=function() {
this.className=this.className.replace (" over", "");
}
}
}
}
}
window.onload=startList;

