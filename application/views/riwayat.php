<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nomor Ijazah</th>
                    <th>File Ijazah </th>
                    <th>Tanggal Upload</th>
                  </tr>
                  </thead>
                  <?php $no = 1;
                  foreach($riwayat as $rwt) : ?>
                  <tbody>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $rwt->nama_siswa?></td>
                    <td><?= $rwt->nomor_ijazah?></td>
                    <td><a href="<?= base_url('legalisir/file/' . $rwt->id_siswa) ?>"><i class="install">Download</i></a></td>
                    <td><?= $rwt->tgl_upload?></td>
                  </tr>
                </tbody>
                <?php endforeach ?>
            </table>
            </div>
        </div>