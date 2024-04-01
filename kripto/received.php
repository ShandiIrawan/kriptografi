<?php
if(isset($_POST['enkripsi'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $chippering = "AES-128-CTR";
    $opsi = 0;
    $data_iv = "1234567891234567";
    $data_key = "khamamy";

    $hasil_id = openssl_encrypt($id, $chippering, $data_key, $opsi, $data_iv);
    $hasil_nama = openssl_encrypt($nama, $chippering, $data_key, $opsi, $data_iv);

}else{
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $chippering = "AES-128-CTR";
    $opsi = 0;
    $data_iv = "1234567891234567";
    $data_key = "khamamy";

    $hasil_id = openssl_decrypt($id, $chippering, $data_key, $opsi, $data_iv);
    $hasil_nama = openssl_decrypt($nama, $chippering, $data_key, $opsi, $data_iv);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Keamanan Informatika</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="icon" href="dist/img/00.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <hr><h4>Hasil dari pemrosesan</h4><hr>
    <label for="">Key Plaintext</label>
    <input type="text" class="form-control" value="<?php echo $id ?>">
    <label for="">Pesan Plaintext</label>
    <input type="text" class="form-control" value="<?php echo $nama ?>"><br>
    <h6>Hasil proses</h6>
    <label for="">Chippertext Key</label>
    <input type="text" class="form-control" value="<?php echo $hasil_id ?>">
    <label for="">Chippertext Pesan</label>
    <input type="text" class="form-control" value="<?php echo $hasil_nama ?>"><br>
    <button type="reset" class="btn btn-danger" onclick="window.history.go(-1)">Kembali</button>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

