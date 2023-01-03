  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Data Telur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Update Data Telur</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<!-- /.card -->
    <div class="card card-info">           
      <form method="post" action="<?= base_url('Telur/edit_data') ?>">
        <div class="card-body">
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
          </div>
          <div class="form-group">
            <label for="sumber">Sumber</label>
            <input type="text" class="form-control" id="sumber" name="sumber">
          </div>
         <!-- /.card-body -->
          <div class="modal-footer">
            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
            <button type="reset" class="btn btn-warning">Riset</button>
            <button type="submit" class="btn btn-success" id="tombolSimpan">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>