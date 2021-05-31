<? 
    $email = $_POST['email'];
    
    $email_from = 'arun021997@gmail.com';

    $email_subject = "Web site Subcription";

    $email_body = "User Email: $email. \n";

    $to = "officialakmvlogs@gmail.com";

    $headers = "From: $email_from \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
?>