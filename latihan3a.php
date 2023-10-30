<?php
function ganti_style($tulisan, $kelas) {
    $style = 'font-size: 28px; color: #1A0547; font-weight: bold; font-style: italic;';
    return "<span class='$kelas' style='$style'>$tulisan</span>";
}

$tulisan = "hello world";
$kelas = "ganti_style";
echo ganti_style($tulisan, $kelas);

?>