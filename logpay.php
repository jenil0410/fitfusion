<?php
include("dbconnect.php"); // Assuming this file establishes $conn

if(isset($_POST['submit1'])) {
    $name = $_POST['cf-name'];
    $mail = $_POST['cf-email'];
    $phone = $_POST['cf-phone'];
    $message = $_POST['cf-message'];

    // Insert data into database
    $data = "INSERT INTO membership (name, email, phone, msg) VALUES ('$name', '$mail', '$phone', '$message')";
    $result = mysqli_query($conn, $data);

    if ($result) {
        // Data inserted successfully, now create Stripe Checkout session
        require_once 'vendor/autoload.php';

        $stripe_secret_key = "sk_test_51P8OpGSDwP7n5YlWGQDoz5AxdbyyEn6KsyJ1wCMTqveyXBBWfHgb6WnJXnlymdjw63gVxLWW0pLX1XYbSItzhNbA00p5Ph5mul";

        \Stripe\Stripe::setApiKey($stripe_secret_key);

        $checkout_session = \Stripe\Checkout\Session::create([
            "payment_method_types" => ["card"],
            "mode" => "payment",
            "success_url" => "http://localhost/fitfusion/register.php",
            "cancel_url" => "http://localhost/fitfusion/index.php",
            "line_items" => [
                [
                    "price_data" => [
                        "currency" => "inr",
                        "unit_amount" => 150000, // 1500 INR in paise
                        "product_data" => [
                            "name" => "Membership"
                        ],
                    ],
                    "quantity" => 1,
                ],
            ],
        ]);

        // Redirect to Stripe Checkout session URL
        http_response_code(303);
        header("Location: " . $checkout_session->url);
        exit; // Ensure script stops execution after redirection
    } else {
        echo 'Insert failed: ' . mysqli_error($conn); // Output error message if insertion fails
    }
}
?>
