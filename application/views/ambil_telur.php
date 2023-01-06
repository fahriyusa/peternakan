<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Ambil Telur</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
            <li class="breadcrumb-item active">Ambil Telur</li>
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
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach($data as $row){?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->nama_anggota ?></td>
                    <td><?= $row->tanggal_ambil ?></td>
                    <td><?= $row->jumlah ?></td>
                    <td><?= $row->harga ?></td>
                    <td><?= $row->total ?></td>
                    <td>
                    <a class="btn btn-warning"
                          href="<?= base_url('Telur/edit_ambiltelur') ?>/<?= $row->id_anggota ?>"><i
                            class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" href="<?= base_url('Telur/delete_ambiltelur') ?>/<?= $row->id_anggota ?>"
                          onclick="return confirm('Apakah Anda ingin menghapus data : (<?= $row->id_anggota ?>)');"><i
                            class="fa fa-trash"></i></a>
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
              <h4 class="modal-title">Tambah Transaksi Telur</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="<?= base_url('Telur/simpan_ambiltelur')?>">
            <div class="modal-body">
              <div class="container">
                <div class="row mt-4">
                  <div class="col">
                  <label> Nama </label>
                    <select class="form-control" name="id_anggota">
                    <option> pilih anggota </option>
                      <?php foreach($anggota->result() as $row){ ?>
                        
                      <option value="<?php echo $row->id_anggota; ?>"><?php echo $row->nama_anggota; ?></option>
                    <?php } ?>
                    </select>

                      <label> Tanggal Ambil </label>
                      <input type="date" value="<?= date('Y-m-d');?>" name="tanggal_ambil" class="form-control">

                    <label> Jumlah </label>
                      <div class="input-group">
                          <input type="text" class="form-control" required autocomplete="off" name="jumlah" id="search-box" placeholder="Contoh Jumlah : 10" type="text" value="">
                            <span class="input-group-btn">
                            </span>
											</div>
                    
                    <label> Harga </label>
                      <div class="input-group">
                          <input type="text" class="form-control" required autocomplete="off" name="harga" id="search-box" placeholder="Contoh Harga : 500000" type="text" value="">
                            <span class="input-group-btn">
                            </span>
											</div>
                    <label> Total </label>
                    <div class="input-group">
                          <input type="text" class="form-control" required autocomplete="off" name="total" id="search-box" type="text" value="">
                            <span class="input-group-btn">
                            </span>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary" id="tombolSimpan">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->