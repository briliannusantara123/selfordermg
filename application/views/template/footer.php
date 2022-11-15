<script src="<?= base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>/assets/bootstrap/js/jQuery3.5.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        </script>
  </body>
</html>