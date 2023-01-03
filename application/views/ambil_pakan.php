<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Ambil Pakan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
            <li class="breadcrumb-item active">Ambil Pakan</li>
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
                Tambah
              </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Anggota</th>
                    <th>Tanggal Ambil Pakan</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach ($data as $row): ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->id_anggota ?></td>
                    <td><?= $row->tanggal ?></td>
                    <td><?= $row->jumlah ?></td>
                    <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit">Edit
                      </button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus">Hapus
                      </button>
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
              <h4 class="modal-title">Tambah Pakan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- form start -->
            <from method="post" action="<?= base_url('Pakan/insert_pakan')?>">
              <div class="card-body">
              <div class="form-group">
                <label for="exampleInputAnggota">Anggota</label>
                <input type="anggota" class="form-control" id="exampleInputAnggota" placeholder="Anggota">
              </div>
              <div class="form-group">
                <label for="exampleInputTanggal">Tanggal Ambil Pakan</label>
                <input type="date" class="form-control" id="exampleInputTanggal" placeholder="Tanggal Ambil Pakan">
              </div>
              <div class="form-group">
                <label for="exampleInputJumlah">Jumlah</label>
                <input type="number" class="form-control" id="exampleInputJumlah" placeholder="Jumlah">
              </div>
                  </div>
              <!-- /.card-body -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->