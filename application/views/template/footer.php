<script src="<?= base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>/assets/bootstrap/js/jQuery3.5.1.min.js"></script>
<script src="<?= base_url();?>/assets/sweetalert/dist/sweetalert2.all.min.js"></script>
  <script>
        <?php if( $this->session->flashdata('success') ) {?>
            var isi = <?= json_encode($this->session->flashdata('success'))?>;
            Swal.fire({
            title: 'Success!',
            text: isi,
            icon: 'success',
            confirmButtonColor: "#198754",
            confirmButtonText: 'OK'
            })
         <?php } ?>
         <?php if( $this->session->flashdata('error') ) {?>
            var isi = <?= json_encode($this->session->flashdata('error'))?>;
            Swal.fire({
            title: 'Notification!',
            text: isi,
            icon: 'warning',
            confirmButtonColor: "#198754",
            confirmButtonText: 'OK'
            })
         <?php } ?>
         <?php if( $this->session->flashdata('notfound') ) {?>
            var isi = <?= json_encode($this->session->flashdata('notfound'))?>;
            Swal.fire({
            title: 'Notification!',
            text: isi,
            icon: 'warning',
            confirmButtonColor: "#198754",
            confirmButtonText: 'OK'
            },setTimeout(function(){ 

              window.location.href = "http://dev.3guru.com:5082/selforderMG/ordermakanan/menu/Makanan/chicken/";

            }, 2000))
         <?php } ?>
         <?php if( $this->session->flashdata('notfoundminuman') ) {?>
            var isi = <?= json_encode($this->session->flashdata('notfoundminuman'))?>;
            Swal.fire({
            title: 'Notification!',
            text: isi,
            icon: 'warning',
            confirmButtonColor: "#198754",
            confirmButtonText: 'OK'
            },setTimeout(function(){ 

            window.location.href = "http://dev.3guru.com:5082/selforderMG/orderminuman/menu/Minuman/Cold%20Drink/";

          }, 2000))
         <?php } ?>
        </script>
        <script type="text/javascript">
    var loading = document.getElementById('loading');

    window.addEventListener("load", (event) => {
  
  if (  navigator.onLine == "Offline") {
    load = document.querySelector('#loadingkonek');
    load.classList.add('loadingkonek');
    text = document.querySelector('#textloading');
    text.classList.add('textloading');
    $('#textloading').prop('hidden', false);
    pre = document.querySelector('#preloader');
    pre.classList.add('preloader');
  }else{
    load = document.querySelector('#loadingkonek');
    load.classList.remove('loadingkonek');
    text = document.querySelector('#textloading');
    $('#textloading').prop('hidden', true);
    pre = document.querySelector('#preloader');
    pre.classList.remove('preloader');
  }
});
      window.addEventListener("offline", (event) => {
  
  
  load = document.querySelector('#loadingkonek');
    load.classList.add('loadingkonek');
    text = document.querySelector('#textloading');
    text.classList.add('textloading');
    $('#textloading').prop('hidden', false);
    pre = document.querySelector('#preloader');
    pre.classList.add('preloader');
});

window.addEventListener("online", (event) => {
  
  load = document.querySelector('#loadingkonek');
    load.classList.remove('loadingkonek');
    text = document.querySelector('#textloading');
    $('#textloading').prop('hidden', true);
    pre = document.querySelector('#preloader');
    pre.classList.remove('preloader');
});
  </script>
  </body>
</html>

