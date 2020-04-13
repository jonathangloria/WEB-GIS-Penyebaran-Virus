<table class="table table-responsive table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Nama Wilayah</th>
            <th>Provinsi</th>
            <th>Kabupaten/Kota</th>
            <th>Kecamatan</th>
            <th>Nama Virus</th>
            <th>Jumlah Korban</th>
            <th>Jumlah Meninggal</th>
            <th>Jumlah Sembuh</th>
            <th>Gambar</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($penyebaran as $key => $value) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $value->nama_wilayah ?></td>
                <td><?= $value->provinsi ?></td>
                <td><?= $value->kabupaten ?></td>
                <td><?= $value->kecamatan ?></td>
                <td><?= $value->nama_virus ?></td>
                <td><?= $value->jml_korban ?></td>
                <td><?= $value->jml_meninggal ?></td>
                <td><?= $value->jml_sembuh ?></td>
                <td>
                <a href="#" data-target="#modal<?= $value->id?>" data-toggle="modal" class="btn btn-xs btn-default fa fa-image"></a>
                </td>
                <div class="modal fade" id="modal<?= $value->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gambar yang terkait</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img src="<?= base_url() ?>template/assets/foto/<?= $value->foto?>" alt="">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            </tr>
        <?php } ?>
    </tbody>
</table>
