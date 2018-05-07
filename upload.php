<?php

// if (isset($_POST['action']) && $_POST['action'] == 'saveForm'){\
//
//   $formdata = $_POST['formdata'];
    $formData = preg_replace('/\s+/', '', $_POST['formData']);
    echo $formData;


// }
