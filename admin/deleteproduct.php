<?php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
  $id = $_GET["id"];
  
  // Load the shopItemsData array from Data.js
  $dataFile = file_get_contents("C:/xampp/htdocs/pro/Light/Data.js");
  echo $dataFile;
  
  // Extract the shopItemsData array from the file
  $shopItemsDataStart = strpos($dataFile, '[');
  $shopItemsDataEnd = strrpos($dataFile, ']');
  if ($shopItemsDataStart === false || $shopItemsDataEnd === false) {
    die("Error: shopItemsData array not found in C:/xampp/htdocs/pro/Light/Data.js");
  }
  $shopItemsDataJson = substr($dataFile, $shopItemsDataStart, $shopItemsDataEnd - $shopItemsDataStart + 1);

  // Parse the shopItemsData array as JSON
  $shopItemsData = json_decode($shopItemsDataJson, true);
  if (json_last_error() !== JSON_ERROR_NONE) {
    die("Error: invalid JSON format in shopItemsData array");
  }

  // Search for the item with the matching ID and remove it
  foreach ($shopItemsData as $key => $item) {
    if ($item["id"] == $id) {
      unset($shopItemsData[$key]);
      break;
    }
  }


  // Rewrite the modified shopItemsData array to Data.js
  $dataFile = substr($dataFile, 0, $shopItemsDataStart) . json_encode(array_values($shopItemsData), JSON_PRETTY_PRINT) . substr($dataFile, $shopItemsDataEnd + 1);
  file_put_contents("C:/xampp/htdocs/pro/Light/Data.js", $dataFile);
}

?>
