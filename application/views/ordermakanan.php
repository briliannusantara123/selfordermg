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
.button:hover {
  background-color: #198754; /* Green */
  color: white;
}
/*.Ayam {
  background-color: #198754; /* Green */
  color: white;
}
*/
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
  overflow-x: auto; 
}
.wrapper .item{
  
  text-align: center;
  background-color: #ddd;
  margin-right: 2px;
}
.modal {
   margin-top: 210px;
   top: 10px;
   right: 100px;
   bottom: 0;
   left: 0;
   z-index: 10040000;
   overflow: auto;
   overflow-y: auto;
}
.cari::-webkit-input-placeholder{
  color: #198754;
}
 
/*support mozilla*/
.cari:-moz-input-placeholder{
  color: #198754;
}
.text_Telor_Bumbu_Bali{
  margin-bottom: 40px;
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
.Ayam{
   background-image: url("<?= base_url() ?>/assets/icon/ayam.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Sapi{
   background-image: url("<?= base_url() ?>/assets/icon/sapi.png");
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
.Sate{
   background-image: url("<?= base_url() ?>/assets/icon/sate.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Kuah{
   background-image: url("<?= base_url() ?>/assets/icon/kuah.png");
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
.Nasi{
   background-image: url("<?= base_url() ?>/assets/icon/nasi.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.Paket{
   background-image: url("<?= base_url() ?>/assets/icon/paket.png");
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
    </style>

    <nav class="bg-success" style="z-index: 10000;position: fixed;width: 100%;">
  <div class="container">
    <p style="text-align: center;padding-top: 13px;color: white;"> Order Makanan</p>
  </div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<br>

<header style="display: flex;width:100%; position: fixed;z-index: 100000;margin-top: 30px;background-color: white;">

<div class="wrapper" style="background-color: white;">
 <?php foreach($sub as $i){ ?>
    <div class="item">
      <a href="<?= base_url() ?>ordermakanan/menu/Makanan/<?= $i['description'] ?>/<?= $nomeja ?>" class="button <?= str_replace(" ","_", $i['description']) ?>" style="text-decoration:none"><p style="margin-top: 60px;margin-bottom: 1px;"><?= str_replace(" ","_", $i['description'])?></p></a></div>
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
<form action="<?= base_url() ?>ordermakanan/search/<?= $nomeja ?>" method="post">
  <div class="container text-center" style="margin-top: 150px;display: flex;width:100%; position: fixed;z-index: 100000;">
  <div class="row">
    <div class="col-10"><input type="text" name="keyword" class="form-control cari"  placeholder="Cari Menu Makanan..." style="border:1px solid #198754;"></div>
    <div class="col-2"><button type="submit" class="btn btn-success">Cari</button></div>
  </div>
</div>
</form>
<form action="<?= base_url() ?>ordermakanan/addcart/<?= $nomeja ?>" method="post"> 
<div class="container text-center" style="margin-top: 185px;">
  <div class="row row-cols-2">
    <?php foreach($item as $i){ ?>

<div class="container text-center">
  <div class="row">
    <div class="col" style="margin-top:10px;">
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
    <div class="col">
      <BUTTON type="button" class="btn btn-success inc"  style="font-size: 12px">+</BUTTON>
      <input type="hidden" name="nama[]" id="nama" value="<?= $i->description ?>" class="form-control nama">
      <input type="hidden" name="harga[]" id="harga" value="<?= $i->harga_weekday ?>" class="form-control harga">
      <input type="text" name="qty[]" id="qty" value="0"  class="form-control" style="border:1px solid #198754;margin-top: 5px;margin-bottom: 5px;color: #198754; ">
      <input type="hidden" name="no[]" id="harga" value="<?= $i->no ?>" class="form-control harga">
      <BUTTON type="button" class="btn btn-success dec"  style="font-size: 12px">-</BUTTON>
    </div>
  </div>
</div>
      <input type="text" name="pesan[]" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #198754;margin-top: 5px;">
    </div>
  </div>
</div>

<?php } ?>

  </div>
</div>   
<br>
<br>
<div class="container text-center">
<button type="submit" class="btn btn-outline-success" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;">
  Order
</button>
<a href="<?php echo base_url('') ?>selforder/home/<?= $nomeja ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;">Kembali</a>
</form>
<br>
<br>
</div>
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
  <script type="text/javascript">

    var ib = document.getElementsByClassName('inc');
    var db = document.getElementsByClassName('dec');
    var qty = document.getElementsByClassName('qty');
    var cek = document.getElementsByClassName('cek');
    // console.log(ib);
    // console.log(db);

    for(var i = 0; i < ib.length; i++){
      var btn = ib[i];
      btn.addEventListener('click',function(event){
        var btnclicked = event.target;
        // console.log(btnclicked);
        var qty = btnclicked.parentElement.children[3];
        console.log(qty);
        var inputValue = qty.value;
        // console.log(inputValue);
        var newValue = parseInt(inputValue) + 1;
        // console.log(newValue);
        qty.value = newValue;
        window.onload=document.getElementById("cek");
    var element_jam = document.getElementById("cek");
    element_jam.value = newValue;
      });
    }

    for(var i = 0; i < db.length; i++){
      var btn = db[i];
      btn.addEventListener('click',function(event){
        var btnclicked = event.target;
        // console.log(btnclicked);
        var qty = btnclicked.parentElement.children[3];
        
        var inputValue = qty.value;
        // console.log(inputValue);
        if (inputValue >= 1) {
        var newValue = parseInt(inputValue) - 1;
        // console.log(newValue);
        qty.value = newValue;
        window.onload=document.getElementById("cek");
    var element_jam = document.getElementById("cek");
    element_jam.value = newValue;
        
        }
        
      });
    }


    // const plus = document.querySelector(".plus37"),
    // minus = document.querySelector(".minus37"),
    // num = document.querySelector(".num37");

    // let a = 0;

    // plus.addEventListener("click", ()=>{
    //  a++;
    //  num.innerText = a;
    //  console.log(a);
    // });

    // minus.addEventListener("click", ()=>{
    //  if (a >= 1) {
    //   a--;
    //   num.innerText = a;
    //  console.log(a);
    //  }
      
    // });

  </script>
  <?php $this->load->view('template/footer') ?>