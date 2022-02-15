<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$user_name = $_POST['Имя'];
$user_email = $_POST['Email'];
$user_phone = $_POST['Телефон'];
$form_subject = "Заказ с сайта";

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.mail.ru';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = '@mail.ru';
$mail->Password = '';
$mail->setFrom('@mail.ru', 'Accessories.ru');
$mail->addAddress('tisiriw533@host1s.com', 'Иван Петров');
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->msgHTML("test body");
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

// $jsonText = $_POST['Товары'];
// $arr = json_decode($jsonText, true);
// print_r($arr);

// $prod = '';

// foreach ($arr as $key => $value) {  
//   $id = $value["id"];
//   $imgSrc = $value["imgSrc"];
//   $title = $value["title"];
//   $price = $value["price"];
//   $count = $value["count"];
//   if(isset($id)) {
//     $prod .= "
//     <tr>
//       <td style='padding: 10px; border: #e9e9e9 1px solid;'>$id</td>
//       <td style='padding: 10px; border: #e9e9e9 1px solid;'>$imgSrc</td>
//       <td style='padding: 10px; border: #e9e9e9 1px solid;'>$title</td>
//       <td style='padding: 10px; border: #e9e9e9 1px solid;'>$price</td>
//       <td style='padding: 10px; border: #e9e9e9 1px solid;'>$count</td>
//     </tr>
//     ";
//   }  
// };
// print_r($prod);

// $c = true;
// print_r($_POST);

// $message = "Здравствуйте, Ваш заказ: ";
// $message = "<table style='width: 50%;'>$message . $prod</table>";


// Тело письма
// $body = $message;
// $mail->Subject = 'Тест';
// $mail->msgHTML("<html><body>
//                 <h1>Здравствуйте!</h1>
//                 <p>Это тестовое письмо.</p>
//                 </html></body>");

// // Приложения
// if ($_FILES){
// 	foreach ( $_FILES['file']['tmp_name'] as $key => $value ) {
// 		$mail->addAttachment($value, $_FILES['file']['name'][$key]);
// 	}
// }

$mail->send();

if(!$mail->send()){
  echo "Mailer Error: " . $mail->ErrorInfo;
}else{
  echo "Message sent!";
}
?>