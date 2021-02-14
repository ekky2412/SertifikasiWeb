<div class="container">
<form action="<?=base_url()?>post/prosesTambah" method="post">
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi Pesan</label>
    <input type="text" class="form-control" id="isi" name="isi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>