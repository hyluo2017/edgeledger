<?php
  // this php is only working within inmotion/cpanel system
  if (isset($_POST['email'])) {
    // Email information
    $admin_email = "hyluo06@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // send Email
    mail($admin_email, "New form submission", $message . ' - ' . $phone, "From:" . $email);

    header('Location: https://proppantprice.com/success.html');
  }