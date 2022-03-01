<?php
    $phone = $_POST['phone'];

    if($phone != '') {
    if($_SERVER['HTTP_HOST'] != getenv("HTTP_HOST")) return false;
    require 'PHPMailer/PHPMailerAutoload.php';
    $email_files = $_POST['email_files'];
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'ssl://smtp.yandex.ru';
    $mail->SMTPAuth = true;
    $mail->Username = 'busupsendmail@yandex.ru';                 
    $mail->Password = '8672539911';  
    $mail->SMTPSecure = 'ssl';                            
    $mail->Port = 465;                                      

    $mail->CharSet = "UTF-8";
    $mail->From = 'busupsendmail@yandex.ru';
    $mail->FromName = 'Отправитель';     
    $mail->addAddress('elitm15@yandex.ru','elitm15@yandex.ru');     
    $mail->isHTML(false);                                  
    $name = $_POST['name'];


    $mail->Subject = 'Заявка с сайта';
    $mail->Body    = "Имя: $name \nТелефон: $phone";
    
if($mail->send()) {
    return true;
} else {
    return false;
}   
}
        