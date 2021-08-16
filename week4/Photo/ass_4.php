<?php
if(isset($_POST)){
    session_start();



    echo "<pre>";
    print_r($_POST);
    print_r($_FILES['file']);
    
    
    echo "</pre>";

    $namePost = $_POST['name'];
    $image = $_FILES['file'];
    $imagetmp = $image['tmp_name'];
    $imageName = $image['name'];

    $Extision = pathinfo($imageName , PATHINFO_EXTENSION);

    $imageNewName = "$namePost--" . uniqid() .".$Extision" ; 


    move_uploaded_file($imagetmp,"uploadeImage/$imageNewName");


    $dir = "uploadeImage";
    echo "<pre>";

    $a  = scandir($dir);
    print_r($a);

    echo "</pre>";

    header("location:index.php");


}












?>