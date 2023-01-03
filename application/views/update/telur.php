<form action="">
  <div class="form-group">
    <div class="row mt-4">
      <div class="col-sm-10">
        <label> Tanggal Datang </label>
        <input type="date" value="<?= date('Y-m-d');?>" name="tanggal" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <label> Sumber </label>
      <input type="text" value="" name="sumber" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10 offset-md-2">
      <a class="btn btn-warning" href="<?=base_url('Telur/edit_data')?>">Simpan</a>
      <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
    </div>
  </div>  
</form>