var id_menu = '0'; // id ������������ �������
var timerOn = false;
var timerID; // ���������� �������
var delay=500; // �������� � ��

// ��������� ���������� ��������� �������
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

// ����� �������
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


// ������� �������
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

// ��������� �������� ������� �������
function startTime()
{
if (timerOn == false)
{
timerID=setTimeout( "hideMenuAll(id_menu)" , delay);
timerOn = true;
}
}

// ����� ����������
function stopTime()
{
if (timerOn)
{
clearTimeout(timerID);
timerID = null;
timerOn = false;
}
}

// ����� ������� � ����� ����
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

