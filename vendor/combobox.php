<html>
    <head>
        <title>Cara Menampilkan Data pada Form Berdasarkan Pilihan Combobox</title>
    </head>
    <body>
        <h3>Menampilkan Data pada Form Berdasarkan Pilihan Combo Box</h3>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
            <p>Pilih Pegawai:</p>
            <select name="id_peg" style="width:200px;">
               <?php
                include "koneksi.php";
                //query menampilkan nip pegawai ke dalam combobox
                $query    =mysqli_query($conn, "SELECT * FROM tb_pegawai ORDER BY id_peg");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['id_peg'];?>"><?php echo $data['nip'];?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Pilih">
            <a href="./form.php">Refresh</a>
        </form>
        <h4>Data Pegawai</h4>
        <?php
        if (isset($_GET['id_peg'])) {
            $id_peg=$_GET['id_peg'];

            //menampilkan data pegawai berdasarkan pilihan combobox ke dalam form
            $tamPeg=mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE id_peg='$id_peg'");
            $tpeg = mysqli_fetch_array($tamPeg);
        
        ?>
        <form action="#" method="POST">
        <table border="0" cellpadding="2">
            <tr>
                <td width="100">NIP</td>
                <td width="280">: <input type="text" name="nip" value="<?php echo $tpeg['nip']; ?>" /></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" value="<?php echo $tpeg['nama']; ?>" /></td>
            </tr>
            <tr>
                <td>Unit Kerja</td>
                <td>: <input type="text" name="unit_kerja" value="<?php echo $tpeg['unit_kerja']; ?>" /></td>
            </tr>
            <tr>
                <td>Gol</td>
                <td>: <input type="text" name="gol" value="<?php echo $tpeg['gol']; ?>" /></td>
            </tr>
            <tr>
                <td>Pangkat</td>
                <td>: <input type="text" name="pangkat" value="<?php echo $tpeg['pangkat']; ?>" /></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>: <input type="text" name="jabatan" value="<?php echo $tpeg['jabatan']; ?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td>  <input type="submit" value="Save"></td>
            </tr>
        </table>
        </form>
        <?php
        }
        ?>
    </body>
</html>