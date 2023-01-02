<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Panen</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
            <li class="breadcrumb-item active">Data Panen</li>
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
                  <tr class="text-center">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Anggota</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Buyer</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $total = 0;
                    $no = 1;
                  foreach ($data as $row){ ?>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $row->tanggal ?></td>
                    <td><?= $row->id_anggota ?></td>
                    <td><?= $row->jumlah ?></td>
                    <td><?= $row->harga ?></td>
                    <td><?= $row->total ?></td>
                    <td><?= $row->buyer ?></td>
                    <td>
                      <a class ="btn btn-warning" href ="<?base_url('Panen/update')?>/<?$row->id?>">Edit</a>
                      <a class ="btn btn-danger" href ="<?base_url('Panen/delete_data')?>/<?$row->id?>">Delete</a>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?> 
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
        <h4 class="modal-title">Tambah Data Panen</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- form start -->
      <form method="post" action="<?= base_url('panen/insert_panen') ?>">
        <div class="card-body">
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" value="<?= date('Y-m-d');?>" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
          </div>
          <div class="form-group">
            <label>Anggota</label>
            <select class="form-control" type="select" name="id_anggota">
              <option value="">--Pilih--</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
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
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" id="tombolSimpan">Simpan</button>
          </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

 <!-- modal edit -->
 <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data Panen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <form method="post" action="<?= base_url('panen/edit') ?>">
              <div class="card-body">
              <div class="form-group">          
                <label>Tanggal</label>
                <input type="date" name="tanggal"  value="<?= date('Y-m-d');?>" class="form-control mb-2" placeholder="Tanggal">
              </div>
              <div class="form-group">
                <label>Anggota</label>
                <select class="form-control" type="select" name="id_anggota">
                  <option value="">--Pilih--</option>
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4</option>
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
                <label for="total">Total</label>
                <input type="number" class="form-control" id="total" name="total" placeholder="Total">
              </div>
              <div class="form-group">
                <label for="buyer">Buyer</label>
                <input type="text" class="form-control" id="buyer" name="buyer" placeholder="Buyer">
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary" id="tombolSimpan">Simpan</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
\

