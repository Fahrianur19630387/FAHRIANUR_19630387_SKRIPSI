 
<?php 

$page = isset($_GET['p']) ? $_GET['p'] : "";

if ($page == 'formpesan') {
    include_once "formpesan.php";
} else if ($page=="") {
    include_once "main.php";
}  else if ($page=="material") {
    include_once "material.php";
}  else if ($page=="material-m1") {
    include_once "material-m1.php";
}  else if ($page=="material-m2") {
    include_once "material-m2.php";
}  else if ($page=="material-m3") {
    include_once "material-m3.php";
}  else if ($page=="material-m4") {
    include_once "material-m4.php";
}  else if ($page=="material-m5") {
    include_once "material-m5.php";    
} else if ($page=="tambahmaterial") {
    include_once "tambahmaterial.php";
} else if ($page=="tambahmaterial-m1") {
    include_once "tambahmaterial-m1.php";
} else if ($page=="tambahmaterial-m2") {
    include_once "tambahmaterial-m2.php";
} else if ($page=="tambahmaterial-m3") {
    include_once "tambahmaterial-m3.php";
} else if ($page=="tambahmaterial-m4") {
    include_once "tambahmaterial-m4.php";
} else if ($page=="tambahmaterial-m5") {
    include_once "tambahmaterial-m5.php";
} else if ($page=="user") {
    include_once "user.php";
}  else if ($page=="edit") {
    include_once "editmaterial.php";
}  else if ($page=="edit-m1") {
    include_once "edit-m1.php";
}  else if ($page=="edit-m2") {
    include_once "edit-m2.php";
}  else if ($page=="edit-m3") {
    include_once "edit-m3.php";
}  else if ($page=="edit-m4") {
    include_once "edit-m4.php";
}  else if ($page=="edit-m5") {
    include_once "edit-m5.php";
} else if ($page=="hapusmaterial-m1") {
    include_once "hapusmaterial-m1.php";
} else if ($page=="hapusmaterial-m2") {
    include_once "hapusmaterial-m2.php";
} else if ($page=="hapusmaterial-m3") {
    include_once "hapusmaterial-m3.php";
} else if ($page=="hapusmaterial-m4") {
    include_once "hapusmaterial-m4.php";
} else if ($page=="hapusmaterial-m5") {
    include_once "hapusmaterial-m5.php";
} else if ($page=="hapususer") {
    include_once "hapususer.php";
} else if ($page=="edituser") {
    include_once "edituser.php";
} else if ($page=="tambahuser") {
    include_once "tambahuser.php";
} else if ($page=="cetakstok") {
    include_once "halcetak.php";
} else if ($page=="editpesanminta") {
    include_once "editpesanminta.php";
} else if ($page=="tidaksetuju") {
    include_once "tidaksetuju.php";
} else if ($page=="cetakpesanan") {
    include_once "cetakpesanan.php";
}  else if ($page=="formpengajuan") {
  include_once "formpengajuan.php";
} else if ($page=="tidaksetujupengajuan") {
    include_once "tidaksetujupengajuan.php";
} else if ($page=="lap_keluar") {
    include_once "lap_keluar.php";
} else if ($page=="lap_masuk") {
    include_once "lap_masuk.php";
} else if ($page=="datapermintaan") {
    include_once "datapermintaan.php";
}  else if ($page=="detilpermintaan") {
    include_once "detilpermintaan.php";
}  else if ($page=="datapengeluaran") {
    include_once "datapengeluaran.php";
}  else if ($page=="laporanpengeluaran") {
    include_once "laporanpengeluaran.php";
} else if ($page=="detil_datapengeluaran") {
    include_once "detil_datapengeluaran.php";
}  else if ($page=="laporanpengeluaran2") {
    include_once "laporanpengeluaran2.php";
}  else if ($page=="laporanpengeluaran3") {
    include_once "laporanpengeluaran3.php";
 } else if ($page=="laporanpengeluaran4") {
    include_once "laporanpengeluaran4.php";
}  else if ($page=="laporanpengeluaran5") {
    include_once "laporanpengeluaran5.php";
}   else if ($page=="laporanpemasukan") {
    include_once "laporanpemasukan.php";
}  else if($page == "detillaporanpemasukan"){
    include_once "detillaporanpemasukan.php";
}  else if ($page=="laporanpemasukan2") {
    include_once "laporanpemasukan2.php";
}   else if ($page=="datapemasukan") {
    include_once "datapemasukan.php";
} else if ($page=="detilpengajuan") {
    include_once "detilpengajuan.php";
}  else if ($page=="datapengajuan") {
    include_once "datapengajuan.php";
}else if ($page=="rekapitulasipermintaan") {
    include_once "rekapitulasipermintaan.php";
}else if ($page=="rekapitulasipengajuan") {
    include_once "rekapitulasipengajuan.php";
}else if ($page=="detil_lap_permintaan") {
    include_once "detil_lap_permintaan.php";
}else if ($page=="detil_lap_pengajuan") {
    include_once "detil_lap_pengajuan.php";
}else if ($page=="data_vaksin") {
    include_once "data_vaksin.php";
}else if ($page=="tambah_vaksin") {
    include_once "tambah_vaksin.php";
}else if ($page=="edit_vaksin") {
    include_once "edit_vaksin.php";
}else if ($page=="formaset") {
    include_once "formpengajuanaset.php";
}else if ($page=="grafik_obat") {
    include_once "grafik_obat.php";
}else if ($page=="laporan_material") {
    include_once "laporan_material.php";
}else if ($page=="laporan_obat") {
    include_once "laporan_obat.php";
}else if ($page=="laporan_asset") {
    include_once "laporan_asset.php";
}else if ($page=="laporan_pakan") {
    include_once "laporan_pakan.php";
}else if ($page=="laporan_ayam") {
    include_once "laporan_ayam.php";
}else if ($page=="laporan_produksi_telur") {
    include_once "laporan_produksi_telur.php";
}else if ($page=="cetak_material") {
    include_once "cetak_material.php";
}else if ($page=="material-pr") {
    include_once "material-pr.php";
}else if ($page=="tambahproduksi") {
    include_once "tambah_produksi.php";
}else if ($page=="hapuspr") {
    include_once "hapuspr.php";
}else if ($page=="grafik_obat_vaksin") {
    include_once "grafik_obat_vaksin.php";
}else if ($page=="formpemeliharaan") {
    include_once "formpemeliharaan.php";
}else if ($page=="grafik_obat_vaksin1") {
    include_once "grafik_obat_vaksin1.php";
}else if ($page=="databarangmasuk") {
    include_once "databarangmasuk.php";
}else if ($page=="datamasukan") {
    include_once "datamasukan.php";
}else if ($page=="edit-produksi") {
    include_once "edit-produksi.php";
}else if ($page=="data_produksi_telur") {
    include_once "data_produksi_telur.php";
}else if ($page=="edit_produksi_telur") {
    include_once "edit_produksi_telur.php";
}else if ($page=="hapus_produksi_telur") {
    include_once "hapus_produksi_telur.php";
}else if ($page=="detil_lap_pengajuanstaff") {
    include_once "detil_lap_pengajuanstaff.php";
}else if ($page=="laporanadmin") {
    include_once "laporanadmin.php";
}else if ($page=="cetak_barang_id") {
    include_once "cetak_barang_id.php";
}else if ($page=="datapemeliharaan") {
    include_once "datapemeliharaan.php";
}else if ($page=="form_pemeliharaan_asset") {
    include_once "form_pemeliharaan_asset.php";
}else if ($page=="data_pemeliharaan") {
    include_once "data_pemeliharaan.php";
}else if ($page=="tambah_pemeliharaan") {
    include_once "tambah_pemeliharaan.php";
}else if ($page=="laporan_grafik_produksi") {
    include_once "laporan_grafik_produksi.php";
}else if ($page=="grafik_produksi") {
    include_once "grafik_produksi.php";
}else if ($page=="hapus_pemeliharaan") {
    include_once "hapus_pemeliharaan.php";
}else if ($page=="detil_laporan_pemeliharaan") {
    include_once "detil_laporan_pemeliharaan.php";
}else if ($page=="rekapitulasi_pemeliharaan_barang") {
    include_once "rekapitulasi_pemeliharaan_barang.php";
}else if ($page=="rekapitulasi_pemeliharaan_barang") {
    include_once "rekapitulasi_pemeliharaan_barang.php";
}else if ($page=="laporan_status_pemeliharaan") {
    include_once "laporan_status_pemeliharaan.php";
}else if ($page=="laporan_grafik_pakan") {
    include_once "laporan_grafik_pakan.php";
}else if ($page=="grafik_vaksin") {
    include_once "grafik_vaksin.php";
}else if ($page=="detilmasukan") {
    include_once "detilmasukan.php";
}else if ($page=="datamasuk") {
    include_once "datamasuk.php";
}




?>

