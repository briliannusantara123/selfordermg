<?php $this->load->view('template/head') ?>
<?php   $previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
} ?>
<style type="text/css">
	.modal {
   margin-top: 100px;
   top: 10px;
   right: 100px;
   bottom: 0;
   left: 0;
   z-index: 10040000;
   overflow: auto;
   overflow-y: auto;
}
</style>
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
    <?php if ( $i->image_path != "" ): ?>
        <div class="col-4"><img src="<?= $i->image_path ?>" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;" /></div>
      <?php  else: ?>
        <div class="col-4"><img src="<?= base_url();?>/assets/picture.png" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;" /></div>
      <?php endif ?>
    
    <div class="col-4" style="margin-top: 10px;color: #198754;"><?= $i->description?><br>Rp <?= number_format($i->unit_price)?><br><?= $i->extra_notes?></div>
    <div class="col-1" style="margin-top: 10px;text-align: center;color: #198754;">Qty <br> <p style="padding-left: 7px;"><?= $i->qty ?></p></div>
    <div class="col-1" style="margin-top: 10px;text-align: center;margin-left: 5px;color: #198754;">Aksi <br> <a href="<?= base_url() ?>cart/delete/<?= $i->id ?>/<?= $i->description ?>/<?= $nomeja ?>" class="btn btn-danger" style="padding:8px 8px;margin-bottom: 2px; "><i class="fas fa-trash"></i></a><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>" class="btn btn-success" style="padding:7px 7px; "><i class="fas fa-pen" style="color: white"></i></a></div>
    <p style="color: #198754;">Dibawa Pulang : <?= $i->qty_take_away?></p>
    
  </div>
  <input type="hidden" name="nama[]" value="<?= $i->description ?>">
  <input type="hidden" name="qty[]" value="<?= $i->qty ?>">
  <input type="hidden" name="cek[]" value="<?= $i->as_take_away ?>">
  <input type="hidden" name="qta[]" value="<?= $i->qty_take_away ?>">
  <input type="hidden" name="harga[]" value="<?= $i->unit_price ?>">
  <input type="hidden" name="pesan[]" value="<?= $i->extra_notes ?>">

      <input type="hidden" name="no[]" id="harga" value="<?= $i->item_code ?>" class="form-control harga">
  
	<?php } ?>
<?php endif ?>
</div>
<br>
<?php if ($item == NULL): ?>
<div class="container">
<a href="<?= $previous ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;display: block;margin-left: auto;margin-right: auto;">Kembali</a>
</div>
<?php else: ?>
<div class="container text-center">
<button type="submit" class="btn btn-outline-success" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;">
  Order
</button>
<a href="<?= $previous ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;">Kembali</a>
</div>	
<?php endif ?>

</form>
<br>
<br>
</div>
  </div>
</div>
<br>
<?php foreach ($item as $i): ?>
<div class="modal fade" id="exampleModal<?= $i->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #198754;color: white;">
        <h5 class="modal-title" style="text-align: center;" id="exampleModalLabel">Ubah Orderan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="<?= base_url() ?>cart/ubah/<?= $i->id ?>/<?= $i->description ?>/<?= $nomeja ?>" method="post">
      <div class="modal-body">
        
      <h4 style="text-align: center;color: #198754;"><?= $i->description ?></h4>
      <img src="<?= $i->image_path ?>" alt="Red dot" style="width: 180px;height: 180px;border-radius: 20px; display: block;margin-left: auto;margin-right: auto;" />
      <div class="container text-center">
  <div class="row">
    <div class="col" >
      <button type="button" class="btn btn-success minus<?= $i->id ?>" style="padding-left: 30px;padding-right: 30px;"> - </button>
    </div>
    <div class="col">
      <input type="text" name="qty" class="form-control num<?= $i->id ?>" value="<?= $i->qty ?>" style="margin-bottom: 5px;text-align: center">
    </div>
    <div class="col">
      <button type="button" class="btn btn-success plus<?= $i->id ?>" style="padding-left: 30px;padding-right: 30px;">+</button>
    </div>
  </div>
</div>
      <input type="text" name="extra_notes" class="form-control" value="<?= $i->extra_notes ?>" placeholder="Masukan Pesan...">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" style="padding-left: 40px;padding-right: 40px;padding-top: 10px;padding-bottom: 10px;">Ubah</button>
      </div>
    </div>
    </form>
  </div>
</div>
<?php endforeach ?>
<?php foreach ($item as $i ): ?>
<script type="text/javascript">
	const plus<?= $i->id ?> = document.querySelector(".plus<?= $i->id ?>"),
	minus<?= $i->id ?> = document.querySelector(".minus<?= $i->id ?>"),
	num<?= $i->id ?> = document.querySelector(".num<?= $i->id ?>");

	let a<?= $i->id ?> = <?= $i->qty ?>;

	plus<?= $i->id ?>.addEventListener("click", ()=>{
	 a<?= $i->id ?>++;
	 num<?= $i->id ?>.value = a<?= $i->id ?>;
	 console.log(a<?= $i->id ?>);	
	});
	minus<?= $i->id ?>.addEventListener("click", ()=>{
	 
	 var inputValue = num<?= $i->id ?>.value;
        // console.log(inputValue);
        if (inputValue >= 1) {
        	a<?= $i->id ?>--;
	 num<?= $i->id ?>.value = a<?= $i->id ?>;
	 console.log(a<?= $i->id ?>);
	 }	
	});
</script>
	
<?php endforeach ?>
<?php $this->load->view('template/footer') ?>