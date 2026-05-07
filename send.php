<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "csmopeoplefoundation@gmail.com";
    $subject = "New Donation Submission";

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'] ?? $_POST['custom_amount'];
    $utr = $_POST['utr'];
    $payment_date = $_POST['payment_date'];
    $message = $_POST['message'];

    $body = "New Donation Details:\n\n";
    $body .= "Name: $fullname\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Amount: ₹$amount\n\n";
    $body .= "UTR: $utr\n";
    $body .= "Date: $payment_date\n\n";
    $body .= "Message:\n$message";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "<h2 style='text-align:center;color:green;'>✅ Donation Submitted Successfully</h2>";
    } else {
        echo "<h2 style='text-align:center;color:red;'>❌ Email Failed</h2>";
    }
}
?>