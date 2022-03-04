<?php
include "assets/session_admin.php";
include "assets/koneksi.php";
$yearsnow		= date("Y");
$id_pilih		= $_GET['id'];

					$jml_data11 	= "SELECT * FROM pilih_jabatan where id_pilih='$id_pilih'";
					$query1			= mysqli_query($conn, $jml_data11);
        			$data1 			= mysqli_fetch_array($query1);
					
					$id_peserta		= $data1['id_peserta'];
					$id_periode		= $data1['id_periode'];
					$id_jabatan		= $data1['id_jabatan'];
					$tgl_daftar		= $data1['tgl'];
					
					$sql_peserta1	= "select * from peserta where id_peserta='$id_peserta'";
					$mysql_peserta1	= mysqli_query ($conn, $sql_peserta1);
					$data_peserta1	= mysqli_fetch_array($mysql_peserta1);
					$id_peserta 	= $data_peserta1['id_peserta'];
					$gelar_dpn	 	= $data_peserta1['gelar_dpn'];
					$nama		 	= $data_peserta1['nama'];
					$gelar_blk	 	= $data_peserta1['gelar_blk'];
					$jabatan	 	= $data_peserta1['jabatan'];
					$golongan	 	= $data_peserta1['golongan'];
					$skpd		 	= $data_peserta1['skpd'];
					$instansi	 	= $data_peserta1['instansi'];
					$no_telp	 	= $data_peserta1['no_telp'];
					$nip		 	= $data_peserta1['nip'];
					
					$sql_peserta2	= "select * from jabatan where id_jabatan='$id_jabatan' ";
					$mysql_peserta2	= mysqli_query ($conn, $sql_peserta2);
					$data_peserta2	= mysqli_fetch_array($mysql_peserta2);
					$nama_jabatan	= $data_peserta2['nama_jabatan'];
					$esselon		= $data_peserta2['esselon'];
	
	
		if ($gelar_blk =='')
		{
		$namalengkap	= $gelar_dpn;
		$namalengkap	.= ' ';
		$namalengkap	.= $nama;
		}
		else
		{
		$namalengkap	= $gelar_dpn;
		$namalengkap	.= ' ';
		$namalengkap	.= $nama;
		$namalengkap	.= ', ';
		$namalengkap	.= $gelar_blk;
		}





?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="material-pro/src/assets/images/icon_kota.png">
    <title><?php include "pages/tittle.php";?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <link href="material-pro/src/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="material-pro/dist/js/pages/chartist/chartist-init.css" rel="stylesheet">
    <link href="material-pro/src/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="material-pro/src/assets/libs/c3/c3.min.css" rel="stylesheet">
    <link href="material-pro/src/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="material-pro/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include "pages/header.php";?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
               <?php include "pages/user-profile.php"; ?>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <?php include "pages/sidebar-admin.php"?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Data File Peserta</h3>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">File</a></li>
                        <li class="breadcrumb-item active">File Persyaratan</li>
                    </ol>
                </div>
               
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
               <?php include "file-peserta-detail-isi.php"; ?>
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
             <?php include "pages/footer.php"; ?>
   
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <?php include "pages/left-sidebar.php"; ?>
   
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="material-pro/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="material-pro/src/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="material-pro/src/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="material-pro/dist/js/app.min.js"></script>
    <script src="material-pro/dist/js/app.init.js"></script>
    <script src="material-pro/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="material-pro/src/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="material-pro/src/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="material-pro/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="material-pro/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="material-pro/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- chartist chart -->
    <script src="material-pro/src/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="material-pro/src/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="material-pro/src/assets/libs/d3/dist/d3.min.js"></script>
    <script src="material-pro/src/assets/libs/c3/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="material-pro/dist/js/pages/dashboards/dashboard1.js"></script>
	 <!--This page plugins -->
    <script src="material-pro/src/assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="material-pro/dist/js/pages/datatable/custom-datatable.js"></script>
    <script src="material-pro/dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>
</html>