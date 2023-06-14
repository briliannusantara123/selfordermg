<?php $this->load->view('template/head') ?>
    <style type="text/css">
      .my-popup-class {
        z-index: 10000001;
      }
    @media (max-width: 414px) {
        .md {
       margin-top: 35px;
       top: 10px;
       right: 100px;
       width: 385px;
       height:600px;
       bottom: 0;
       z-index: 9998;
       left: 0;
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
       z-index: 9998;
       left: 0;
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
       z-index: 9998;
       left: 5px;
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
       z-index: 9998;
       left: 10px;
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
       z-index: 9998;
       left: 17px;
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
       z-index: 9998;
       left: 17px;
       overflow: auto;
       overflow-y: auto;
    }
    #imgmodal{
        width: 170px;height: 120px;border-radius: 20px; display: block;margin-left: auto;margin-right: auto;
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
  background-size: 55%;
  background-position-y: 20%;
  background-position-x: 50%;
}

.button:hover {
  /*background-color: #198754;*/ /* Green */
  border-radius: 10px;
  color: white;
}


.Vegetables {
  padding-top: 16px;
  padding-left: 22px;
  padding-right: 22px;
}
.Side_Dishes {
  padding-top: 16px;
  padding-left: 19px;
  padding-right: 19px;
}
.Western {
  padding-top: 16px;
  padding-left: 19px;
  padding-right: 19px;
}
.wrapper{
  max-height: 120px;
  /*padding-bottom: 60px;*/
  margin-bottom: 50px;
  border:1px solid #198754;
  display: flex;
  overflow: scroll; 
}
.wrapper .item{
  
  text-align: center;
  background-color: #ddd;
  margin-right: 2px;
}

.cari::-webkit-input-placeholder{
  color: #198754;
}
 
