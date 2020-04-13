<div class="card card-default">
    <div id="map" style="height: 500px"></div>
</div>


<script>

    var map = L.map('map').setView([-1.963988, 120.080987], 5);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    // id: 'mapbox/satellite-v9',
     id: 'mapbox/streets-v11',
    // tileSize: 512,
    // zoomOffset: -1,
    // accessToken: 'your.mapbox.access.token'
    }).addTo(map);

    var polygon = L.polygon([
       
        [-7.053328, 110.430005],
        [-7.053999, 110.430745],
        [-7.053987, 110.432148],
        [-7.058959, 110.435171],
        [-7.061926, 110.435740],
        [-7.062884, 110.438272],
        [-7.062416, 110.441104],
        [-7.057071, 110.443014],
        [-7.055863, 110.440920],
        [-7.053356, 110.444240],
        [-7.049918, 110.448462],
        [-7.046229, 110.447416],
        [-7.042468, 110.443085],
        [-7.042755, 110.438177],
        [-7.046694, 110.434785],
        [-7.052496, 110.431465],
        [-7.053320, 110.429949],
    
    ]).bindPopup("<font><b>KENTANG</b>").addTo(map);

</script>