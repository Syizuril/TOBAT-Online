<?php
if (!function_exists('rp')){
function rp($angka){
    $format_rupiah = "Rp " . number_format($angka,2,',','.');
    return $format_rupiah;
 }
}
 ?>
