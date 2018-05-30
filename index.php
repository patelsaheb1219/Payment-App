<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pay Page</title>
</head>
<body>
    <div class="container">
    <h2 class="my-4 text-center">Intro To React Course [$50]</h2>
        <form action="./charge.php" method="post" id="payment-form">  
            <div class="form-row">
                <input type="text" class="form-control mb-3 StripeElement--empty" placeholder="First Name" name="fname">
                <input type="text" class="form-control mb-3 StripeElement--empty" placeholder="Last Name" name="lname">
                <input type="text" class="form-control mb-3 StripeElement--empty" placeholder="Email" name="email">
                <div id="card-element" class="form-control">
                <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
            </div>

            <button>Submit Payment</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./javascript/charge.js"></script>
</body>
</html>