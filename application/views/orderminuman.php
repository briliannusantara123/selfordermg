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
   margin-top: 220px;
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
  border-radius: 10%;
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
    <div class="col-9"><p style="padding-top: 13px;color: white;">Menu Minuman</p></div>
    <div class="col-1" style="z-index: 10040000;"><a style="text-align: center;margin-top: 6px;" href="<?php echo base_url() ?>Cart/home/<?= $nomeja ?>" class=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="23" color="white" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" style="margin-right: 10px;margin-top: 12px;margin-left: 10px;">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a></div>
<div class="col-1"><strong><h3 style="color: white;font-size: 10px;margin-top: 6px;background-color: red;border-radius: 40%;text-align: center;"><?= $cart_count ?></h3></strong></div>

  </div>
</div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<br>

<header style="display: flex;width:100%; position: fixed;z-index: 100000;margin-top: 30px;background-color: white;">

<div class="wrapper" style="background-color: white;">
  <div class="item">
      <a href="<?= base_url() ?>ordermakanan/menu/Makanan/rekomendasi" class="button rekomendasi" style="text-decoration:none;padding: 10px 10px;"><p style="margin-top: 60px;margin-bottom: 1px;">Rekomendasi</p></a></div>
 <?php foreach($sub as $i){ ?>
    <div class="item">
      <a href="<?= base_url() ?>orderminuman/menu/Minuman/<?= $i['description'] ?>" class="button <?= str_replace(" ","_", $i['description']) ?>" style="text-decoration:none;padding-top: 20px;"><p style="margin-top: 50px;margin-bottom: 1px;"><?= str_replace(" ",".", $i['description'])?></p></a></div>
 <?php  }  ?>
</div>



<!-- <div class="container" style="display: flex;margin-bottom: 20px; margin-top: 20px;background-color: white;border-radius: 40%;">
  <div class="row row-cols-3">
    <?php foreach($sub as $i){ ?>  
<div class="container text-center">
  <div class="row">
    <div class="col">
      <a href="<?= base_url() ?>orderminuman/menu/Minuman/<?= $i['description'] ?>/<?= $nomeja ?>" class="button <?= str_replace(" ","_", $i['description']) ?>"><?= str_replace(" ","_", $i['description'])?></a>
      
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
<form action="<?= base_url() ?>orderminuman/search" method="post">
  <div class="container text-center" style="margin-top: 145px;display: flex;width:100%; position: fixed;z-index: 100000;">
  <div class="row">
    <div class="col-10"><input type="text" name="keyword" class="form-control cari"  placeholder="Cari Menu Minuman..." style="border:1px solid #198754;"></div>
    <div class="col-2"><button type="submit" class="btn btn-success">Cari</button></div>
  </div>
</div>
</form>
<form action="<?= base_url() ?>orderminuman/addcart" method="post">  
<div class="container text-center" style="margin-top: 200px;">
  <div class="row row-cols-2">
    <?php foreach($item as $i){ ?>

<div class="container text-center">
  <div class="row">
    <div class="col" style="margin-top:2px;">
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
      <p class="text_<?= str_replace(" ","_", $i->description)?> text"><?= $i->description ?></p>
      <div class="container text-center">
  <div class="row">
    <div class="col" >
      <button type="button" class="btn btn-success minus<?= $i->id ?>" style="padding-left: 10px;padding-right: 10px;"> - </button>
    </div>
    <div class="col">
      <input type="text" name="qty[]" id="qty" value="0"  class="form-control num<?= $i->id ?>" style="border:1px solid #198754;margin-bottom: 5px;color: #198754; width:35px; ">
    </div>
    <div class="col">
      <button type="button" class="btn btn-success plus<?= $i->id ?>" style="padding-left: 10px;padding-right: 10px;">+</button>
    </div>
  </div>
</div>
      <div class="container text-center">
  <div class="row">
    <div class="col">
      
      <input type="hidden" name="nama[]" id="nama" value="<?= $i->description ?>" class="form-control nama">
      <input type="hidden" name="harga[]" id="harga" value="<?= $i->harga_weekday ?>" class="form-control harga">
      <input type="hidden" name="no[]" id="harga" value="<?= $i->no ?>" class="form-control harga">
      
    </div>
  </div>
</div>
<div class="container text-center">
  <div class="row">
    <div class="col-7" style="color: #198754;">TakeAway?</div>
    <div class="col-5"><input type="checkbox" value="Take Away" onclick="getClick<?= $i->id ?>()" class="ta<?= $i->id ?>"></div>
  </div>
</div>
<div class="container text-center" id="tk<?= $i->id ?>" hidden >
  <div class="row">
    <div class="col" >
      <input type="hidden" name="cek[]" class="cek<?= $i->id ?>">
      <button type="button" class="btn btn-success mi<?= $i->id ?>" style="padding-left: 10px;padding-right: 10px;"> - </button>
    </div>
    <div class="col">
      <input type="text" name="qta[]" id="qta" value="0"  class="form-control nu<?= $i->id ?>" style="border:1px solid #198754;margin-bottom: 5px;color: #198754; width:35px;" readonly disabled="disabled">
    </div>
    <div class="col">
      <button type="button" class="btn btn-success pl<?= $i->id ?>" id="pls<?= $i->id ?>" style="padding-left: 10px;padding-right: 10px;">+</button>
    </div>
  </div>
</div>
      <input type="text" name="pesan[]" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #198754;">
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
<button type="submit" class="btn btn-outline-success" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;">
  Order
</button>
<a href="<?php echo base_url('') ?>selforder/home/<?= $nomeja ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;">Kembali</a>
</form>
<br>
</div>
</footer>
<!-- Modal -->
<?php foreach ($item as $i): ?>
<div class="modal fade" id="exampleModal<?= $i->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #198754;color: white;">
        <h5 class="modal-title" style="text-align: center;" id="exampleModalLabel">Menu Detail</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <h4 style="text-align: center;color: #198754;"><?= $i->description ?></h4>
      <img src="<?= $i->image_path ?>" alt="Red dot" style="width: 180px;height: 180px;border-radius: 20px; display: block;margin-left: auto;margin-right: auto;" />
      <h5 style="text-align: center;color: #198754;margin-top: 10px;"><?= $i->product_info ?></h5>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php foreach ($item as $i ): ?>
<script type="text/javascript">
  const plus<?= $i->id ?> = document.querySelector(".plus<?= $i->id ?>"),
  minus<?= $i->id ?> = document.querySelector(".minus<?= $i->id ?>"),
  num<?= $i->id ?> = document.querySelector(".num<?= $i->id ?>");

  const pl<?= $i->id ?> = document.querySelector(".pl<?= $i->id ?>"),
  mi<?= $i->id ?> = document.querySelector(".mi<?= $i->id ?>"),
  nu<?= $i->id ?> = document.querySelector(".nu<?= $i->id ?>");

  let a<?= $i->id ?> = 0;

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
   nu<?= $i->id ?>.value = a<?= $i->id ?>;
   console.log(a<?= $i->id ?>);
   }  
  });
  let b<?= $i->id ?> = 0;

  pl<?= $i->id ?>.addEventListener("click", ()=>{
    var inputValueA = num<?= $i->id ?>.value;
    if (inputValueA >= 1) {
   b<?= $i->id ?>++;
   if (b<?= $i->id ?> == inputValueA) {
    var pls<?= $i->id ?> = document.getElementById('pls<?= $i->id ?>');
    pls<?= $i->id ?>.disabled = true;
   }
   nu<?= $i->id ?>.value = b<?= $i->id ?>;
   console.log(b<?= $i->id ?>); 
 }
  });
  mi<?= $i->id ?>.addEventListener("click", ()=>{
   
   var inputValueB = nu<?= $i->id ?>.value;
        // console.log(inputValue);
        if (inputValueB >= 1) {
          b<?= $i->id ?>--;
   nu<?= $i->id ?>.value = b<?= $i->id ?>;
   console.log(b<?= $i->id ?>);
   }  
  });
