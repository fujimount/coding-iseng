<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
	include "classes/class.phpmailer.php";
	
	$mail = new PHPMailer;
	$nama = $_POST['namabrg'];
	$kode = $_POST['kodebrg'];
	$harga = $_POST['hargabrg'];
	$jmlbrg = $_POST['kuantitas'];
	
	$to = "fujimount@gmail.com";
	$subject = "My booking item";
	$msg = "Nama Item :"."  ".$nama."   ";
	$msg.= "Kode barang :"."  ".$kode."   ";
	$msg.= "Harga :"."  ".$harga;
	$header = " From me";
	
	$mail->IsSMTP();
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = "prettyforladies.com"; //host masing2 provider email
	$mail->SMTPDebug = 2;
	$mail->Port = 465;
	$mail->SMTPAuth = true;
	$mail->Username = "a_william@prettyforladies.com"; //user email
	$mail->Password = "4st3r1x!@#$"; //password email 
	$mail->SetFrom("a_william@prettyforladies.com","Andre"); //set email pengirim
	$mail->Subject = "My Booking Item"; //subyek email
	$mail->AddAddress("fujimount@gmail.com","Andre");  //tujuan email
	$mail->AddCC("carmelia.tizia81@gmail.com");
	$mail->MsgHTML("$msg");
	if($mail->Send()) echo "Message has been sent";
	else echo "Failed to sending message";
	
	//mail($to,$subject,$msg,$header);
	//echo $msg;
	
?>
</body>
</html>
