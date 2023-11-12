<?php

ini_set("include_path", '/home1/gentleu1/php:' . ini_get("include_path") );

require_once "Mail.php";

/*
* Uses email example from:
* https://www.bluehost.com/help/article/sending-php-email-through-smtp
* Note that this email has MANY errors.
*/

/*
* Customized test emailer
*/
    error_reporting ( E_ALL );

    $host = "ssl://mail.raymeshope.org";
    $port = "465";

    $username = EMAIL_ADDR_RAYME_SYSTEM;
    $password = EMAIL_PW_RAYME_SYSTEM;

    $to = EMAIL_ADDR_RAYME_SANDRA;
    $email_from = EMAIL_ADDR_RAYME_SYSTEM;
    $email_subject = "Test Email 1" ;
    $email_body = "This is the body content";
    $email_address = "glenn@raymeshope.org" ;

    $headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
    $smtp = Mail::factory ('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password) );
    $mail = $smtp->send($to, $headers, $email_body);

    if (PEAR::isError($mail) )  {
        echo ("<p>" . $mail->getMessage () . "</p>") ; 
    } else {
        echo ("<p>Message successfully sent!</p>") ;
    }
?>