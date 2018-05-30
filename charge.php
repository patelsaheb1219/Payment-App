<?php
    require_once('vendor/autoload.php');
    
    \Stripe\Stripe::setApiKey('sk_test_YEn3rHJXuTCnMPya2OqkhaqI');

    // Sanaize  POST array
    $_POST = filter_var_array($_POST , FILTER_SANITIZE_STRING);

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $token = $_POST['stripeToken'];

    // Create customer in Stripe
    $customer = \Stripe\Customer::create(array(
        "email" => $email,
        "source" => $token
    ));

    // Charge Customer
    $charge = \Stripe\Charge::create(array(
        "amount" => 5000,
        "currency" => "usd",
        "description" => "Intro To React Course",
        "customer" => $customer->id
    ));

    // Redirect to success
    header('Location: success.php?tid='.$charge->id.'& product='.$charge->description );
?>