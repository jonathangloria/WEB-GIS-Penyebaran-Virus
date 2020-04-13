<div class="card card-default">
    <div id="map" style="height: 500px"></div>
</div>

<script>

    var map = L.map('map').setView([-1.963988, 120.080987], 5);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/dark-v10',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
    }).addTo(map);
	
    <?php foreach ($pemetaan as $key => $value) { ?>

        L.circle([<?= $value->latitude ?>, <?= $value->longitude ?>], {
            radius: <?= $value->radius ?>,
            color: '<?= $value->warna ?>',
            fillColor: '<?= $value->warna ?>',
            fillOpacity: 0.4,
        })
        .bindPopup("<font><b>• Wilayah : </b><?= $value->nama_wilayah ?></font><br><font><b>• Nama Virus : </b><?= $value->nama_virus ?></font><br><font><b>• Jumlah Korban : </b><?= $value->jml_korban ?> orang</font><br><img src='<?= base_url() ?>template/assets/foto/<?= $value->foto?>' alt=''/>")
        .addTo(map);

    <?php } ?>
	
function getColor(ID) {
    return ID == 11 ? '#800026' :
           ID == 12  ? '#BD0026' :
           ID == 21  ? '#E31A1C' :
                      '#FFEDA0';
}
function style(feature) {
    return {
        fillColor: getColor(feature.properties.ID),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
    };
}

	function popUp(f,l){
    var out = [];
    if (f.properties){
        for(key in f.properties){
            out.push(key+": "+f.properties[key]);
        }
        l.bindPopup(out.join("<br />"));
    }
}
var jsonTest = new L.GeoJSON.AJAX(["template/assets/geojson/map.geojson"],{onEachFeature:popUp,style: style}).addTo(map);
   
</script>