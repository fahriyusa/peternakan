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
    <form method="post" action="<?= base_url('Telur/update_telur') ?>">
      <input type="hidden" value="<?= $row['id']; ?>" name="id">
      <div class="card-body">
        <div class="form-group">
          <label for="nama_anggota">Nama Anggota</label>
          <select class="form-control" id="id_anggota" name="id_anggota">
            <option> nama anggota </option>
            <?php foreach ($anggota as $telo) { ?>
              <option value="<?php echo $telo->id_anggota ?>">
                <?php echo $telo->nama_anggota ?>
              </option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="nama_anggota">Sumber</label>
          <select class="form-control" id="id_telur" name="id_telur">
            <option> Sumber </option>
            <?php foreach ($telur as $telo) { ?>
              <option value="<?php echo $telo->id_telur ?>">
                <?php echo $telo->sumber ?>
              </option>
            <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label for="tanggal_ambil">Tanggal Ambil</label>
          <input type="date" class="form-control" id="tanggal_ambil" name="tanggal_ambil" value="<?= $row['tanggal_ambil']; ?>">
        </div>

        <div class="form-group">
          <label for="jumlah">Jumlah</label>
          <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $row['jumlah']; ?>">
        </div>

        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="text" class="form-control" id="harga" name="harga" value="<?= $row['harga']; ?>">
        </div>

        <!-- /.card-body -->
        <div class="modal-footer">
          <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>