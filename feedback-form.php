<?php


if($_POST["message"]) {


mail("ludwingranados@gmail.com", "Here is the subject line",


$_POST["Thank you! Your feedback has been sent!"]. "From: an@email.address");


}


?>