<?php
// Tanggal dan waktu maintenance dimulai
$maintenance_start = strtotime('2025-08-01 08:00:00'); // Tanggal dan waktu mulai maintenance (format: Y-m-d H:i:s)
// Durasi maintenance dalam detik
$maintenance_duration = 3600; // 1 jam (3600 detik)

// Perhitungan waktu berkurang
$current_time = time();
$time_left = $maintenance_start + $maintenance_duration - $current_time;

// Cek apakah dalam masa maintenance atau tidak
if ($current_time >= $maintenance_start && $current_time < ($maintenance_start + $maintenance_duration)) {
    // Dalam masa maintenance
    $hours_left = floor($time_left / 3600);
    $minutes_left = floor(($time_left % 3600) / 60);
    $seconds_left = $time_left % 60;
    
    echo "Maaf, situs ini sedang dalam perawatan. Kami akan kembali dalam waktu:";
    echo "<br>";
    echo "$hours_left jam, $minutes_left menit, dan $seconds_left detik.";
} else {
    // Diluar masa maintenance
    echo "Situs ini sedang beroperasi dengan normal. Terima kasih atas pengertian Anda.";
}
?>
