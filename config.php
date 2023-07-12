<?php 
 
// Product Details  
// Minimum amount is $0.50 US  
$productName = "Codex Demo Product";  
$productID = "DP12345";  
$productPrice = 55; 
$currency = "usd"; 
  

define('STRIPE_API_KEY', 'pk_test_51NSt8IE72v05zDQbUgbccpfP04pPOzib3j0WijAcvPRwT59bbOXmCWPjtf2z5pgzuARQOaToideFBI5aLG3V3x8900ErPbN0GD'); 
define('STRIPE_PUBLISHABLE_KEY', 'sk_test_51NSt8IE72v05zDQbJNltILNwrjFF4dO9proZXVYkVGraoQKqdZ4ZJdEgmXP7Oioz7UjhL2ghRHngD15iS0grG1Va000JUDDaGc'); 
define('STRIPE_SUCCESS_URL', 'https://../payment-success.php'); //Payment success URL 
define('STRIPE_CANCEL_URL', 'https://../payment-cancel.php'); //Payment cancel URL 
    
// Database configuration    
define('DB_HOST', 'localhost');   
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', '');   
define('DB_NAME', 'stripe'); 
 
?>