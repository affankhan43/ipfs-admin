<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'config.php';

    if(isset($_POST['action']) && $_POST['action'] == 'saveForm'){
      $formData = $_POST['formdata'];
      $formData1 = json_decode($formData, true);
      $formData1[] = array("type"=>"text","subtype"=>"email","required"=>true,"label"=>"Email","placeholder"=>"Email For Notification","name"=>"notify_email_129","className"=>"green form-control");
      //$formData1[] = array("type"=>"radio-group","required"=>true,"label"=>"Type","name"=>"app-type-126","values"=>array(array("label"=>"Public","value"=>"public","selected"=>true),array("label"=>"Private","value"=>"private")));
      $formData = json_encode($formData1);
      $sql = "UPDATE form_builder SET form_fields = '$formData' WHERE id = '1' ";
      $query = mysqli_query($db, $sql);
      echo 'success';
    }

    if(isset($_POST['action']) && $_POST['action'] == 'getFormData'){
      $sql = "SELECT form_fields FROM form_builder WHERE id = '1' LIMIT 1";
      $query = mysqli_query($db, $sql);
      $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
      echo $result['form_fields'];
    }

    if(isset($_POST['action']) && $_POST['action'] == 'changeFee'){
      $newFee = $_POST['new_fee']*100000000;
      $sql = "UPDATE message_fees SET fees = '$newFee' WHERE id = '1' LIMIT 1";
      $query = mysqli_query($db, $sql);
      $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
      echo 'success';
    }
