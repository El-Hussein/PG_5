<!DOCTYPE html>
<html>
<head>
	<title>Add Play Ground</title>
	<style type="text/css">
		body {
		  padding-top: 20px;
		  padding-bottom: 20px;
		}

		/* Everything but the jumbotron gets side spacing for mobile first views */
		.header,
		.marketing,
		.footer {
		  padding-right: 15px;
		  padding-left: 15px;
		}

		/* Custom page header */
		.header {
		  border-bottom: 1px solid #e5e5e5;
		}
		/* Make the masthead heading the same height as the navigation */
		.header h3 {
		  padding-bottom: 19px;
		  margin-top: 0;
		  margin-bottom: 0;
		  line-height: 40px;
		}

		/* Custom page footer */
		.footer {
		  padding-top: 19px;
		  color: #777;
		  border-top: 1px solid #e5e5e5;
		}

		/* Customize container */
		@media (min-width: 768px) {
		  .container {
		    max-width: 730px;
		  }
		}
		.container-narrow > hr {
		  margin: 30px 0;
		}

		/* Main marketing message and sign up button */
		.jumbotron {
		  text-align: center;
		  border-bottom: 1px solid #e5e5e5;
		}
		.jumbotron .btn {
		  padding: 14px 24px;
		  font-size: 21px;
		}

		/* Supporting marketing content */
		.marketing {
		  margin: 40px 0;
		}
		.marketing p + h4 {
		  margin-top: 28px;
		}

		/* Responsive: Portrait tablets and up */
		@media screen and (min-width: 768px) {
		  /* Remove the padding we set earlier */
		  .header,
		  .marketing,
		  .footer {
		    padding-right: 0;
		    padding-left: 0;
		  }
		  /* Space out the masthead */
		  .header {
		    margin-bottom: 30px;
		  }
		  /* Remove the bottom border on the jumbotron for visual effect */
		  .jumbotron {
		    border-bottom: 0;
		  }

		}
		.btn-file {
		    position: relative;
		    overflow: hidden;
		}
		.btn-file input[type=file] {
		    position: absolute;
		    top: 0;
		    right: 0;
		    min-width: 100%;
		    min-height: 100%;
		    font-size: 100px;
		    text-align: right;
		    filter: alpha(opacity=0);
		    opacity: 0;
		    outline: none;
		    background: white;
		    cursor: inherit;
		    display: block;
		}

		#img-upload{
		    width: 100%;
		}
		.entry:not(:first-of-type)
		{
		    margin-top: 10px;
		}

		.glyphicon
		{
		    font-size: 12px;
		}
		#description {
	        font-family: Roboto;
	        font-size: 15px;
	        font-weight: 300;
	      }

	      #infowindow-content .title {
	        font-weight: bold;
	      }

	      #infowindow-content {
	        display: none;
	      }

	      #map #infowindow-content {
	        display: inline;
	      }

	      .pac-card {
	        margin: 10px 10px 0 0;
	        border-radius: 2px 0 0 2px;
	        box-sizing: border-box;
	        -moz-box-sizing: border-box;
	        outline: none;
	        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
	        background-color: #fff;
	        font-family: Roboto;
	      }

	      #pac-container {
	        padding-bottom: 12px;
	        margin-right: 12px;
	      }

	      .pac-controls {
	        display: inline-block;
	        padding: 5px 11px;
	      }

	      .pac-controls label {
	        font-family: Roboto;
	        font-size: 13px;
	        font-weight: 300;
	      }

	      #pac-input {
	        background-color: #fff;
	        font-family: Roboto;
	        font-size: 15px;
	        font-weight: 300;
	        margin-left: 12px;
	        padding: 0 11px 0 13px;
	        text-overflow: ellipsis;
	        width: 400px;
	      }

	      #pac-input:focus {
	        border-color: #4d90fe;
	      }

	      #title {
	        color: #fff;
	        background-color: #4d90fe;
	        font-size: 25px;
	        font-weight: 500;
	        padding: 6px 12px;
	      }
	</style>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function() {
	    	$(document).on('change', '.btn-file :file', function() {
			var input = $(this),
				label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [label]);
			});

			$('.btn-file :file').on('fileselect', function(event, label) {
			    
			    var input = $(this).parents('.input-group').find(':text'),
			        log = label;
			    
			    if( input.length ) {
			        input.val(log);
			    } else {
			        if( log ) alert(log);
			    }
		    
			});
			function readURL(input) {
			    if (input.files && input.files[0]) {
			        var reader = new FileReader();
			        
			        reader.onload = function (e) {
			            $('#img-upload').attr('src', e.target.result);
			        }
			        
			        reader.readAsDataURL(input.files[0]);
			    }
			}

			$("#imgInp").change(function(){
			    readURL(this);
			}); 	
		});
		$(function()
		{
		    $(document).on('click', '.btn-add', function(e)
		    {
		        e.preventDefault();

		        var controlForm = $('.controls:first'),
		            currentEntry = $(this).parents('.entry:first'),
		            newEntry = $(currentEntry.clone()).appendTo(controlForm);

		        newEntry.find('input').val('');
		        controlForm.find('.entry:not(:last) .btn-add')
		            .removeClass('btn-add').addClass('btn-remove')
		            .removeClass('btn-success').addClass('btn-danger')
		            .html('<span class="glyphicon glyphicon-minus"></span>');
		    }).on('click', '.btn-remove', function(e)
		    {
		      $(this).parents('.entry:first').remove();

				e.preventDefault();
				return false;
			});
		});
	</script>
