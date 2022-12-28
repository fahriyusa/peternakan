<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Jadwal</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
            <li class="breadcrumb-item active">Data Jadwal</li>
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
                    <th>Team</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach ($data as $row): ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->id_team ?></td>
                    <td><?= $row->status ?></td>
                    <td>
        <a class="btn btn-warning" href="<?=base_url('jadwal/edit')?>/<?=$row->id_team?>">Edit</a>
        <a class="btn btn-danger" href="<?=base_url('jadwal/delete')?>/<?=$row->id_team?>">delete</a>
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
              <h4 class="modal-title">Tambah Jadwal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
            <div class="modal-body">
            </div>
                <form action="<?=base_url('jadwal/simpan')?>" method="post">
                <div class="container">
                    <label>Team</label>
                        <select class="form-control" type="select"name="team">
                        <option value="">--Pilih--</option>
                                <option value="team 1">Team 1</option>
                                <option value="team 2">Team 2</option>
                                <option value="team 3">Team 3</option>
                              </select>
                           
                              <div class="container">
                    <label>Status</label>
                        <select class="form-control" type="select"name="status">
                        <option value="">--Pilih--</option>
                                <option value="aktif">Aktif</option>
                                <option value="non aktif">Non aktif</option>
                              </select>
                              <br>
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button class="btn btn-primary mt-2" type="submit">simpan</button>
                 </div>
                  </br>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->