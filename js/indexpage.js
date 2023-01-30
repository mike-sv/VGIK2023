jQuery.fn.jAccordionLite = function (options){
	return this.each (function ()
	{

		this.options={
			speed: 300,
			vertical: false,
			defaultIndex: false,
			width: 735,
			height:150,
			widthLi: 350,
			heightLi:150
			
		};
		//alert(this.options.speed);
		$.extend (this.options, options);
		var ul= this;
		$(ul).css({overflow:'hidden', position:'relative', padding: '0px', width: 'auto', height: ul.options.height+'px'});
		var li = $("li", ul);
		var countIndex = li.size();
		var currentIndex = undefined;
		var defWidth = $(ul).width()/countIndex;
		var minWidth = (ul.options.width-ul.options.widthLi)/(countIndex-1);
		$(li).each(function (i) {
			$(this).css({position: 'absolute' , width: ul.options.widthLi+'px', height: ul.options.heightLi+'px', left:(i*defWidth)+"px"});
        });
/*	
	$(li).attr("id", function (i) {
          return i;
        });
*/		
		$(li).mouseenter(function(){
			//$(li).stop();
			var startIndex = $(li).index(this);
			//currentIndex = $(li).index(this);
			if ( currentIndex === undefined){
				$(li).each(function (i) {
					if (i>startIndex){
						//$(this).css('left',(ul.options.widthLi+(i-1)*minWidth)+"px");
						$(this).animate({left: (ul.options.widthLi+(i-1)*minWidth)+"px"}, { queue:false, duration:ul.options.speed});
					} else {
						//$(this).css('left',(i*minWidth)+"px");
						$(this).animate({left: (i*minWidth)+"px"}, { queue:false, duration:ul.options.speed});
					}
				});	
			} else {
				//var start, end;
				if ( startIndex<currentIndex) {
						//alert(startIndex+' : '+currentIndex);
					$(li).slice(startIndex+1, currentIndex+1).each(function (i) {
						$(this).animate({left: (ul.options.widthLi+(startIndex+i)*minWidth)+"px"}, { queue:false, duration:ul.options.speed});
					});
				} else {
					$(li).slice(currentIndex, startIndex+1).each(function (i) {
						//alert(currentIndex+i+1);
						$(this).animate({left: ((currentIndex+i)*minWidth)+"px"}, { queue:false, duration:ul.options.speed});
					});
				}	
			}
			currentIndex = startIndex;
		});
		$(ul).mouseleave(function(){
			$(li).stop();
			currentIndex = undefined;
			$(li).each(function (i) {
				//$(this).css('left',(i*defWidth)+"px");
				$(this).animate({left: (i*defWidth)+"px"}, { queue:false, duration:ul.options.speed});
			});
		});
	});
};
$(document).ready(function(){
	if ($(".bsm").length)
		$(".bsm").jAccordionLite();


    $('.touch .root-item').next('ul').each(function () {
	$(this).prev().click( function(event){
		event.preventDefault();
        	$(this).next('ul').toggle();
    	});
    });
    $('.touch .root-item-selected').next('ul').each(function () {
	$(this).prev().click( function(event){
		event.preventDefault();
        	$(this).next('ul').toggle();
    	});
    });

    $('.popupmenu').each(function () {
	$(this).prev().click( function(event){
		event.preventDefault();
        	$(this).next('ul').toggle();
	});
    });


    $(document).click( function(){
        $('.touch .root-item ul').hide();
    });

	$(".main_content img").bind("contextmenu", function(e) {
		return false;
	});
});