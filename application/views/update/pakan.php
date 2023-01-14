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
          <label> Team </label>
          <select class="form-control" name="id_team">
            <option> Pilih Team </option>
            <?php foreach ($team as $buku) { ?>
              <option <?php echo ($id_team == $buku->id_team) ? 'selected' : ''; ?> value="<?php echo $buku->id_team; ?>"><?php echo $buku->nama_team; ?></option>
            <?php } ?>
          </select>
          <div class="form-group">
            <label> Tanggal Produksi Pakan </label>
            <input type="date" name="tgl_produksi_pakan" class="form-control" value="<?= $row['tgl_produksi_pakan']; ?>" ?>
            <div class="form-group">
              <label> Jumlah </label>
              <input type="number" class="form-control" name="jumlah" id="jumlah" value="<?= $row['jumlah']; ?>">
            </div>
          </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="modal-footer">
      <a class="btn btn-danger" href="javascript:history.back()">Kembali</a>
      <button type="submit" class="btn btn-success" id="tombolSimpan">Simpan</button>
    </div>
    </form>
  </div>
  </div>
  </div>