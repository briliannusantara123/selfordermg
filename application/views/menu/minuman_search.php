<?php $this->load->view('template/head') ?>
    <style type="text/css">
      .button {
  background-color: white;
  color: #198754;
  
  padding:16px 30px;
  text-align: center;

  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  transition-duration: 0.4s;
}
.active, .btn:hover {
  background-color: #198754;
  color: white;
}
.active_rekomen{
   background-color: #198754;
  color: white;
  
  padding:16px 30px;
  text-align: center;
  border-radius: 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  transition-duration: 0.4s;
  background-image: url("<?= base_url() ?>/assets/icon/badge.png");
  background-repeat: no-repeat;
  background-size: 55%;
  background-position-y: 45%;
  background-position-x: 50%;
}
.active_cold{
   background-color: #198754;
  color: white;
  
  padding:16px 30px;
  text-align: center;
  border-radius: 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  transition-duration: 0.4s;
  background-image: url("<?= base_url() ?>/assets/icon/cold-drink.png");
  background-repeat: no-repeat;
  background-size: 50%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.active_ice{
   background-color: #198754;
  color: white;
  
  padding:16px 30px;
  text-align: center;
  border-radius: 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  transition-duration: 0.4s;
  background-image: url("<?= base_url() ?>/assets/icon/ice-cream-cup.png");
  background-repeat: no-repeat;
  background-size: 50%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.active_soft{
   background-color: #198754;
  color: white;
  
  padding:16px 30px;
  text-align: center;
  border-radius: 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  transition-duration: 0.4s;
  background-image: url("<?= base_url() ?>/assets/icon/soft-drink.png");
  background-repeat: no-repeat;
  background-size: 50%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.active_juice{
   background-color: #198754;
  color: white;
  
  padding:16px 30px;
  text-align: center;
  border-radius: 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  transition-duration: 0.4s;
  background-image: url("<?= base_url() ?>/assets/icon/orange-juice.png");
  background-repeat: no-repeat;
  background-size: 40%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.active_frappe{
   background-color: #198754;
  color: white;
  
  padding:16px 30px;
  text-align: center;
  border-radius: 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  transition-duration: 0.4s;
  background-image: url("<?= base_url() ?>/assets/icon/frappe.png");
  background-repeat: no-repeat;
  background-size: 40%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.active_arabica{
   background-color: #198754;
  color: white;
  
  padding:16px 30px;
  text-align: center;
  border-radius: 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  transition-duration: 0.4s;
  background-image: url("<?= base_url() ?>/assets/icon/coffee.png");
  background-repeat: no-repeat;
  background-size: 40%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.button:hover {
  background-color: #198754; /* Green */
  border-radius: 10px;
  color: white;
}
.Juice_-_Fresh_Drinks {
  padding-top: 16px;
  padding-left: 19px;
  padding-right: 19px;
}
.FRAPPE_and_ICED {
  padding-top: 16px;
  padding-left: 19px;
  padding-right: 19px;

}
.wrapper{
  max-height: 120px;
  /*padding-bottom: 60px;*/
  margin-bottom: 50px;
  border:1px solid #ddd;
  display: flex;
  overflow-x: auto; 
}
.wrapper .item{
  
  text-align: center;
  background-color: #ddd;
  margin-right: 2px;
}
.modal {
    margin-top: 20px;
   top: 10px;
   right: 100px;
   bottom: 0;
   left: 0;
   z-index: 10040000;
   overflow: auto;
   overflow-y: auto;
}
.text_Ice_Strawberry_Milk{
  margin-bottom: 40px;
}
.text_Ice_Coffee{
  margin-bottom: 40px;
}
.text_COFFEE_FRAPPE{
  margin-bottom: 40px;
}
.text_MOCHA_C{
  margin-bottom: 40px;
}
.text_AEROPRESS{
  margin-bottom: 40px;
}
.cari::-webkit-input-placeholder{
  color: #198754;
}
 
/*support mozilla*/
.cari:-moz-input-placeholder{
  color: #198754;
}
.Cold_Drink{
   background-image: url("<?= base_url() ?>/assets/icon/cold-drink.png");
  background-repeat: no-repeat;
  background-size: 50%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Ice_Creams{
   background-image: url("<?= base_url() ?>/assets/icon/ice-cream-cup.png");
  background-repeat: no-repeat;
  background-size: 50%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Soft_Drinks{
   background-image: url("<?= base_url() ?>/assets/icon/soft-drink.png");
  background-repeat: no-repeat;
  background-size: 50%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Juice_-_Fresh_Drinks{
   background-image: url("<?= base_url() ?>/assets/icon/orange-juice.png");
  background-repeat: no-repeat;
  background-size: 42%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.FRAPPE_and_ICED{
   background-image: url("<?= base_url() ?>/assets/icon/frappe.png");
  background-repeat: no-repeat;
  background-size: 45%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.ARABICA_COFFEE{
   background-image: url("<?= base_url() ?>/assets/icon/coffee.png");
  background-repeat: no-repeat;
  background-size: 40%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.text{
  color: #198754;
}
.rekomendasi{
  background-image: url("<?= base_url() ?>/assets/icon/badge.png");
  background-repeat: no-repeat;
  background-size: 60%;
  background-position-y: 20%;
  background-position-x: 50%;
}
footer{
  text-align: center;
  background-color: white;
  margin-top: 10px;
  border-top-right-radius: 10%;
  border-top-left-radius: 10%;
  /*position: absolute;*/
  bottom: 0;
  width: 100%;
  position: fixed;
  z-index: 200000;
}
    </style>

     <nav class="bg-success" style="z-index: 10000;position: fixed;width: 100%;">
  <div class="container">
  <div class="row">
    <div class="col-9"><p style="padding-top: 13px;color: white;">Menu Makanan</p></div>
    <div class="col-1" style="z-index: 10040000;"><a style="text-align: center;margin-top: 6px;" href="<?php echo base_url() ?>Cart/home/<?= $nomeja ?>/Makanan/<?= $s ?>" class=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="23" color="white" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" style="margin-right: 10px;margin-top: 12px;margin-left: 10px;">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a></div>
<!-- <div class="col-1"><strong><h3 style="color: white;font-size: 10px;margin-top: 6px;background-color: red;border-radius: 40%;text-align: center;"><b id="cart_count"><?= $cart_count ?></b></h3></strong></div> -->
<div class="col-1"><strong><h3 style="color: white;font-size: 10px;margin-top: 6px;background-color: red;border-radius: 40%;text-align: center;"><b id="total_qty_header"><?= $total_qty;?></b></h3></strong></div>
  </div>
</div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<br>

<header style="display: flex;width:100%; position: fixed;z-index: 100000;margin-top: 30px;background-color: white;border-bottom-right-radius: 5%;
  border-bottom-left-radius: 5%;">

<div class="wrapper" style="background-color: white;">
  <div class="item">
      <a href="#" id="rekomendasi" class="button rekomendasi" style="text-decoration:none;padding: 10px 10px;padding-top: 29px;"><p style="margin-top: 60px;margin-bottom: 1px;">recommendation</p></a>
  </div>
  <!-- <div class="item">
      <a href="#" id="all" class="button all" style="text-decoration:none;padding-top: 23px;"><p style="margin-top: 60px;margin-bottom: 1px;">   ALL   </p></a>
  </div> -->
 <?php foreach($sub as $i){ ?>
    <div class="item">
      <a href="#" id="<?= str_replace(" ","_", $i['description']) ?>" class="button <?= str_replace(" ","_", $i['description']) ?>"  style="text-decoration:none;padding-top: 23px;"><p style="margin-top: 60px;margin-bottom: 1px;"><?= str_replace(" ","", $i['description'])?></p></a></div>
 <?php  }  ?>
</div>



<!-- <div class="container" style="display: flex;margin-bottom: 20px; margin-top: 20px;background-color: white;border-radius: 40%;">
  <div class="row row-cols-3">
    <?php foreach($sub as $i){ ?>  
<div class="container text-center">
  <div class="row">
    <div class="col">
      <a href="<?= base_url() ?>ordermakanan/menu/Makanan/<?= $i['description'] ?>/<?= $nomeja ?>" class="button <?= str_replace(" ","_", $i['description']) ?>"><?= str_replace(" ","_", $i['description'])?></a>
      
    </div>
    <div class="col">
      
      <div class="container text-center">
  <div class="row">
    <div class="col">
      
    </div>
  </div>
</div>
    </div>
  </div>
</div>

<?php } ?>
  </div> -->
</div>
</header>
<form action="#" method="post"> 
<div class="container text-center" style="margin-top: 185px;">
  <div class="row row-cols-2">
    <?php foreach($item as $i){ ?>

<div class="container text-center" >
  <div class="row">
    <div class="col" style="margin-top:10px;">
       <p class="text_<?= str_replace(" ","_", $i->description)?> text"><?= $i->description ?></p>
      <?php if ( $i->image_path != "" ): ?>
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><img src="<?= $i->image_path ?>" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;" /></a>
      <?php  else: ?>
        <img src="<?= base_url();?>/assets/picture.png" alt="Red dot" style="width: 160px;height: 120px;border-radius: 20px;" />
      <?php endif ?>
      
      <?php if ($i->harga_weekday == 0): ?>
        <p>Free</p>
      <?php else: ?>
        <p class="text">Rp <?= number_format($i->harga_weekday) ?></p>
      <?php endif ?>
      
    </div>
    <div class="col">
      <?php $options = $this->Item_model->option($i->no); ?>
      <?php if ($i->with_option == 1): ?>
        <a href="" style="text-decoration:none;" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><input type="text" name="pesan<?= $i->id ?>" id="pesan<?= $i->id ?>" class="form-control cari" placeholder="Customizable" style="border:1px solid #198754;padding-left: 20%;" disabled></a>
      <?php else: ?>
        <input type="hidden" name="pesan<?= $i->id ?>" id="pesan<?= $i->id ?>" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #198754;">
      <?php endif ?>
    
     
      <div class="container text-center">
  <div class="row" style="margin-top: 5px;">
    <div class="col" >
      <button type="button" class="btn btn-success kurang<?= $i->id ?>" style="padding-left: 9px;padding-right: 9px;" id="kurang<?= $i->id ?>" onclick="OrderQty('minus','<?= $i->id ?>','<?= $i->no ?>');"> - </button>
    </div>
    <div class="col">
        <!-- <?php if ($i->id_customer != $ic): ?>
          <input type="text" name="qty<?= $i->id ?>" id="qty<?= $i->id ?>"  value="0"  class="form-control" style="border:1px solid #198754;margin-bottom: 5px;color: #198754; width:35px; " readonly>
        <?php  elseif ($i->id_customer == NULL): ?>
          <input type="text" name="qty<?= $i->id ?>" id="qty<?= $i->id ?>"  value="NULL"  class="form-control" style="border:1px solid #198754;margin-bottom: 5px;color: #198754; width:35px; " readonly>
        <?php else: ?> 
         <input type="text" name="qty<?= $i->id ?>" id="qty<?= $i->id ?>"  value="<?= $i->qty ?>"  class="form-control" style="border:1px solid #198754;margin-bottom: 5px;color: #198754; width:35px; " readonly>
        <?php endif ?> -->
        <input type="text" name="qty<?= $i->id ?>" id="jumlah<?= $i->id ?>"   class="form-control" style="border:1px solid #198754;margin-bottom: 5px;color: #198754; width:43px;text-align: center; " readonly>
      
    </div>
    <div class="col">
      <?php if ($i->with_option == 1): ?>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>" style="padding-left: 7px;padding-right: 7px;">+</button>
      <?php else: ?>
        <button type="button" class="btn btn-success tambah<?= $i->id ?>" style="padding-left: 7px;padding-right: 7px;" id="tambah<?= $i->id ?>" onclick="OrderQty('plus','<?= $i->id ?>','<?= $i->no ?>');">+</button>
      <?php endif ?>
    </div>
  </div>
</div>
      <div class="container text-center">
  <div class="row">
    <div class="col">
      
      <input type="hidden" name="nama<?= $i->id ?>" id="nama<?= $i->id ?>" value="<?= $i->description ?>" class="form-control nama">
      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
      <input type="hidden" name="no<?= $i->id ?>" id="no<?= $i->id ?>" value="<?= $i->no ?>" class="form-control harga">
      
    </div>
  </div>
</div>
<div class="container text-center">
  <!-- <div class="row">
    <div class="col-7" style="color: #198754;">TakeAway?</div>
    <div class="col-5"><input type="checkbox" value="Take Away" onclick="getClick<?= $i->id ?>()" class="ta<?= $i->id ?>"></div>
  </div> -->
</div>
<div class="container text-center" id="tk<?= $i->id ?>" hidden >
  <div class="row">
    <div class="col" >
      <input type="hidden" name="cek[]" class="cek<?= $i->id ?>" id="cek<?= $i->id ?>">
      <button type="button" class="btn btn-success mi<?= $i->id ?>" style="padding-left: 10px;padding-right: 10px;"> - </button>
    </div>
    <div class="col">
      <input type="text" name="qta[]" id="qta" value="0"  class="form-control nu<?= $i->id ?>" id="cek<?= $i->id ?>" style="border:1px solid #198754;margin-bottom: 5px;color: #198754; width:35px;" readonly disabled="disabled">
    </div>
    <div class="col">
      <button type="button" class="btn btn-success pl<?= $i->id ?>" id="pls<?= $i->id ?>" style="padding-left: 10px;padding-right: 10px;">+</button>
    </div>
  </div>
</div>
      
    </div>
  </div>
</div>

<?php } ?>

  </div>
</div>   
<br>
<br>  
<br>

<footer>
<div class="container text-center">
<!-- <button type="submit" class="btn btn-outline-success" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;">
  Order 
</button> -->
<a href="<?php echo base_url() ?>Cart/home/<?= $nomeja ?>/Makanan/<?= $s ?>" class="btn btn-outline-success" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;">Cart<i class="fa fa-cart-plus"></i> <b id="total_qty" align="right"><?= $total_qty;?></b></a>
<a href="<?php echo base_url('') ?>selforder/home/<?= $nomeja ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;">Back</a>
</form>
<?php foreach ($item as $i): ?>
<div class="modal fade" id="exampleModal<?= $i->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #198754;color: white;">
        <h5 class="modal-title" style="text-align: center;margin-left: 42%;" id="exampleModalLabel">Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php if ( $i->image_path != "" ): ?>
        <img src="<?= $i->image_path ?>" alt="Red dot"  class="img-fluid" style="width: 300px;height: 180px;border-radius: 20px; display: block;margin-left: auto;margin-right: auto;" />
        <?php  else: ?>
          <img src="<?= base_url();?>/assets/picture.png" alt="Red dot" class="img-fluid" style="width: 300px;height: 180px;border-radius: 20px; display: block;margin-left: auto;margin-right: auto;" />
      <?php endif ?>
    <form action="<?=base_url()?>Ordermakanan/add_cart" method="post">
      <div class="card mb-3">
        
        <div class="card-body">

          <h5 style="color: #198754;float: left;"><?= $i->description ?></h5>
          <h6 style="color: #198754;margin-top: 2px;float: left;"><?= $i->product_info ?></h6>
          <?php if ($i->harga_weekday == 0): ?>
        <h6 style="color: #198754;margin-top: 2px;float: right;">Free</h6>
        <input type="hidden" name="" value="0" id="harga<?= $i->id ?>">
      <?php else: ?>
        <h6 style="color: #198754;margin-top: 2px;float: right;">Rp <?= number_format($i->harga_weekday) ?></h6>
        <input type="hidden" name="" value="<?= $i->harga_weekday ?>" id="harga<?= $i->id ?>">
      <?php endif ?>
      <input type="hidden" name="nama<?= $i->id ?>" id="nama<?= $i->id ?>" value="<?= $i->description ?>" class="form-control nama">
      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
      <input type="hidden" name="no<?= $i->id ?>" id="no<?= $i->id ?>" value="<?= $i->no ?>" class="form-control harga">
      <input type="hidden" name="id" id="id<?= $i->id ?>" value="<?= $i->id ?>" class="form-control harga">
        </div>
      </div>

      <div class="card" style="margin-bottom: 10px;">
        <ul class="list-group list-group-flush">
          <?php $options = $this->Item_model->option($i->no); ?>
          <?php if ($i->with_option == 1): ?>
            <?php foreach ($options as $o ):?>
              <li class="list-group-item"><h7 style="float: left;"><?= $o->description ?></h7><input class="form-check-input" type="radio" name="pesan<?= $i->id ?>" value="<?= $o->description ?>" id="flexRadioDefault1" style="float: right"></li>
            <?php endforeach ?>
          <?php endif ?>
        </ul>
      </div>
      
      
      <div class="container text-center" style="display: flex;justify-content: center;">
      <div class="row row-cols-auto">
        <?php if ($i->with_option == 1): ?>
        <div class="col"><button type="button" class="btn btn-success min<?= $i->id ?>" style="padding-left: 15px;padding-right: 15px;"> - </button></div>
        <div class="col"><input type="text" name="qty<?= $i->id ?>" id="qty<?= $i->id ?>"   class="form-control num<?= $i->id ?>" style="border:1px solid #198754;margin-bottom: 5px;color: #198754; width:43px;text-align: center; "  readonly></div>
        
        <div class="col"><button type="button" class="btn btn-success plus<?= $i->id ?>" style="padding-left: 15px;padding-right: 15px;">+</button></div>

      </div>
    </div>
    <button type="submit" class="btn btn-success" style="padding-left: 45px;padding-right: 45px;">Tambah Ke Keranjang <a id="total<?= $i->id ?>"></a></button>
    <?php endif ?>
      </div>
      
</div>
      </div>
    </div>
  </div>
</div>
</form>
<?php endforeach ?>


<script type="text/javascript">
  
  function OrderQty(tipe,id,no) {
    var itemCode = $('#no' + id).val();
    var desc = $('#nama' + id).val();
    var price = $('#harga' + id).val();
    var notes = $('#pesan' + id).val();
    $('#kurang' + id).prop('disabled', true);
    $('#tambah' + id).prop('disabled', true);
    $.ajax({
      type:'POST',
      data: {tipe: tipe,id: id,item_code: itemCode,description: desc,unit_price: price,extra_notes: notes,no: no},
      url: '<?= base_url().'ordermakanan/orderqty' ?>',
      dataType:'json',})
      .done(function (hasil){
        localStorage.setItem(no,hasil.new_qty);
        
        if(hasil.status == true){
          $('#kurang' + id).prop('disabled', false);
          $('#tambah' + id).prop('disabled', false);
          
          $('#jumlah' + id).val(localStorage.getItem(no));
          $('#qtycart' + id).text("Cart Qty "+localStorage.getItem(no));
          $('#pesan' + id).val(hasil.pesan);
          $('#cart_count').text(hasil.cart_count);
          $('#total_qty').text(hasil.total_qty);
          $('#total_qty_header').text(hasil.total_qty);
        }
      });
  }
</script>
<?php foreach ($item as $i ): ?>
<script type="text/javascript">
  var plus<?= $i->id ?> = document.querySelector(".plus<?= $i->id ?>"),
  minus<?= $i->id ?> = document.querySelector(".min<?= $i->id ?>"),
  num<?= $i->id ?> = document.querySelector(".num<?= $i->id ?>"),
  harga<?= $i->id ?> = document.querySelector("#harga<?= $i->id ?>");
  total<?= $i->id ?> = document.querySelector("#total<?= $i->id ?>");

  // if (localStorage.getItem('<?= $i->no ?>') != null) {
  //   // num<?= $i->id ?>.value = localStorage.getItem('<?= $i->no ?>');
  //   // total<?= $i->id ?>.innerHTML = localStorage.getItem('H<?= $i->no ?>');
  //   // var a<?= $i->id ?> =localStorage.getItem('<?= $i->no ?>');
  // }else{
    
  // }
  
  num<?= $i->id ?>.value = 0;
    var a<?= $i->id ?> = 0;
  plus<?= $i->id ?>.addEventListener("click", ()=>{
   a<?= $i->id ?>++;
   num<?= $i->id ?>.value = a<?= $i->id ?>;
  var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * a<?= $i->id ?>;
  total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;
   // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
   // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
   // // console.log(hasil); 
  });
  minus<?= $i->id ?>.addEventListener("click", ()=>{
   
   var inputValueA = num<?= $i->id ?>.value;
        // console.log(inputValue);
        if (inputValueA >= 1) {
          a<?= $i->id ?>--;
   num<?= $i->id ?>.value = a<?= $i->id ?>;
   var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * a<?= $i->id ?>;
   total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;
   // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
   // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
   // // console.log(hasil);
   }  
  });

</script>
  
<?php endforeach ?>

<?php foreach ($item as $i ): ?>
<script type="text/javascript">
  var jumlah<?=$i->id?> = document.querySelector('#jumlah<?=$i->id?>');
  if (localStorage.getItem('<?=$i->no?>')) {
         // jumlah<?=$i->id?>.value = localStorage.getItem('<?=$i->no?>');
         jumlah<?=$i->id?>.value = 0;
         }else{
          jumlah<?=$i->id?>.value = 0;
        }

  
</script>
<?php endforeach ?>

  <?php $this->load->view('template/footer') ?>
