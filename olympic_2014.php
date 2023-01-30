<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "вгик, олимпиада");
$APPLICATION->SetPageProperty("keywords", "олимпиада, ВГИК");
$APPLICATION->SetPageProperty("description", "Заявка на участие в анимационной олимпиаде ВГИК \"Анимационный калейдоскоп\"");
$APPLICATION->SetTitle("Регистрация на олимпиаду");
?>	<form role="form" id="form_data" style="max-width:1100px; margin: 0 auto;" onsubmit="send_data(); return false;">
        <h2 style="font-size: 22px; text-align: center; line-height: 28px; margin-top: 0;">Заявка на участие в анимационной олимпиаде ВГИК «Анимационный калейдоскоп»</h2>
        
        <div class="row" id="fields_div">
        	<div class="col-sm-6 col-xs-12">
		        <div class="required-field-block">
		            <input type="text" name="fio" placeholder="ФИО участника" class="form-control">
		            <div class="required-icon">
		                <div class="text">*</div>
		            </div>
		        </div>

		        <div class="required-field-block">
		            <input type="text" name="email" placeholder="Email участника" class="form-control">
		            <div class="required-icon">
		                <div class="text">*</div>
		            </div>
		        </div>

		        <input type="text" name="phone" placeholder="Телефон участника" class="form-control" title="Телефон участника">

				<input type="text" name="learning" placeholder="Образовательное учреждение" class="form-control" title="Образовательное учреждение">

		        <input type="text" name="city" placeholder="Город, район, область" class="form-control" title="Город, район, область">

		        <div class="required-field-block">
		            <input type="text" name="film_name" placeholder="Название фильма" class="form-control" title="Название фильма">
		            <div class="required-icon">
		                <div class="text">*</div>
		            </div>
		        </div>

		        <select name="year" class="form-control" title="Год производства">
		        	<option value="">Год производства</option>
		        	<option value="2013">2013</option>
		        	<option value="2014">2014</option>
		        	<option value="2015">2015</option>
		        </select>

		        <input type="text" name="length" placeholder="Метраж (до 3-х минут)" class="form-control" title="Метраж (до 3-х минут)">

		         <select name="format" class="form-control" title="Формат показа">
		        	<option value="">Формат показа</option>
		        	<option value="1">DVD</option>
		        	<option value="2">HD</option>
		        	<option value="3">MP4 Codec 264</option>
		        	<option value="4">Full HD</option>
		        	<option value="5">Аудиоформат 48Khz</option>
		        </select>
			</div>
			
			<div class="col-sm-6 col-xs-12">
		        <div class="required-field-block">
		            <textarea name="biography" rows="3" class="form-control" placeholder="Краткая биография участника" title="Краткая биография участника"></textarea>
		            <div class="required-icon">
		                <div class="text">*</div>
		            </div>
		        </div>
		        
		        <div class="required-field-block">
		            <textarea name="annotation" rows="3" class="form-control" placeholder="Аннотация к фильму" style="height:300px;" title="Аннотация к фильму"></textarea>
		            <div class="required-icon">
		                <div class="text">*</div>
		            </div>
		        </div>
			</div>
			<div class="col-xs-12">
				<button class="btn btn-primary">Подать заявку</button>
			</div>
		</div>
 


        <!--
        <div class="required-field-block">
            <textarea rows="3" class="form-control" placeholder="Контакты участника (Email, телефон)"></textarea>
            <div class="required-icon">
                <div class="text">*</div>
            </div>
        </div>
        -->
        
       
    </form>

<style>
input, select, textarea, button { margin-top:10px }

/* Required field START */

.required-field-block {
    position: relative;   
}

.required-field-block .required-icon {
    display: inline-block;
    vertical-align: middle;
    margin: -0.25em 0.25em 0em;
    background-color: #E8E8E8;
    border-color: #E8E8E8;
    padding: 0.5em 0.8em;
    color: rgba(0, 0, 0, 0.65);
    text-transform: uppercase;
    font-weight: normal;
    border-radius: 0.325em;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: background 0.1s linear;
    -moz-transition: background 0.1s linear;
    transition: background 0.1s linear;
    font-size: 75%;
}
	
.required-field-block .required-icon {
    background-color: transparent;
    position: absolute;
    top: 0em;
    right: 0em;
    z-index: 10;
    margin: 0em;
    width: 30px;
    height: 30px;
    padding: 0em;
    text-align: center;
    -webkit-transition: color 0.2s ease;
    -moz-transition: color 0.2s ease;
    transition: color 0.2s ease;
}

.required-field-block .required-icon:after {
    position: absolute;
    content: "";
    right: 1px;
    top: 1px;
    z-index: -1;
    width: 0em;
    height: 0em;
    border-top: 0em solid transparent;
    border-right: 30px solid transparent;
    border-bottom: 30px solid transparent;
    border-left: 0em solid transparent;
    border-right-color: inherit;
    -webkit-transition: border-color 0.2s ease;
    -moz-transition: border-color 0.2s ease;
    transition: border-color 0.2s ease;
}

