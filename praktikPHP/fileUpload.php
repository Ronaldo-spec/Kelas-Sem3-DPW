<?php
$target_path="uploads/";

$target_path=$target_path.basename(
    $_FILES['uploadedfile']['name']
);

if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)) {
    echo "The File " . basename($_FILES['uplaodedfile']['name'])."has been uploaded";
    
} else {
    echo "There was an error uploading the file, please try again";
}

?>