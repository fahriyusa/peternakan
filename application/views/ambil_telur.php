<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Telur</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
            <li class="breadcrumb-item active">Data Telur</li>
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
                    <th>no</th>
                    <th>Nama</th>
                    <th>Tanggal Ambil</th>
                    <th>jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach ($data as $row): ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->id_anggota ?></td>
                    <td><?= $row->tanggal_ambil ?></td>
                    <td><?= $row->jumlah ?></td>
                    <td><?= $row->harga ?></td>
                    <td><?= $row->total ?></td>
                    <td>Aksi</td>
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
              <h4 class="modal-title">Tambah Team</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row mt-4">
                  <div class="col">
                    

                    <label> Tanggal Datang </label>
                      <input type="date" value="<?= date('Y-m-d');?>" name="tgl" class="form-control">

                    <label > Sumber </label>
                    <div class="input-group">
                          <input type="text" class="form-control" required autocomplete="off" name="sumber" id="search-box" placeholder="Contoh Sumber : PT Jaya Abadi" type="text" value="">
                            <span class="input-group-btn">
                            </span>
											</div>
                    
                      <label> Tanggal Ambil </label>
                      <input type="date" value="<?= date('Y-m-d');?>" name="tgl" class="form-control">
                      
                      <label> Nama </label>
                    <select name="nama_anggota" class="form-control">
                      <option value="">Pilih</option>
                    </select>

                    <label> Jumlah </label>
                      <div class="input-group">
                          <input type="text" class="form-control" required autocomplete="off" name="jumlah" id="search-box" placeholder="Contoh Jumlah : 500000" type="text" value="">
                            <span class="input-group-btn">
                            </span>
											</div>
                    
                    <label> Harga </label>
                      <div class="input-group">
                          <input type="text" class="form-control" required autocomplete="off" name="jumlah" id="search-box" placeholder="Contoh Jumlah : 500000" type="text" value="">
                            <span class="input-group-btn">
                            </span>
											</div>
                    <label> Total </label>
                    <div class="input-group">
                          <input type="text" class="form-control" required autocomplete="off" name="Total" id="search-box" type="text" value="">
                            <span class="input-group-btn">
                            </span>
											</div>

                      <label> Pembeli </label>
                    <div class="input-group">
                          <input type="text" class="form-control" required autocomplete="off" name="pembeli" id="search-box" type="text" value="">
                            <span class="input-group-btn">
                            </span>
											</div>
                  </div>
                </div>
              </div>
            </div>
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