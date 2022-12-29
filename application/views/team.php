<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Team</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
            <li class="breadcrumb-item active">Data Team</li>
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
                  Tambah Team
                </button>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Team</th>
                    <th>Anggota</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                    <?php $no=1 ?>
                    <?php
                    if(isset($team)>0){
                    foreach($team as $row){
                      ?>
                  <tr>      
                    <td><?= $no++?></td>
                    <td><?=$row->nama_team?></td>
                    <td><?=$row->nama_anggota?></td>
                    <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit">
                    Edit
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus">
                    Hapus
                    </button>
                    </td>
                  <?php } ?>
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


<!-- modal Tambah -->

<!-- MODAL -->


<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Nama Team</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form  method="POST">
            <div class="modal-body">
              <label>Nama Team</label>
             <input type="text" name="nama_team" class="form-control mb-2" placeholder="Nama Team">
             <div class="row">
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Pilih Anggota</label>
                  <div class="select2-blue">
                    <select class="select2 " name="anggota[]" multiple="multiple" data-placeholder="Pilih Anggota" data-dropdown-css-class="select2-blue" style="width: 465px;">
                    <?php foreach ($anggota->result() as $row ) : ?>
              <option value="<?php echo $row->id_anggota?>"><?php echo $row->nama_anggota ?></option>
              <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
      <!-- modal edit -->
      <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Nama Team</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST">
            <div class="modal-body">
              
              <label>Nama Team</label>
             <input type="text" name="nama_team" class="form-control mb-2" placeholder="Nama Team">
             <label>Nama Anggota</label>
             <select name="id_anggota" class="form-control">
              <?php foreach ($datateam as $key ) : ?>
              <option value="<?php echo $key->id_anggota?>"><?php echo $key->nama_anggota ?></option>
              <?php endforeach ?>
             </select>

            <div class="modal-body">
              <p>Rehan pki&hellip;</p>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
              
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

            <!-- modal edit -->
            <div class="modal fade" id="modal-hapus">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Nama Team</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST">
            <div class="modal-body">
              Apakah anda yakin akan menghapus data ini?
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
            </form>

            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <script type="text/javascript">
        $(document).ready(function(){
            $('.bootstrap-select').selectpicker();
 
            //GET UPDATE
            $('.update-record').on('click',function(){
                var id_team = $(this).data('id_team');
                var nama_team = $(this).data('nama_team');
                $(".strings").val('');
                $('#UpdateModal').modal('show');
                $('[name="edit_id"]').val(id_team);
                $('[name="package_edit"]').val(nama_team);
                //AJAX REQUEST TO GET SELECTED PRODUCT
                $.ajax({
                    url: "<?php echo site_url('team/get_anggota_by_team');?>",
                    method: "POST",
                    data :{id_team:id_team},
                    cache:false,
                    success : function(data){
                        var item=data;
                        var val1=item.replace("[","");
                        var val2=val1.replace("]","");
                        var values=val2;
                        $.each(values.split(","), function(i,e){
                            $(".strings option[value='" + e + "']").prop("selected", true).trigger('change');
                            $(".strings").selectpicker('refresh');
 
                        });
                    }
                     
                });
                return false;
            });
 
            //GET CONFIRM DELETE
            $('.delete-record').on('click',function(){
                var id_team = $(this).data('id_team');
                $('#DeleteModal').modal('show');
                $('[name="delete_id"]').val(id_team);
            });
 
        });
    </script>