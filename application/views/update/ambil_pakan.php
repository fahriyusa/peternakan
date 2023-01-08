  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Ambil Pakan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Update Ambil Pakan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<!-- /.card -->
    <div class="card card-info"> 
      <form method="post" action="<?= base_url('Pakan/update_ambilPakan') ?>">
      <input type="hidden" value="<?= $row['id'] ?>" class="form-control" name="id" id="id">
        <div class="card-body">

                <label> Anggota </label>
                  <select class="form-control" name="id_anggota">
                  <option> Pilih Anggota </option>
                    <?php foreach ($anggota as $jangkrik) { ?>
                      <option value="<?php echo $jangkrik->id_anggota; ?>"><?php echo $jangkrik->nama_anggota; ?></option>
                    <?php } ?>
                  </select>
            <div class="form-group">
              <label for="tanggal">Tanggal Ambil Pakan</label>
              <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $row['tanggal']; ?>">
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input type="number" class="form-control" name="jumlah" id="jumlah" value="<?= $row['jumlah']; ?>">
            </div>
              <!-- /.card-body -->
              <div class="modal-footer">
              <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
            <button type="reset" class="btn btn-warning">Riset</button>
            <button type="submit" value="simpan" class="btn btn-success" id="tombolSimpan">Simpan</button>
          </div>
        </div>
      </form>
    </div>
</div>
