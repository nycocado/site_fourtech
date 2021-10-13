<?php
if(isset($_POST(['inputEmail]') &&! !empty($_POST(['inputEmail]']))))

$inputName = addcslashes($_POST(['inputName']))
$inputEmail = addcslashes($_POST(['inputEmail']))
$floatingTextarea2 = addcslashes($_POST(['floatingTextarea2']))

$to = "tiovi691@gmail.com";
$subject = "Contato - FourTech";
$body = "Nome: ".$nome. "n\"