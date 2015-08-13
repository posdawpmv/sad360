// Docs at http://simpleweatherjs.com

/* 
 * Test Locations
 * Belo Horizonte - MG
 */
$(document).ready(function () {

    /* Does your browser support geolocation? */
    if (navigator.geolocation) {
        var opt = {
            enableHighAccuracy: false,
            timeout: 5000
        };
        navigator.geolocation.getCurrentPosition(showPosition, showError, opt);
    } else {
        loadDefaultLocation();
    }

});

function loadWeather(location, woeid) {
    $.simpleWeather({
        location: location,
        woeid: woeid,
        unit: 'c',
        success: function (weather) {
            html = '<h2><i class="icon-' + weather.code + '"></i> ' + weather.temp + '&deg;' + weather.units.temp + '</h2>';
            html += '<p>' + weather.city + ', ' + weather.region + '</p>';

            $("#weather").html(html);
        },
        error: function (error) {
            $("#weather").html('<p>' + error + '</p>');
        }
    });
}

function loadDefaultLocation() {
    loadWeather('Belo Horizonte', '');
}

function showPosition(position) {
    loadWeather(position.coords.latitude + ',' + position.coords.longitude); //load weather using your lat/lng coordinates    
}

function showError(error) {
    console.log(error);
    loadDefaultLocation();
}