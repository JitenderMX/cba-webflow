<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffebd8;
        }

        .thank-row {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .thank-row img {
            width: 100%;
            max-width: 300px;
        }

        .thank-text {
            color: #891a4b;
            text-align: center;
            font-family: Montserrat, sans-serif;
            font-size: 40px;
            font-weight: 500;
            line-height: 1.2em;
            margin-top: 20px;
        }

        .thank-text.red {
            color: red;
            text-align: center;
            font-family: Montserrat, sans-serif;
            font-size: 40px;
            font-weight: 500;
            line-height: 1.2em;
            margin-top: 20px;
        }

        @media screen and (max-width:562px) {
            .thank-text {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $brand = $_POST["brand"];
    $city = $_POST["city"];
    $message = $_POST["message"];

    $to = "celebrationsbyanjalli@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $body = "Name: $name\nPhone: $phone\nEmail: $email\nBrand: $brand\nCity: $city\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        ?>
        <div class="container-xxl">
            <div class="thank-row">
                <div class="thank-container">
                    <div class="thank-img"><img src="images/new-logo.png" alt="" class="w-100"></div>
                    <div class="thank-text">
                        <div class="th-h1 text-center mt-3">Success! Your message has been sent.</div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="container-xxl">
            <div class="thank-row">
                <div class="thank-container">
                    <div class="thank-text red">
                        <div class="th-h1 text-center mt-3">Oops! Something went wrong. Please try again later.</div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
}
?>
</body>

</html> 