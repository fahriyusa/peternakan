<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Calendar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Calendar</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
<<<<<<< HEAD
        <div class="col-12">
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                +Tambah
              </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Team</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?> 
                  <?php 
                  if(isset($jadwal)>0){
                    foreach($jadwal as $row) {
                      ?>
                   
                  <tr>
                    <td><?= $no++?></td>
                    <td><?= $row->id_team ?></td>
                    <td><?= $row->status ?></td>
                    <td>
        <a class="btn btn-warning" href="<?=base_url('jadwal/edit')?>/<?=$row->id_team?>">Edit</a>
        <a class="btn btn-danger" href="<?=base_url('jadwal/delete')?>/<?=$row->id_team?>">delete</a>
      </td>
                  </tr>
                  <?php }} ?>
                </tbody>
              </table>
=======
        <div class="col-md-3">
          <div class="sticky-top mb-3">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Draggable Events</h4>
              </div>
              <div class="card-body">
                <!-- the events -->
                <div id="external-events">
                  <div class="external-event bg-success">Lunch</div>
                  <div class="external-event bg-warning">Go home</div>
                  <div class="external-event bg-info">Do homework</div>
                  <div class="external-event bg-primary">Work on UI design</div>
                  <div class="external-event bg-danger">Sleep tight</div>
                  <div class="checkbox">
                    <label for="drop-remove">
                      <input type="checkbox" id="drop-remove">
                      remove after drop
                    </label>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Create Event</h3>
              </div>
              <div class="card-body">
                <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                  <ul class="fc-color-picker" id="color-chooser">
                    <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                    <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                    <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                    <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                    <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                  </ul>
                </div>
                <!-- /btn-group -->
                <div class="input-group">
                  <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                  <div class="input-group-append">
                    <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                  </div>
                  <!-- /btn-group -->
                </div>
                <!-- /input-group -->
              </div>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary">
            <div class="card-body p-0">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
>>>>>>> c54117997eabbe12e2b3ee1897e118137b46cb04
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<<<<<<< HEAD
<!-- /.content-wrapper -->

<!-- MODAL -->

<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Jadwal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
            <div class="modal-body">
            </div>
                <form action="<?=base_url('jadwal/insert')?>" method="post">
                <div class="container">
                    <label>Team</label>
                        <select class="form-control" type="select"name="team">
                        <option value="">--Pilih--</option>
                                <option value="team 1">Team 1</option>
                                <option value="team 2">Team 2</option>
                                <option value="team 3">Team 3</option>
                              </select>
                  </div>
                              <div class="container">
                    <label>Status</label>
                        <select class="form-control" type="select"name="status">
                        <option value="">--Pilih--</option>
                                <option value="aktif">Aktif</option>
                                <option value="non aktif">Non aktif</option>
                              </select>
                              <center class="m-20">
                                
                        <button type="Submit" id="simpan" name="simpan" class="btn btn-primary" style="border: 0.5rem">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0.5rem" >Batal</button>

               
                      </center>
                  </br>
                  </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
=======
<!-- /.content-wrapper -->
>>>>>>> c54117997eabbe12e2b3ee1897e118137b46cb04
