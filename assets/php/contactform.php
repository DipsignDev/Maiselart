<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "info@dipsign.it";
  $headers = "From: ".$mailFrom;
  $txt = "Hai ricevuto un messaggio da ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);

  header("Location: contatti.php?mailsend");
}

/* ?> */