
    "use strict";

// (function() {
    // var forecastRequest = $.get("http://api.openweathermap.org/data/2.5/forecast/daily");
function coordinates(latitude, longitude){
    $.get("http://api.openweathermap.org/data/2.5/forecast/daily",{
        APPID: "fe204cf01c9cf9543f486a41059914d8",
        lat: latitude,
        lon: longitude,
        units: "imperial",
        cnt: 3,
    }).done(function(data) {
        console.log(data.list);
        var populateForecast = [];
        data.list.forEach(function(forecast) {
            console.log(forecast.temp);
            populateForecast += '<div class="col-md-4">'
                            + '<img class="weatherIcon" src="http://openweathermap.org/img/w/' + forecast.weather[0].icon + '.png">'
                            + '<h2>' + Math.round(forecast.temp.min) + "&deg;" + "" + '/' + Math.round(forecast.temp.max) + "&deg;" + '</h2>'
                            + '<h3>' + moment.unix(forecast.dt).format("MMM D, YYYY") + '</h3>'
                            + '<h3> Clouds: ' + forecast.clouds + "%" + '</h3>'
                            + '<h3> Humidity: ' + forecast.humidity + "%" + '</h3>'
                            + '<h3> Wind: ' + Math.round(forecast.speed) + " mph" + '</h3>'
                            + '<h3> Pressure: ' + forecast.pressure + '</h3></div>';                    
        });
        $('#forecast').html(populateForecast);
    });
}
coordinates(29.423017, -98.48527);

(function() {
        var mapOptions = {
            zoom: 10,
            center: {
                lat:  29.423017,
                lng: -98.485327
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        })();
$('#btn').click(function() {
    coordinates($("#latitude").val(),$("#longitude").val());
    console.log($("#latitude").val());
    console.log($("#longitude").val());
})
   

