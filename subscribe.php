<?php
  error_reporting(0);
  if(isset($_POST['organization'])) {

        if($_POST['organization'] === 'fialta')    {

          if(isset($_POST['email'])) {

            //$email_to = "cthulhu.wan100@yandex.ru";
            $email_to = "catch-the-present@googlegroups.com";
            $email_subject = "Комната 302. Падпіска";
            $contacts = $_POST['email']; // required
            $email_message .= "Кантактная інфармацыя: ".$contacts."\n  <br><br>";
            $headers = "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n". "From: <webmaster@komnata302.by>";
            @mail($email_to, $email_subject, $email_message, $headers);
           
            print "Дзякуй! Мы будзем радыя дасылаць вам нашыя навіны.<br> <a href='https://groups.google.com/forum/#!forum/catch-the-present/join/' target='_blank'>Далучайся! - <br>catch-the-present@googlegroups.com.</a>";
           
            die();
          }
         
          die();

        }

        if($_POST['organization'] === 'bsu')    {
              if(isset($_POST['email'])) {

              //$email_to = "cthulhu.wan100@yandex.ru";
              $email_to = "Zbsstydent@gmail.com";
              $email_subject = "Комната 302. Падпіска";
              $contacts = $_POST['email']; // required
              $email_message .= "Кантактная інфармацыя: ".$contacts."\n  <br><br>";
              $headers = "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n". "From: <webmaster@komnata302.by>";
              @mail($email_to, $email_subject, $email_message, $headers);
            
              print ("Дзякуй! Мы будзем радыя дасылаць вам нашыя навіны.<br> <a href='http://zbsunion.by/join' target='_blank'>Далучайся! - zbsunion.by</a>");              
              die();
            }
        }

        if($_POST['organization'] === 'urban')    {

            if(isset($_POST['email'])) {

            //$email_to = "cthulhu.wan100@yandex.ru";
            $email_to = "minskurban@gmail.com";
            $email_subject = "Комната 302. Падпіска";
            $contacts = $_POST['email']; // required
            $email_message .= "Кантактная інфармацыя: ".$contacts."\n  <br><br>";
            $headers = "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n". "From: <webmaster@komnata302.by>";
            @mail($email_to, $email_subject, $email_message, $headers);             
            print "Дзякуй! Мы будзем радыя дасылаць вам нашыя навіны.<br><a href='mailto:minskurban@gmail.com' target='_blank'>minskurban@gmail.com</a>";
            die();
          }

              // $apikey = 'ff1d17926c33db600aa938e33a71e9eb-us16';
              // $auth = base64_encode( 'user:'.$apikey );
              //
              // $data = array(
              // 'apikey'        => $apikey,
              // 'email_address' => 'cthulhu.wan101@yandex.ru',
              // 'status' => 'subscribed',
              // 'merge_fields' => array('FNAME' => 'A new post',  'LNAME' => 'McVankab')
              // );
              // $json_data = json_encode($data);
              //
              // $ch = curl_init();
              // curl_setopt($ch, CURLOPT_URL, 'https://us16.api.mailchimp.com/3.0/lists/72b7c52480/members/');
              // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
              //                                             'Authorization: Basic '.$auth));
              // curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
              // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              // curl_setopt($ch, CURLOPT_TIMEOUT, 10);
              // curl_setopt($ch, CURLOPT_POST, true);
              // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
              // curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
              //
              // $result = curl_exec($ch);
              //
              // var_dump($result);
              // die('Mailchimp executed');
    }
  }
?>