</head>
<body>

<!-- Include the above in your HEAD tag -->
 
	<div class="container">
	    <h1 class="well text-center">New Play Ground</h1>
		<div class="col-lg-12 well">
			<div class="row">
				<form method="post" action="/addNewPG" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="col-sm-12">

						<div class="form-group">
							<label>Play Ground Name</label>
							<input type="text" name="pg_name" placeholder="Enter Play Ground Name.." class="form-control">
						</div>
						<div class="form-group">
							<label>Region Name</label>
							<input type="text" name="pg_region" placeholder="Enter Region Name.." class="form-control">
						</div>

						<div class="form-group">
							<label>Owner Name</label>
							<input type="text" name="pg_owner_name" placeholder="Enter Owner Name.." class="form-control">
						</div>		
						<div class="form-group">
							<label>Contact Phone</label>
							<input type="text" name="pg_contact_phone" placeholder="Enter Contact Phone.." class="form-control">
						</div>		
						
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Start Work</label>
								<input type="text" name="pg_start_work" placeholder="Enter Start Work.." class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>End Work</label>
								<input type="text" name="pg_end_work" placeholder="Enter End Work.." class="form-control">
							</div>	
						</div>

						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Day Price</label>
								<input type="text" name="pg_day_price" placeholder="Enter Day Price.." class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Night Price</label>
								<input type="text" name="pg_night_price" placeholder="Enter Night Price.." class="form-control">
							</div>	
						</div>

						<div class="form-group">
					        <label>Play Ground Profile Image</label>
					        <div class="input-group">
					            <span class="input-group-btn">
					                <span class="btn btn-default btn-file">
					                    Browse… <input type="file" name="pg_image_profile" id="imgInp">
					                </span>
					            </span>
					            <input type="text"  class="form-control" readonly>
					        </div>
					        <img id='img-upload'/>
					    </div>

					    <div class="row">
							<div class="col-sm-6 form-group">
								<label>Latitude</label>
								<input type="text" name="lat" id="lat" class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Longtude</label>
								<input type="text" name="lng" id="lng" class="form-control">
							</div>	
						</div>
						<div class="row">
				  			<h3 class="text-danger"> Play Ground Location </h3>
				  			<div class="pac-card" id="pac-card">
				              <div>
				                <div id="title">
				                  Search Place
				                </div>
				                <br>
				              </div>
				              <div id="pac-container">
				                <input id="pac-input" type="text"
				                    placeholder="Enter a location">
				              </div>
				            </div>
				            <div id="map" style="width: 100%; height: 400px;"></div>
				            <div id="infowindow-content">
				              <img src="" width="16" height="16" id="place-icon">
				              <span id="place-name"  class="title"></span><br>
				              <span id="place-address"></span>
				            </div>
				  		</div>
						<div id="map" style="width: 650px; height: 200px;"></div><br>
					    <h4>Select PlayGound Images</h4>
					    <div class="controls">
           					<div class="entry input-group col-xs-3">					 
							    <input class="btn btn-primary" name="images[]" type="file" >
							    <span class="input-group-btn">
							  		<button class="btn btn-success btn-add" type="button">
					                    <span class="glyphicon glyphicon-plus"></span>
								    </button>
							    </span>
						  	</div>
						</div>

						<hr>						
						<h4 class="well">Play Ground Settings</h4>
						<div class="form-group">
							<label>username</label>
							<input type="text" name="pg_username" placeholder="Enter username.." class="form-control">
						</div>		
						<div class="form-group">
							<label>password</label>
							<input type="text" name="pg_password" placeholder="Enter password.." class="form-control">
						</div>	

						<button type="submit" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var map;
      var lat, lng;
      var myLoc={lat:0, lng:0};
      var marker;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
           center: {lat: 30.325618, lng: 31.191677},
          zoom: 15
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          console.log(place.geometry.location.lat);
           $("#lat").val(place.geometry.location.lat);
	       $("#lng").val(place.geometry.location.lng);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

        //   infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // // Sets a listener on a radio button to change the filter type on Places
        // // Autocomplete.
        // function setupClickListener(id, types) {
        //   var radioButton = document.getElementById(id);
        //   radioButton.addEventListener('click', function() {
        //     autocomplete.setTypes(types);
        //   });
        // }

        // setupClickListener('changetype-all', []);
        // setupClickListener('changetype-address', ['address']);
        // setupClickListener('changetype-establishment', ['establishment']);
        // setupClickListener('changetype-geocode', ['geocode']);

        // document.getElementById('use-strict-bounds')
        //     .addEventListener('click', function() {
        //       console.log('Checkbox clicked! New state=' + this.checked);
        //       autocomplete.setOptions({strictBounds: this.checked});
        //     });
        navigator.geolocation.getCurrentPosition(function(position) {
            myLoc = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var mainMarker = new google.maps.Marker({
                position: myLoc,
                map:map,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoomControl: false,
                streetViewControl: false,
                mapTypeControl: false,
            });
            var infoWindow = new google.maps.InfoWindow({
                content: "Your Position"
            });
            infoWindow.open(map, mainMarker);
            map.setCenter(myLoc);
        });

      }
      
      $("#lat").on('change', function(){
          myLoc.lat= $(this).val();
          if(myLoc.lat!=0 && myLoc.lng!=0){
            data = {
                lat:myLoc.lat, 
                lng: myLoc.lng,
            } 
            addMarker(data);
          }
      });
      $("#lng").on('change', function(){
          myLoc.lng= $(this).val();
        //   alert(myLoc.lng);
          if(myLoc.lat!=0 && myLoc.lng!=0){
            data = {
                lat:myLoc.lat, 
                lng: myLoc.lng,
            } 
            addMarker(data);
          }
      });

      $(function(){
	        google.maps.event.addListener(map, 'click', function(event) {
	            loc = event.latLng;
	            data = {
	                lat: loc.lat(), 
	                lng: loc.lng(),
	            } 
	            $("#lat").val(loc.lat());
	            $("#lng").val(loc.lng());
	            addMarker(data);
	            // setTimeout(placeMarker, 600);
	        });
	    });

    function addMarker(data){
        var pos = new google.maps.LatLng(data.lat,data.lng);
        map.setCenter(pos);
        if(!marker){
            marker = new google.maps.Marker({
                position: pos,
                map:map,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoomControl: false,
                streetViewControl: false,
                mapTypeControl: false,
            });
        }else{
            marker.setPosition(pos);
        }
    }





	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3r3iI3Y6---PKPZ1LsuLrPQ1sCUrIrDU&callback=initMap&libraries=places"></script>
</body>
</html>