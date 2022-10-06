<?php $this->load->view('template/head') ?>
<nav class="bg-success">
  <div class="container">
    <p style="text-align: center;padding-top: 13px;color: white;">Cart Order</p>
  </div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<br>
<form action="<?= base_url() ?>cart/create/<?= $nomeja ?>" method="POST">
<div class="container" >
<?php if ($item == NULL): ?>
  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" color="green" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" style="display: block;margin-left: auto;margin-right: auto;">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  <h5 style="margin-top: 20px;text-align: center;color: #198754;">Cart Order Kosong</h5>
 <?php else: ?>
	<?php foreach($item as $i){ ?>
		
  	<div class="row">
    <div class="col-4"><img src="<?= $i->image_path ?>" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;" /></div>
    <div class="col-4" style="margin-top: 10px;"><?= $i->description?><br>Rp <?= number_format($i->unit_price)?><br><?= $i->extra_notes?></div>
    <div class="col-1" style="margin-top: 10px;text-align: center;">Qty <br> <p style="padding-left: 7px;"><?= $i->qty ?></p></div>
    <div class="col-1" style="margin-top: 10px;"><p style="margin-left: 20px;">Aksi</p><a href="<?= base_url() ?>cart/delete/<?= $i->id ?>/<?= $i->description ?>/<?= $nomeja ?>" class="btn btn-danger" style="padding-top: 10px;padding-bottom: 10px;">Hapus</a></div>
  </div>
  <input type="hidden" name="nama[]" value="<?= $i->description ?>">
  <input type="hidden" name="qty[]" value="<?= $i->qty ?>">
  <input type="hidden" name="harga[]" value="<?= $i->unit_price ?>">
  <input type="hidden" name="pesan[]" value="<?= $i->extra_notes ?>">

      <input type="hidden" name="no[]" id="harga" value="<?= $i->item_code ?>" class="form-control harga">
  
	<?php } ?>
<?php endif ?>
</div>
<br>
<?php if ($item == NULL): ?>
<div class="container">
<a href="<?php echo base_url('') ?>selforder/home/<?= $nomeja ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;display: block;margin-left: auto;margin-right: auto;">Kembali</a>
</div>
<?php else: ?>
<div class="container text-center">
<button type="submit" class="btn btn-outline-success" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;">
  Order
</button>
<a href="<?php echo base_url('') ?>selforder/home/<?= $nomeja ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;">Kembali</a>
</div>	
<?php endif ?>

</form>
<br>
<br>
</div>
  </div>
</div>
<br>

<?php $this->load->view('template/footer') ?>