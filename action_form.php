<?php

echo "<pre>";
print_r($_POST);
print_r($_FILES);
$uploads_dir = 'uploads';
foreach ($_FILES as $file) {
    if ($file['error']){
        echo 'Error';
        exit;
    }

$filename = $file['name'];
$tmp_name = $file['tmp_name'];

move_uploaded_file($tmp_name, "$uploads_dir/$filename");
}
echo "<pre>";

