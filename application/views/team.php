<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Team</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
            <li class="breadcrumb-item active">Data Team</li>
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
<<<<<<< HEAD
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Tambah Team
                </button>
=======
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                Tambah
              </button>
>>>>>>> 24e286e8ad7da90f1b5d0f38db6498c87a3a8c9b
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Team</th>
                    <th>Anggota</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
<<<<<<< HEAD
                    <?php $no=1 ?>
                    <?php
                    if(isset($join2table)>0){
                    foreach($join2table as $row){
                      ?>
                  <tr>      
                    <td><?= $no++?></td>
                    <td><?=$row->nama_team?></td>
                    <td><?=$row->nama_anggota?></td>
                    <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit">
                    Edit
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus">
                    Hapus
                    </button>
                    </td>
=======
                  <?php $no = 1 ?>
                  <?php foreach ($data as $row): ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->nama_team ?></td>
                    <td><?= $row->id_anggota ?></td>
                    <td>Aksi</td>
>>>>>>> 24e286e8ad7da90f1b5d0f38db6498c87a3a8c9b
                  </tr>
                  <?php } ?>
                  <?php } ?>
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

<<<<<<< HEAD
<!-- modal Tambah -->
=======
<!-- MODAL -->

>>>>>>> 24e286e8ad7da90f1b5d0f38db6498c87a3a8c9b
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
<<<<<<< HEAD
              <h4 class="modal-title">Tambah Nama Team</h4>
=======
              <h4 class="modal-title">Tambah Team</h4>
>>>>>>> 24e286e8ad7da90f1b5d0f38db6498c87a3a8c9b
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
<<<<<<< HEAD
            <form  method="POST">
            <div class="modal-body">
              <label>Nama Team</label>
             <input type="text" name="nama_team" class="form-control mb-2" placeholder="Nama Team">
             <div class="row">
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Pilih Anggota</label>
                  <div class="select2-purple">
                    <select class="select2 " multiple="multiple" data-placeholder="Pilih Anggota" data-dropdown-css-class="select2-purple" style="width: 465px;">
                    <?php foreach ($team->result() as $row ) : ?>
              <option value="<?php echo $row->id_anggota?>"><?php echo $row->nama_anggota ?></option>
              <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
      <!-- modal edit -->
      <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Nama Team</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST">
            <div class="modal-body">
              
              <label>Nama Team</label>
             <input type="text" name="nama_team" class="form-control mb-2" placeholder="Nama Team">
             <label>Nama Anggota</label>
             <select name="id_anggota" class="form-control">
              <?php foreach ($datateam as $key ) : ?>
              <option value="<?php echo $key->id_anggota?>"><?php echo $key->nama_anggota ?></option>
              <?php endforeach ?>
             </select>
=======
            <div class="modal-body">
              <p>Rehan pki&hellip;</p>
>>>>>>> 24e286e8ad7da90f1b5d0f38db6498c87a3a8c9b
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary">Simpan</button>
<<<<<<< HEAD
              
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

            <!-- modal edit -->
            <div class="modal fade" id="modal-hapus">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Nama Team</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST">
            <div class="modal-body">
              Apakah anda yakin akan menghapus data ini?
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-danger">Hapus</button>
            </div>
            </form>
=======
            </div>
>>>>>>> 24e286e8ad7da90f1b5d0f38db6498c87a3a8c9b
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->