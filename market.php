<?php
  $to = 'akiburei@gmail.com';
  $subject = 'Simple Cart Order';
  $content = $_POST;
  $body = '';
  for($i=1; $i < $content['itemCount'] + 1; $i++) {
  $name = 'item_name_'.$i;
  $quantity =  'item_quantity_'.$i;
  $price = 'item_price_'.$i;
  $body .= 'item #'.$i.': ';
  $body .= $content[$name].' '.$content[$quantity].' '.$content[$price];
  $body .= '<br>';
  }
  $headers = 'From: webmaster@example.com' . "\r\n" .
             'Reply-To: webmaster@example.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $body, $headers);
  Header('Location: index.html');
  ?>
