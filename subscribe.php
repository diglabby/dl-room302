<?php
if(isset($_POST['organization'])) {
      if($_POST['organization'] === 'fialta')    {
        header("Location: https://groups.google.com/forum/#!forum/catch-the-present/join/");
        die();
      }
      if($_POST['organization'] === 'bsu')    {
            if(isset($_POST['email'])) {

          $email_to = "cthulhu.wan100@yandex.ru";
          //  $email_to = "prapanova302@gmail.com";
            $email_subject = "Комната 302. Падпіска";
            $contacts = $_POST['email']; // required
            $email_message .= "Кантактная інфармацыя: ".$contacts."\n  <br><br>";
            $headers = "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n"."From: <room302.by>\r\n";
            @mail($email_to, $email_subject, $email_message, $headers);
            header("Location: http://zbsunion.by/join");
            die();
          }
      }

      if($_POST['organization'] === 'urban')    {
        $apikey = 'ff1d17926c33db600aa938e33a71e9eb-us16';
        $auth = base64_encode( 'user:'.$apikey );

            $data = array(
            'apikey'        => $apikey,
            'email_address' => 'cthulhu.wan101@yandex.ru',
            'status' => 'subscribed',
            'merge_fields' => array('FNAME' => 'A new post',  'LNAME' => 'McVankab')
            );
            $json_data = json_encode($data);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://us16.api.mailchimp.com/3.0/lists/72b7c52480/members/');
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                        'Authorization: Basic '.$auth));
            curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

            $result = curl_exec($ch);

            var_dump($result);
            die('Mailchimp executed');
  }
}
?>
