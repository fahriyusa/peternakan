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
  <?php if(!empty($this->session->flashdata())){ echo $this->session->flashdata('notif');}?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card">
            <div class="card-header ">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                +Tambah
              </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body ">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Datang</th>
                    <th>Sumber</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?=$this->session->flashdata('notif')?>
                  <?php $no = 1 ?>
                  <?php foreach ($data as $row):?>
                  <tr class="text-center" >
                    <td><?= $no++ ?></td>
                    <td><?= $row->tanggal ?></td>
                    <td><?= $row->sumber ?></td>
                    <td>
                    <a class="btn btn-outline-warning" href="<?=base_url('Telur/edit_data/'.$row->id_telur);?>">
                      <i class="fa fa-edit"></i></a>
                    <a class="btn btn-outline-danger" href="<?= base_url('Telur/delete_data') ?>/<?= $row->id_telur ?>"
                      onclick="return confirm('Apakah Anda ingin menghapus  : (<?= $row->id_telur ?>)');"><i
                      class="fa fa-trash"></i></a>
                  </td>                    
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
              <h4 class="modal-title">Tambah Telur</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="<?= base_url('Telur/insert_telur') ?>">
            <div class="card-body">
              <div class="form-group">
                <div class="row mt-4">
                  <div class="col">
                    

                    <label> Tanggal Datang </label>
                      <input type="date" value="<?= date('Y-m-d');?>" name="tanggal" class="form-control">

                    <label > Sumber </label>
                    <div class="input-group">
                      <input type="text" class="form-control" required autocomplete="off" name="sumber" id="search-box" placeholder="Contoh Sumber : PT Jaya Abadi" type="text" value="">
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
            <script>
            function confirmToDelete(el){
                $("#delete-button").attr("href", el.dataset.href);
                $("#confirm-dialog").modal('show');
            }
            </script>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->