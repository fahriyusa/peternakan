<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Anggota</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item active">Update Anggota</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->

  <!-- /.card -->
  <div class="card card-info">
    <form method="post" action="<?= base_url('Anggota/update_anggota') ?>">
      <input type="hidden" value="<?= $data->id_anggota ?>" class="form-control" name="id_anggota" id="id_anggota">
      <div class="card-body">
        <div class="form-group">
          <label for="nama_anggota">Nama Anggota</label>
          <input type="nama" class="form-control" id="nama_anggota" name="nama_anggota"
            value="<?= $data->nama_anggota ?>" placeholder="Nama Anggota">
        </div>

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username"
            value="<?= $data->username ?>" placeholder="username">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password"
            value="<?= $data->password ?>" placeholder="password">
        </div>

        <div class="form-group">
          <label>Status</label>
          <select class="form-control" type="select" name="status">
            <option value="a" <?= $data->status == 'a' ? 'selected' : ''; ?>>Aktif</option>
            <option value="na" <?= $data->status == 'na' ? 'selected' : ''; ?>>Non aktif</option>
          </select>
        </div>
        <div class="form-group">
          <label for="Jabatan">Jabatan</label>
          <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $data->jabatan ?>"
            placeholder="Jabatan">
        </div>
        <div class="form-group">
          <label for="exampleInpTanggal">Tanggal Gabung</label>
          <input type="date" class="form-control" name="tanggal_gabung" id="tanggal_gabung"
            value="<?= $data->tanggal_gabung ?>" placeholder="Tanggal Gabung">
        </div>
        <!-- /.card-body -->
        <div class="modal-footer">
          <a href="<?= base_url('anggota') ?>" class="btn btn-danger">Close</a>
          <button type="submit" class="btn btn-success" id="Simpan">Simpan</button>
        </div>
    </form>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  <!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->