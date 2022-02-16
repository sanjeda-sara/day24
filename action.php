<?php

require_once 'vendor/autoload.php';
use App\Classes\FileUpload;


if(isset($_GET['pages'])) {
    if ($_GET['pages'] == 'file-upload') {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'file') {
        include 'pages/fileUpload.php';
    }
    elseif ($_GET['pages'] == 'view-students') {
        $fileUpload = new FileUpload();
        $students = $fileUpload -> getAllStudentInfo();
        include 'pages/viewStudents.php';
    }
}

elseif (isset($_POST['btn']))
{
    $fileUpload = new FileUpload($_FILES, $_POST);
    $message    = $fileUpload->index();
    include 'pages/fileUpload.php';

}


