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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Panen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   
          <!-- /.card -->
          <div class="card card-info">
            
          <form method="post" action="<?= base_url('panen') ?>">
        <div class="card-body">
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" value="<?= date('Y-m-d');?>" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
          </div>
          <div class="form-group">
          <label>Nama Anggota</label>
             <select name="edit_anggota" class="form-control">
              <?php foreach ($datateam as $key ) : ?>
              <option value="<?php echo $key->id_anggota?>"><?php echo $key->nama_anggota ?></option>
              <?php endforeach ?>
             </select>
          </div>
          <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
          </div>
          <div class="form-group">
            <label for="total">Jumlah*Harga</label>
            <input type="number" class="form-control" id="total" name="total" placeholder="Total">
          </div>
          <div class="form-group">
            <label for="buyer">Buyer</label>
            <input type="text" class="form-control" id="buyer" name="buyer" placeholder="Buyer">
          </div>
          <!-- /.card-body -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" id="tombolSimpan">Simpan</button>
          </div>
      </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    <!-- /.content -->
  </div>
</div>
  <!-- /.content-wrapper -->
