<?php $this->load->view('template/head') ?>
    <style type="text/css">
      .my-popup-class {
        z-index: 10000001;
      }
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

.active{
   background-color: #198754;
  color: white;
  
  padding:16px 30px;
  text-align: center;
  border-radius: 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  transition-duration: 0.4s;
  
  background-repeat: no-repeat;
  background-size: 40%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.button:hover {
  /*background-color: #198754; *//* Green */
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
 @media (max-width: 414px) {
        .md {
       margin-top: 35px;
       top: 10px;
       right: 100px;
       width: 385px;
       height:600px;
       bottom: 0;
       left: 0;
       z-index: 10040000;
       overflow: auto;
       overflow-y: auto;
    }
        }
          
        /* Media Query for low resolution  Tablets, Ipads */
        @media (min-width: 397px) {
            .md {
       margin-top: 30px;
       top: 10px;
       right: 100px;
       width: 395px;
       height:610px;
       bottom: 0;
       left: 0;
       z-index: 10040000;
       overflow: auto;
       overflow-y: auto;
    }
        }
      @media (min-height: 640px) {
        .md {
       margin-top: 50px;
       top: 10px;
       right: 0px;
       width: 350px;
       height:515px;
       bottom: 0;
       left: 5px;
       z-index: 10040000;
       overflow: auto;
       overflow-y: auto;
    }
    .mdl {
       margin-top: 205px;
       top: 10px;
       right: 0px;
       width: 340px;
       height:515px;
       bottom: 0;
       left: 10px;
       z-index: 10040000;
       overflow: auto;
       overflow-y: auto;
    }

    #imgmodal{
        width: 150px;height: 100px;border-radius: 20px; display: block;margin-left: auto;margin-right: auto;
    }
    #description{
        color: #198754;float: left;font-size: 15px;
    }
    #product_info{
        color: #198754;margin-top: 2px;float: left;font-size: 15px;
    }
    #harga{
        color: #198754;margin-top: 2px;float: right;font-size: 15px;
    }
    #option{
      float: left;color: #198754;font-size: 15px;
    }
    .modalbutton{
      padding-left: 45px;padding-right: 45px;
    }
      }
        @media (min-height: 720px) {
            .md {
       margin-top: 85px;
       top: 10px;
       right: 0px;
       width: 350px;
       height:540px;
       bottom: 0;
       left: 17px;
       z-index: 10040000;
       overflow: auto;
       overflow-y: auto;
    }
    .mdl {
       margin-top: 220px;
       top: 10px;
       right: 0px;
       width: 350px;
       height:515px;
       bottom: 0;
       left: 17px;
       z-index: 10040000;
       overflow: auto;
       overflow-y: auto;
    }
    #imgmodal{
        width: 170px;height: 150px;border-radius: 20px; display: block;margin-left: auto;margin-right: auto;
    }
    #description{
        color: #198754;float: left;font-size: 15px;
    }
    #product_info{
        color: #198754;margin-top: 2px;float: left;font-size: 15px;
    }
    #harga{
        color: #198754;margin-top: 2px;float: right;font-size: 15px;
    }
    #option{
      float: left;color: #198754;font-size: 15px;
    }
        }
          
        /* Media Query for Tablets Ipads portrait mode */
        @media (min-width: 768px) and (max-width: 1024px){
            

        }
          
        /* Media Query for Laptops and Desktops */
        @media (min-width: 1025px) and (max-width: 1280px){
            
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
.Cold_Drinks{
   background-image: url("<?= base_url() ?>/assets/icon/cold_drink.png");
  background-repeat: no-repeat;
  background-size: 65%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Coffee_and_Tea{
   background-image: url("<?= base_url() ?>/assets/icon/coffeetea.png");
  background-repeat: no-repeat;
  background-size: 55%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Smoothies{
   background-image: url("<?= base_url() ?>/assets/icon/smooth.png");
  background-repeat: no-repeat;
  background-size: 65%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Tea{
   background-image: url("<?= base_url() ?>/assets/icon/tea.png");
  background-repeat: no-repeat;
  background-size: 85%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Moctail{
   background-image: url("<?= base_url() ?>/assets/icon/moctail.png");
  background-repeat: no-repeat;
  background-size: 75%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Japanese_Parfait{
   background-image: url("<?= base_url() ?>/assets/icon/parfait.png");
  background-repeat: no-repeat;
  background-size: 50%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Coffee{
   background-image: url("<?= base_url() ?>/assets/icon/coffee.png");
  background-repeat: no-repeat;
  background-size: 70%;
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
.all{
  background-image: url("<?= base_url() ?>/assets/icon/all.png");
  background-repeat: no-repeat;
  background-size: 80%;
  background-position-y: 45%;
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
.load{
    background: rgba(0,0,0,0.7);
    height: 100vh;
    width: 100%;
    position: fixed;
    z-index: 1000000;
  }
    </style>
<div id="loading"></div>
<div id="load"></div>
<div id="loadingkonek"></div>
    <nav class="bg-success" style="z-index: 10000;position: fixed;width: 100%;">
  <div class="container">
  <div class="row">
    <div class="col-9"><p style="padding-top: 13px;color: white;">Menu Minuman</p></div>
    <div class="col-1" style="z-index: 10040000;"><a style="text-align: center;margin-top: 6px;" href="<?php echo base_url() ?>Cart/home/<?= $nomeja ?>/Minuman/<?= $s ?>" class=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="23" color="white" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" style="margin-right: 10px;margin-top: 12px;margin-left: 10px;">
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
  <!-- <div class="item">
      <a href="#" id="rekomendasi" class="button rekomendasi testrekomendasi" style="text-decoration:none;padding: 10px 10px;padding-top: 29px;"><p style="margin-top: 60px;margin-bottom: 1px;">recommendation</p></a>
  </div> -->
  <!-- <div class="item">
      <a href="#" id="all" class="button all testall" style="text-decoration:none;padding-top: 23px;"><p style="margin-top: 60px;margin-bottom: 1px;">   ALL   </p></a>
  </div> -->
 <?php foreach($sub as $i){ ?>
    <div class="item">
      <a href="#<?= str_replace(" ","_", $i['sub_category_so']) ?>" id="<?= str_replace(" ","_", $i['sub_category_so']) ?>" class="button <?= str_replace(" ","_", $i['sub_category_so']) ?> test<?= str_replace(" ","_", $i['sub_category_so']) ?>"  style="text-decoration:none;padding-top: 23px;"><p style="margin-top: 60px;margin-bottom: 1px;"><?= str_replace(" ","", $i['sub_category_so'])?></p></a></div>
 <?php  }  ?>
</div>



<!-- <div class="container" style="display: flex;margin-bottom: 20px; margin-top: 20px;background-color: white;border-radius: 40%;">
  <div class="row row-cols-3">
    <?php foreach($sub as $i){ ?>  
<div class="container text-center">
  <div class="row">
    <div class="col">
      <a href="<?= base_url() ?>ordermakanan/menu/Makanan/<?= $i['sub_category_so'] ?>/<?= $nomeja ?>" class="button <?= str_replace(" ","_", $i['sub_category_so']) ?>"><?= str_replace(" ","_", $i['sub_category_so'])?></a>
      
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
<form action="<?= base_url() ?>orderminuman/search/<?= $nomeja ?>" method="post" >
  <div class="container text-center" style="margin-top: 150px;display: flex;width:100%; position: fixed;z-index: 100000;">
  <div class="row">
    <div class="col-10"><input type="text" name="keyword" class="form-control cari"  placeholder="Find Drinks..." style="border:1px solid #198754;"></div>
    <div class="col-2"><button type="submit" class="btn btn-success">Find</button></div>
  </div>
</div>
</form>
<!-- <?= base_url() ?>ordermakanan/addcart/<?= $nomeja ?> -->
<div id="konten">
  
</div>

<br>
</div>
</footer>
<!-- Modal -->

<script src="<?= base_url();?>/assets/bootstrap/js/jQuery3.5.1.min.js"></script>
  <?php //foreach ($item as $i ): ?>
<!-- <script type="text/javascript">
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
          b<?= $i->id ?>;
   nu<?= $i->id ?>.value = b<?= $i->id ?>;
   console.log(b<?= $i->id ?>);
   }  
  });
</script> -->
  
<?php //endforeach ?>
<!-- <script type="text/javascript">
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
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/orderminuman/menu/Minuman/rekomendasi") {
        menuItem[i].className = "active_rekomen"
       console.log(menuItem[i]);
      }
      
    }

  }
</script> -->
<?php foreach($sub as $i): ?>
<script type="text/javascript">
  var<?= str_replace(" ","_", $i['sub_category_so']) ?>= document.getElementById('<?= str_replace(" ","_", $i['sub_category_so']) ?>');
  // var Ice_Creams = document.getElementById('Ice_Creams');
  // var Soft_Drinks = document.getElementById('Soft_Drinks');
  var Juice = document.getElementById('Juice_-_Fresh_Drinks');
  // var FRAPPE_and_ICED = document.getElementById('FRAPPE_and_ICED');
  // var ARABICA_COFFEE = document.getElementById('ARABICA_COFFEE');
  var all = document.getElementById('all');
  var rekomendasi = document.getElementById('rekomendasi');
  var item<?= str_replace(" ","_", $i['sub_category_so']) ?> = document.querySelector('.test<?= str_replace(" ","_", $i['sub_category_so']) ?>');
  var itemJuice = document.querySelector('.testJuice_-_Fresh_Drinks');
  var itemall = document.querySelector('.testall');
  var itemrekomendasi = document.querySelector('.testrekomendasi');

  if (window.location.toString() == "<?= base_url() ?>orderminuman/menu/Minuman/<?= str_replace(" ","%20", $i['sub_category_so']) ?>#<?= str_replace(" ","_", $i['sub_category_so']) ?>") {
        $(document).ready(function() {
        item<?= str_replace(" ","_", $i['sub_category_so']) ?>.classList.add('active');
    });
    }else if (window.location.toString() == "<?= base_url() ?>orderminuman/menu/Minuman/rekomendasi#rekomendasi") {
        $(document).ready(function() {
        itemrekomendasi.classList.add('active');
    });
    }else if (window.location.toString() == "<?= base_url() ?>orderminuman/menu/Minuman/rekomendasi#Juice_-_Fresh_Drinks") {
        $(document).ready(function() {
        itemJuice.classList.add('active');
    });
    }
 // Tea.addEventListener("click", ()=>{
 //    itemTea.classList.add('active');
 //    itemSmoothies.classList.remove('active');
 //    // itemall.classList.remove('active');
 //    // itemrekomendasi.classList.remove('active');
 //    // itemTea.classList.remove('active');
 //    itemCoffee.classList.remove('active');
 //    itemMoctail.classList.remove('active');
 //    itemJapanese_Parfait.classList.remove('active');
    
 //  });
  Smoothies.addEventListener("click", ()=>{
    itemSmoothies.classList.add('active');
    // itemTea.classList.remove('active');
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    // itemTea.classList.remove('active');
    itemCoffee_and_Tea.classList.remove('active');
    itemMoctail.classList.remove('active');
    itemCold_Drinks.classList.remove('active');
    // itemJapanese_Parfait.classList.remove('active');
    window.location.href = "<?= base_url() ?>orderminuman/menu/Minuman/Smoothies#Smoothies";
    
  });
  // Tea.addEventListener("click", ()=>{
  //   itemTea.classList.add('active');
  //   itemSmoothies.classList.remove('active');
  //   itemMoctail.classList.remove('active');
  //   itemCoffee.classList.remove('active');
  //   // itemall.classList.remove('active');
  //   itemrekomendasi.classList.remove('active');
    
  // });
  Moctail.addEventListener("click", ()=>{
    itemMoctail.classList.add('active');
    itemCold_Drinks.classList.remove('active');
    // itemJapanese_Parfait.classList.remove('active');
    // itemTea.classList.remove('active');
    itemSmoothies.classList.remove('active');
    // itemTea.classList.remove('active');
    itemCoffee_and_Tea.classList.remove('active');
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    window.location.href = "<?= base_url() ?>orderminuman/menu/Minuman/Moctail#Moctail";
  });
  Cold_Drinks.addEventListener("click", ()=>{
    itemCold_Drinks.classList.add('active');
    itemMoctail.classList.remove('active');
    // itemTea.classList.remove('active');
    itemSmoothies.classList.remove('active');
    // itemTea.classList.remove('active');
    itemCoffee_and_Tea.classList.remove('active');
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    window.location.href = "<?= base_url() ?>orderminuman/menu/Minuman/Cold%20Drinks#Cold_Drinks";
  });
  // Japanese_Parfait.addEventListener("click", ()=>{
  //   itemJapanese_Parfait.classList.add('active');
  //   itemMoctail.classList.remove('active');
  //   // itemTea.classList.remove('active');
  //   itemSmoothies.classList.remove('active');
  //   itemTea.classList.remove('active');
  //   itemCoffee.classList.remove('active');
  //   // itemall.classList.remove('active');
  //   // itemrekomendasi.classList.remove('active');
  //   // window.location.href = "<?= base_url() ?>orderminuman/menu/Minuman/Soft%20Drinks#Soft_Drinks";
  // });
  Coffee_and_Tea.addEventListener("click", ()=>{
    itemCoffee_and_Tea.classList.add('active');
    itemSmoothies.classList.remove('active');
    // itemTea.classList.remove('active');
    // itemTea.classList.remove('active');
    itemMoctail.classList.remove('active');
    itemCold_Drinks.classList.remove('active');
    // itemJapanese_Parfait.classList.remove('active');
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    window.location.href = "<?= base_url() ?>orderminuman/menu/Minuman/Coffee%20and%20Tea#Coffee_and_Tea";   
  });
  
  // all.addEventListener("click", ()=>{
  //   itemall.classList.add('active');
  //   itemrekomendasi.classList.remove('active');
  //   itemCold_Drink.classList.remove('active');
  //   itemIce_Creams.classList.remove('active');
  //   itemJuice.classList.remove('active');
  //   itemSoft_Drinks.classList.remove('active');
  //   itemFRAPPE_and_ICED.classList.remove('active');
  //   itemARABICA_COFFEE.classList.remove('active');
    
  // });
  // rekomendasi.addEventListener("click", ()=>{
  //   itemrekomendasi.classList.add('active');
  //   // itemall.classList.remove('active');
  //   itemTea.classList.remove('active');
  //   itemCoffee.classList.remove('active');
  //   itemMoctail.classList.remove('active');
  //   itemSmoothies.classList.remove('active');
  //   window.location.href = "<?= base_url() ?>orderminuman/menu/Minuman/rekomendasi#rekomendasi";
  // });
</script>
<?php endforeach; ?>


<?php foreach ($sub as $i ): ?>
<script type="text/javascript">
      $(document).ready(function(){

        var key = "<?= $key ?>";
        if (key != '') {
          $('#konten').load('<?= base_url() ?>orderminuman/search/1');
        }
         if (window.location.toString() == "<?= base_url() ?>orderminuman/menu/Minuman/<?= str_replace(" ","%20", $i['sub_category_so']) ?>#<?= str_replace(" ","_", $i['sub_category_so']) ?>") {
          $('#konten').load('<?= base_url() ?>orderminuman/menuminuman/Minuman/<?= str_replace(" ","%20", $i['sub_category_so']) ?>#<?= str_replace(" ","_", $i['sub_category_so']) ?>');
         }else if (window.location.toString() == "<?= base_url() ?>orderminuman/menu/Minuman/rekomendasi#rekomendasi") {
          $('#konten').load('<?= base_url() ?>orderminuman/menuminuman/Minuman/rekomendasi#rekomendasi');
         }else if (window.location.toString() == "<?= base_url() ?>orderminuman/menu/Minuman/rekomendasi#Juice_-_Fresh_Drinks") {
          $('#konten').load('<?= base_url() ?>orderminuman/menuminuman/Minuman/rekomendasi#Juice_-_Fresh_Drinks');
         }
          
        

        $('#<?= str_replace(" ","_", $i['sub_category_so']) ?>').click(function(){
          // mengambil data dari href
          var h = '<?= base_url() ?>orderminuman/menuminuman/Minuman/<?= str_replace(" ","%20", $i['sub_category_so']) ?>';
          // alert(h);
          // document.cookie = "menu=<?= str_replace(" ","_", $i['sub_category_so']) ?>";
          // <?php
          //   $menu = get_cookie('menu');
          //   $data = ['menu' => $menu];
          //   $this->session->set_userdata($data);
          // ?>
          
          
          $('#konten').load(h);
          // konten akan diisi oleh menu yang dipilih sesuai dengan isi dari href yang dipilih
          
        });
        $('#rekomendasi').click(function(){
          // mengambil data dari href
          var h = '<?= base_url() ?>orderminuman/menuminuman/Minuman/rekomendasi';
          // alert(h);
          $('#konten').load(h);
          // konten akan diisi oleh menu yang dipilih sesuai dengan isi dari href yang dipilih
          
        });
        $('#all').click(function(){
          // mengambil data dari href
          var h = '<?= base_url() ?>orderminuman/menuminuman/Minuman/all';
          // alert(h);
          $('#konten').load(h);
          // konten akan diisi oleh menu yang dipilih sesuai dengan isi dari href yang dipilih
          
        });
      });
    </script>
<?php endforeach ?>
  <?php $this->load->view('template/footer') ?>