jQuery(document).ready(function () {
	function InitializeMap175595() {
		var marker = [];
		var polygone = [];
		var polyline = [];
		var polylinepoints;
		var newpolylinecoords = [];
		var polygonpoints;
		var polygoncoords = [];
		var newcircle = [];
		var infowindow = [];
		var newcirclemarker = [];
		var circlepoint;
		var width = jQuery("#huge_it_google_map").width();
		var height = jQuery("#huge_it_google_map").height();
		var div = parseInt(width) / parseInt(height);
		var trafficLayer = new google.maps.TrafficLayer();
		var bikeLayer = new google.maps.BicyclingLayer();
		var transitLayer = new google.maps.TransitLayer();
		function bindInfoWindow(marker, map, infowindow, description, info_type) {
			if (info_type == "click") {
				google.maps.event.addListener(marker, 'click', function () {
					infowindow.setContent(description);
					infowindow.open(map, marker);
				});
			}
			if (info_type == "hover") {
				google.maps.event.addListener(marker, 'mouseover', function () {
					infowindow.setContent(description);
					infowindow.open(map, marker);
				});
				google.maps.event.addListener(marker, 'mouseout', function () {
					infowindow.close(map, marker);
				});
			}
		}
		jQuery(document).on("click tap drag scroll", function (e) {
			if (window.matchMedia('(max-width:768px)').matches) {
				var container = jQuery("#huge_it_google_map175595");
				if (!container.is(e.target) && container.has(e.target).length === 0) {
					front_end_map.setOptions({
						draggable: false,
						scrollwheel: false
					});
				} else {
					front_end_map.setOptions({
						draggable: true,
						scrollwheel: true
					});
				}
			}
		});
		jQuery(window).on("resize", function () {
			var newwidth = jQuery("#huge_it_google_map").width();
			var newheight = parseInt(newwidth) / parseInt(div) + "px";
			jQuery("#huge_it_google_map").height(newheight);
			console.log(jQuery("#huge_it_google_map").height());
		})
		var center_lat = 49.6726947;
		var center_lng = 20.68484609999996;
		var center_coords = new google.maps.LatLng(center_lat, center_lng);
		var styles = [
			{
				stylers: [
					{hue: "#"},
					{saturation:0 },
					{lightness:0 },
					{gamma:1 },
				]
			}
		]
		var frontEndMapOptions = {
			zoom: parseInt(15),
			center: center_coords,
			disableDefaultUI: true,
			styles: styles,
			panControl: true,
			zoomControl: true,
			mapTypeControl: true,
			scaleControl: true,
			streetViewControl: true,
			overviewMapControl: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			minZoom: parseInt(0),
			maxZoom: parseInt(22)
		}
		var front_end_map = new google.maps.Map(document.getElementById('huge_it_google_map175595'), frontEndMapOptions);
		if (window.matchMedia('(max-width:768px)').matches) {
			front_end_map.setOptions({
				draggable: false,
				scrollwheel: false
			});
		} else {
			front_end_map.setOptions({
				draggable: true,
				scrollwheel: true
			});
		}
		var huge_map_shown = 0;
		function front_map_animations() {
			var map_anim;
			huge_map_shown = 1;
			var block = jQuery("#huge_it_google_map175595");
			if ("none" == "none") {
				map_anim = "";
			} else {
				map_anim = "none";
			}
			block.removeClass("hide");
			block.addClass("animated " + map_anim);
			google.maps.event.trigger(front_end_map, 'resize');
			front_end_map.setCenter(center_coords);
		}
		if (jQuery(window).scrollTop() <= jQuery("#huge_it_google_map175595_container").offset().top
			&& jQuery(window).scrollTop() + jQuery(window).height() >= jQuery("#huge_it_google_map175595_container").offset().top
		) {
			setTimeout(function () {
				front_map_animations();
			}, 500);
		}
		jQuery(window).scroll(function () {
			if (jQuery(window).scrollTop() <= jQuery("#huge_it_google_map175595_container").offset().top
				&& jQuery(window).scrollTop() + jQuery(window).height() >= jQuery("#huge_it_google_map175595_container").offset().top
			) {
				setTimeout(function () {
					front_map_animations();
				}, 500);
			}
		});
		if ("false" == "true") {
			bikeLayer.setMap(front_end_map);
		}
		if ("false" == "true") {
			trafficLayer.setMap(front_end_map);
		}
		if ("false" == "true") {
			transitLayer.setMap(front_end_map);
		}
		var front_end_data = {
			action: 'g_map_options',
			map_id:1,
			task: 'ajax'
		}
		jQuery.ajax({
			url: 'http://e-wydruki.scepter.pl/wp-admin/admin-ajax.php',
			dataType: 'json',
			method: 'post',
			data: front_end_data,
			beforeSend: function () {
			}
		}).done(function (response) {
			HGinitializeMap(response);
		}).fail(function () {
			console.log('Failed to load response from database');
		});
		function HGinitializeMap(response) {
			if (response.success) {
				var mapInfo = response.success;
				var markers = mapInfo.markers;
				for (var i = 0; i < markers.length; i++) {
					var name = markers[i].name;
					var address = markers[i].address;
					var anim = markers[i].animation;
					var description = markers[i].description;
					var markimg = markers[i].img;
					var img = new google.maps.MarkerImage(markimg,
						new google.maps.Size(20, 20));
					var point = new google.maps.LatLng(
						parseFloat(markers[i].lat),
						parseFloat(markers[i].lng));
					var html = "<b>" + name + "</b> <br/>" + address;
					if (anim == 'DROP') {
						marker[i] = new google.maps.Marker({
							map: front_end_map,
							position: point,
							title: name,
							icon: markimg,
							content: description,
							animation: google.maps.Animation.DROP
						});
					}
					if (anim == 'BOUNCE') {
						marker[i] = new google.maps.Marker({
							map: front_end_map,
							position: point,
							title: name,
							content: description,
							icon: markimg,
							animation: google.maps.Animation.BOUNCE
						});
					}
					if (anim == 'NONE') {
						marker[i] = new google.maps.Marker({
							map: front_end_map,
							position: point,
							icon: markimg,
							content: description,
							title: name,
						});
					}
					infowindow[i] = new google.maps.InfoWindow;
					bindInfoWindow(marker[i], front_end_map, infowindow[i], description, "click");
				}
				var polygones = mapInfo.polygons;
				for (var i = 0; i < polygones.length; i++) {
					var name = polygones[i].name;
					var line_opacity = polygones[i].line_opacity;
					var line_color = "#" + polygones[i].line_color;
					var fill_opacity = polygones[i].fill_opacity;
					var line_width = polygones[i].line_width;
					var fill_color = "#" + polygones[i].fill_color;
					var latlngs = polygones[i].latlng;
					polygoncoords = [];
					for (var j = 0; j < latlngs.length; j++) {
						polygonpoints = new google.maps.LatLng(parseFloat(latlngs[j].lat),
							parseFloat(latlngs[j].lng))
						polygoncoords.push(polygonpoints)
					}
					polygone[i] = new google.maps.Polygon({
						paths: polygoncoords,
						map: front_end_map,
						strokeOpacity: line_opacity,
						strokeColor: line_color,
						strokeWeight: line_width,
						fillOpacity: fill_opacity,
						fillColor: fill_color,
						draggable: false,
					});
					google.maps.event.addListener(polygone[i], 'click', function (event) {
						var polygone_index = polygone.indexOf(this);
						var polygone_url = polygones[polygone_index].url;
						if (polygone_url != "") {
							window.open(polygone_url, '_blank');
						}
					})
				}
				console.log(polygone);
				var polylines = mapInfo.polylines;
				for (var i = 0; i < polylines.length; i++) {
					var name = polylines[i].name;
					var line_opacity = polylines[i].line_opacity;
					var line_color = polylines[i].line_color;
					var line_width = polylines[i].line_width;
					var latlngs = polylines[i].latlng;
					newpolylinecoords = [];
					for (var j = 0; j < latlngs.length; j++) {
						polylinepoints = new google.maps.LatLng(parseFloat(latlngs[j].lat),
							parseFloat(latlngs[j].lng))
						newpolylinecoords.push(polylinepoints)
					}
					polyline[i] = new google.maps.Polyline({
						path: newpolylinecoords,
						map: front_end_map,
						strokeColor: "#" + line_color,
						strokeOpacity: line_opacity,
						strokeWeight: line_width
					})
				}
				var circles = mapInfo.circles;
				for (var i = 0; i < circles.length; i++) {
					var circle_name = circles[i].name;
					var circle_center_lat = circles[i].center_lat;
					var circle_center_lng = circles[i].center_lng;
					var circle_radius = circles[i].radius;
					var circle_line_width = circles[i].line_width;
					var circle_line_color = circles[i].line_color;
					var circle_line_opacity = circles[i].line_opacity;
					var circle_fill_color = circles[i].fill_color;
					var circle_fill_opacity = circles[i].fill_opacity;
					var circle_show_marker = parseInt(circles[i].show_marker);
					circlepoint = new google.maps.LatLng(parseFloat(circles[i].center_lat),
						parseFloat(circles[i].center_lng));
					newcircle[i] = new google.maps.Circle({
						map: front_end_map,
						center: circlepoint,
						title: name,
						radius: parseInt(circle_radius),
						strokeColor: "#" + circle_line_color,
						strokeOpacity: circle_line_opacity,
						strokeWeight: circle_line_width,
						fillColor: "#" + circle_fill_color,
						fillOpacity: circle_fill_opacity
					});
					if (circle_show_marker == '1') {
						newcirclemarker[i] = new google.maps.Marker({
							position: circlepoint,
							map: front_end_map,
							title: circle_name,
						});
					}
				}
			}
		}
	}
	InitializeMap175595();
})