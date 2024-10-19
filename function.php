<?php
function tambah($a, $b){
    $hasil = $a + $b;
    echo "Hasil penjumlahan $a + $b = $hasil";
}
tambah(40,50);
echo "<br />";
tambah(60,100);
echo "<hr />";
function kosong(){
    $nilai = 50 * 80;
    echo "Hasil perkalian = $nilai";
}
kosong();
echo "<hr />";
function kali($c,$d){
    $hasilkali = $c * $d;
    $hasil_kali = 50 * $c;
    return $hasil_kali;
}
echo kali(20,40);
echo "<hr />";
function FormatRupiah($angka){
    $rupiah = "Rp. ".number_format(10000,"2",",",".");
    return $rupiah;
}
$namabarang1 = "Sepatu";
$namabarang2 = "Baju";
$hargabarang1 = 50000;
$hargabarang2 = 80000;
$jlhterjual1 = 100;
$jlhterjual2 = 300;
$total1 = $hargabarang1 * $jlhterjual1;
$total2 = $hargabarang2 * $jlhterjual2;
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Jumlah Terjual</th>
        <th>Total Harga</th>
</tr>
<tr>
    <td>1</td>
    <td><?= $namabarang1;?></td>
    <td><?= FormatRupiah($hargabarang1);?></td>
    <td><?= $jlhterjual1;?></td>
    <td><?= FormatRupiah($total1);?></td>
</tr>
<tr>
    <td>2</td>
    <td><?= $namabarang2;?></td>
    <td><?= FormatRupiah($hargabarang2);?></td>
    <td><?= $jlhterjual2;?></td>
    <td><?= FormatRupiah($total2);?></td>
</tr>
</table>
 