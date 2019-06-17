
<?php 
$dir = './uploaded_files/';
 
$files1 = scandir($dir);
echo '<pre>';
    print_r($files1);
echo '</pre>';
 
$files2 = scandir($dir, 1); // sorting: 0 = ascending & 1 = descending
echo '<pre>';
    print_r($files2);
echo '</pre>';



