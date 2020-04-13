<div class="col-sm-7">
    <div id="map" style="height: 500px"></div>
</div>


<div class="col-sm-5">

    <?php

        if ($this->session->flashdata('pesan')) 
        {
            echo '<div class="alert alert-success">';
            echo $this->session->flashdata('pesan');
            echo '</div>';
            if($this->session->flashdata('error')){
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('error');
                echo '</div>';
            }
            else{}
        }

        echo form_open_multipart('admin/input');
    ?>


        <div class="form-group">
            <label>Nama Wilayah</label>
            <input name="nama_wilayah" placeholder="Isi Nama Wilayah" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Provinsi</label>
            <input name="provinsi" placeholder="Isi Provinsi" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kabupaten/Kota</label>
            <input name="kabupaten" placeholder="Isi Kabupaten/Kota" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kecamatan</label>
            <input name="kecamatan" placeholder="Isi Kecamatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Virus</label>
            <input name="nama_virus" placeholder="Isi Nama Virus" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Gambar yang terkait</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Korban</label>
                <input type="number" min="0" name="jml_korban" placeholder="Jumlah Korban" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Meninggal</label>
                <input type="number" min="0" name="jml_meninggal" placeholder="Jumlah Meninggal" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Sembuh</label>
                <input type="number" min="0" name="jml_sembuh" placeholder="Jumlah Sembuh" class="form-control" required>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Latitude</label>
                <input name="latitude" id="Latitude" placeholder="Koordinat Latitude" class="form-control" required readonly>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Longitude</label>
                <input name="longitude" id="Longitude" placeholder="Koordinat Longitude" class="form-control" required readonly>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Radius (mil)</label>
                <select name="radius" class="form-control">
                    <option value="10000">10000</option>
                    <option value="30000">30000</option>
                    <option value="50000">50000</option>
                    <option value="70000">70000</option>
                    <option value="90000">90000</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Warna (zona)</label>
                <select name="warna" class="form-control">
                    <option value="red">red</option>
                    <option value="blue">blue</option>
                    <option value="yellow">yellow</option>
                    <option value="green">green</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn btn-primary">Reset</button>        
        </div>

    <?php
        echo form_close();
    ?>

</div>

<script>

    var curLocation=[0,0];
        if (curLocation[0]==0 && curLocation[1]==0) {
            curLocation =[-1.963988, 120.080987];	
        }

    var map = L.map('map').setView([-1.963988, 120.080987], 5);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    // tileSize: 512,
    // zoomOffset: -1,
    // accessToken: 'your.mapbox.access.token'
    }).addTo(map);

    map.attributionControl.setPrefix(false);

    var marker = new L.marker(curLocation, {
        draggable:'true'
    });

    marker.on('dragend', function(event) {
    var position = marker.getLatLng();
    marker.setLatLng(position,{
        draggable : 'true'
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng).keyup();
    });

    $("#Latitude, #Longitude").change(function(){
        var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
        marker.setLatLng(position, {
        draggable : 'true'
        }).bindPopup(position).update();
        map.panTo(position);
    });
    map.addLayer(marker);

</script>