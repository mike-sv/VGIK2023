<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Предпросмотр");
?><script src="/js/unitegallery.min.js"></script>
<script src="/js/unitegaller/themes/ug-theme-grid.js"></script>
<link href="/js/unitegaller/themes/css/unite-gallery.css" type="text/css"  rel="stylesheet" />

<p>Вадим Валентинович Алисов родился в 1941 году в Киеве. С 1958 года он работал на киностудии "Мосфильм" ассистентом оператора, позднее, в 1977 году, окончил операторский факультет ВГИКа. Алисов был оператором многих фильмов Эльдара Рязанова, в которых начинал работать как ассистент оператора ("Зигзаг удачи"), второй оператор ("Гараж") и продолжил как ведущий оператор ("Вокзал для двоих", "Жестокий романс", "Забытая мелодия для флейты", "Дорогая Елена Сергеевна").</p>

<p>Вадим Валентинович также сотрудничал с Владимиром Меньшовым ("Ширли-мырли", "Зависть богов"), Никитой Михалковым ("Анна. От шести до восемнадцати"), Леонидом Гайдаем ("На Дерибасовской хорошая погода") и другими кинематографистами. 
В. В. Алисов удостоился званий заслуженного деятеля искусств РФ, народного артиста РФ, а также ордена Дружбы за большой вклад в развитие отечественной культуры и искусства и многолетнюю плодотворную деятельность.</p>


<div id="gallery" style="margin:0px auto;display:none;">

<img alt="" data-type="youtube" data-videoid="0DY9P6owxIU" data-description="">
<img alt="" data-type="youtube" data-videoid="XCxIUHcoUbo" data-description="">
<img alt=""
						     src="/upload/2021/05/sm/DSC01044.jpg"
						     data-image="/upload/2021/05/DSC01044.jpg"
						     data-description=""
						     style="display:none">

	<img alt=""
						     src="/upload/2021/05/DSC01059.jpg"
						     data-image="/upload/2021/05/DSC01059.jpg"
						     data-description=""
						     style="display:none">

			
	<img alt=""
						     src="/upload/2021/05/DSC01099.jpg"
						     data-image="/upload/2021/05/DSC01099.jpg"
						     data-description=""
						     style="display:none">


	<img alt=""
						     src="/upload/2021/05/DSC01164.jpg"
						     data-image="/upload/2021/05/DSC01164.jpg"
						     data-description=""
						     style="display:none">
	<img alt=""
						     src="/upload/2021/05/DSC01179.jpg"
						     data-image="/upload/2021/05/DSC01179.jpg"
						     data-description=""
						     style="display:none">
	<img alt=""
						     src="/upload/2021/05/DSC01185.jpg"
						     data-image="/upload/2021/05/DSC01185.jpg"
						     data-description=""
						     style="display:none">



</div>


<script>
jQuery("#gallery").unitegallery({
	slider_scale_mode_media: "fit",
slider_scale_mode: "fit",
		slider_zoom_max_ratio: 0,
				gallery_theme: "grid",
gallery_height: 690,
thumb_width: 120,
thumb_height: 74,
				theme_panel_position: "bottom"				
			});
</script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>