</script>
  
<?php endforeach ?>
<script type="text/javascript">
  const currentLocation = location.href;
  const menuItem = document.querySelectorAll('a');
  
  const menuLength = menuItem.length
  for (let i = 0;i<menuLength;i++){
    if(menuItem[i].href === currentLocation){
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/orderminuman/menu/Minuman/Cold%20Drink") {
        menuItem[i].className = "active_cold"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/orderminuman/menu/Minuman/Ice%20Creams") {
        menuItem[i].className = "active_ice"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/orderminuman/menu/Minuman/Soft%20Drinks") {
        menuItem[i].className = "active_soft"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/orderminuman/menu/Minuman/Juice%20-%20Fresh%20Drinks") {
        menuItem[i].className = "active_juice"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/orderminuman/menu/Minuman/FRAPPE%20and%20ICED") {
        menuItem[i].className = "active_frappe"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/orderminuman/menu/Minuman/ARABICA%20COFFEE") {
        menuItem[i].className = "active_arabica"
       console.log(menuItem[i]);
      }
      
    }

  }
</script>
<?php foreach ($item as $i ): ?>
<script type="text/javascript">

function getClick<?= $i->id ?>() {
    var c = document.querySelector(".ta<?=$i->id?>");
    var cek = document.querySelector(".cek<?=$i->id?>");
    if (c.checked == true) {
      $('#tk<?= $i->id ?>').prop('hidden', false);
      $(".nu<?= $i->id ?>").prop('disabled', false);
      cek.value=1;
    }else{
      $('#tk<?= $i->id ?>').prop('hidden', true);
      $(".nu<?= $i->id ?>").prop('disabled', true);
    }
  }
</script>
<?php endforeach ?>
  <?php $this->load->view('template/footer') ?>