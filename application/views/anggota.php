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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-add"></i></a>
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
                    <td><?= $no++ ?></td>
                    <td><?= $row->nama_anggota ?></td>
                    <td><?= $row->status_txt ?></td>
                    <td><?= $row->jabatan ?></td>
                    <td><?= $row->tanggal_gabung ?></td>
                    <td>
                      <a class="btn btn-warning"
                        href="<?= base_url('Anggota/update_anggota') ?>/<?= $row->id_anggota ?>"><i
                          class="fa fa-pencil"></i></a>
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

<!-- MODAL -->

<div class="modal fade" id="modal-default">
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
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" id="tombolSimpan">Simpan</button>
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