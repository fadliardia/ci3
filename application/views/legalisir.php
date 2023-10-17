<div class="card">
              <div class="card-header">
                <h3 class="card-title">Permintaan Legalisir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th width="50px">No</th>
                    <th>Nama Siswa</th>
                    <th>Alamat Siswa</th>
                    <th>Nomor Ijazah</th>
                    <th>File Ijazah</th>
                    <th>Biaya</th>
                    <th>Bukti Pembayaran</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php $no = 1; 
                  foreach($legalisir as $lgr) : ?>
                  <tbody>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $lgr->nama_siswa?></td>
                    <td><?= $lgr->alamat_siswa?></td>
                    <td><?= $lgr->nomor_ijazah?></td>
                    <td><a href="<?= base_url('legalisir/file/' . $lgr->id_siswa) ?>"><i class="install">Download</i></a></td>
                    <td><?= $lgr->biaya?></td>
                    <td><a href="<?= base_url('legalisir/foto/' . $lgr->id_siswa) ?>"><i class="install">Download</i></a></td></td>
                    <td><?php 
                      if ($lgr->status == "Menunggu ACC"){
                        ?>
                            <a class="btn btn-secondary btn-sm"><?= $lgr->status?></a>
                        <?php
                      } else if ($lgr->status == "Diproses"){
                        ?>
                            <a class="btn btn-info btn-sm"><?= $lgr->status?></a>
                        <?php
                      }
                      else{
                        ?>
                            <a class="btn btn-success btn-sm"><?= $lgr->status?></a>
                        <?php
                      }
                      
                    ?></td>
                    <td class="text-center">
                      <button data-toggle="modal" data-target="#edit<?= $lgr->id_siswa ?>" class="btn btn-warning btn-sm">Edit</button>
                      
                    </td>
                  </tr>
                </tbody>
                <?php endforeach ?>
            </table>
          </div>
        </div>



<!-- Modal Edit -->

<?php foreach($legalisir as $lgr) : ?>
<div class="modal fade" id="edit<?= $lgr->id_siswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Legalisir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >

      <form action="<?= base_url('legalisir/edit/' . $lgr->id_siswa)?>" method="POST" >
            <div class="form group">
                <label>Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control"value="<?= $lgr->nama_siswa ?>" readonly>
                
            </div>
            <div class="form-group">
                <label>Alamat Siswa</label>
                <input type="text" name="alamat_siswa" class="form-control"value="<?= $lgr->alamat_siswa ?>" readonly>
                
            </div>
            <div class="form-group">
                <label>Nomor Ijazah</label>
                <input type="text" name="nomor_ijazah" class="form-control" value="<?= $lgr->nomor_ijazah ?>" readonly>
                
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                  <option value="">--Pilih Status--</option>
                  <option value="Menunggu ACC" <?php if($lgr->status == 'Menunggu ACC') echo 'selected'; ?>>--Menunggu ACC--</option>
                  <option value="Diproses" <?php if($lgr->status == 'Diproses') echo 'selected'; ?>>--Diproses--</option>
                  <option value="Dikirim" <?php if($lgr->status == 'Dikirim') echo 'selected'; ?>>--Dikirim--</option>
                </select>
                <!-- <input type="file" name="file_ijazah" class="form-control">
                <label class="text-danger">File Harus Format .PDF</label> -->
                
            </div>
            <div class="form-group">
                <label>Estimasi Biaya</label>
                <input type="text" name="biaya" class="form-control" value="<?= $lgr->biaya ?>">
                
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan </button>
              <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus </button>
            </div>
      </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>