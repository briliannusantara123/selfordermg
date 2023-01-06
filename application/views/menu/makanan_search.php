<?php $this->load->view('template/head') ?>
    <style type="text/css">
      #loading{
    width: 50px;
    height: 50px;
    border:solid 5px #ccc;
    border-top-color: #198754;
    border-radius: 100%;

    position: fixed;
    left: 0;
    top: 0;
    right:0;
    bottom: 0;
    margin: auto;
    z-index: 10000001;

    animation: putar 1s linear infinite;
  }

  @keyframes putar{
    from{transform: rotate(0deg);}
    to{transform: rotate(360deg);}
  }
    @media (max-width: 414px) {
        .modal {
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
            .modal {
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
        .modal {
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
            .modal {
       margin-top: 100px;
       top: 10px;
       right: 0px;
       width: 350px;
       height:520px;
       bottom: 0;
       left: 15px;
       z-index: 10040000;
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
.Chicken{
   background-image: url("<?= base_url() ?>/assets/icon/Chicken.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Beef{
   background-image: url("<?= base_url() ?>/assets/icon/Beef.png");
  background-repeat: no-repeat;
  background-size: 70%;
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
.Satay{
   background-image: url("<?= base_url() ?>/assets/icon/Satay.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Broth{
   background-image: url("<?= base_url() ?>/assets/icon/Broth.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Vegetables{
   background-image: url("<?= base_url() ?>/assets/icon/vegetable.png");
  background-repeat: no-repeat;
  background-size: 55%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Rice{
   background-image: url("<?= base_url() ?>/assets/icon/Rice.png");
  background-repeat: no-repeat;
  background-size: 70%;
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
.Side_Dishes{
   background-image: url("<?= base_url() ?>/assets/icon/side-dishes.png");
  background-repeat: no-repeat;
  background-size: 65%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.FOOD{
   background-image: url("<?= base_url() ?>/assets/icon/food.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.rekomendasi{
  background-image: url("<?= base_url() ?>/assets/icon/badge.png");
  background-repeat: no-repeat;
  background-size: 50%;
  background-position-y: 45%;
  background-position-x: 50%;
}
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
#load{
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
  <div class="item">
      <a href="#" id="rekomendasi" class="button rekomendasi testrekomendasi" style="text-decoration:none;padding: 10px 10px;padding-top: 22px;"><p style="margin-top: 60px;margin-bottom: 1px;">recommendation</p></a>
  </div>
  <!-- <div class="item">
      <a href="#" id="all" class="button all" style="text-decoration:none"><p style="margin-top: 60px;margin-bottom: 1px;">   ALL   </p></a>
  </div> -->
 <?php foreach($sub as $i){ ?>
    <div class="item">
      <a href="#<?= str_replace(" ","_", $i['description']) ?>" id="<?= str_replace(" ","_", $i['description']) ?>" class="button <?= str_replace(" ","_", $i['description']) ?> test<?= str_replace(" ","_", $i['description']) ?>"  style="text-decoration:none"><p style="margin-top: 60px;margin-bottom: 1px;"><?= str_replace(" ","", $i['description'])?></p></a></div>
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
<form action="#" method="post"> 
<div class="container text-center" style="margin-top: 185px;">
  <div class="row row-cols-2">
    <?php foreach($item as $i){ ?>

<div class="container text-center" >
  <div class="row">
    <div class="col" style="margin-top:10px;">
       <p class="text_<?= str_replace(" ","_", $i->description)?> text"><?= $i->description ?></p>
      <?php if ( $i->image_path != "" ): ?>
        <?php if ($i->with_option == 1): ?>
        <h5 id="qtycart<?= $i->id ?>" class="qtycart<?= $i->id ?>" style="font-size: 12px;float: right;background-color: red;border-radius: 20px;padding: 3px;color: white;">Cart Qty 0</h5>
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>" style="color: #198754;font-size: 13px;text-decoration: none;"><img src="<?= $i->image_path ?>" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;" /><br> <h5 style="font-size: 12px;">Customize</h5></a>
        <?php else: ?>

          <h5 id="qtycart<?= $i->id ?>" class="qtycart<?= $i->id ?>" style="font-size: 12px;float: right;background-color: red;border-radius: 20px;padding: 3px;color: white;">Cart Qty 0</h5>
          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><img src="<?= $i->image_path ?>" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;" /></a>
        <?php endif ?>
      <?php  else: ?>
        <h5 id="qtycart<?= $i->id ?>" class="qtycart<?= $i->id ?>" style="font-size: 12px;float: right;background-color: red;border-radius: 20px;padding: 3px;color: white;">Cart Qty 0</h5>
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><img src="<?= base_url();?>/assets/picture.png" alt="Red dot" style="width: 160px;height: 120px;border-radius: 20px;" /></a>
      <?php endif ?>
      
      <?php if ($i->harga_weekday == 0): ?>
        <h6>Free</h6>
      <?php else: ?>
        <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
      <?php endif ?>
      
    </div>
    <div class="col">
      <?php $cekpesan = $this->Item_model->cekpesan($i->no); ?>
      <?php foreach ($cekpesan as $c): ?>
        <h6 style="color: #198754;font-size: 13px;">Ordered Qty : <?= $c->qty ?></h6>
      <?php endforeach ?>
      
      <!-- <?php $options = $this->Item_model->option($i->no); ?>
      <?php if ($i->with_option == 1): ?>
        <a href="" style="text-decoration:none;" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><input type="text" name="pesan<?= $i->id ?>" id="pesan<?= $i->id ?>" class="form-control cari" placeholder="Customizable" style="border:1px solid #198754;padding-left: 20%;" disabled></a>
      <?php else: ?>
        <input type="hidden" name="pesan<?= $i->id ?>" id="pesan<?= $i->id ?>" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #198754;">
      <?php endif ?> -->
    <input type="hidden" name="pesan<?= $i->id ?>" id="pesan<?= $i->id ?>" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #198754;">
     
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
      <?php $options = $this->Item_model->option($i->no); ?>
      <?php if ($i->with_option == 1): ?>
        <button type="button" class="btn btn-success nambah<?= $i->id ?>" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>" style="padding-left: 7px;padding-right: 7px;">+</button>
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
<a href="<?php echo base_url() ?>Cart/home/<?= $nomeja ?>/Makanan/<?= $s ?>#<?= $s ?>" class="btn btn-outline-success" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;">Cart<i class="fa fa-cart-plus"></i> <b id="total_qty" align="right"><?= $total_qty;?></b></a>
<a href="<?php echo base_url('') ?>selforder/home/<?= $nomeja ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;">Back</a>
</form>
<?php foreach ($item as $i): ?>
<div class="modal fade" id="exampleModal<?= $i->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #198754;color: white;">
        <h5 class="modal-title" style="text-align: center;margin-left: 42%;" id="exampleModalLabel">Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="tutuptab<?= $i->id ?>()" id="close"></button>
      </div>
      <div class="modal-body">
        <?php if ( $i->image_path != "" ): ?>
        <img src="<?= $i->image_path ?>" alt="Red dot"  id="imgmodal" class="img-fluid" />
        <?php  else: ?>
          <img src="<?= base_url();?>/assets/picture.png" id="imgmodal" alt="Red dot" class="img-fluid" />
      <?php endif ?>
    <form action="#" method="post" id="input<?= $i->id ?>">
      <div class="card mb-3">
        
        <div class="card-body">

          <h5 id="description"><?= $i->description ?></h5><br>  
          <h6 id="product_info"><?= $i->product_info ?></h6>
          <?php if ($i->harga_weekday == 0): ?>
        <h6 id="harga">Free</h6>
        <input type="hidden" name="" value="0" id="harga<?= $i->id ?>">
      <?php else: ?>
        <h6 id="harga">Rp <?= number_format($i->harga_weekday) ?></h6>
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
              <li class="list-group-item"><h7 id="option"><?= $o->description ?></h7><input class="form-check-input" type="radio" name="pesan<?= $i->id ?>" value="<?= $o->description ?>" id="flexRadioDefault1" style="float: right"></li>
            <?php endforeach ?>
          <?php endif ?>
        </ul>
      </div>
      
      
      <div class="container text-center" style="display: flex;justify-content: center;">
      <div class="row row-cols-auto">
        <?php if ($i->with_option == 1): ?>
        <div class="col"><button type="button" class="btn btn-success minus<?= $i->id ?>" style="padding-left: 15px;padding-right: 15px;"> - </button></div>
        <div class="col"><input type="text" name="qty<?= $i->id ?>" id="qty<?= $i->id ?>"   class="form-control num<?= $i->id ?>" value="0" style="border:1px solid #198754;margin-bottom: 5px;color: #198754; width:43px;text-align: center; "  readonly></div>
        
        <div class="col"><button type="button" class="btn btn-success plus<?= $i->id ?>" style="padding-left: 15px;padding-right: 15px;">+</button></div>

      </div>
    </div>
    <!-- <button type="button" class="btn btn-success" style="padding-left: 45px;padding-right: 45px;" data-bs-dismiss="modal" aria-label="Close">Tambah Ke Keranjang <a id="total<?= $i->id ?>"></a></button> -->
    <button id="simpan<?= $i->id ?>" type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close"  onclick="simpanalert()">Tambah Ke Keranjang <a id="total<?= $i->id ?>"></a></button>
    <?php endif ?>
      </div>
      
</div>
      </div>
    </div>
  </div>
</div>
</form>

<?php endforeach ?>

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

  
<?php //endforeach ?>
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

</script>


 <script type="text/javascript">
  
  function OrderQty(tipe,id,no) {
    var itemCode = $('#no' + id).val();
    var desc = $('#nama' + id).val();
    var price = $('#harga' + id).val();
    var notes = $('#pesan' + id).val();
    $.ajax({
      type:'POST',
      data: {tipe: tipe,id: id,item_code: itemCode,description: desc,unit_price: price,extra_notes: notes,no: no},
      url: '<?= base_url().'ordermakanan/orderqty' ?>',
      dataType:'json',})
      .done(function (hasil){
        localStorage.setItem(no,hasil.new_qty);
        
        if(hasil.status == true){
          
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


<?php foreach($sub as $i): ?>
<script type="text/javascript">
  var<?= str_replace(" ","_", $i['description']) ?>= document.getElementById('<?= str_replace(" ","_", $i['description']) ?>');
  var all = document.getElementById('all');
  var rekomendasi = document.getElementById('rekomendasi');
  var item<?= str_replace(" ","_", $i['description']) ?> = document.querySelector('.test<?= str_replace(" ","_", $i['description']) ?>');
  var itemall = document.querySelector('.testall');
  var itemrekomendasi = document.querySelector('.testrekomendasi');

  $(document).ready(function() {
        itemChicken.classList.add('active');
    });

  Chicken.addEventListener("click", ()=>{
    itemChicken.classList.add('active');
    itemrekomendasi.classList.remove('active');
    itemBeef.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemSatay.classList.remove('active');
    itemBroth.classList.remove('active');
    itemVegetables.classList.remove('active');
    itemRice.classList.remove('active');
    itemPackage.classList.remove('active');
    itemSide_Dishes.classList.remove('active');
    itemFOOD.classList.remove('active');
    
  });
  Beef.addEventListener("click", ()=>{
    itemBeef.classList.add('active');
    itemChicken.classList.remove('active');
    itemSeafood.classList.remove('active');
    // itemall.classList.remove('active');
    itemrekomendasi.classList.remove('active');
    itemSatay.classList.remove('active');
    itemBroth.classList.remove('active');
    itemVegetables.classList.remove('active');
    itemRice.classList.remove('active');
    itemPackage.classList.remove('active');
    itemSide_Dishes.classList.remove('active');
    itemFOOD.classList.remove('active');
    
  });
  Seafood.addEventListener("click", ()=>{
    itemSeafood.classList.add('active');
    itemBeef.classList.remove('active');
    itemSatay.classList.remove('active');
    itemChicken.classList.remove('active');
    // itemall.classList.remove('active');
    itemrekomendasi.classList.remove('active');
    itemBroth.classList.remove('active');
    itemVegetables.classList.remove('active');
    itemRice.classList.remove('active');
    itemPackage.classList.remove('active');
    itemSide_Dishes.classList.remove('active');
    itemFOOD.classList.remove('active');
    
  });
  Satay.addEventListener("click", ()=>{
    itemSatay.classList.add('active');
    itemSeafood.classList.remove('active');
    itemBroth.classList.remove('active');
    itemBeef.classList.remove('active');
    itemChicken.classList.remove('active');
    // itemall.classList.remove('active');
    itemrekomendasi.classList.remove('active');
    itemVegetables.classList.remove('active');
    itemRice.classList.remove('active');
    itemPackage.classList.remove('active');
    itemSide_Dishes.classList.remove('active');
    itemFOOD.classList.remove('active');
    
  });
  Broth.addEventListener("click", ()=>{
    itemBroth.classList.add('active');
    itemSatay.classList.remove('active');
    itemVegetables.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemBeef.classList.remove('active');
    itemChicken.classList.remove('active');
    // itemall.classList.remove('active');
    itemrekomendasi.classList.remove('active');
    itemRice.classList.remove('active');
    itemPackage.classList.remove('active');
    itemSide_Dishes.classList.remove('active');
    itemFOOD.classList.remove('active');
    
  });
  Vegetables.addEventListener("click", ()=>{
    itemVegetables.classList.add('active');
    itemBroth.classList.remove('active');
    itemRice.classList.remove('active');
    itemSatay.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemBeef.classList.remove('active');
    itemChicken.classList.remove('active');
    // itemall.classList.remove('active');
    itemrekomendasi.classList.remove('active');
    itemPackage.classList.remove('active');
    itemSide_Dishes.classList.remove('active');
    itemFOOD.classList.remove('active');
    
  });
  Rice.addEventListener("click", ()=>{
    itemRice.classList.add('active');
    itemVegetables.classList.remove('active');
    itemPackage.classList.remove('active');
    itemBroth.classList.remove('active');
    itemSatay.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemBeef.classList.remove('active');
    itemChicken.classList.remove('active');
    // itemall.classList.remove('active');
    itemrekomendasi.classList.remove('active');
    itemSide_Dishes.classList.remove('active');
    itemFOOD.classList.remove('active');
    
  });
  Package.addEventListener("click", ()=>{
    itemPackage.classList.add('active');
    itemRice.classList.remove('active');
    itemSide_Dishes.classList.remove('active');
    itemVegetables.classList.remove('active');
    itemBroth.classList.remove('active');
    itemSatay.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemBeef.classList.remove('active');
    itemChicken.classList.remove('active');
    // itemall.classList.remove('active');
    itemrekomendasi.classList.remove('active');
    itemFOOD.classList.remove('active');
    
  });
  Side_Dishes.addEventListener("click", ()=>{
    itemSide_Dishes.classList.add('active');
    itemPackage.classList.remove('active');
    itemFOOD.classList.remove('active');
    itemRice.classList.remove('active');
    itemVegetables.classList.remove('active');
    itemBroth.classList.remove('active');
    itemSatay.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemBeef.classList.remove('active');
    itemChicken.classList.remove('active');
    // itemall.classList.remove('active');
    itemrekomendasi.classList.remove('active');
    
  });
  FOOD.addEventListener("click", ()=>{
    itemFOOD.classList.add('active');
    itemSide_Dishes.classList.remove('active');
    itemPackage.classList.remove('active');
    itemRice.classList.remove('active');
    itemVegetables.classList.remove('active');
    itemBroth.classList.remove('active');
    itemSatay.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemBeef.classList.remove('active');
    itemChicken.classList.remove('active');
    // itemall.classList.remove('active');
    itemrekomendasi.classList.remove('active');
    
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
  rekomendasi.addEventListener("click", ()=>{
    itemrekomendasi.classList.add('active');
    itemChicken.classList.remove('active');
    itemFOOD.classList.remove('active');
    itemSide_Dishes.classList.remove('active');
    itemPackage.classList.remove('active');
    itemRice.classList.remove('active');
    itemVegetables.classList.remove('active');
    itemBroth.classList.remove('active');
    itemSatay.classList.remove('active');
    itemSeafood.classList.remove('active');
    itemBeef.classList.remove('active');
    
    // itemall.classList.remove('active');
    
  });
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
<?php foreach ($item as $i ): ?>
  <script type="text/javascript">
      $('#simpan<?= $i->id ?>').on('click',function(){
          var input<?= $i->id ?> = $('#input<?= $i->id ?>').serialize();
          var qtya<?= $i->id ?> = document.getElementById("qty<?= $i->id ?>");
          var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
          
          $.ajax({
            url : '<?=base_url()?>Ordermakanan/add_cart',
            type : 'POST',
            data: input<?= $i->id ?>,
            dataType : 'JSON',
            success : function(data){
              var qty<?= $i->id ?> = localStorage.getItem('<?=$i->no?>')+qtya<?= $i->id ?>.value;
              console.log(qty<?= $i->id ?>);
              localStorage.setItem('<?= $i->no ?>',qty<?= $i->id ?> + qa);
             
            }
          })
      })
  // function simpanalert() {

  //          Swal.fire({
  //           title: 'Success!',
  //           text: 'Order Menu/Paket Berhasil Di Tambahkan Ke Dalam Cart',
  //           icon: 'success',
  //           confirmButtonColor: "#198754",
  //           confirmButtonText: 'OK'
  //           })

  //       }
  </script>
<?php endforeach ?>
<script type="text/javascript">
  var loading = document.getElementById('loading');
  var Beef = document.getElementById('Beef');
  var Seafood = document.getElementById('Seafood');
  var Satay = document.getElementById('Satay');
  var Broth = document.getElementById('Broth');
  var Vegetables = document.getElementById('Vegetables');
  var Rice = document.getElementById('Rice');
  var Package = document.getElementById('Package');
  var SideDishes = document.getElementById('Side_Dishes');
  var Food = document.getElementById('FOOD');
  var Chicken = document.getElementById('Chicken');
  var all = document.getElementById('all');
  var rekomendasi = document.getElementById('rekomendasi');

  setTimeout(berhenti,3500);


  function berhenti() {
    loading.style.display = "none";
   $("#loading").fadeOut();
   $("#load").fadeOut();
  }
  
  Beef.addEventListener("click", ()=>{
    loading.style.display = "flex";
   $("#loading").fadeIn();
   $("#load").fadeIn();
  });
  Seafood.addEventListener("click", ()=>{
    loading.style.display = "flex";
   $("#loading").fadeIn();
   $("#load").fadeIn();
  });
  Satay.addEventListener("click", ()=>{
    loading.style.display = "flex";
   $("#loading").fadeIn();
   $("#load").fadeIn();
  });
  Broth.addEventListener("click", ()=>{
    loading.style.display = "flex";
   $("#loading").fadeIn();
   $("#load").fadeIn();
  });
  Vegetables.addEventListener("click", ()=>{
    loading.style.display = "flex";
   $("#loading").fadeIn();
   $("#load").fadeIn();
  });
  Rice.addEventListener("click", ()=>{
    loading.style.display = "flex";
   $("#loading").fadeIn();
   $("#load").fadeIn();
  });
  Package.addEventListener("click", ()=>{
    loading.style.display = "flex";
   $("#loading").fadeIn();
   $("#load").fadeIn();
  });
    SideDishes.addEventListener("click", ()=>{
    loading.style.display = "flex";
   $("#loading").fadeIn();
   $("#load").fadeIn();
  });
  Food.addEventListener("click", ()=>{
    loading.style.display = "flex";
   $("#loading").fadeIn();
   $("#load").fadeIn();
  });
  Chicken.addEventListener("click", ()=>{
    loading.style.display = "flex";
   $("#loading").fadeIn();
   $("#load").fadeIn();
  });
  // all.addEventListener("click", ()=>{
  //   loading.style.display = "flex";
  //  $("#loading").fadeIn();

  // });
  rekomendasi.addEventListener("click", ()=>{
    loading.style.display = "flex";
   $("#loading").fadeIn();
  });
</script>
<?php foreach ($item as $i ): ?>
<script type="text/javascript">
  var simpan<?= $i->id ?> = document.getElementById('simpan<?= $i->id ?>');

if (localStorage.getItem('<?=$i->no?>')) {
  simpan<?= $i->id ?>.addEventListener("click", ()=>{
    location.reload();
    var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
    var qtypop<?= $i->id ?> = document.getElementById('qty<?= $i->id ?>');
    localStorage.setItem('<?= $i->no ?>', qa+parseInt(qtypop<?= $i->id ?>.value));
    console.log(window.location.toString());
//     setTimeout(function() {
//             if (window.location.toString() == "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Chicken#Chicken") {
//       var h = 'http://dev.3guru.com:5082/selforderMG/ordermakanan/menumakanan/Makanan/Chicken#Chicken';
//           // alert(h);
//           $('#konten').load(h);
//     }
// if (window.location.toString() == "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Chicken#Chicken") {
//       var h = 'http://dev.3guru.com:5082/selforderMG/ordermakanan/menumakanan/Makanan/Chicken#Chicken';
//           // alert(h);
//           $('#konten').load(h);
//     }
//         }, 500);
    
    
  });
}else{
  simpan<?= $i->id ?>.addEventListener("click", ()=>{
    location.reload();
    var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
    var qp<?= $i->id ?> = document.getElementById('qty<?= $i->id ?>');
    localStorage.setItem('<?= $i->no ?>', qp<?= $i->id ?>.value);
    if (localStorage.getItem('sim')) {
        var sim = parseInt(localStorage.getItem('sim'));
        localStorage.setItem('sim', parseInt(qp<?= $i->id ?>.value) + sim);
    }else{
        localStorage.setItem('sim', qp<?= $i->id ?>.value);  
    }
//     setTimeout(function() {
//             if (window.location.toString() == "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Chicken#Chicken") {
//       var h = 'http://dev.3guru.com:5082/selforderMG/ordermakanan/menumakanan/Makanan/Chicken#Chicken';
//           // alert(h);
//           $('#konten').load(h);
//     }
// if (window.location.toString() == "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/Chicken#Chicken") {
//       var h = 'http://dev.3guru.com:5082/selforderMG/ordermakanan/menumakanan/Makanan/Chicken#Chicken';
//           // alert(h);
//           $('#konten').load(h);
//     }
//         }, 500);
    
  });
}
</script>
<?php endforeach; ?>


<?php foreach ($item as $i ): ?>
<script type="text/javascript">
  var plus<?= $i->id ?> = document.querySelector(".plus<?= $i->id ?>");
  var nambah<?= $i->id ?> = document.querySelector(".nambah<?= $i->id ?>");
  var minus<?= $i->id ?> = document.querySelector(".minus<?= $i->id ?>");
  var num<?= $i->id ?> = document.querySelector(".num<?= $i->id ?>");
  var harga<?= $i->id ?> = document.querySelector("#harga<?= $i->id ?>");
  var total<?= $i->id ?> = document.querySelector("#total<?= $i->id ?>");
  var qtycart<?= $i->id ?> = document.querySelector("#qtycart<?= $i->id ?>");
  var tq = document.querySelector("#total_qty");
  var tqh = document.querySelector("#total_qty_header");

  // if (localStorage.getItem('<?= $i->no ?>') != null) {
  //   // num<?= $i->id ?>.value = localStorage.getItem('<?= $i->no ?>');
  //   // total<?= $i->id ?>.innerHTML = localStorage.getItem('H<?= $i->no ?>');
  //   // var a<?= $i->id ?> =localStorage.getItem('<?= $i->no ?>');
  // }else{
    
  // }

  // num<?= $i->id ?>.value = 0;
    var a<?= $i->id ?> = localStorage.getItem('qty<?=$i->no?>');
    
    if (localStorage.getItem('<?=$i->no?>')) {
      var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
      var cek =parseInt(localStorage.getItem('angka<?=$i->no?>'))+parseInt(a<?= $i->id ?>); console.log(cek);
        nambah<?= $i->id ?>.addEventListener("click", ()=>{
         a<?= $i->id ?>++;
         if (localStorage.getItem('qty<?=$i->no?>')) {
         num<?= $i->id ?>.value = localStorage.getItem('qty<?=$i->no?>');
         qtycart<?= $i->id ?>.innerHTML = a<?= $i->id ?>+1;
         tq.innerHTML = a<?= $i->id ?>+1;
         tqh.innerHTML = a<?= $i->id ?>+1;
         }else{
          
              num<?= $i->id ?>.value = 1;
          qtycart<?= $i->id ?>.innerHTML = a<?= $i->id ?>;
          tq.innerHTML = a<?= $i->id ?>;
          tqh.innerHTML = a<?= $i->id ?>;
         
          
         }
        
        var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * 1;
        total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?> ;
        // localStorage.setItem('<?= $i->no ?>',a<?= $i->id?> + qa);
        localStorage.setItem('qty<?= $i->no ?>',1);
        localStorage.setItem('angka<?= $i->no ?>',a<?= $i->id?>);
         // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
         // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
         // // console.log(hasil); 
        });
    }else{
      nambah<?= $i->id ?>.addEventListener("click", ()=>{
         a<?= $i->id ?>++;
         if (localStorage.getItem('<?=$i->no?>') && localStorage.getItem('qty<?=$i->no?>') && localStorage.getItem('angka<?=$i->no?>')) {
         num<?= $i->id ?>.value = localStorage.getItem('qty<?=$i->no?>');
         qtycart<?= $i->id ?>.innerHTML = localStorage.getItem('qty<?=$i->no?>');
         tq.innerHTML = localStorage.getItem('qty<?=$i->no?>');
         tqh.innerHTML = localStorage.getItem('qty<?=$i->no?>');
         }else{
          num<?= $i->id ?>.value = 1;
          qtycart<?= $i->id ?>.innerHTML = 1;
          tq.innerHTML = 1;
          tqh.innerHTML = 1;
         }
         var cek =a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1; console.log(cek);
        var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * 1;
        total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;
        localStorage.setItem('qty<?= $i->no ?>',1);
        localStorage.setItem('angka<?= $i->no ?>',a<?= $i->id?>);
         // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
         // // console.log(hasil); 
        });
    }
    if (localStorage.getItem('<?=$i->no?>')) {
      var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
      var a<?= $i->id ?> = localStorage.getItem('qty<?=$i->no?>');
      var angka = parseInt(localStorage.getItem('angka<?=$i->no?>'));
      plus<?= $i->id ?>.addEventListener("click", ()=>{
   a<?= $i->id ?>++;
   
  var cek =a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1; console.log(cek); //cek
  num<?= $i->id ?>.value = cek;
  var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * cek;
  total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;
  qtycart<?= $i->id ?>.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
  tq.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
  tqh.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
  // localStorage.setItem('<?= $i->no ?>',a<?= $i->id?> + qa);
   // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
   // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
   // // console.log(hasil); 
  });
    }else{
      var angka = localStorage.getItem('angka<?=$i->no?>');
      var a<?= $i->id ?> = localStorage.getItem('qty<?=$i->no?>');
  plus<?= $i->id ?>.addEventListener("click", ()=>{
   a<?= $i->id ?>++;
   num<?= $i->id ?>.value = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;
   var cek =a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1; console.log(cek); //cek
  var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * cek;
  total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;

  qtycart<?= $i->id ?>.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
  tq.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
  tqh.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;

   // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
   // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
   // // console.log(hasil); 
  });
}
if (localStorage.getItem('<?=$i->no?>')) {
      var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
  minus<?= $i->id ?>.addEventListener("click", ()=>{
   
   var inputValueA = num<?= $i->id ?>.value;
        // console.log(inputValue);
        if (inputValueA >= 1) {
          a<?= $i->id ?>--;
   num<?= $i->id ?>.value = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;
   var cek =a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1; console.log(cek); //cek
   var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * cek;
   total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;
   qtycart<?= $i->id ?>.innerHTML = a<?= $i->id ?>;
   tq.innerHTML = a<?= $i->id ?>;
   tqh.innerHTML = a<?= $i->id ?>;
   localStorage.setItem('<?= $i->no ?>',qa+a<?= $i->id?>);
   // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
   // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
   // // console.log(hasil);
   }  
  });
}else{
  minus<?= $i->id ?>.addEventListener("click", ()=>{
   
   var inputValueA = num<?= $i->id ?>.value;
        // console.log(inputValue);
        if (inputValueA >= 1) {
          a<?= $i->id ?>--;
   num<?= $i->id ?>.value = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;
   var cek =a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1; console.log(cek); //cek
   var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * cek;
   total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;
   qtycart<?= $i->id ?>.innerHTML = cek;
   tq.innerHTML = cek;
   tqh.innerHTML = cek;
   // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
   // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
   // // console.log(hasil);
   }  
  });
}

</script>
  
<?php endforeach ?>

<?php foreach ($item as $i ): ?>
<script type="text/javascript">
  var jumlah<?=$i->id?> = document.querySelector('#jumlah<?=$i->id?>');
  var qtycart<?=$i->id?> = document.querySelector('#qtycart<?=$i->id?>');
  if (localStorage.getItem('<?=$i->no?>')) {
         // jumlah<?=$i->id?>.value = localStorage.getItem('<?=$i->no?>');
         jumlah<?=$i->id?>.value = 0;
         qtycart<?=$i->id?>.innerHTML = "Cart Qty "+localStorage.getItem('<?=$i->no?>');
         }else{
          jumlah<?=$i->id?>.value = 0;
        }

  
</script>
<?php foreach ($item as $i): ?>
  <script type="text/javascript">
    var qc<?= $i->id ?> = document.querySelector(".qtycart<?= $i->id ?>");
    var qr<?= $i->id ?> = document.getElementById("qty<?= $i->id ?>");
    function tutuptab<?= $i->id ?>(){
    qr<?= $i->id ?>.value = 0;
      var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
    if (localStorage.getItem('<?=$i->no?>')) {
    qc<?= $i->id ?>.innerHTML = localStorage.getItem('<?=$i->no?>');
    tq.innerHTML = localStorage.getItem('<?=$i->no?>');
    tqh.innerHTML = localStorage.getItem('<?=$i->no?>')
    // localStorage.setItem('<?= $i->no ?>',qa - 1);
  }else{
    qc<?= $i->id ?>.innerHTML = 0;
    tq.innerHTML = 0;
    tqh.innerHTML = 0;
  }
    
  }
  </script>
  
<?php endforeach ?>
<?php endforeach ?>

<?php foreach ($item as $i ): ?>
  <script type="text/javascript">
  
  $(document).ready(function(){
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
    },3000);
    
  });
</script>
<?php endforeach ?>

  <?php $this->load->view('template/footer') ?>
