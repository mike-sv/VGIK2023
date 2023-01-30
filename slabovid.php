<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> 
<div style='display:none'>
	<div id='slabovid' style='padding:10px;'>
		<div style="font-weight:bold;font-size:22px;text-align:center;">Настройка отображения версии для слабовидящих</div>
		<div style="margin-top:8px">
			<strong style="font-size:18px; margin-right:5px;">Цветовая схема:</strong>
				<img class="slab_scheme" src="https://vgik.info/img/a1.png" alt="" style="margin-right:7px;" onclick="set_scheme(this, 'a1')">
				<img class="slab_scheme" src="https://vgik.info/img/a2.png" alt="" style="margin-right:7px;" onclick="set_scheme(this, 'a2')">
				<img class="slab_scheme" src="https://vgik.info/img/a3.png" alt="" onclick="set_scheme(this, 'a3')">
		</div>
		<div style="margin-top:8px;">
			<strong style="font-size:18px; margin-right:5px;">Размер шрифта:</strong>
				<span class="slab_font" style="margin-right:7px; font-size:16px;" onclick="set_font(this, '16')">A</span>
				<span class="slab_font" style="margin-right:7px; font-size:18px;" onclick="set_font(this, '18')">A</span>
				<span class="slab_font" style="font-size:20px;" onclick="set_font(this, '20')">A</span>
		</div>
		<button type="button" class="btn" style="margin-top:8px;" onclick="location.reload();">Применить</button>
	</div>

	<div id='second_edu' style='padding:0px;'>
		<div style="background-image:url('/bg_vgik_edu_2.png');background-size:cover;height:570px;padding:0px;color:#710202;">
			<p style='font-size:26px;text-align:center;padding-top:140px'>Второе высшее образование<br><strong>БЕСПЛАТНО</strong><br><br>
				Грант Президента Российской Федерации<br> <strong>Проект «Второе высшее образование, как фактор повышения уровня подготовки специалистов творческих профессий»</strong></p>
			<p style="text-align:center;margin-top:20px;">
				<button type="button" class="btn btn-danger" style="margin-right:16px;">Узнать подробности</button>
				<button type="button" class="btn btn-danger" onclick="jQuery('#cboxClose').click();">Закрыть окно</button>
			</p>
		</div>
	</div>
</div>
<script>
	$(function () {
		$('.slabovid a').on('click', function () {
			yaCounter2228362.reachGoal('slabovid');
		});
		jQuery(".second_edu").colorbox({inline:true, href:'#second_edu', width:970});
	})
	function set_scheme(span, scheme)
	{
		$('.slab_scheme').each(function () {$(this).css('border', 'none')});
		$(span).css('border', '1px solid #cecece');
		document.cookie="scheme="+scheme+"; path=/; expires=Mon, 01-Jan-2030 00:00:00 GMT";
		//location.reload();
	}
	function set_font(span, font)
	{
		$('.slab_font').each(function () {$(this).css('border', 'none')});
		$(span).css('border', '1px solid #cecece');

		document.cookie="font="+font+"; path=/; expires=Mon, 01-Jan-2030 00:00:00 GMT";
		//location.reload();
	}
	<? if(isset($_COOKIE['font']) && ($_COOKIE['font']!='16')) echo '$(\'#leftmenu\').css(\'background-image\', \'url(/img/vert_menu_big.jpg)\');'; ?>
	<? if(isset($_COOKIE['scheme']) && ($_COOKIE['scheme']!='a3')) { ?>
		$("span[style*=color]").css('color', '');
		$('font[color*=#9d0a0f]').attr('color', '');
		$("span[style*=background-color],font[style*=background-color],b[style*=background-color],div[style*=background-color]").css('background-color', '');
		$('.main_content table td').css('border', '1px solid #cecece').css('padding', '10px');
		$('font[size]').attr('size', '')
	<? } ?>
</script>