<div class="container">
<form action="<?=base_url()?>post/prosesUpdate/<?=$post[0]->id_post ?>" method="post">
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul" value="<?= $post[0]->judul ?>">
  </div>
  <div class="form-group">
    <label for="isi">Isi Pesan</label>
    <input type="text" class="form-control" id="isi" name="isi" value="<?=$post[0]->isi ?>">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
  <a href="<?= base_url()?>post/baca" class="btn btn-danger">Batal</a>
</form>
</div>