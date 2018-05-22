$(function(){
	
	if($('.produkty').find('.menu, .pages').length)
	{
		$('.produkty .menu .item')
		.on('click',function(e){
			var id = $(this).attr('item-id');
			$(this)
			.addClass('active')
			.siblings()
			.removeClass('active');
			
			var t = $('.produkty .pages .page');
			var t2 = $(t)
			.filter('[page-id="'+ id +'"]');
			
			$(t)
			.not(t2)
			.fadeOut(0,function(){
				$(t2)
				.fadeIn('slow');
				
			});
			
		});
		
	}
	
	if($('#footer #panelBot'))
	{
		$('#panelBot .tab .hitbox')
		.on('click',function(e){
			$(this)
			.parents('#panelBot')
			.toggleClass('in');
			
		});
		
		$('#panelBot .prev .hitbox')
		.on('click',function(e){
			var t = $('#panelBot .box .item').last();
			
			$('#panelBot .box')
			.prepend(t);
			
		});
		
		$('#panelBot .next .hitbox')
		.on('click',function(e){
			var t = $('#panelBot .box .item').first();
			
			$('#panelBot .box')
			.append(t);
			
		});
		
	}
	
	if($('#aktualnosci .box').find('.page, .menu').length)
	{
		$('#aktualnosci .menu .item')
		.on('click',function(e){
			var pages_id = $(this).attr('pages-id');
			$(this)
			.addClass('active')
			.siblings()
			.removeClass('active');
			
			$('#aktualnosci .pager .pages')
			.filter('[pages-id="'+ pages_id +'"]')
			.fadeIn('slow')
			.siblings()
			.fadeOut(0);
			
		});
		
		$('#aktualnosci .paginator .item')
		.on('click',function(e){
			var page_id = $(this).attr('page-id');
			$(this)
			.addClass('active')
			.siblings()
			.removeClass('active');
			
			$(this)
			.parent()
			.siblings()
			.filter('[page-id="'+ page_id +'"]')
			.fadeIn('slow')
			.siblings('.page')
			.fadeOut(0);
			
		})
		
	}
	
	if($('#gmap').length){
		var center = [49.6739996,20.68724609999996];
		var map = $('#gmap')
		.gmap3({
			center: center,
			zoom: 15,
			mapTypeId: 'style1',
			mapTypeControl: false,
		})
		.styledmaptype(
			"style1",
			[{
				"featureType": "all",
				"elementType": "labels.text.fill",
				"stylers": [{
					"saturation": 36
				}, {
					"color": "#000000"
				}, {
					"lightness": 40
				}]
			}, {
				"featureType": "all",
				"elementType": "labels.text.stroke",
				"stylers": [{
					"visibility": "on"
				}, {
					"color": "#000000"
				}, {
					"lightness": 16
				}]
			}, {
				"featureType": "all",
				"elementType": "labels.icon",
				"stylers": [{
					"visibility": "off"
				}, {
					"color": "#a85252"
				}]
			}, {
				"featureType": "administrative",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 20
				}]
			}, {
				"featureType": "administrative",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 17
				}, {
					"weight": 1.2
				}]
			}, {
				"featureType": "administrative.country",
				"elementType": "geometry.fill",
				"stylers": [{
					"visibility": "on"
				}]
			}, {
				"featureType": "landscape",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 20
				}]
			}, {
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 21
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 17
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 29
				}, {
					"weight": 0.2
				}]
			}, {
				"featureType": "road.arterial",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 18
				}]
			}, {
				"featureType": "road.local",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 16
				}]
			}, {
				"featureType": "transit",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 19
				}]
			}, {
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 17
				}]
			}],
			{name: "Style1"}
			
		)
		.marker({
			position: center,
			animation: google.maps.Animation.BOUNCE,
			icon: window.location.origin + '/wp-content/themes/ewydruki/img/gmap_pin.png',
		});
	}
	
	if($('#newsletter').length){
		$('#newsletter > .tab')
		.on('click',function(e){
			$(this)
			.parent()
			.addClass('in');
			
		});
		
		$('#newsletter > .main > .close')
		.on('click',function(e){
			$(this)
			.parents('#newsletter:first')
			.removeClass('in');
			
		});
		
	}
	
});