<?php

// if (isset($_POST['action']) && $_POST['action'] == 'saveForm'){\
//
//   $formdata = $_POST['formdata'];
 if($_SERVER["REQUEST_METHOD"] == "POST") {
   formData = $_POST['formData'];

   echo "success";

 }

// }
