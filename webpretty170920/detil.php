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
		border-radius: 0px;
		font-size:px;
		background-color:white;
		background-position: 10px 10px;
		background-repeat:no-repeat;
		padding: 8px 8px 8px 8px;
		
	}
	input[type=button]
	{
		background-color:#E6E5E5;
		color:#006666;
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

.table{
	display: table;
	width:100%;
	background:#ffffff;
	position: inherit;
	border:1px solid #EFEBEB;
	/*box-shadow: 0px 1px 0px 1px #EFEBEB;*/
	border-spacing:0px;
	padding: 0px 0px;
	left: 0;
	right: 0;
	
}

#contain
{
	object-fit: contain;
}

#text-input{
    border-top:thin solid  #FA9DB9;/*#e5e5e5;*/
    border-right:thin solid #FA9DB9;/*#e5e5e5;*/
    border-bottom:0;
    border-left:thin solid  #FA9DB9;/*#e5e5e5;*/
    box-shadow:0px 1px 1px 1px #FA9DB9;/*#e5e5e5;*/
    float:left;
    height:28px;
    margin:.8em 0 0 .5em; 
    outline:0;
    padding:.4em 0 .4em .6em; 
    width:400px;
}

#button-holder{
    background-color: #FA9DB9; /*#f1f1f1;*/
    border-top:thin solid #FA9DB9;/*#e5e5e5;*/
    box-shadow:1px 1px 1px 1px #FA9DB9;/*#e5e5e5;*/
    cursor:pointer;
    float:left;
    height:27px;
    margin:11px 0 0 0;
    text-align:center;
    width:50px;
}

#kategori2{
	float:left;
	vertical-align:middle;
	padding: 15px 10px 20px 10px;
	font-family:calibri, tahoma;
}

#kategori-font{
	float:left;
	vertical-align:middle;
	padding: 5px 5px 5px 5px;
	font-family:calibri, tahoma;
	color:#006666; /*FA9DB9;*/
	font-size:30px;
}

#kategori-font2{
	float:left;
	vertical-align:middle;
	padding: 5px 5px 5px 5px;
	font-family:calibri, tahoma;
	color:#006666; /*FA9DB9;*/
	font-size:20px;
}

#button-holder img{
    margin:4px;
    width:20px; 
}

#content {
  padding: 16px;
}

.sticky + #content {
  padding-top: 102px;
}

.sticky{
	position:fixed;
	top:0;
	width:100%;
}

