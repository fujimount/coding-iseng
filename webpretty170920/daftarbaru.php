<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>
<style type="text/css">
	input[type=text]
	{
		width :70%;
		box-sizing: border-box;
		border: 2px solid #ccc;
		border-radius: 10px;
		font-size:18px;
		background-color:white;
		background-position: 10px 10px;
		background-repeat:no-repeat;
		padding: 8px 8px 8px 8px;
		
	}
	input[type=button]
	{
		background-color:#E6E5E5;
		border:2px solid #ccc;
		padding:8px 8px;
		cursor:pointer;
	}
	.gaya1
	{
		width :70%;
		box-sizing: border-box;
		border: 1px solid #ccc;
		border-radius: 10px;
		font-size:13px;
		background-color:white;
		background-position: 10px 10px;
		background-repeat:no-repeat;
		padding: 8px 8px 8px 8px;
	}
	.gaya2
	{
		width :20%;
		box-sizing: border-box;
		border: 1px solid #ccc;
		border-radius: 10px;
		font-size:11px;
		background-color:white;
		background-position: 10px 10px;
		background-repeat:no-repeat;
		padding: 8px 8px 8px 8px;
	}
</style>
<style>
/* Full-width input fields */
input[type=text1], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #F2F1F1;
    color: #006666;
    padding: 10px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.cancelbtn1 {
    width: 70%;
    padding: 10px 18px;
    background-color: #f44336;
	border-radius: 10px;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 200;
	height: 77;
    border-radius: 5%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<body>
<?php
	echo "<table width=\"100%\" border=\"0\">
			<tr>
				<td width = \"100%\" bgcolor=\"#FA9292\" height=\"30\" align=\"center\" style=\"font-family: corbel, arial, Tahoma, Calibri; 			    			font-size:16px; font-style: normal; color:#006666; font-weight: normal\">
				KOLEKSI BAJU, TAS, SEPATU DAN AKSESORIS di prettyforladies.com
				</td>
			</tr>
			<tr>
				<td width=\"100%\">
				<table width=\"100%\" bgcolor=\"#F2F1F1\">
					<tr>
							<td width = \"10%\">
							</td>
							<td width = \"20%\">";
							$kon = mysql_connect("localhost","root","");
						
							If (!$kon)
								echo "Tidak terhubung!:".mysql_error();
							
							$db = "prettydb";
						
							mysql_select_db($db) or die ("Connection has crashed.");
						
							$qlogo = "select location from xxprtitmmap where no = 76";
						
							$hasil = mysql_query($qlogo,$kon);
						
							while ($row = mysql_fetch_array($hasil))
							{
								echo "<a href = \"index.php\"\><img src = \"$row[location]\" /></a>";
							}
					  echo "</td>
							<td width = \"40%\">
								<form method=\"post\" action=\"cari.php\">	
								<input name=\"kata\" type=\"text\" placeholder =\"Search...\"/>
								<input name=\"cari\" type=\"button\" value=\"GO\" src=\"logo/loupe2.jpg\"/>
								</form>
							</td>
							<td width = \"5%\">
								<img src=\"logoimg/bagpfl.jpg\"/>
							</td>
							<td width = \"10%\" style=\"font-family: Tahoma, Calibri; font-size:13px; font-style: normal; color:#006666; font-weight: 		 							normal\">
							<table width=\"100%\">
							<tr>
							<td width=\"100%\">
							<button onclick=\"document.getElementById('id01').style.display='block'\" style=\"width: auto; color:#006666; font-weight:     						normal\">
								Masuk | Daftar 
							</button>
							<div id=\"id01\" class=\"modal\" align=\"left\" >
  							<form class=\"modal-content animate\" action=\"action_page.php\">
     						<div class=\"imgcontainer\">
        					<span onclick=\"document.getElementById('id01').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
        					<img src=\"logoimg/pfl3.2.jpg\" alt=\"Avatar\" class=\"avatar\"></div>

        					<div class=\"container\">
       						<!--<label><b>Username</b></label><br/>-->
        					<input type=\"text1\" placeholder=\"Masukan Email\" name=\"uname\" required>
							<br/>
        					<!--<label><b>Password</b></label><br/>-->
        					<input type=\"password\" placeholder=\"Masukan Kata Sandi\" name=\"psw\" required>
        
        					<button type=\"submit\">Masuk</button><br />
        					<input type=\"checkbox\" checked=\"checked\"> Ingat Saya </div>

        					<div class=\"container\" style=\"background-color:#f1f1f1\">
        					<button type=\"button\" onclick=\"document.getElementById('id01').style.display='none'\" class=\"cancelbtn\">Batal</button>
        					<span class=\"psw\">Lupa Kata <a href=\"rubah.php\" style=\"text-decoration:none\">Sandi?</a> /<a href=\"daftarbaru.php\" 		   	   			         					style=\"text-decoration:none\">
							Daftar Baru</a></span> </div>
        					</form>
    						</div>
							</td>
							</tr>
							</table>
							</td>
							<td width = \"15%\">
							</td>
						</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td align=\"center\" style=\"font-family: Tahoma, Calibri; font-size:13px; font-style: normal; color:#006666; font-weight:				  	 			normal\"><br><br><h2>Form Pendaftaran User Baru</h2><br>
				<table width=\"100%\" >
				<tr>
					<td width =\"10%\">
					</td>
					<td width=\"40%\" align=\"center\" valign=\"middle\">";
					$kon = mysql_connect("localhost","root","");
						
							If (!$kon)
								echo "Tidak terhubung!:".mysql_error();
							
							$db = "prettydb";
						
							mysql_select_db($db) or die ("Connection has crashed.");
						
							$qlogo = "select location from xxprtitmmap where no = 103";
						
							$hasil = mysql_query($qlogo,$kon);
						
							while ($row = mysql_fetch_array($hasil))
							{
								echo "<a href = \"index.php\"\><img src = \"$row[location]\" /></a>";
							}
			echo	"<br><br></td>
					<td width=\"40%\">
					<form>
					<table width=\"100%\">
					<tr>
						<td>
						<input name=\"name\" placeholder=\"Masukan Email\" class=\"gaya1\">
						</td>
					</tr>
					<tr>
						<td>
						<input name=\"sandi\" placeholder=\"Masukan Kata Sandi\" class=\"gaya1\">
						</td>
					</tr>
					<tr>
						<td align=\"left\">
						<button type=\"submit\" class=\"cancelbtn1\">Daftar</button>
						</td>
					</tr>
					</table>
					</form>
					</td>
					<td width=\"10%\">
					</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td width=\"100%\">
				<table width=\"100%\" height=\"150\" border=\"0\">
				<tr>
				<td width=\"10%\">
				</td>
				<td width=\"80%\" bgcolor=\"#F7C0C0\">
				<table width=\"100%\">
				<tr>
					<td width=\"25%\" align=\"center\" valign=\"top\"> <!--col 3.2.1-->
									<img src=\"logoimg/pfl3.3.jpg\" />
								</td>
								<td width=\"25%\"> <!--col 3.2.2-->
									<table width=\"100%\" >
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; font-style:     	 											 normal;color:#006666; font-weight: bold\"> 			                                			
										    <!--3.2.2.1--> 
										    Pretty for Ladies
											</td>
										</tr>
										<tr>
											<td height=\"5\">											
											</td>
										</tr>
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; color:#006666\">
											<a href=\"kami.php\" style=\"text-decoration:none; color:#006666\" >Tentang kami </a>										
											</td>
										</tr>
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; color:#006666\">
											<a href=\"ketentuan.php\" style=\"text-decoration:none; color:#006666\">Syarat dan Ketentuan</a>											
											</td>
										</tr>
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; color:#006666\">
											<!--3.2.2.3--> Kebijakan Privasi											
											</td>
										</tr>
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; color:#006666\">
											<!--3.2.2.3--> Hubungi Kami											
											</td>
										</tr>
									</table>
								</td>
								<td width=\"25%\"> <!--col 3.2.3-->
									<table width=\"100%\">
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; font-style: 	     										 normal; color:#006666; font-weight: bold\"> 			                                			
										     Belanja
											</td>
										</tr>
										<tr>
											<td height=\"5\">											
											</td>
										</tr>
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; color:#006666\">
											 Cara Belanja											
											</td>
										</tr>
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; color:#006666\">
											 Pembayaran											
											</td>
										</tr>
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; color:#006666\">
											 Pengembalian											
											</td>
										</tr>
										<tr>
											<td height=\"14\" align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; 
											color: #006666\" > 
											<!--3.2.2.2--> 											
											</td>
										</tr>
									</table>
								</td>
								<td width=\"25%\"> <!--col 3.2.4-->
									<table>
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; font-style:    	 											 normal; color:#006666; font-weight: bold\"> 			                                			
										     Jual
											</td>
										</tr>
										<tr>
											<td height=\"5\">											
											</td>
										</tr>
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; color:#006666\">
											 Cara Berjualan									
											</td>
										</tr>
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; color:#006666\">
											 Pemasangan Iklan											
											</td>
										</tr>
										<tr>
											<td align=\"left\" valign=\"middle\" style=\"font-family: Tahoma, Calibri; font-size:13px; color:#006666\">
											 Pengambilan Hasil Penjualan											
											</td>
										</tr>
										<tr>
											<td height=\"14\">											
											</td>
										</tr>
									</table>
								</td>
				</tr>
				</table>
				</td>
				<td width=\"10%\">
				</td>
				</tr>
				</table>
			</td>
			</tr>
		  </table>";
?>
</body>
</html>
