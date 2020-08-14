<?php
//lkzxwelmljaflghr

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->CharSet = 'utf-8'; //set charset utf-8
    $mail->Username   = 'ngocbq2021@gmail.com';                     // SMTP username
    $mail->Password   = 'lkzxwelmljaflghr';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('ngocbq@fpt.edu.vn', 'Ngocbq');
    $mail->addAddress('ngocbq@fpt.edu.vn', 'Bùi Quang Ngọc');     // Add a recipient
    $mail->addAddress('bqngoc@gmail.com');               // Name is optional
    $mail->addReplyTo('ngocbq@fpt.edu.vn', 'Administrator');
    $mail->addCC('quandhph08240@fpt.edu.vn');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('composer.json');         // Add attachments
    $mail->addAttachment('composer.lock', 'new.lock');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Tiêu đề của mail ở đây';
    $mail->Body    = 'Nội dung của email có thể sử dụng ngôn ngữ HTML <b>in bold!</b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Gửi mail thành công';
} catch (Exception $e) {
    echo "Lỗi gửi mail. Hiển thị lỗi: {$mail->ErrorInfo}";
}
