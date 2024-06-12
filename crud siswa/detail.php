<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Jika dataproduk diklik maka
if (isset($_POST['dataproduk'])) {
    $output = '';

    // mengambil data produk dari id yang berasal dari dataproduk
    $sql = "SELECT * FROM produk WHERE id = '" . $_POST['dataproduk'] . "'";
    $result = mysqli_query($koneksi, $sql);

    $output .= '<div class="table-responsive">
                        <table class="table table-bordered">';
    foreach ($result as $row) {
        $output .= '<tr align="center">
                            <td colspan="2"><img src="img/' . $row['gambar'] . '" width="50%"></td>
                        </tr>
                        <tr>
                            <th width="40%">id</th>
                            <td width="60%">' . $row['id'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Nama Produk</th>
                            <td width="60%">' . $row['nama_produk'] . '</td>
                        </tr>
                        
                        <tr>
                            <th width="40%">Deskripsi</th>
                            <td width="60%">' . $row['deskripsi'] . '</td>
                        </tr>
                        ';
    }
    $output .= '</table></div>';
    // Tampilkan $output
    echo $output;
}