.required-field-block .required-icon .text {
	color: #B80000;
	font-size: 26px;
	margin: -3px 0 0 12px;
}
.btn-primary {
	color: #fff;
	background-color: #CA9F42;
	border-color: #A1681C;
	font-size: 20px;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary {
	color: #fff;
	background-color: #945D14;
	border-color: #DF982A;
}
/* Required field END */
</style>

<script>
/*
	Masked Input plugin for jQuery
	Copyright (c) 2007-2013 Josh Bush (digitalbush.com)
	Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
	Version: 1.3.1
*/
(function(e){function t(){var e=document.createElement("input"),t="onpaste";return e.setAttribute(t,""),"function"==typeof e[t]?"paste":"input"}var n,a=t()+".mask",r=navigator.userAgent,i=/iphone/i.test(r),o=/android/i.test(r);e.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},dataName:"rawMaskFn",placeholder:"_"},e.fn.extend({caret:function(e,t){var n;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof e?(t="number"==typeof t?t:e,this.each(function(){this.setSelectionRange?this.setSelectionRange(e,t):this.createTextRange&&(n=this.createTextRange(),n.collapse(!0),n.moveEnd("character",t),n.moveStart("character",e),n.select())})):(this[0].setSelectionRange?(e=this[0].selectionStart,t=this[0].selectionEnd):document.selection&&document.selection.createRange&&(n=document.selection.createRange(),e=0-n.duplicate().moveStart("character",-1e5),t=e+n.text.length),{begin:e,end:t})},unmask:function(){return this.trigger("unmask")},mask:function(t,r){var c,l,s,u,f,h;return!t&&this.length>0?(c=e(this[0]),c.data(e.mask.dataName)()):(r=e.extend({placeholder:e.mask.placeholder,completed:null},r),l=e.mask.definitions,s=[],u=h=t.length,f=null,e.each(t.split(""),function(e,t){"?"==t?(h--,u=e):l[t]?(s.push(RegExp(l[t])),null===f&&(f=s.length-1)):s.push(null)}),this.trigger("unmask").each(function(){function c(e){for(;h>++e&&!s[e];);return e}function d(e){for(;--e>=0&&!s[e];);return e}function m(e,t){var n,a;if(!(0>e)){for(n=e,a=c(t);h>n;n++)if(s[n]){if(!(h>a&&s[n].test(R[a])))break;R[n]=R[a],R[a]=r.placeholder,a=c(a)}b(),x.caret(Math.max(f,e))}}function p(e){var t,n,a,i;for(t=e,n=r.placeholder;h>t;t++)if(s[t]){if(a=c(t),i=R[t],R[t]=n,!(h>a&&s[a].test(i)))break;n=i}}function g(e){var t,n,a,r=e.which;8===r||46===r||i&&127===r?(t=x.caret(),n=t.begin,a=t.end,0===a-n&&(n=46!==r?d(n):a=c(n-1),a=46===r?c(a):a),k(n,a),m(n,a-1),e.preventDefault()):27==r&&(x.val(S),x.caret(0,y()),e.preventDefault())}function v(t){var n,a,i,l=t.which,u=x.caret();t.ctrlKey||t.altKey||t.metaKey||32>l||l&&(0!==u.end-u.begin&&(k(u.begin,u.end),m(u.begin,u.end-1)),n=c(u.begin-1),h>n&&(a=String.fromCharCode(l),s[n].test(a)&&(p(n),R[n]=a,b(),i=c(n),o?setTimeout(e.proxy(e.fn.caret,x,i),0):x.caret(i),r.completed&&i>=h&&r.completed.call(x))),t.preventDefault())}function k(e,t){var n;for(n=e;t>n&&h>n;n++)s[n]&&(R[n]=r.placeholder)}function b(){x.val(R.join(""))}function y(e){var t,n,a=x.val(),i=-1;for(t=0,pos=0;h>t;t++)if(s[t]){for(R[t]=r.placeholder;pos++<a.length;)if(n=a.charAt(pos-1),s[t].test(n)){R[t]=n,i=t;break}if(pos>a.length)break}else R[t]===a.charAt(pos)&&t!==u&&(pos++,i=t);return e?b():u>i+1?(x.val(""),k(0,h)):(b(),x.val(x.val().substring(0,i+1))),u?t:f}var x=e(this),R=e.map(t.split(""),function(e){return"?"!=e?l[e]?r.placeholder:e:void 0}),S=x.val();x.data(e.mask.dataName,function(){return e.map(R,function(e,t){return s[t]&&e!=r.placeholder?e:null}).join("")}),x.attr("readonly")||x.one("unmask",function(){x.unbind(".mask").removeData(e.mask.dataName)}).bind("focus.mask",function(){clearTimeout(n);var e;S=x.val(),e=y(),n=setTimeout(function(){b(),e==t.length?x.caret(0,e):x.caret(e)},10)}).bind("blur.mask",function(){y(),x.val()!=S&&x.change()}).bind("keydown.mask",g).bind("keypress.mask",v).bind(a,function(){setTimeout(function(){var e=y(!0);x.caret(e),r.completed&&e==x.val().length&&r.completed.call(x)},0)}),y()}))}})})(jQuery);

$(function() {
    $('.required-icon').tooltip({
        placement: 'left',
        title: 'Обязательно для заполнения'
	});
	
	$("[name=phone]").mask("+9 (999) 999-99-99");
	$("[name=length]").mask("99:99");
});
function send_data()
{
	var err = [];
	$('.required-field-block input, .required-field-block textarea').each(function () {
		if ($(this).val() == '')
		{
			err.push('- '+$(this).attr('placeholder'));
		}
	})
	if (err.length)
	{
		alert('Следующие поля являются обязательными для заполнения:'+"\n" + err.join("\n"));

		return false;
	}
	
	$.ajax({
		type: "POST",
		url: "olympic_2014_registration.php",
		data: $('#form_data').serialize()
	})
	.done(function( msg ) {
		$('#fields_div').html('<div class="col-xs-12" style="text-align:center; font-size:25px; font-weight:bold; padding:25px;">Ваша заявка успешно принята!</div>');
	});
}
</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>