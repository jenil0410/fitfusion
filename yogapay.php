<?php
require_once 'vendor/autoload.php';

$stripe_secret_key = "sk_test_51P8OpGSDwP7n5YlWGQDoz5AxdbyyEn6KsyJ1wCMTqveyXBBWfHgb6WnJXnlymdjw63gVxLWW0pLX1XYbSItzhNbA00p5Ph5mul";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "payment_method_types" => ["card"],
    "mode" => "payment",
    "success_url" => "http://localhost/fitfusion/home.php",
    "cancel_url" => "http://localhost/fitfusion/home.php",
    "line_items" => [
        [
            "price_data" => [
                "currency" => "inr",
                "unit_amount" => 79000,
                "product_data" => [
                    "name" => "Yoga Membership"
                ],
            ],
            "quantity" => 1,
        ],
    ],
]);

http_response_code(303);
header("Location: " . $checkout_session->url);
?>
