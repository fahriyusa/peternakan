<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Pakan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
            <li class="breadcrumb-item active">Data Pakan</li>
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
                    <th>Tanggal Produksi Pakan</th>
                    <th>Jumlah</th>
                    <th>Aksi</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach ($data as $row) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->nama_team ?></td>
                    <td><?= $row->tgl_produksi_pakan ?></td>
                    <td><?= $row->jumlah ?></td>
                    <td>
                    <a class="btn btn-warning"
                          href="<?= base_url('Pakan/edit_data') ?>/<?= $row->id ?>"><i
                            class="fa fa-edit"></i></a>
                        
                      <a class="btn btn-danger" href="<?= base_url('Pakan/delete_pakan') ?>/<?= $row->id ?>"
                      onclick="return confirm('Apakah Anda ingin menghapus  : (<?= $row->id?>)');"><i
                      class="fa fa-trash"></i></a>
                      <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus">Hapus
                      </button> -->
                    </td>
                  </tr>
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
            <form method="post" action="<?= base_url('Pakan/insert_datapakan')?>">
            <div class="modal-body">
              <div class="container">
              <div class="row mt-4">
                <div class="col">
                  <label> Team </label>
                  <select class="form-control" name="id_team">
                  <option> Pilih Team </option>
                  <?php foreach($team as $row) { ?>
                      <option value="<?php echo $row->id_team; ?>"><?php echo $row->nama_team; ?></option>
                    <?php } ?>
                  </select>

                  <label> Tanggal Produksi Pakan </label>
                  <input type="date" name="tgl_produksi_pakan" class="form-control">
                  
                  <label> Jumlah </label>
                  <div class="input-group">
                    <input type="number" class="form-control" required autocomplete="off" name="jumlah" id="search-box" placeholder="Contoh Jumlah : 500000" type="text" value="">
                      <span class="input-group-btn"></span>
                  </div>
                </div>
              </div>
              </div>
            </div>
              <!-- /.card-body -->
              <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" id="tombolSimpan">Simpan</button>
          </div>
          </div>
                    </from>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      

