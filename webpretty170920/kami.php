<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">

.fixhead {
	margin: auto;
	position : fixed;
}
.style1 {color: #006666}
</style>

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
</style>

<style>
	#mybanner{position:relative;} 
  	#mybanner0, #mybanner1, #mybanner2, #mybanner3{position:absolute;top:0;left:0;display:none;} 
    #mybanner0 {display:block;}
</style>

<script src="workfolder/splash.js"></script>

<script>startsplash('mybanner',4,5000);</script>

<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0">
	<tr>
	<td width="100%" bgcolor="#FA9292" height="30" align="center" style="font-family: corbel, arial, Tahoma, Calibri; 			    					    font-size:16px; font-style: normal; color:#006666; font-weight: normal">
	KOLEKSI BAJU, TAS, SEPATU DAN AKSESORIS di prettyforladies.com
	</td>
	</tr>
	<tr >
	<td width="100%" >		
		<table width="100%" bgcolor="#F2F1F1">
			<tr>
				<td width="10%">
				<!--kolom1.1.0-->
				</td>
				<td width = "20%">
				
					<?php
						
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
					
					?>
				</td>
				<td width="40%" >
				<!--kolom1.1.2-->
					<form method="post" action="cari.php">	
					<input name="kata" type="text" placeholder ="Search..."/>
					<input name="cari" type="button" value="GO" src="logo/loupe2.jpg"/>
					<!--<input name="cari2" type="image" value="cari" src="logo/loupe2.jpg" />-->
					</form>
				</td>
				<td width="5%" style="font-family: Tahoma, Calibri; font-size:13px; font-style: normal; color:#006666; font-weight: normal">
				<!--kolom1.1.3-->
				<img src="logoimg/bagpfl.jpg"/>
				</td>
				<td width="10%" style="font-family: Tahoma, Calibri; font-size:13px; font-style: normal; color:#006666; font-weight: normal">
				Masuk | Daftar
				</td>
				<td width="15%">
				<!--kolom1.1.5-->
				</td>
			</tr>
		</table>
	</td>
	</tr>
	<tr>
	<td width="100%">
		<!--kolom2-->
		<table width="100%">
			<tr>
				<td width="10%">
				<!--kolom2.1-->
				</td>
				<td width="80%">
				<!--kolom2.2-->
					<table width="100%">
						<tr>
							<td width="100%" align="center" valign="middle">
								<!--row 2.2.1-->
								<?php
						
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
					
								?>
								
							</td>
						</tr>
						<tr>
							<td width ="100%" height="30">
								<!--row 2.2.2-->
								
							</td>
						</tr>
						<tr>
							<td width="100%" align="left" valign="middle"> <!--row 2.2.2-->
							</td>
						</tr>
						<tr>
							<td width="100%" align="justify" valign="middle"> <!--row 2.2.2--> 
							</td>
						</tr>
						<tr>
							<td width="100%" align="justify" valign="middle" style="font-family: Calibri, Tahoma; font-size:20px; font-style: italic; 
							color:#FB92B2; font-weight: bolder"> <!--row 2.2.2-->Pretty for Ladies </td>
						</tr>
						<tr>
							<td width="100%" style="font-family: Tahoma, Calibri; font-size:13px; font-style: normal; color:#006666; 
							font-weight: normal">
								<table width="100%" border="0" style="font-family: Tahoma, Calibri; font-size:13px; font-style: normal; color:#006666; 
							    font-weight: normal">
								<tr>
								<td width="100%">
								<p>Citra Abadi Informatika is a company whose provide new opportunity in startup business. We provide a business not     							only to create money and profitability to ourselves, but also help others to encourage and reach that goal too. 
								We create business and solve problem as a solution together.</p>
								<p>Citra Abadi Informatika willing to serve all customers around the world, especialy Indonesia where technology is 		 								rapidly moving forward. We focus on solving day to day issues that can create income both users and company.</p>
 								<p>www.prettyforladies.com establish in 2016 based on the idea of expanding Pretty For Ladies online shopping that      							already operate since 2012. www.prettyforladies.com is a one stop shopping for women and children apparell, It is also
								a place where every reseller could have their own online store with their own domain and not losing her/his customer. 
								In www.prettyforladies.com, we will maintain the suppliers, resellers, and customer individualy and confidentially.</p> 								<p>As suppliers, in www.prettyforladies.com, you able to choose resellers to cooperate and also able to serve customers  								at the same time. As resellers, in www.prettyforladies.com, you will be able to choose which suppliers to follow and    							able to maintain your own domain to be seen byy your customers. As customers, in www.prettyforladies.com, you will have 								an intimate relationship with your suppliers and trusted resellers.</p> 
 								<p>www.prettyforladies.com  is a trusted website and will have a data check for each suppliers, resellers, and also  	  		 						customers. For payment gateway we also cooperate with a trusted company to have secured payment gateway for user 			 								convenience.</p> 
 								<p>www.prettyforladies.com always put our user satisfaction on the top of our target. In order to support it, we have 									 								a standby customers support and always have a routine update, whether a technology updates or a business update to 	 	 								serve users well.</p>

								<!--<?php
									
									$kon = mysql_connect("localhost","root","");
						
									If (!$kon)
									echo "Tidak terhubung!:".mysql_error();
							
									$db = "prettydb";
						
									mysql_select_db($db) or die ("Connection has crashed.");
						
									$qpic = "select * from xxprtitmmap where tipe like '%home'";
						
									$hasil = mysql_query($qpic,$kon);
									
									define ('cols',4);
									
			                        $col = 0;
									
									while ( $row = mysql_fetch_array($hasil))
									{
										if ($col == cols)
										{
											echo "</tr><tr>";
					
											$col = 1;
					
										}	
				
										else 
										{
											$col++;
										}
										
										echo "				
										<td align=\"center\" valign=\"middle\">
										<img src= \"$row[location]\" width=\"220\" height=\"210\"/><br>
										$row[CdItem]<br>
										Rp. $row[price],-
										</td>
										<td></td>";
									}
								?>-->
								</td>
								</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td width ="100%" height="30" align="right" style="font-family: Tahoma, Calibri; font-size:13px; font-style: normal; 
							color:#006666; font-weight: normal">
							<a href="index.php" style="text-decoration:none; color:#006666"> back </a>
							</td>
						</tr>
					</table>
				</td>
				<td width="10%">
				<!--kolom2.3-->
				</td>
			</tr>
		</table>
	</td>
	</tr>
	<tr>
		<td width="100%">
			<!--kolom3-->
			<table width="100%" height="150">
				<tr>
					<td width="10%">
						<!--kolom 3.1-->
					</td>
					<td width="80%" bgcolor="#F7C0C0">
						<!--kolom 3.2-->
						<table width="100%">
							<tr>
								<td width="25%" align="center" valign="top"> <!--col 3.2.1-->
									<img src="logoimg/pfl3.3.jpg" />
								</td>
								<td width="25%"> <!--col 3.2.2-->
									<table width="100%" >
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; font-style: normal;		                                             color:#006666; font-weight: bold"> 			                                			
										    <!--3.2.2.1--> 
										    Pretty for Ladies
											</td>
										</tr>
										<tr>
											<td height="5">											
											</td>
										</tr>
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; color:#006666" > 
											<!--3.2.2.2--> Tentang kami											
											</td>
										</tr>
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; color:#006666"> 
											<!--3.2.2.3--> Syarat dan Ketentuan											
											</td>
										</tr>
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; color:#006666"> 
											<!--3.2.2.3--> Kebijakan Privasi											
											</td>
										</tr>
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; color:#006666"> 
											<!--3.2.2.3--> Hubungi Kami											
											</td>
										</tr>
									</table>
								</td>
								<td width="25%"> <!--col 3.2.3-->
									<table width="100%">
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; font-style: normal;		                                             color:#006666; font-weight: bold"> 			                                			
										     Belanja
											</td>
										</tr>
										<tr>
											<td height="5">											
											</td>
										</tr>
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; color:#006666" > 
											 Cara Belanja											
											</td>
										</tr>
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; color:#006666" > 
											 Pembayaran											
											</td>
										</tr>
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; color:#006666" > 
											 Pengembalian											
											</td>
										</tr>
										<tr>
											<td height="14" align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; 
											color: #006666" > 
											<!--3.2.2.2--> 											
											</td>
										</tr>
									</table>
								</td>
								<td width="25%"> <!--col 3.2.4-->
									<table>
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; font-style: normal;		                                             color:#006666; font-weight: bold"> 			                                			
										     Jual
											</td>
										</tr>
										<tr>
											<td height="5">											
											</td>
										</tr>
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; color:#006666" > 
											 Cara Berjualan									
											</td>
										</tr>
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; color:#006666" > 
											 Pemasangan Iklan											
											</td>
										</tr>
										<tr>
											<td align="left" valign="middle" style="font-family: Tahoma, Calibri; font-size:13px; color:#006666" > 
											 Pengambilan Hasil Penjualan											
											</td>
										</tr>
										<tr>
											<td height="14">											
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
					<td width="10%">
						<!--kolom 3.3-->
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<!--<table width="100%" border="1">
	<tr>
	<td width="50%">
		kolom1
	</td>
	<td width="50%">
		kolom2
	</td>
	</tr>
	
</table>
<table width="100%" border="1">
	<tr>
	<td width="15%">
		kolom1
	</td>
	<td width="70%">
		kolom2
	</td>
	<td width="15%">
		kolom3
	</td>
	</tr>
	
</table>-->
</body>
</html>