.responsive
{
	max-width: 100%;
	height: auto;
	
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
				<table class=\"table\" id=\"myHeader\" width=\"100%\" bgcolor=\"#F2F1F1\">
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
								<!--<form method=\"post\" action=\"cari.php\">	
								<input name=\"kata\" type=\"text\" placeholder =\"Search...\"/>
								<input name=\"cari\" type=\"button\" value=\"GO\" src=\"logo/loupe2.jpg\"/>
								</form>-->
								<div id=\"kategori2\">
								<input type=\"text\" placeholder=\"Search...\" id=\"text-input\" />
								<div id=\"button-holder\">
									<img src=\"loop2.png\" />
								</div>
								</div>
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
  							<form class=\"modal-content animate\" action=\"login.php\">
     						<div class=\"imgcontainer\">
        					<span onclick=\"document.getElementById('id01').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
        					<img src=\"logoimg/pfl3.2.jpg\" alt=\"Avatar\" class=\"avatar\"></div>

        					<div class=\"container\">
       						<!--<label><b>Username</b></label><br/>-->
        					<input type=\"text1\" placeholder=\"Masukan User\" name=\"uname\" required>
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
				<td width=\"100%\">
					<table width=\"100%\">
					<tr>
					<td width=\"10%\">
					</td>
					<td width=\"80%\" align=\"center\" valign=\"middle\">";
						/*<?php*/
						
									$kon = mysql_connect("localhost","root","");
						
									If (!$kon)
									echo "Tidak terhubung!:".mysql_error();
							
									$db = "prettydb";
						
									mysql_select_db($db) or die ("Connection has crashed.");
						
									$qlogo = "select location from xxprtitmmap where no = 97 and tipe = 'banner'";
						
									$hasil = mysql_query($qlogo,$kon);
						
									while ($row = mysql_fetch_array($hasil))
									{
										echo "<img src = \"$row[location]\" />";
									}
					
								/*?>*/
			  echo "</td>
					<td width=\"10%\">
					</td>
					</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td width=\"100%\">
					<table width=\"100%\">
					<tr>
					<td width=\"10%\">
					</td>
					<td width=\"80%\">
					<table width = \"100%\" border=\"0\">
						<tr>
						<td width=\"5%\">
						</td>
						<td width=\"90%\">
						<table width=\"100%\" border=\"1px\">
						<tr>
						<td width = \"18%\" align=\"center\" valign=\"middle\">
						<a href=\"x1pakai.php\"><img src=\"workfolder/btnimg1.jpg\"/></a>
						</td>
						<td width = \"18%\" align=\"center\" valign=\"middle\"> 
						<a href=\"x5anak.php\"><img src=\"workfolder/btnimg6.jpg\"/></a>
						</td>
						<td width = \"18%\" align=\"center\" valign=\"middle\"> 
						<a href=\"x2patu.php\"><img src=\"workfolder/btnimg5.jpg\"/></a>
						</td>
						<td width = \"18%\" align=\"center\" valign=\"middle\"> 
						<a href=\"x3tas.php\"><img src=\"workfolder/btnimg3.jpg\"/>
						</td>
						<td width = \"18%\" align=\"center\" valign=\"middle\"> 
						<a href=\"x4aksesoris.php\"><img src=\"workfolder/btnimg4.jpg\"/>
						</td>
						</tr>
						</table>
						</td>
						<td width=\"5%\">
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
			<tr>
				<td style=\"font-family: Tahoma, Calibri; font-size:13px; font-style: normal; color:#006666; font-weight:				  	 			 				 normal\"><br><br>
				<table width=\"100%\" >
				<tr>
				<td width=\"10%\" >";
				
					/*if(isset($_GET['id'])){
					$id = $_GET['id'];
					}
					if(isset($id)){
					echo $id;
					}
					if(!empty($id)){
					echo $id;
					}*/
			
			echo "</td>
				<td width=\"40%\" align=\"center\" valign=\"middle\">";
					$id = $_GET['id'];
					//echo "$id";
	
					$koneksi = mysql_connect("localhost","root","");
			
					if (!$koneksi)
				
						echo "Tidak Terhubung dengan database :".mysql_error();
				
					$db = "prettydb";
				
					mysql_select_db ($db) or die("connection is failed");
			
					$qdata = "select * from xxprtitmmap where No = '$id'";
			
					$hasil = mysql_query($qdata, $koneksi);
			
			
					while ($datarow = mysql_fetch_array($hasil))
					{
					echo "<img id=\"contain\" src= \"$datarow[location]\" width=\"375\" height=\"350\" align=\"middle\"/><br><br><br>";
					$kode = "$datarow[CdItem]";
					$nama = "$datarow[NmItem]";
					$harga = "$datarow[price]";
					
				
					}
			echo "</td>
				<td width=\"40%\">
					<form method=\"post\" action=\"beli.php\">
					<table width=\"100%\" \*border=\"1\"*\>
					<tr>
						<!--<td>Nama Produk</td>
						<td>:<input name=\"namabrg\" class=\"gaya1\" value=\"$nama\"></td>-->
						<td><label id=\"kategori-font\">$nama</label></td>
					</tr>
					<tr>
						<td><label id=\"kategori-font2\">Harga &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; Rp $harga,-</label></td>
						<!--<td><h1></hi>Rp $harga,-</td>-->
					</tr>
					<tr>
						<td><label id=\"kategori-font2\">Kuantitas</label>: &nbsp; <input type=\"button\" value=\"-\">
							<input type=\"number\" step=\"1\" min=\"1\" max=\"\" name=\"quantity\" value=\"1\" size=\"4\">
							<input type=\"button\" value=\"+\">
						</td>
						<!--<td>:<select name=\"kuantitas\" class=\"gaya2\">
							 <option value=\"1\" selected> 1 </option>
							 <option value=\"2\"> 2 </option>
							 <option value=\"3\"> 3 </option>
							 <option value=\"4\"> 4 </option>
							 <option value=\"5\"> 5 </option>
							 <option value=\"6\"> 6 </option>
							 </select>
						</td>-->
					</tr>
					<!--<tr>
						<td>Total Harga</td>
						<td>:<input name=\"Totalhrg\" class=\"gaya1\" value=\"Rp. $harga,-\"></td>
					</tr>-->
					<!--<tr>
						<td>Nama Pengirim</td>
						<td>:<input name=\"usrname\" class=\"gaya1\"></td>
					</tr>
					<tr>
						<td>Email Pengirim</td>
						<td>:<input name=\"mailname\" class=\"gaya1\"></td>
					</tr>-->
					<tr>
						<!--<td></td>-->
						<td align=\"center\" style=\"font-family: Tahoma, Calibri; font-size:15px; font-style: normal; color:#006666; font-weight:				  	 			 		normal\">
							<input type=\"submit\" name=\"beli\" value=\"Beli\">
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
		  </table>
		  
		  
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById(\"myHeader\");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add(\"sticky\");
  } else {
    header.classList.remove(\"sticky\");
  }
}
</script>";
?>
</body>
</html>
