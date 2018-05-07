<?php
include 'config.php';

    if(isset($_POST['action']) && $_POST['action'] == 'saveForm'){
      $formData = preg_replace('/\s+/', '', $_POST['formdata']);
      $sql = "UPDATE form_builder SET form_fields = '$formData' WHERE id = '1' ";
      $query = mysqli_query($db, $sql);
      echo 'success';
    }

    if(isset($_POST['action']) && $_POST['action'] == 'getFormData'){
      $sql = "SELECT form_fields WHERE id = '1' LIMIT 1";
      $query = mysqli_query($db, $sql);
      $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
      echo $result['form_fields'];
    }
