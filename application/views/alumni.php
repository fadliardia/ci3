<?= $this->session->flashdata('pesan'); ?>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Alumni</h3>
                <a href="<?= base_url('alumni/tambah') ?>" class="btn btn-primary btn-sm float-sm-right"><i class="fas fa-plus"></i> Tambah Alumni </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas Siswa</th>
                    <th>Alamat Siswa</th>
                    <th>Nomor Telepon</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php $no = 1; 
                  foreach ($alumni as $alm) : ?>
                  <tbody>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $alm->nama_siswa ?></td>
                    <td><?= $alm->kelas_siswa ?></td>
                    <td><?= $alm->alamat_siswa ?></td>
                    <td><?= $alm->nomor_telepon ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $alm->id_siswa ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <a href="<?= base_url('alumni/delete/' . $alm->id_siswa) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
                <?php endforeach ?>
            </table>
          </div>
        </div>

<!-- Modal Edit -->
<?php foreach($alumni as $alm) : ?>
<div class="modal fade" id="edit<?= $alm->id_siswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="<?= base_url('alumni/edit/' . $alm->id_siswa)?>" method="POST">
            <div class="form group">
                <label>Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" value="<?= $alm->nama_siswa ?>">
                <?= form_error('nama_siswa', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form group">
                <label>Kelas Siswa</label>
                <input type="text" name="kelas_siswa" class="form-control"value="<?= $alm->kelas_siswa ?>">
                <?= form_error('kelas_siswa', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form group">
                <label>Alamat Siswa</label>
                <textarea name="alamat_siswa" class="form-control"><?= $alm->alamat_siswa ?></textarea>
                <?= form_error('alamat_siswa', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form group">
                <label>Nomor telepon</label>
                <input type="text" name="nomor_telepon" class="form-control"value="<?= $alm->nomor_telepon ?>">
                <?= form_error('nomor_telepon', '<div class="text-small text-danger">', '</div>'); ?>
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