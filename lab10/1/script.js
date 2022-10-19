function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var pos = {
                'lat': document.getElementById("lati").value,
                'long': document.getElementById("long").value
            };
            console.log(pos);
            document.getElementById('map').src = 'https://maps.google.com/maps?q=' + pos.lat + ', ' +
                pos.long + '&t=&z=15&ie=UTF8&iwloc=&output=embed';
        });
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function getDestination() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var pos = {
                'desti': document.getElementById("desti").value
            };
            console.log(pos);
            document.getElementById('map').src = 'https://maps.google.com/maps?q=' + pos.desti +
                '&t=&z=15&ie=UTF8&iwloc=&output=embed';
        });
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}