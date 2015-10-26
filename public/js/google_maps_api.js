"use strict";
(function() {
        var mapOptions = {
            zoom: 18,

            center: {
                lat: 29.422088, 
                lng: -98.484437
            },
             
    mapTypeId: google.maps.MapTypeId.HYBRID
        }
        
        var ruthchris = { lat: 29.422088, lng: -98.484437};
        // var geocoder = new google.maps.Geocoder();
        // geocode(request:GeocoderRequest, callback:function(Array.<GeocoderResult>, GeocoderStatus))
        // {
        //     address: string,
        //     location: LatLng,
        //     placeId: string,
        //     bounds: LatLngBounds,
        //     componentRestrictions: GeocoderComponentRestrictions,
        //     region: string
        // }

        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        // Create a new infoWindow object with content
        // var infowindow = new google.maps.InfoWindow({
            // content: "Changing the world, one programmer at a time."
        // });
        var infowindow = new google.maps.InfoWindow({
            content: "Ruth Chris Steakhouse"
        });
        // var marker = new google.maps.Marker({
            // position: codeup,
            // map: map
        // });
        var marker = new google.maps.Marker({ 
            position: ruthchris,
            map: map
        });
        
infowindow.open(map, marker);
    })();

    google.maps.event.addDomListener(window, 'load' , initialize);
