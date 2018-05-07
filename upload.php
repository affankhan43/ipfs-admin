<?php
include 'config.php';

    $formData = preg_replace('/\s+/', '', $_POST['formdata']);
    $sql = "UPDATE form_builder SET form_fields = '$formData' WHERE id = '1' ";
    $query = mysqli_query($db, $sql);
    echo 'success';
