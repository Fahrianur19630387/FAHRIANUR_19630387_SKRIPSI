 
<?php 
  
    $page = isset($_GET['p']) ? $_GET['p'] : "";

    if ($page == 'formpesan') {
        include_once "formpesan.php";
    } else if ($page=="") {
        include_once "main.php";
    } else if ($page=="datapesanan") {
        include_once "datapesanan.php";
    }  else if ($page=="edit") {
        include_once "editpesan.php";
    } else if ($page=="hapus") {
        include_once "hapuspesan.php";
    } else if($page == "cetakpesanan"){
        include_once "cetakpesan.php";
    } else if($page == "detil"){
        include_once "detilpesan.php";
    } else if($page == "material"){
        include_once "material.php";
    }else if($page == "formbarangmasuk"){
        include_once "formbarangmasuk.php";
    }else if($page == "datamasuk"){
        include_once "datamasuk.php";
    }else if($page == "detilmasuk"){
        include_once "detilbarangmasuk.php";
    }else if($page == "material-m1"){
        include_once "material-m1.php";
    }else if($page == "material-m2"){
        include_once "material-m2.php";
    }else if($page == "material-m3"){
        include_once "material-m3.php";
    }else if($page == "material-m4"){
        include_once "material-m4.php";
    }else if($page == "material-m5"){
        include_once "material-m5.php";
    }else if($page == "detil_lap_permintaan"){
        include_once "detil_lap_permintaan.php";
    }else if($page == "rekapitulasipermintaan"){
        include_once "rekapitulasipermintaan.php";
    }else if($page == "detil_lap_pengajuan"){
        include_once "detil_lap_pengajuan.php";
    }else if($page == "rekapitulasipengajuan"){
        include_once "rekapitulasipengajuan.php";
    }else if($page == "detil_laporan_pemeliharaan"){
        include_once "detil_laporan_pemeliharaan.php";
    }else if($page == "rekapitulasi_pemeliharaan_barang"){
        include_once "rekapitulasi_pemeliharaan_barang.php";
    }else if($page == "laporan_status_pemeliharaan"){
        include_once "laporan_status_pemeliharaan.php";
    }else if($page == "laporan_produksi_telur"){
        include_once "laporan_produksi_telur.php";
    }else if($page == "laporanadmin"){
        include_once "laporanadmin.php";
    }else if($page == "laporan_grafik_produksi"){
        include_once "laporan_grafik_produksi.php";
    }else if($page == "laporan_grafik_pakan"){
        include_once "laporan_grafik_pakan.php";
    }else if($page == "grafik_vaksin"){
        include_once "grafik_vaksin.php";
    }

 ?>
 
