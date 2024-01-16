<?php
  session_start();
  error_reporting(0);
  $baseUrl = "http://localhost:8080/sistemklinik/";
  if (!isset($_SESSION['userkode'])) {
    header("Location:" . $baseUrl ."login.php"); 
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charse                                                                                                                                                                                                                                                                 t="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistem Klinik</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
 <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
 
</head>
<body class="sidebar-icon-only">
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="assets/images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
          <!-- <div class="container"> -->
            <div class="row">
              <div class="col-sm-12">
                <h3>Sistem Klinik</h3>
              </div>  
            </div>  
          <!-- </div>   -->
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count" id="countPasien"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <!-- <img src="assets/images/faces/face28.jpg" alt="profile"/> -->
              <h3 style="margin-top:10px">
                <i class="mdi mdi-account" style="width:100px"></i>
              </h3>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <!-- <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a> -->
              <a class="dropdown-item" id="btnLogOut">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <!-- <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li> -->
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
   
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" id="menuMaster" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-cube "></i>
              <span class="menu-title">Master</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item" id="menuDokter"> 
                  <a class="nav-link" href="?page=dokter">Dokter</a>
                </li>
                <li class="nav-item"  id="menuPetugas"> 
                  <a class="nav-link" href="?page=petugas">Petugas</a>
                </li>
                <li class="nav-item"  id="menuPasien"> 
                  <a class="nav-link" href="?page=pasien">Pasien</a>
                </li>                
                <li class="nav-item" id="menuSupplier"> 
                  <a class="nav-link" href="?page=supplier">Supplier</a>
                </li>
                <li class="nav-item" id="menuSigna"> 
                  <a class="nav-link" href="?page=signa">Signa</a>
                </li>
                <li class="nav-item" id="menuObat"> 
                  <a class="nav-link" href="?page=obat">Obat</a>
                </li>
                <li class="nav-item" id="menuTindakan"> 
                  <a class="nav-link" href="?page=tindakan">Tindakan</a>
                </li>
                <li class="nav-item" id="menuUser"> 
                  <a class="nav-link" href="?page=user">User</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- petugas kasir -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="mdi mdi-account-plus"></i>
              <span class="menu-title">Pendaftaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="?page=pendaftaran">Form Pendaftaran</a></li>
              </ul>
            </div>
          </li>
           
          <li class="nav-item">
             <span class="count-indicator-info btn-danger" id="countInfo" ></span>
           
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="mdi mdi-pharmacy"></i>
              <span class="menu-title">Rekam Medis</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="?page=kunjunganpasien">Kunjungan Pasien</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
             <span class="count-indicator-info btn-danger" id="countInfoPembayaran" ></span>
            <a class="nav-link" data-toggle="collapse" href="#pembayaran" aria-expanded="false" aria-controls="icons">
              <i class="mdi mdi-cash-multiple"></i>
              <span class="menu-title">Pembayaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pembayaran">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="?page=pembayaran">Pembayaran</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <!-- partial -->
      <div cslass="main-panel" style="width:100%">
          <div class="content-wrapper">
            <?php include "pages.php" ?>
          </div>   

          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.
            </div>
          </footer>
      </div>   
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <style>
     .sidebar-icon-only .sidebar .nav .nav-item .nav-link {
        display: block;
        padding-left: 1.2rem;
        padding-right: 1.2rem;
        text-align: center;
        position: static;
    }
    .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator .count {
        position: absolute;
        left: 36%;
        width: 100%;
        height: 20px;
        border-radius: 100%;
        background: #4B49AC;
        top: 1px;
        color: white;
        padding: 1px;
        font-size: 8px;
        border: 1px solid #ffffff;
    }

    .count-indicator-info {
      position: absolute;
      left: 70%;
      width: 22px;
      height: 22px;
      border-radius: 100%; 
      top: 1px;
      color: white;
      padding-left: 7px;
      padding-top: 1px;
      font-size: 10px;
      border: 1px solid #ffffff;
      z-index: 999;
    }
  </style>
  <script>
    $(document).ready(function(){
      var baseurl = 'http://localhost:8080/sistemklinik/';
      
      var currentPage = document.location.search;
      $("#menuMaster").attr("aria-expanded", "false");
      $("#ui-basic").attr("class", "collapse");

      if(currentPage == "?page=dokter")
      {
        $("#menuMaster").attr("aria-expanded", "true");
        $("#menuMaster").attr("class", "nav-link");
        $("#ui-basic").attr("class", "collapse show");
      }

      $("#btnLogOut").click(function(e){
                $.ajax({
                    type: "POST",
                    url: baseurl + "process/logout.php",  
                    dataType: "json",
                    success: function (message) {
                        debugger;
                        if (message != "success") {
                            alert(message);
                        }
                        else {
                           window.location.href = baseurl + 'login.php';
                        }

                    },
                    error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
                })            
         
      });
                function loadPasien(){
                  $.ajax({
                    type: "GET",
                    url: baseurl + "process/cekperiksapasien.php",  
                    dataType: "json",
                    success: function (data) { 
                        var obj =  data.data[0];
                        $("#countPasien").empty();
                        $("#countInfo").empty();
                        if(obj.JumlahPasien == 0){
                          $("#notificationDropdown").hide();
                          $("#countInfo").hide();
                          
                        }else{
                          $("#notificationDropdown").show();
                          $("#countInfo").show();
                          $("#countPasien").append(obj.JumlahPasien);
                          $("#countInfo").append(obj.JumlahPasien);
                        }

                    },
                    error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
                  })
                }

                function loadPembayaranPasien(){
                  $.ajax({
                    type: "GET",
                    url: baseurl + "process/cekperiksapasien.php",  
                    dataType: "json",
                    success: function (data) { 
                        var obj =  data.data[0]; 
                        $("#countInfoPembayaran").empty();
                        if(obj.JumlahPasienPembayaran == 0){ 
                          $("#countInfoPembayaran").hide();
                          
                        }else{ 
                          $("#countInfoPembayaran").show(); 
                          $("#countInfoPembayaran").append(obj.JumlahPasienPembayaran);
                        }

                    },
                    error: function (xhr, data) {
                        console.log(xhr.responseText);
                    }
                  })
                }

                $("#countInfo").hide();
                $("#countInfoPembayaran").hide();
                
                if('<?= $_SESSION['jabatan']?>' == 'Dokter'){ 
                  loadPasien(); 
                }

                if('<?= $_SESSION['jabatan']?>' == 'Petugas'){ 
                  loadPembayaranPasien(); 
                }
                
          setInterval(function() {

            if('<?= $_SESSION['jabatan']?>' == 'Dokter'){ 
               loadPasien();  
            }

            if('<?= $_SESSION['jabatan']?>' == 'Petugas'){ 
                  loadPembayaranPasien(); 
            }
          }, 2000);

    })
  </script>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script> s

  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="assets/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assetss/js/dashboard.js"></script>
  <script src="assets/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
