/**
 * jquery.captec.slider - jQuery Slider for Captec Systems
 *
 *
 * @version 2 (4. March 2014)
 * @author Miramar Group - http://wwww.miramar-group.co.uk
 * @requires jQuery
 *
 */
 
 
$(document).ready(function() {

	function resetAll(area,name) {
		$('.selector-container > div').attr('class','selector-off');
		$.each(name,function(value) { 
			$("img[src$='"+area+"_"+name[value]+".png']").attr('src',"images/"+area+"_"+name[value]+"_off.png");
			$('#'+area+'-selector-'+name[value]+' > .area-title').removeClass("area-title-bold");
			$('#'+area+'-'+name[value]+'-container').hide();
		});
		
		
	}
	
	function bindSlider(area,name,bindTo) {
		$.each(bindTo,function(bindValue) {
			$.each(name,function(value) {
				$( "#"+area+"-"+name[value]+"-"+bindTo[bindValue]).bind( "mouseenter", function(event) {
					event.preventDefault();
					$("img[src$='"+area+"_"+name[value]+"_off.png']").attr('src','images/'+area+'_'+name[value]+'.png');
					$('#'+area+'-selector-'+name[value]+' > .area-title').addClass("area-title-bold");
					
				});
				$( "#"+area+"-"+name[value]+"-"+bindTo[bindValue]).bind( "mouseleave", function(event) {
					event.preventDefault();
					if($( "#selector-container-"+name[value]+" > div" ).attr('class') != 'selector-on') {
					$("img[src$='"+area+"_"+name[value]+".png']").attr('src',"images/"+area+"_"+name[value]+"_off.png");
					$('#'+area+'-selector-'+name[value]+' > .area-title').removeClass("area-title-bold");
					}
					
				});
				
				$( "#"+area+"-"+name[value]+"-"+bindTo[bindValue]).bind( "click", function(event) {
					event.preventDefault();
					if($( "#selector-container-"+name[value]+" > div" ).attr('class') != 'selector-on') {
						resetAll(area,name);
						$("img[src$='"+area+"_"+name[value]+"_off.png']").attr('src','images/'+area+'_'+name[value]+'.png');
						$('#'+area+'-selector-'+name[value]+' > .area-title').addClass("area-title-bold");
						$( "#selector-container-"+name[value]+" > div" ).attr('class','selector-on').hide().fadeIn();
						$('#'+area+'-'+name[value]+'-container').fadeIn();
						$('html,body').animate({scrollTop: $('#title-'+name[value]).offset().top});
						//1277 is the title, 680 is half way down
					}	
				});	
			});	
		});

		
	}
	
	
	function bindTitle(area,name) {
		$("."+area+"-selector-"+name).on("mouseenter", function(event) {
			$(this).find(".area-title").addClass("area-title-bold");
			$('#'+area+'-'+name+'-image').attr("src","images/"+area+"_"+name+".png");
		});
		
		$("."+area+"-selector-"+name).on("mouseleave", function(event) {
			$(this).find(".area-title").removeClass("area-title-bold");
			$('#'+area+'-'+name+'-image').attr("src","images/"+area+"_"+name+"_off.png");
		});
	}
	
	
	
	bindSlider("products",['crm','newsmail','portal'],['button','image','title']);
	bindSlider("pricing",['crm','newsmail','portal','suite'],['image','title']);
	bindTitle("home","products");
	bindTitle("home","services");
	bindTitle("home","believe");

	
});
		
	