<?php
    if(isset($_POST['subject'])) {     
     function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);    
    }
    
  //  $email_to = "cthulhu.wan100@yandex.ru";
    $email_to = "prapanova302@gmail.com";
    $email_subject = "Комната 302. ".clean_string($_POST['subject']);
 
    function died($error) {      
        echo "Извините, при отправке письма возникли проблемы ";       
        echo "Пожалуйста проверьте данные и отправьте повторно<br /><br />";
        die();
    }
    
    if(!isset($_POST['subject']) ||
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('Прабачце, памылка пры адпраўцы :(');       
    }     
 
    $subject = $_POST['subject']; // required
    $name = $_POST['name']; // required
    $contacts = $_POST['email']; // required
    $message = $_POST['message']; // required
 
    $error_message = "";   
    if(strlen($error_message) > 0) {
        died($error_message);
    }
 
    $email_message = "Сообщение: \n <br>";        
    $email_message .= "Прапанова: ".clean_string($subject)."\n <br><br>";  
    $email_message .= "Імя: ".clean_string($name)."\n  <br><br>";
    $email_message .= "Кантактная інфармацыя: ".clean_string($contacts)."\n  <br><br>";
    $email_message .= "Тэкст прапановы: ".clean_string($message)."\n  <br><br>";  
 

    $headers = "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n"."From: <room302.by>\r\n";
    @mail($email_to, $email_subject, $email_message, $headers);  
    
?>