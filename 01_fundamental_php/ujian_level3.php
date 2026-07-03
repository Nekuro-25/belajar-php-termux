<?php

// 1. Inisialisasi Data Input
$gajiPokok = 4500000;
$tunjanganTransport = 500000;

// 2. Proses Hitung (Logika Bisnis)
$gajiKotor = $gajiPokok + $tunjanganTransport;
$pajakPenghasilan = 10 / 100 * $gajiKotor;
$gajiBersih = $gajiKotor - $pajakPenghasilan;

// 3. Tampilkan Output (Format Slip Gaji Bulanan)
echo "=== SLIP GAJI KARYAWAN ===\n";
echo "Gaji Pokok          : Rp " . number_format($gajiPokok, 0, ',', '.') . "\n";
echo "Tunjangan Transport : Rp " . number_format($tunjanganTransport, 0, ',', '.') . "\n";
echo "Pajak Penghasilan   : Rp " . number_format($pajakPenghasilan, 0, ',', '.') . "\n";
echo "---------------------------\n";
echo "Gaji Kotor          : Rp " . number_format($gajiKotor, 0, ',', '.') . "\n";
echo "Gaji Bersih         : Rp " . number_format($gajiBersih, 0, ',', '.') . "\n";
