<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "csmopeoplefoundation@gmail.com";
    $subject = "New NGO Registration Form";

    $body = "NGO Registration Details:\n\n";

    $body .= "Full Name: " . $_POST['full_name'] . "\n";
    $body .= "DOB / Age: " . $_POST['dob_age'] . "\n";
    $body .= "Gender: " . $_POST['gender'] . "\n";
    $body .= "Mobile: " . $_POST['mobile'] . "\n";
    $body .= "Email: " . $_POST['email'] . "\n\n";

    $body .= "City: " . $_POST['city'] . "\n";
    $body .= "State: " . $_POST['state'] . "\n";
    $body .= "Address: " . $_POST['address'] . "\n\n";

    $body .= "Qualification: " . $_POST['qualification'] . "\n";
    $body .= "Skills: " . $_POST['skills'] . "\n";
    $body .= "Experience: " . $_POST['experience'] . "\n\n";

    $body .= "Why Join: " . $_POST['why_join'] . "\n";
    $body .= "Interest: " . $_POST['interest'] . "\n";
    $body .= "Role: " . $_POST['role'] . "\n";
    $body .= "Availability: " . $_POST['availability'] . "\n\n";

    $body .= "Worked with NGO Before: " . $_POST['prev_ngo'] . "\n";
    $body .= "Details: " . $_POST['message'] . "\n";

    $headers = "From: " . $_POST['email'];

    if(mail($to, $subject, $body, $headers)){
        echo "<h2 style='text-align:center;color:green;'>✅ Form Submitted Successfully</h2>";
    } else {
        echo "<h2 style='text-align:center;color:red;'>❌ Failed to send email</h2>";
    }
}
?>