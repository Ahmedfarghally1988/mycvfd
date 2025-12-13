<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $tel   = htmlspecialchars($_POST['tel']);
    $message = htmlspecialchars($_POST['message']);

    $to = "ahmed.fr1988@gmail.com";
    $subject = "رسالة جديدة من الفورم";
    $body = "
    الاسم: $name
    الإيميل: $email
    رقم الجوال: $tel
    الرسالة: $message
    ";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "تم الإرسال بنجاح";
    } else {
        echo "حصل خطأ، حاول تاني";
    }
}
?>
