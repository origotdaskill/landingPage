<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comments = $_POST['comments'];

// Formspark API endpoint
$formspark_api_endpoint = 'https://submit-form.com/xRfnOg1El'; // Replace with your Formspark API endpoint

// Form data
$form_data = array(
    'name' => $name,
    'email' => $email,
    'subject' => $subject,
    'comments' => $comments
);

// Send form data to Formspark
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $formspark_api_endpoint);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($form_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Check if Formspark request was successful
if ($response === false) {
    // Formspark request failed
    echo "Form submission failed.";
} else {
    // Formspark request successful
    // Example redirect
    header("Location: http://www.riadartisan.com/thank_you_page.html");
    exit();
}
?>
