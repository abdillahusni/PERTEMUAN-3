<?php

$penjualan = [
    ["nama" => "Produk A", "harga" => 10000, "jumlah" => 5],
    ["nama" => "Produk B", "harga" => 7500, "jumlah" => 10],
    ["nama" => "Produk C", "harga" => 12000, "jumlah" => 8]
];


function hitungTotalPenjualan($penjualan) {
    $total = 0;
    foreach ($penjualan as $produk) {
        $total += $produk['harga'] * $produk['jumlah'];
    }
    return $total;
}


function hitungJumlahTerjual($penjualan) {
    $jumlah = 0;
    foreach ($penjualan as $produk) {
        $jumlah += $produk['jumlah'];
    }
    return $jumlah;
}

$totalPenjualan = hitungTotalPenjualan($penjualan);
$jumlahTerjual = hitungJumlahTerjual($penjualan);


?>
<h2>Sistem Pencatatan Data Penjualan</h2>
<table border ="1">
    <tr>
        <th>Nama</th>
        <th>Harga Per Produk</th>
        <th>Jumlah Terjual</th>
        <th>Total</th>
    </tr>
    <?php foreach ($penjualan as $produk): ?>
        <tr>
            <td><?php echo $produk['nama']; ?></td>
            <td><?php echo number_format($produk['harga'], 0, ',', '.'); ?></td>
            <td><?php echo $produk['jumlah']; ?></td>
            <td><?php echo number_format($produk['harga'] * $produk['jumlah'], 0, ',', '.'); ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="2">Total Penjualan</td>
        <td><?php echo $jumlahTerjual; ?></td>
        <td><?php echo number_format($totalPenjualan, 0, ',', '.'); ?></td>
    </tr>
</table>