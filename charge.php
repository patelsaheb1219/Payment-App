<?php
    require_once('vendor/autoload.php');
    require_once('config/db.php');
    require_once('index.php');

    \Stripe\Stripe::setApiKey('sk_test_YEn3rHJXuTCnMPya2OqkhaqI');

    // Sanaize  POST array
    $POST = filter_var_array($_POST , FILTER_SANITIZE_STRING);

    $fname = $POST['fname'];
    $lname = $POST['lname'];
    $email = $POST['email'];
    $token = $POST['stripeToken'];


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

    $id = $charge->customer;    

    $idd = $charge->id;
    $customer = $charge->customer;
    $product = $charge->description;
    $amount = $charge->amount;
    $currency = $charge->currency;
    $status = $charge->status;

    $sql = "INSERT INTO customers( id,fname,lname,email) VALUES ( '$id' , '$fname' , '$lname' , '$email')";

    $query=mysqli_query($conn,$sql);

    $sq = "INSERT INTO transactions ( id, customer_id , product , amount , currency , status ) VALUES ( '$idd' , '$customer' , '$product' , '$amount' , '$currency' , '$status')";

    $que = mysqli_query($conn,$sq);
    // Redirect to success
    
    header('Location: success.php?tid='.$charge->id.'& product='.$charge->description );
?>