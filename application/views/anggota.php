<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Anggota</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
            <li class="breadcrumb-item active">Data Anggota</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">
                <i class="fa fa-add"></i> Tambah Anggota</a>
              </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Status</th>
                    <th>Jabatan</th>
                    <th>Tanggal Gabung</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach ($data as $row): ?>
                    <tr class="text-center">
                      <td>
                        <?= $no++ ?>
                      </td>
                      <td><?= $row->nama_anggota ?></td>
                      <td>
                        <?= $row->status_txt ?>
                      </td>
                      <td><?= $row->jabatan ?></td>
                      <td>
                        <?= $row->tanggal_gabung ?>
                      </td>
                      <td>
                        <a class="btn btn-warning"
                          href="<?= base_url('Anggota/edit') ?>/<?= $row->id_anggota ?>"><i
                            class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="<?= base_url('Anggota/delete_anggota') ?>/<?= $row->id_anggota ?>"
                          onclick="return confirm('Apakah Anda ingin menghapus si : (<?= $row->nama_anggota ?>)');"><i
                            class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- MODAL TAMBAH-->

<div class="modal fade" id="modal-tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Anggota</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- form start -->
      <form method="post" action="<?= base_url('Anggota/insert_anggota') ?>">
        <div class="card-body">
          <div class="form-group">
            <label for="nama_anggota">Nama Anggota</label>
            <input type="nama" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Nama Anggota">
          </div>
          <div class="form-group">
            <label>Status</label>
            <select class="form-control" type="select" name="status">
              <option value="">--Pilih--</option>
              <option value="a">Aktif</option>
              <option value="na">Non aktif</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
          </div>
          <div class="form-group">
            <label for="exampleInpTanggal">Tanggal Gabung</label>
            <input type="date" class="form-control" name="tanggal_gabung" id="tanggal_gabung"
              placeholder="Tanggal Gabung">
          </div>
          <!-- /.card-body -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" id="tombolSimpan">Simpan</button>
          </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- MODAL EDIT -->
<?php foreach ($data as $row) { ?>
  <div class="modal fade" id="modal-edit<?= $row->id_anggota ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Anggota</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- form start -->
        <form method="post" action="<?= base_url('Anggota/update_anggota') ?>">

          <input type="hidden" name="id_anggota" id="id_anggota" value="<?= $row->id_anggota ?>" class="form-control">
          <div class="card-body">
            <div class="form-group">
              <label for="nama_anggota">Nama Anggota</label>
              <input type="nama" value="<?= $row->nama_anggota ?>" class="form-control" id="nama_anggota"
                name="nama_anggota" placeholder="Nama Anggota">
            </div>
            <div class="form-group">
              <label>Status</label>
              <select value="<?= $row->status ?>" class="form-control" type="select" name="status">
                <option value="">--Pilih--</option>
                <option value="a" <?= $row->status == 'a' ? 'selected' : ''; ?>>Aktif</option>
                <option value="na" <?= $row->status == 'na' ? 'selected' : ''; ?>>Non aktif</option>
              </select>
            </div>
            <div class="form-group">
              <label for="Jabatan">Jabatan</label>
              <input type="text" value="<?= $row->jabatan ?>" class="form-control" id="jabatan" name="jabatan"
                placeholder="Jabatan">
            </div>
            <div class="form-group">
              <label for="exampleInpTanggal">Tanggal Gabung</label>
              <input type="date" value="<?= $row->tanggal_gabung ?>" class="form-control" name="tanggal_gabung"
                id="tanggal_gabung" placeholder="Tanggal Gabung">
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="reset" class="btn btn-warning">Riset</button>
              <button type="submit" class="btn btn-success" id="tombolSimpan">Simpan</button>
            </div>
        </form>

      </div>
      <!-- /.card -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
<?php } ?>
</div>
<!-- /.modal -->