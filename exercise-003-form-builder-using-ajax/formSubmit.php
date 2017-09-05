<?php
    $formData = $_POST;
    $storageFile = getcwd()."/js/json/submit-types/".$formData["destinationFile"];
    unset($formData["destinationFile"]);
    $jsonData = json_encode($formData, JSON_PRETTY_PRINT);
    print_r($storageFile);
    print_r($jsonData);
    file_put_contents($storageFile, $jsonData, FILE_APPEND);
    header("location:http://172.24.145.152/asp-lamp-training/exercise-003-form-builder-using-ajax/form-builder.html");
