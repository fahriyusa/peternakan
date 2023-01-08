  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Data Pakan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Update Data Pakan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<!-- /.card -->
    <div class="card card-info">  
      <form method="post" action="<?= base_url('Pakan/update_dataPakan') ?>">
      <input type="hidden" value="<?= $row['id'] ?>" class="form-control" name="id" id="id">
        <div class="card-body">
          <label>Team</label>
          <select class="form-control" name="id_team ">
                  <option> Pilih  Team </option>
                  <?php foreach($team as $buku) { ?>
                  <option value="<?php echo $buku->id_team; ?>">
                  <?php echo $buku->nama_team; ?></option>
                  <?php } ?>
                  </select>   
          <div class="form-group">
            <label for="tanggal">Tanggal Produksi Pakan</label>
            <input type="date" class="form-control" id="tgl_produksi_pakan" name="tgl_produksi_pakan" value="<?= $row['tgl_produksi_pakan']; ?>">
          </div>
          <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $row['jumlah'] ?>">
          </div>
         <!-- /.card-body -->
          <div class="modal-footer">
          <a href="<?= base_url(); ?>/pakan"  class="btn btn-danger">Batal</a>
          <button type="submit" value="simpan" class="btn btn-success" id="tombolSimpan">Simpan</button>
                  </div>
        </div>
        </div>
      </form>
    </div>
 