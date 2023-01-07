  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Panen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Update Panen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   
          <!-- /.card -->
          <div class="card card-info">
            
          <form method="post" action="<?= base_url('Panen/update_panen') ?>">
            <input hidden name="id" type="text" value="<?= $data->id ?>" >
        <div class="card-body">
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $data->tanggal ?>"
              placeholder="Tanggal">
          </div>
          <div class="form-group">
          <label for="anggota">Nama Anggota</label><br>
          <select class="form-control" name="id_anggota"  data-placeholder="Pilih Anggota">
            <option value="1">pilih anggota</option>
          <?php foreach ($anggota as $row ) : ?>
          <option value="<?php echo $row->id_anggota ?>"><?php echo $row->nama_anggota ?></option>
          <?php endforeach ?>
          </select></br>
          </div>
          <div class="form-group">
            <label for="buyer">Buyer</label>
            <input type="text" class="form-control" id="buyer" name="buyer" value="<?= $data->buyer ?>" placeholder="Buyer">
          </div>
          <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $data->jumlah ?>" placeholder="Jumlah">
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $data->harga ?>" placeholder="Harga">
          </div>
          <div class="form-group">
            <label for="total">Jumlah*Harga</label>
            <input type="number" class="form-control" id="total" name="total" value="<?= $data->total ?>" placeholder="Total">
          </div>
          <!-- /.card-body -->
          <div class="modal-footer">
          <a href="<?= base_url(); ?>/panen"  class="btn btn-danger">Batal</a>
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
