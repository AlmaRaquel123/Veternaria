window.onload = function(){
    var options = {
        zoom: 8
        , center: new google.maps.LatLng(19.463948, -97.686259)
        , mapTypeId: google.maps.MapTypeId.SATELLITE
    };
    var map = new google.maps.Map(document.getElementById('map'), options);
};