<?php
      /*
      Set the email address that you want the form to be submitted to.
      */
      $webmaster_email = "kelly@keybase.co.za";

      /*
      Set the URLs of the supporting pages.
      */
      $feedback_page = "index.html";
      $error_page = "error_message.html";
      $thankyou_page = "thank_you.html";

      /*
      Loads the form field data into variables.
      */
      $email_address = $_REQUEST['emailaddress'] ;
      $comments = $_REQUEST['comments'] ;
      $first_name = $_REQUEST['firstname'] ;
      $usr_tel = $_REQUEST['usrtel'] ;
      $course_list = $_REQUEST['courselist'] ;
      $company_name = $_REQUEST['companyname'] ;
      $msg = 
      "First Name: " . $first_name . "\r\n" . 
      "Company: " . $company_name . "\r\n" .
      "Contact Number: " . $usr_tel . "\r\n" .
      "Email: " . $email_address . "\r\n" . 
      "Course: " . $course_list . "\r\n" .
      "Comments: " . $comments . "\r\n" ;

      mail( "$webmaster_email, $email_address", "Web Enquiry ($course_list) - $first_name  "  , $msg );

      header( "Location: $thankyou_page" );
    
?>