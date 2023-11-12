<?php

    require "../../assets/sys/sys-constants.php";

    //Check environment
    if ( $rhglobal_enviroType == RH_ENV_LOCAL ) {
        //If true, we can't send mail from the local environment at least for now.
        $exitMsg = "<p>Mail services are offline, choose from the following options:</p>\n";
        $exitMsg .= "<a href='submit-success.php'>Success Page</a><br/>";
        $exitMsg .=  "<a href='submit-fail.php'>Problem Page</a>";
        exit( $exitMsg );
    }

    /**
     * Get Help submit mail functionality.
     */

    ini_set("include_path", '/home1/gentleu1/php:' . ini_get("include_path") );

    require_once "Mail.php";


    //Wrangle form submit values

        //first name
        if ( isset( $_POST['firstName'] ) ) {
            $firstName = $_POST['firstName'];
            $firstName = htmlspecialchars( $firstName );
        }
        if ( !isset($firstName) ) $firstName = "(No valid value found)";
        
        //last name
        if ( isset( $_POST['lastName'] ) ) {
            $lastName = $_POST['lastName'];
            $lastName = htmlspecialchars( $lastName );
        }
        if ( !isset($lastName) ) $lastName = "(No valid value found)";

        //email address
        if ( isset( $_POST['emailAddr'] ) ) {
            $emailAddress = $_POST['emailAddr'];
            $emailAddress = htmlspecialchars( $emailAddress );
        }
        if ( !isset( $emailAddress ) ) $emailAddress = "(No valid value found)";

        //phone
        if ( isset( $_POST['phone'] ) ) {
            $phoneNum = $_POST['phone'];
            $phoneNum = htmlspecialchars( $phoneNum );
        }        
        if ( !isset($phoneNum) ) $phoneNum = "(No valid value found)";

        //type of help needed
        if ( isset( $_POST['typeOfHelpNeeded'] ) ) {
            $typeOfHelp = $_POST['typeOfHelpNeeded'];
            $typeOfHelp = htmlspecialchars( $typeOfHelp );
        }        
        if ( !isset($typeOfHelp) ) $typeOfHelp = "(No valid value found)";

        //how can we help
        if ( isset( $_POST['howCanWeHelp'] ) ) {
            $getHelpMsg = $_POST['howCanWeHelp'];
            $getHelpMsg = htmlspecialchars( $getHelpMsg );
        }
        if ( !isset($getHelpMsg) ) $getHelpMsg = "(No valid value found)";

        
    //Manage validation
        //do stuff here
        $gethelpFullContent = "";
        
        //Add the current date
        $currentDate = new DateTime();
        $dateStr = date_format( $currentDate, 'l jS \o\f F Y h:i:s A' );

        //Build the message body
        $gethelpFullContent .= "Get Help Form Submittal Notice\n";
        $gethelpFullContent .= "Date: $dateStr \n";
        $gethelpFullContent .= "First name: $firstName \n";
        $gethelpFullContent .= "Last name: $lastName \n";
        $gethelpFullContent .= "Email: $emailAddress \n";
        $gethelpFullContent .= "Phone: $phoneNum \n";
        $gethelpFullContent .= "Type of help needed: $typeOfHelp \n";
        $gethelpFullContent .= "Message: $getHelpMsg \n";

    //Send email with get help information
        $host = "ssl://mail.raymeshope.org";
        $port = "465";

        $username = EMAIL_ADDR_RAYME_SYSTEM;
        $password = EMAIL_PW_RAYME_SYSTEM;


        $to = EMAIL_ADDR_RAYME_SANDRA;
        $email_from = EMAIL_ADDR_RAYME_SYSTEM;
        $email_subject = "Get Help Request From Raymeshelp.org" ;
        $email_body = $gethelpFullContent;
        $email_address = EMAIL_ADDR_RAYME_SYSTEM ;

        $headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
        $smtp = Mail::factory ('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password) );
        $mail = $smtp->send($to, $headers, $email_body);

    //Manage response
        if (PEAR::isError($mail) )  {

            if ( $rhglobal_enviroType == RH_ENV_LOCAL ) {
                echo ("<p>Mail send failed with the following message:</br>" . $mail->getMessage () . "</p>") ; 
            } else {
                header( "Location: submit-fail.php" );
            }

        } else {

            header( "Location: submit-success.php" );

        }

?>