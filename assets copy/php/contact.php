<?php

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $maiFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "Andre.Andrade.Gomes@formandos.cinel.pt";
    $headers = "From: ".$maiFrom;
    $txt = "Recebeste um e-mail de ".$name.".\n\n".$message;

    mail($mailTo, $headers, $txt, $headers);
    header("Location: contactform.php?mailsend")
}
?>


