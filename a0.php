<?php if (isset($_POST["otprav"])) {
$to = "syavik2001@noob1.kl.com.ua";
$subject = 'syavik2001@noob1.kl.com.ua';
$charset = "utf-8";
$message = 
'Пользователь: ' . $_POST['name'] . ' отправил вам письмо:
' . $_POST['message'] . '
Связаться с ним можно по email: ' . $_POST['email'] . '';

$headerss ="Content-type: text/html; charset=$charset\r\n";
$headerss.="MIME-Version: 1.0\r\n";
$headers = 'From: syavik2001@noob1.kl.com.ua' . "\r\n";

mail($to, $subject, $message, $headers);
print "<script>alert(\"Сообщение успешно отправлено!\");window.location = window.location.href</script>";
}
?>
