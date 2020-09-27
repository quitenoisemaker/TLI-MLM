<?php
// require("db.php");

// $from_mail='info@mentapps.com';
// $from_name='samson';
// $receiver='ojugosamson@gmail.com';
// $subject='Testing';
// $txt='I just felt like testing';
// $api_key='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
// '
// ;
// sendMails($from_mail, $from_name, $receiver, $subject, $txt, $api_key);

$postdata=array ( 'personalizations'=> array ( 0=> array ( 'to'=> array ( 0=> array ( 'email'=> 'ojugosamson007@gmail.com', ) ), ), ),
  'from'=> array ( 'email'=> 'samsonojugo@gmail.com',),
  'subject'=> 'Mentapps has a new Quote Request from: Name->' .'samson'. ', Email->' .'ojugosamson007@gmail.com'.', Phone Number->090287484445',
  'content'=> array ( 0=> array ( 'type'=> 'text/html', 'value'=> 'Name-> samson'  ) ));
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://api.sendgrid.com/v3/mail/send');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));
  $headers = array();
  $headers[] = 'Authorization: Bearer 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';
  $headers[] = 'Content-Type: application/json';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
  }
  curl_close($ch);
 ?>