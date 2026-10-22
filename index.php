<?php
$saldoAwal = 10000000;
$bunga = 0.03;
$bulan = 11;
$saldoAkhir = $saldoAwal * $bunga * $bulan + $saldoAwal; 
echo "Saldo akhir setelah" .$bulan. "bulan adalah : Rp" .$saldoAkhir. ",-";
?>

