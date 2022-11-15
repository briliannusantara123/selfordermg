<?php $this->load->view('template/head') ?>
    <nav class="bg-success">
  <div class="container">
    <p style="text-align: center;padding-top: 13px;color: white;">Confirmation Order</p>
  </div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<br>
<div class="text-center"><h5>Anda Akan Melakukan Order :</h5></div>
<br>
<form action="<?= base_url() ?>cart/order/<?= $no_meja ?>" method="POST">
<div class="container ">
  <table class="table table-hover" >
  <thead style="background-color: #198754;color: white;">
    <tr>
      <th scope="col">Menu Order</th>
      <th scope="col">Qty</th>
      <th scope="col">Harga</th>
      <th scope="col">Pesan</th>
      <th scope="col">Total Harga</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($item as $i): ?>
    <tr>
      <th scope="row"><p><?= $i['nama'] ?></p></th>
      <input type="hidden" name="nama[]" value="<?= $i['nama'] ?>">
      <td><p style="text-align: left;"><?= $i['qty'] ?></p></td>
      <input type="hidden" name="qty[]" value="<?= $i['qty'] ?>">
      <td><p>Rp <?= number_format($i['harga']); ?></p></td>
      <input type="hidden" name="harga[]" value="<?= $i['harga'] ?>">
      <td><p><?= $i['pesan'] ?></p></td>
      <input type="hidden" name="pesan[]" value="<?= $i['pesan'] ?>">
      <input type="hidden" name="no[]" id="harga" value="<?= $i['item_code'] ?>" class="form-control harga">
      <td><p>Rp <?= number_format($i['harga'] * $i['qty']); ?></p></td>
    </tr>
    <?php endforeach ?>
    <tr>
      <td colspan="1" class="table-active"></td>
      <th colspan="2" class="table-active">Total Order :</th>
      <td colspan="2" class="table-active">Rp <?= number_format($total) ?></td>
    </tr>
  </tbody>
</table>
  
  </div>
  
</div>
<br>

<div class="text-center"><h5>Apakah Anda Yakin ?</h5></div>

<div class="container text-center">
  <div class="row">
    <div class="col">
      <button onclick="order()" type="submit" class="btn btn-outline-success" style="padding-top: 32px;padding-bottom: 32px;padding-left: 50px;padding-right: 50px;margin-top: 30px;">
  Ya, Order
</button>
    </div>
    
    <div class="col">
    	<a href="<?= base_url() ?>cart/batal/<?= $no_meja ?>/<?= $cek ?>/<?= $sub ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;margin-top: 30px;">Tunggu, Kembali</a>
      
    </div>
    </form>
  </div>
</div>

<!-- Modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
  <script type="text/javascript">
    function order(){
  localStorage.clear();
}
  </script>
</html>