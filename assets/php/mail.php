<?php

$to 		= 'ferreira.james@outlook.fr';
$headers	= 'FROM: "'.$email.'"';

//All form values
$name 		= $_POST['name'];
$email 		= $_POST['email'];
$subject 	= $_POST['subject'];
$msg 		= $_POST['msg'];
$output 	= "Name: ".$name."\nEmail: ".$email."\nSubject: ".$subject."\n\nMessage: ".$msg;

mail($to, $name, $output, $headers);

?>