/*support mozilla*/
.cari:-moz-input-placeholder{
  color: #198754;
}
.text_Telor_Bumbu_Bali{
  margin-bottom: 41px;
}
.text_Ikan_Gurame_Bakar{
  margin-bottom: 40px;
}
.text_Ikan_Gurame_Kremes{
  margin-bottom: 40px;
}
.text_Udang_Saos_Padang{
  margin-bottom: 40px;
}
.text_Sayur_Asem{
  margin-bottom: 40px;
}
.text_Kangkung_Balacan{
  margin-bottom: 40px;
}
.text_Pete_Goreng{
  margin-bottom: 40px;
}
.text_Nasi_Goreng_Tomyum{
  margin-bottom: 40px;
}
.text_Nasi_Putih{
  margin-bottom: 40px;
}
.text_Paket_Tumpeng_Mini{
  margin-bottom: 40px;
}
.text{
  color: #198754;
}
.Grill{
   background-image: url("<?= base_url() ?>/assets/icon/grill.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Noodle{
   background-image: url("<?= base_url() ?>/assets/icon/noodle.png");
  background-repeat: no-repeat;
  background-size: 65%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Meat{
   background-image: url("<?= base_url() ?>/assets/icon/meat.png");
  background-repeat: no-repeat;
  background-size: 75%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Seafood{
  background-image: url("<?= base_url() ?>/assets/icon/seafood.png");
  background-repeat: no-repeat;
  background-size: 60%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Pasta{
   background-image: url("<?= base_url() ?>/assets/icon/pasta.png");
  background-repeat: no-repeat;
  background-size: 75%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Soup{
   background-image: url("<?= base_url() ?>/assets/icon/soup.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Salad{
   background-image: url("<?= base_url() ?>/assets/icon/salad.png");
  background-repeat: no-repeat;
  background-size: 75%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Rice{
   background-image: url("<?= base_url() ?>/assets/icon/Rice.png");
  background-repeat: no-repeat;
  background-size: 75%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Package{
   background-image: url("<?= base_url() ?>/assets/icon/Package.png");
  background-repeat: no-repeat;
  background-size: 65%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Cakes{
   background-image: url("<?= base_url() ?>/assets/icon/cake.png");
  background-repeat: no-repeat;
  background-size: 75%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Croissant{
   background-image: url("<?= base_url() ?>/assets/icon/croissant.png");
  background-repeat: no-repeat;
  background-size: 60%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Light_Bites{
   background-image: url("<?= base_url() ?>/assets/icon/Lightbites.png");
  background-repeat: no-repeat;
  background-size: 60%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Dessert{
   background-image: url("<?= base_url() ?>/assets/icon/dessert.png");
  background-repeat: no-repeat;
  background-size: 65%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Poultry{
   background-image: url("<?= base_url() ?>/assets/icon/poultry.png");
  background-repeat: no-repeat;
  background-size: 65%;
  background-position-y: 20%;
  background-position-x: 50%;
}
/*.rekomendasi{
  background-image: url("<?= base_url() ?>/assets/icon/badge.png");
  background-repeat: no-repeat;
  background-size: 50%;
  background-position-y: 45%;
  background-position-x: 50%;
}*/
.all{
  background-image: url("<?= base_url() ?>/assets/icon/all.png");
  background-repeat: no-repeat;
  background-size: 80%;
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
    <div class="col-9"><p style="padding-top: 13px;color: white;">Menu Makanan</p></div>
    <div class="col-1" style="z-index: 10040000;"><a style="text-align: center;margin-top: 6px;" href="<?php echo base_url() ?>Cart/home/<?= $nomeja ?>/Makanan/<?= $s ?>" class=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="23" color="white" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" style="margin-right: 10px;margin-top: 12px;margin-left: 10px;">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a></div>
<!-- <div class="col-1"><strong><h3 style="color: white;font-size: 10px;margin-top: 6px;background-color: red;border-radius: 40%;text-align: center;"><b id="cart_count"><?= $cart_count ?></b></h3></strong></div> -->
<div class="col-1"><strong><h3 style="color: white;font-size: 10px;margin-top: 6px;background-color: red;border-radius: 40%;text-align: center;"><b id="total_qty_header"><!-- <?= $total_qty;?> --></b></h3></strong></div>
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
      <a href="#rekomendasi" id="rekomendasi" class="button rekomendasi testrekomendasi" style="text-decoration:none;padding: 10px 10px;padding-top: 22px;"><p style="margin-top: 60px;margin-bottom: 1px;">recommendation</p></a>
  </div> -->
  <!-- <div class="item">
      <a href="#" id="all" class="button all" style="text-decoration:none"><p style="margin-top: 60px;margin-bottom: 1px;">   ALL   </p></a>
  </div> -->
 <?php foreach($sub as $i){ ?>
    <div class="item">
      <a href="#<?= str_replace(" ","_", $i['sub_category_so']) ?>" id="<?= str_replace(" ","_", $i['sub_category_so']) ?>" class="button <?= str_replace(" ","_", $i['sub_category_so']) ?> test<?= str_replace(" ","_", $i['sub_category_so']) ?>"  style="text-decoration:none"><p style="margin-top: 60px;margin-bottom: 1px;"><?= str_replace(" ","", $i['sub_category_so'])?></p></a></div>
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
<form action="<?= base_url() ?>ordermakanan/search/<?= $nomeja ?>" method="post" >
  <div class="container text-center" style="margin-top: 150px;display: flex;width:100%; position: fixed;z-index: 100000; ">
  <div class="row">
    <div class="col-9"><input type="text" name="keyword" class="form-control cari"  placeholder="Find Food..." style="border:1px solid #198754;padding-left: 10px;padding-right: 20px;"></div>
    <div class="col-3"><button type="submit" class="btn btn-success" style="padding-left: 20px;padding-right: 20px;">Find</button></div>
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
<script type="text/javascript">
  /*const plus<?= $i->id ?> = document.querySelector(".plus<?= $i->id ?>"),
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
   
   var inputValueA = num<?= $i->id ?>.value;
        // console.log(inputValue);
        if (inputValueA >= 1) {
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
  });*/
</script>

  
<!-- <?php //endforeach ?>
<script type="text/javascript">
  var currentLocation = location.href;
  var menuItem = document.querySelectorAll('a');
  
  var menuLength = menuItem.length
  for (let i = 0;i<menuLength;i++){
    if(menuItem[i].href === currentLocation){
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Ayam") {
        menuItem[i].className = "active_ayam"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Sapi") {
        menuItem[i].className = "active_sapi"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Seafood") {
        menuItem[i].className = "active_seafood"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Sate") {
        menuItem[i].className = "active_sate"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Kuah") {
        menuItem[i].className = "active_kuah"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Vegetables") {
        menuItem[i].className = "active_vegetables"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Nasi") {
        menuItem[i].className = "active_nasi"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Paket") {
        menuItem[i].className = "active_paket"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Side%20Dishes") {
        menuItem[i].className = "active_side"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/FOOD") {
        menuItem[i].className = "active_food"
       console.log(menuItem[i]);
      }
      if (menuItem[i].href  === "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/rekomendasi") {
        menuItem[i].className = "active_rekomen"
       console.log(menuItem[i]);
      }
      
    }

  }

</script> -->


 <script type="text/javascript">
  
  function OrderQty(tipe,id,no,stock,need_stock,uoi) {
    var itemCode = $('#no' + id).val();
    var desc = $('#nama' + id).val();
    var price = $('#harga' + id).val();
    var notes = $('#pesan' + id).val();
    // $('#kurang' + id).prop('disabled', true);
    // $('#tambah' + id).prop('disabled', true);
    $.ajax({
      type:'POST',
      data: {tipe: tipe,id: id,item_code: itemCode,description: desc,unit_price: price,extra_notes: notes,no: no,stock: stock,need_stock: need_stock,uoi: uoi},
      url: '<?= base_url().'ordermakanan/orderqty' ?>',
      dataType:'json',})
      .done(function (hasil){
        localStorage.setItem(no,hasil.new_qty);
        
        if(hasil.status == true){
          $('#kurang' + id).prop('disabled', false);
          $('#tambah' + id).prop('disabled', false);
          
          $('#jumlah' + id).val(hasil.new_qty);
          $('#qtycart' + id).text("Cart Qty "+localStorage.getItem(no));
          $('#pesan' + id).val(hasil.pesan);
          $('#cart_count').text(hasil.cart_count);
          $('#total_qty').text(hasil.total_qty);
          $('#total_qty_header').text(hasil.total_qty);
          if (hasil.cek == true) {
            var isi = hasil.notif;
            Swal.fire({
            title: 'Notification!',
            text: isi,
            icon: 'warning',
            confirmButtonColor: "#198754",
            confirmButtonText: 'OK'
            })
          }

        }
      });
  }
</script>


<?php foreach ($sub as $i ): ?>
<script type="text/javascript">
      $(document).ready(function(){

        var key = "<?= $key ?>";
        if (key != '') {
          $('#konten').load('<?= base_url() ?>ordermakanan/search/1');
        }
         if (window.location.toString() == "<?= base_url() ?>ordermakanan/menu/Makanan/<?= str_replace(" ","%20", $i['sub_category_so']) ?>#<?= str_replace(" ","_", $i['sub_category_so']) ?>") {
          $('#konten').load('<?= base_url() ?>ordermakanan/menumakanan/Makanan/<?= str_replace(" ","%20", $i['sub_category_so']) ?>#<?= str_replace(" ","_", $i['sub_category_so']) ?>');
         }else if (window.location.toString() == "<?= base_url() ?>ordermakanan/menu/Makanan/rekomendasi#rekomendasi") {
          $('#konten').load('<?= base_url() ?>ordermakanan/menumakanan/Makanan/rekomendasi#rekomendasi');
         }
          
        

        $('#<?= str_replace(" ","_", $i['sub_category_so']) ?>').click(function(){
          // mengambil data dari href
          var h = '<?= base_url() ?>ordermakanan/menumakanan/Makanan/<?= str_replace(" ","%20", $i['sub_category_so']) ?>';
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
          var h = '<?= base_url() ?>ordermakanan/menumakanan/Makanan/rekomendasi';
          // alert(h);
          $('#konten').load(h);
          // konten akan diisi oleh menu yang dipilih sesuai dengan isi dari href yang dipilih
          
        });
        $('#all').click(function(){
          // mengambil data dari href
          var h = '<?= base_url() ?>ordermakanan/menumakanan/Makanan/all';
          // alert(h);
          $('#konten').load(h);
          // konten akan diisi oleh menu yang dipilih sesuai dengan isi dari href yang dipilih
          
        });
      });
    </script>
<?php endforeach ?>
<?php foreach($sub as $i): ?>
<script type="text/javascript">
  var<?= str_replace(" ","_", $i['sub_category_so']) ?>= document.getElementById('<?= str_replace(" ","_", $i['sub_category_so']) ?>');
  var all = document.getElementById('all');
  var rekomendasi = document.getElementById('rekomendasi');
  var item<?= str_replace(" ","_", $i['sub_category_so']) ?> = document.querySelector('.test<?= str_replace(" ","_", $i['sub_category_so']) ?>');
  var itemall = document.querySelector('.testall');
  var itemrekomendasi = document.querySelector('.testrekomendasi');

    if (window.location.toString() == "<?= base_url() ?>ordermakanan/menu/Makanan/<?= str_replace(" ","%20", $i['sub_category_so']) ?>#<?= str_replace(" ","_", $i['sub_category_so']) ?>") {
        $(document).ready(function() {
        item<?= str_replace(" ","_", $i['sub_category_so']) ?>.classList.add('active');
    });
    }
    // else if (window.location.toString() == "<?= base_url() ?>ordermakanan/menu/Makanan/rekomendasi#rekomendasi") {
    //     $(document).ready(function() {
    //     itemrekomendasi.classList.add('active');
    // });
    // }
  

  // $(document).ready(function() {
  //       itemChicken.classList.add('active');
  //   });
  Soup.addEventListener("click", ()=>{
    itemSoup.classList.add('active');
    itemSalad.classList.remove('active');
    // itemPackage.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemMeat.classList.remove('active');
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    // itemGrill.classList.remove('active');
    itemPoultry.classList.remove('active');
    itemNoodle.classList.remove('active');
    itemRice.classList.remove('active');
    itemPasta.classList.remove('active');
    itemCroissant.classList.remove('active');
    itemLight_Bites.classList.remove('active');
    itemDessert.classList.remove('active');
    itemCakes.classList.remove('active');
    window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Soup#Soup";
    
  });
  Seafood.addEventListener("click", ()=>{
    itemSeafood.classList.add('active');
    itemSoup.classList.remove('active');
    // itemPackage.classList.remove('active');
    itemSalad.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    itemMeat.classList.remove('active');
    // itemGrill.classList.remove('active');
    itemPoultry.classList.remove('active');
    itemNoodle.classList.remove('active');
    itemRice.classList.remove('active');
    itemPasta.classList.remove('active');
    itemCroissant.classList.remove('active');
    itemLight_Bites.classList.remove('active');
    itemDessert.classList.remove('active');
    itemCakes.classList.remove('active');
    window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Seafood#Seafood";
    
  });
  Salad.addEventListener("click", ()=>{
    itemSalad.classList.add('active');
    itemSeafood.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    itemSoup.classList.remove('active');
    // itemPackage.classList.remove('active');
    
    itemMeat.classList.remove('active');
    // itemGrill.classList.remove('active');
    itemPoultry.classList.remove('active');
    itemNoodle.classList.remove('active');
    itemRice.classList.remove('active');
    itemPasta.classList.remove('active');
    itemCroissant.classList.remove('active');
    itemLight_Bites.classList.remove('active');
    itemDessert.classList.remove('active');
    itemCakes.classList.remove('active');
    window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Salad#Salad";
    
  });
  Rice.addEventListener("click", ()=>{
    itemRice.classList.add('active');
    itemSalad.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemSoup.classList.remove('active');
    itemNoodle.classList.remove('active');
    itemPasta.classList.remove('active');
    itemPoultry.classList.remove('active');
    // itemPackage.classList.remove('active');
    // itemGrill.classList.remove('active');
    itemMeat.classList.remove('active');
    window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Rice#Rice";
    
    
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    itemCroissant.classList.remove('active');
    itemLight_Bites.classList.remove('active');
    itemDessert.classList.remove('active');
    itemCakes.classList.remove('active');
     window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Rice#Rice";
  });
  Poultry.addEventListener("click", ()=>{
    itemPoultry.classList.add('active');
    itemRice.classList.remove('active');
    itemSalad.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemSoup.classList.remove('active');
    // itemPackage.classList.remove('active');
    
    // itemGrill.classList.remove('active');
    itemNoodle.classList.remove('active');
    itemMeat.classList.remove('active');
    
    
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    
    itemPasta.classList.remove('active');
    itemCroissant.classList.remove('active');
    itemLight_Bites.classList.remove('active');
    itemDessert.classList.remove('active');
    itemCakes.classList.remove('active');
    window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Poultry#Poultry";
    
  });
  Pasta.addEventListener("click", ()=>{
    itemPasta.classList.add('active');
    itemPoultry.classList.remove('active');
    itemRice.classList.remove('active');
    itemSalad.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemSoup.classList.remove('active');
    itemCroissant.classList.remove('active');
    itemLight_Bites.classList.remove('active');
    itemNoodle.classList.remove('active');
    
    // itemPackage.classList.remove('active');
   
    // itemGrill.classList.remove('active');
    itemMeat.classList.remove('active');
   
    
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    itemDessert.classList.remove('active');
    itemCakes.classList.remove('active');
    window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Pasta#Pasta";
    
  });
  Noodle.addEventListener("click", ()=>{
    itemNoodle.classList.add('active');
    itemPasta.classList.remove('active');
    itemPoultry.classList.remove('active');
    itemRice.classList.remove('active');
    itemSalad.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemSoup.classList.remove('active');
    // itemPackage.classList.remove('active');
    
    // itemGrill.classList.remove('active');
    itemMeat.classList.remove('active');
    
    
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    
    itemCroissant.classList.remove('active');
    itemLight_Bites.classList.remove('active');
    itemDessert.classList.remove('active');
    itemCakes.classList.remove('active');
    window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Noodle#Noodle";
    
  });
  Meat.addEventListener("click", ()=>{
    itemMeat.classList.add('active');
    itemNoodle.classList.remove('active');
    itemPasta.classList.remove('active');
    itemPoultry.classList.remove('active');
    itemRice.classList.remove('active');
    itemSalad.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemSoup.classList.remove('active');
    // itemPackage.classList.remove('active');
    // itemGrill.classList.remove('active');
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    itemCroissant.classList.remove('active');
    itemLight_Bites.classList.remove('active');
    itemDessert.classList.remove('active');
    itemCakes.classList.remove('active');
    window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Meat#Meat";
    
  });
  // Package.addEventListener("click", ()=>{
  //   itemPackage.classList.add('active');
  //   itemSeafood.classList.remove('active');
  //   itemSalad.classList.remove('active');
  //   // itemrekomendasi.classList.remove('active');
  //   itemSoup.classList.remove('active');
  //   itemMeat.classList.remove('active');
  //   // itemGrill.classList.remove('active');
  //   itemPoultry.classList.remove('active');
  //   itemNoodle.classList.remove('active');
  //   itemRice.classList.remove('active');
  //   itemPasta.classList.remove('active');
  //   itemCroissant.classList.remove('active');
  //   itemLight_Bites.classList.remove('active');
  //   itemDessert.classList.remove('active');
  //   itemCakes.classList.remove('active');
  //   window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Package#Package";
    
  // });
  
  
  // Grill.addEventListener("click", ()=>{
  //   itemGrill.classList.add('active');
  //   itemMeat.classList.remove('active');
  //   itemPoultry.classList.remove('active');
  //   itemSoup.classList.remove('active');
  //   itemSalad.classList.remove('active');
  //   // itemall.classList.remove('active');
  //   itemrekomendasi.classList.remove('active');
  //   itemNoodle.classList.remove('active');
  //   itemRice.classList.remove('active');
  //   itemPasta.classList.remove('active');
  //   itemCroissant.classList.remove('active');
  //   itemLight_Bites.classList.remove('active');
  //   itemDessert.classList.remove('active');
  //   itemCakes.classList.remove('active');
  //   window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Grill#Grill";
    
  // });
  Light_Bites.addEventListener("click", ()=>{
    itemLight_Bites.classList.add('active');
    itemMeat.classList.remove('active');
    itemNoodle.classList.remove('active');
    itemPasta.classList.remove('active');
    itemPoultry.classList.remove('active');
    itemRice.classList.remove('active');
    itemSalad.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemSoup.classList.remove('active');
    itemCroissant.classList.remove('active');
    itemDessert.classList.remove('active');
    itemCakes.classList.remove('active'); 
    // itemPackage.classList.remove('active');
    
    // itemGrill.classList.remove('active');
    
    
    
    // itemall.classList.remove('active');
     window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Light Bites#Light_Bites";
    
    
  });
  Dessert.addEventListener("click", ()=>{
    itemDessert.classList.add('active');
    itemMeat.classList.remove('active');
    itemLight_Bites.classList.remove('active');
    itemNoodle.classList.remove('active');
    itemPasta.classList.remove('active');
    itemPoultry.classList.remove('active');
    itemRice.classList.remove('active');
    itemSalad.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemSoup.classList.remove('active');
    itemCroissant.classList.remove('active');
   // itemGrill.classList.remove('active');
    // itemPackage.classList.remove('active');   
    itemCakes.classList.remove('active');
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Dessert#Dessert";
    
  });
  
  
  
  Croissant.addEventListener("click", ()=>{
    itemCroissant.classList.add('active');
    itemDessert.classList.remove('active');
    itemLight_Bites.classList.remove('active');
    itemMeat.classList.remove('active');
    itemNoodle.classList.remove('active');
    itemPasta.classList.remove('active');
    itemPoultry.classList.remove('active');
    itemRice.classList.remove('active');
    itemSalad.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemSoup.classList.remove('active');
    itemCakes.classList.remove('active');
    // itemPackage.classList.remove('active');
    
    // itemGrill.classList.remove('active');
    
    
    
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Croissant#Croissant";
  });
  
  Cakes.addEventListener("click", ()=>{
    itemCakes.classList.add('active');
    itemCroissant.classList.remove('active'); 
    itemDessert.classList.remove('active');
    itemLight_Bites.classList.remove('active');
    itemMeat.classList.remove('active');
    itemNoodle.classList.remove('active');
    itemPasta.classList.remove('active');
    itemPoultry.classList.remove('active');
    itemRice.classList.remove('active');
    itemSalad.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemSoup.classList.remove('active');
    // itemGrill.classList.remove('active');
    // itemPackage.classList.remove('active');
    
    
    
    
    // itemall.classList.remove('active');
    // itemrekomendasi.classList.remove('active');
    window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/Cakes#Cakes";
    
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
  //   itemSalad.classList.remove('active');
  //   itemDessert.classList.remove('active');
  //   itemCroissant.classList.remove('active');
  //   itemPasta.classList.remove('active');
  //   itemRice.classList.remove('active');
  //   itemNoodle.classList.remove('active');
  //   itemPoultry.classList.remove('active');
  //   itemGrill.classList.remove('active');
  //   itemMeat.classList.remove('active');
  //   itemSoup.classList.remove('active');
  //   window.location.href = "<?= base_url() ?>ordermakanan/menu/Makanan/rekomendasi#rekomendasi";
    
  //   // itemall.classList.remove('active');
    
  // });
</script>
<?php endforeach; ?>
  <script type="text/javascript">
  window.addEventListener("online", (event) => {
  
  setInterval(function(){
      $.ajax({
      type:'POST',
      url: '<?= base_url().'ordermakanan/jmlcart' ?>',
      dataType:'json',
      success:function(data){
          $("#total_qty").html(data.total);
          $("#total_qty_header").html(data.total);
      }
    });
    },1000);
});
</script>


  <?php $this->load->view('template/footer') ?>
  