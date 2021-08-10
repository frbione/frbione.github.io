<?php

if (isset($_POST['submit'])) {

$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "fbione@id.uff.br";
$headers = "From: My Portfolio Website ".$mailFrom;
$txt = "You have received an Email from ".$name.".\n\n".$message;


mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");

}

?>