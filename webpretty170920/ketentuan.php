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
							echo "<img src = \"$row[location]\" />";
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
							color:#FB92B2; font-weight: bolder"> <!--row 2.2.2-->Syarat dan Ketentuan </td>
						</tr>
						<tr>
							<td width="100%" style="font-family: Tahoma, Calibri; font-size:13px; font-style: normal; color:#006666; 
							font-weight: normal">
								<table width="100%" border="0" style="font-family: Tahoma, Calibri; font-size:13px; font-style: normal; color:#006666; 
							    font-weight: normal">
								<tr>
								<td width="100%">
								<p>Berikut  ini memuat syarat-syarat dan ketentuan penggunaan layanan situs Prettyforladies.com yang berlaku bagi   		   								Pengguna untuk dapat menggunakan situs Prettyforladies.com. PT Citra Abadi Informatika (CAI) selanjutnya dapat disebut 			 								juga dengan istilah "Kami". Kami mohon untuk dapat membaca perjanjian ini dengan seksama. Anda perlu membaca, memahami,  								menerima dan menyetujui semua persyaratan dan ketentuan di bawah ini sebelum menggunakan aplikasi dan/atau menerima 		 								konten situs. Dengan menggunakan aplikasi dan/atau melanjutkan akses terhadap situs ini, berarti Anda menyetujui  		 								persyaratan dan ketentuan dari Kami dan/atau setuju untuk dapat menerima layanan dan akses atas seluruh konten yang    	 								terdapat dalam aplikasi ini. Jika Anda tidak menerima dan menyetujui hal tersebut, Anda tidak diperkenankan untuk   	 								mengakses lebih lanjut situs Prettyforladies.com dan dipersilakan untuk meninggalkan situs Prettyforladies.com.</p>
								<p>Berikut  ini memuat syarat-syarat dan ketentuan penggunaan layanan situs Prettyforladies.com yang berlaku bagi    		 								Pengguna untuk dapat menggunakan situs Prettyforladies.com. PT Citra Abadi Informatika (CAI) selanjutnya dapat disebut 		 								juga dengan istilah "Kami". Kami mohon untuk dapat membaca perjanjian ini dengan seksama. Anda perlu membaca, memahami, 								menerima dan menyetujui semua persyaratan dan ketentuan di bawah ini sebelum menggunakan aplikasi dan/atau menerima 	 								konten situs. Dengan menggunakan aplikasi dan/atau melanjutkan akses terhadap situs ini, berarti Anda menyetujui  		 								persyaratan dan ketentuan dari Kami dan/atau setuju untuk dapat menerima layanan dan akses atas seluruh konten yang   		 								terdapat dalam aplikasi ini. Jika Anda tidak menerima dan menyetujui hal tersebut, Anda tidak diperkenankan untuk   	 								mengakses lebih lanjut situs Prettyforladies.com dan dipersilakan untuk meninggalkan situs Prettyforladies.com.</p>
								<p style="font-family: Calibri, Tahoma; font-size:18px; font-style: italic; color:#FB92B2; font-weight: bolder">
								1. Pendahuluan	
								</p>
								<p>Dalam Perjanjian ini yang dimaksud dengan "Pengguna" adalah orang perseorangan, baik warga negara Indonesia, warga   								negara asing, maupun badan hukum dengan kemampuan menggunakan komputer, jaringan, komputer dan/atau media elektronik    							lainnya mampu untuk mengakses situs Prettyforladies.com sesuai dengan keperluannya.</p>
								<p>Dengan mengakses atau menggunakan situs Prettyforladies.com ini, Pengguna di atas secara sadar dan tanpa paksaan      							dari pihak manapun menyatakan diri setuju untuk menerima semua syarat dan ketentuan yang tercantum dalam Perjanjian     							ini.</p>
								<p>Kami dapat mengubah atau memperbarui Perjanjian ini setiap waktu dengan mencantumkan Perjanjian yang telah diubah    							atau diperbarui di dalam situs dan Pengguna diwajibkan untuk setiap saat membaca persyaratan dan ketentuan baru dan     							dianggap telah menyetujui perubahan atau pembaruan tersebut apabila setelah dicantumkan di dalam situs      	     		 	                            Prettyforladies.com.</p>
								<p>Kami dengan ini menyatakan tidak bertanggung jawab atas isi Pranala di luar situs Prettyforladies.com atau situs     							yang disediakan atau dipasang oleh pihak ketiga (Isi Pihak Ketiga), baik yang dimasukkan oleh pengguna yang tidak      	  								disebutkan namanya atau oleh penyedia isi yang memperoleh pembayaran, atau bukan dibuat oleh kami. 
								Dengan ditampilkannya Isi Pihak Ketiga dalam situs Prettyforladies.com, tidak berarti bahwa Kami maupun pihak           						terafiliasi, pejabat, petugas atau pegawainya menjalin hubungan kerja sebagai agen penjualan dengan pihak ketiga      	 								tersebut. Isi Pihak Ketiga sepenuhnya merupakan tanggung jawab pihak penyedia isi. Kami tidak menjamin bahwa semua isi 	 								pihak ketiga akurat, tidak melanggar susila, absah atau adalah yang sesungguhnya, dan tidak bertanggung jawab jika   			 								Pengguna menganggap bahwa isi pihak ketiga tersebut dapat dipercaya isinya.</p>
								<p style="font-family: Calibri, Tahoma; font-size:18px; font-style: italic; color:#FB92B2; font-weight: bolder">
								2. Ketentuan umum Pengguna
								</p>
								<p>2.1. Saat mengunjungi dan menggunakan situs Prettyforladies.com, termasuk setiap fitur dan layanannya, setiap 	 										   										Pengguna tidak diperkenankan untuk:</p>
										 <ul>
										 <li>memberikan informasi dan konten yang salah, tidak akurat, bersifat menyesatkan, bersifat memfitnah,   	          									 bersifat asusila, mengandung pornografi, bersifat diskriminasi atau rasis.</li>
										 <li>mengambil tindakan yang dapat mengacaukan sistem saran atau masukan dan atau peringkat (seperti     	                                             menampilkan, mengimpor atau mengekspor informasi atau masukan dari situs luar atau menggunakannya untuk 		                                             tujuan yang tidak terkait dengan situs Prettyforladies.com).</li>
										 <li>menyebarkan spam, hal-hal yang tidak berasusila, atau pesan elektronik yang berjumlah besar, pesan 	 		      										 bersambung.</li>
										 <li>menyebarkan virus atau seluruh teknologi lainnya yang sejenis yang dapat merusak dan/atau merugikan situs 	   											 Prettyforladies.com, afiliasinya dan pengguna lainnya.</li>
										 <li>memasukkan atau memindahkan fitur pada situs Prettyforladies.com tidak terkecuali tanpa sepengetahuan dan 	                                  			 persetujuan dari Kami.</li>
										 <li>menyimpan, meniru, mengubah, atau menyebarkan konten dan fitur situs Prettyforladies.com, termasuk cara 	                                             pelayanan, konten, hak cipta dan intelektual yang terdapat pada situs Prettyforladies.com.</li>
										 <li>mengambil atau mengumpulkan informasi dari pengguna lain, termasuk alamat email, tanpa sepengetahuan 	 	    										 pengguna lain.</li>
										 </ul>
								<p>2.2. Pengguna dianggap menerima dan menyetujui ketentuan tentang Privacy Policy yang tercantum di situs 		  	 	    									Prettyforladies.com pada saat digunakan.</p>
								
								<p>2.3.	Pengguna mengetahui dan menyetujui bahwa harga yang tercantum pada situs Prettyforladies.com dapat mengalami 	  										perubahan secara sewaktu-waktu dan tanpa pemberitahuan terlebih dahulu.</p>
								
								<p>2.4.	Dengan memilih untuk membuat akun sebagai member dari situs Prettyforladies.com, Pengguna Terdaftar akan 	 	   										membuat sebuah nama akun dan password ketika menyelesaikan proses registrasi.</p>
								
								<p>2.5.	Pengguna Terdaftar bertanggung jawab untuk menjaga kerahasiaan dan keamanan atas nama akun dan password serta 		 										Pengguna Terdaftar bertanggung jawab sepenuhnya atas segala kegiatan yang diatasnamakan nama akun Pengguna 	 	 										Terdaftar. Pengguna Terdaftar menyetujui untuk:</p>
								
										 <ul>
										 <li>Segera memberitahukan kepada Kami setiap adanya dugaan penggunaan yang tidak sah/valid dengan 	 	 	 											                                             pengatasnamaan nama akun Pengguna terdaftar.
										 </li>
										 <li>Memastikan bahwa Pengguna Terdaftar keluar(log out) dari akun pada setiap akhir dari aktivitas pada situs 	  											 Prettyforladies.com untuk menghindari kemungkinan terjadinya penyalahgunaan atas akun yang bersangkutan.
										 </li>
										 </ul>
									
								<p>2.6.	Kami berhak sepenuhnya untuk membatasi, memblokir atau mengakhiri pelayanan dari suatu akun, melarang akses ke 	 										situs Prettyforladies.com dan konten, layanan, dan memperlambat atau menghapus hosted content, dan mengambil 	      									langkah-langkah hukum untuk menjaga Pengguna Terdaftar atau pengguna lain jika Kami menganggap Pengguna 	  	 										Terdaftar atau pengguna lain melanggar hukum-hukum yang berlaku, melanggar hak milik intelektual dari pihak 	 										terkait, atau melakukan suatu pelanggaran yang melanggar hal-hal yang tertera pada Perjanjian ini.</p>
								<p style="font-family: Calibri, Tahoma; font-size:18px; font-style: italic; color:#FB92B2; font-weight: bolder">
								3. Hak dan Kewajiban Pengguna
								</p>
								<p>3.1.	Setiap Pengguna berkewajiban untuk membayar penuh atas transaksi yang dilakukan sesuai dengan ketentuan 	 	 										transaksi dan pembayaran.
								</p>
								<p>3.2.	Setiap Pengguna bertanggung jawab sepenuhnya jika Pengguna melakukan pelanggaran terhadap ketentuan-ketentuan 	                           				yang telah dirincikan pada Perjanjian ini, dan menyetujui untuk melepaskan Kami beserta afiliasinya atas 	 	                                        seluruh kerugian yang diakibatkan oleh pelanggaran yang dilakukan oleh Pengguna.
								</p>
								<p>3.3.	Pengguna berhak mendapatkan barang/produk yang sesuai dan telah dibayar penuh sebelumnya oleh Pengguna, dan, 	 										tidak dapat dikembalikan atau dibatalkan secara sepihak oleh Pengguna apabila tidak sesuai dengan ketentuan 	 										yang ditetapkan oleh Kami.
								</p>
								<p>3.4.	Pengguna menyetujui bahwa dalam hal terdapat ketidaksesuaian informasi yang terjadi antara program promo dengan 										program regular yang terdapat pada situs Prettyforladies.com, maka Kami atas kebijakannya sendiri secara 	 	  										mutlak, dapat melakukan pembatalan transaksi pembelian barang oleh Pengguna, ataupun tetap menindaklanjuti 	 	    									proses transaksi pembelian barang yang dilakukan oleh Pengguna, dengan melakukan 		 	 	 	  	   	    									penyesuaian-penyesuaian/koreksi yang diperlukan sehubungan dengan adanya ketidaksesuaian informasi yang terjadi   										sebagaimana dimaksud di atas.
								</p>
								<P style="font-family: Calibri, Tahoma; font-size:18px; font-style: italic; color:#FB92B2; font-weight: bolder">
								4. Ketentuan Pembayaran
								</P> 
								<p>4.1.	Setiap Pengguna berhak untuk memilih metode pembayaran yang telah disediakan oleh Kami, yang mana Pengguna 		 										merasa lebih nyaman dan mudah dalam bertransaksi dengan situs Prettyforladies.com, dimana setiap biaya 		 	 										transaksi pembayaran akan ditangguhkan kepada pengguna tersebut.
								</p>
								<p>4.2.	Setiap Pengguna berkewajiban untuk membayar penuh atas pemesanan yang dilakukan dalam jangka waktu yang 	 	 										ditentukan oleh Kami spesifik untuk setiap metode pembayaran sebelum Kami dapat memproses lebih lanjut atas  	 										pemesanan Pengguna. Bilamana Pengguna belum melaksanakan pembayaran dalam kurun waktu yang ditentukan maka Kami                                        berhak menyatakan bahwa pemesanan telah dibatalkan oleh Pengguna tersebut.
								</p>
								<p>4.3.	Setiap Pengguna dapat mengklarifikasi transaksi pembayaran yang telah dilaksanakan secara langsung ke penyedia 	 										jasa perbankan yang bekerja sama dengan Kami sesuai dengan syarat dan ketentuan yang berlaku.
								</p>
								<p>4.4.	Dalam hal terdapat kewajiban Kami untuk melakukan pengembalian dana/refund karena satu dan lain hal atas 		                                        transaksi yang terjadi di situs Prettyforladies.com, maka Kami akan segera menghubungi Pengguna melalui sarana                                        komunikasi yang tersedia (email ataupun telepon) untuk meminta konfirmasi dan data-data Pengguna yang   	  	 										diperlukan, untuk keperluan proses refund tersebut. Apabila dalam jangka waktu 14 (empat belas) hari kalender 		 										ternyata Pengguna tidak dapat dihubungi ataupun tidak memberikan respon kepada Kami, maka Kami tidak 	 	 	 										bertanggungjawab atas keterlambatan proses refund sebagaimana dimaksud, dan oleh karenanya Kami juga tidak 	 	 										dapat dimintakan pertanggungjawaban untuk membayar denda, pembayaran bunga/interest dan sanksi lainnya 		 	 										sehubungan dengan keterlambatan proses refund tersebut.
								</p>
								<p style="font-family: Calibri, Tahoma; font-size:18px; font-style: italic; color:#FB92B2; font-weight: bolder">
								5. Ketentuan Pengiriman
								</p> 
								<p>5.1.	Kami hanya dapat mengirimkan setiap barang yang telah dipesan oleh Pengguna setelah mengetahui dan mendapatkan 	 										dana dari Pengguna secara tepat dan sesuai dengan nilai barang yang dibeli Pengguna.
								</p>
								<p>5.2.	Kami bekerja sama dengan perusahaan logistik terpercaya yang akan mengirimkan setiap pemesanan Pengguna.
								</p>
								<p>5.3.	Kami mempercayakan logistik yang telah menjalin kerja sama dengan Kami dalam menerakan layanan, biaya, estimasi               							waktu pengiriman, dan garansi pengiriman yang tertera pada situs Prettyforladies.com.
								</p>
								<p style="font-family: Calibri, Tahoma; font-size:18px; font-style: italic; color:#FB92B2; font-weight: bolder">
								6. Pembatasan Tanggung Jawab Kami
								</p>
								<p>6.1.	Kewajiban Kami hanyalah sebatas pada penyediaan situs Prettyforladies.com.
								</p>
								<p>6.2.	Barang-barang yang dijual di situs Prettyforladies.com merupakan tanggung jawab sepenuhnya dari penjual yang 	     									menawarkan barang-barangnya melalui situs Prettyforladies.com.
								</p>
								<p>6.3.	Proses pengiriman barang akan dikoordinasikan oleh Kami dengan penyedia jasa pengiriman terpercaya.
								</p>
								<p>6.4.	Bentuk kerugian yang dikarenakan dari tindakan pengguna yang melanggar Perjanjian ini sepenuhnya adalah 		 										tanggung jawab Pengguna dimana Kami lepas sepenuhnya dari tuntutan pihak-pihak yang dirugikan.
								</p>
								<p>6.5.	Barang yang sudah dibeli oleh Pengguna dan dibayar dengan dana dari Pengguna secara tepat dan sesuai dengan 		 										nilai barang yang dibeli Pengguna, tidak dapat dikembalikan atau dibatalkan secara sepihak oleh Pengguna, dan 		 										apabila setelah proses pembayaran dinyatakan berhasil dan kemudian barang yang dibeli Pengguna tidak ada, maka 		 										Prettyforladies.com akan mencari alternatif barang pengganti atau melakukan pengembalian dana sesuai dengan 		 										nilai yang telah dibayarkan oleh pembeli.
								</p>
								<p>6.6.	Kami dan Pengguna merupakan hubungan independen dan tidak ada hubungan keagenan, kemitraan, usaha patungan, 		 										karyawan-perusahaan atau pemilik waralaba-pewaralaba yang akan dibuat atau dibuat dengan adanya Perjanjian ini.
								</p>
								<p>6.7.	Materi yang ditayangkan di situs Kami disediakan tanpa ketentuan atau jaminan apapun dalam hal ketepatannya. 	 										Sejauh diijinkan oleh hukum, Kami dan para pihak ketiga yang berhubungan dengan Kami dengan ini secara tegas 		 										mengecualikan.
								</p>
								<p>6.8.	Semua ketentuan, jaminan dan syarat lain yang dapat dinyatakan secara tidak langsung oleh undang-undang, hukum 	  										adat atau hukum keadilan.
								</p>
								<p>6.9.	Kewajiban atas kehilangan atau kerugian langsung, tidak langsung atau yang merupakan akibat yang ditanggung 		 										oleh Pengguna dalam hubungannya dengan situs Kami atau dalam hubungannya dengan penggunaan, ketidakmampuan 		 										menggunakan, atau akibat dari penggunaan situs Kami, setiap situs web yang terkait dengannya dan setiap materi 	 										yang ditempatkan padanya, termasuk, namun tidak terbatas pada, kewajiban atas:
								</p>
										 <ul>
										 <li>kehilangan penghasilan atau pendapatan;
										 </li>
										 <li>kehilangan bisnis;
										 </li>
										 <li>kehilangan laba atau kontrak;
										 </li>
										 <li>kehilangan penghematan yang telah diantisipasi sebelumnya;
										 </li>
										 <li>kehilangan data;
										 </li>
										 <li>kehilangan goodwill;
										 </li>
										 <li>waktu manajemen atau kantor yang tersia-siakan; dan
										 </li>
										 <li>kehilangan atau kerugian lain apapun jenisnya, terlepas dari bagaimana hal itu timbul dan apakah 	 	 	 											 disebabkan oleh kelalaian, pelanggaran terhadap kontrak atau lainnya, meskipun dapat diperkirakan 	 	  	 											 sebelumnya.
										 </li>
										 </ul>
								<p style="font-family: Calibri, Tahoma; font-size:18px; font-style: italic; color:#FB92B2; font-weight: bolder">
								7. Hak Milik Intelektual
								</p>
								<p>Kami adalah pemilik tunggal atau pemegang sah semua hak atas Situs dan Isi dalam situs Prettyforladies.com. 		 								                                   Situs Prettyforladies.com dan Isinya mencakup hak milik intelektual yang dilindungi oleh undang-undang hak cipta dan                                   undang-undang yang melindungi kekayaan intelektual lainnya yang berlaku di seluruh dunia. Semua hak milik dan hak  	                                   milik intelektual atas situs Prettyforladies.com dan Isinya tetap pada Kami, afiliasinya atau pemilik lisensi Isi 	                                   situs Prettyforladies.com. Semua hak yang tidak dicantumkan di dalam Perjanjian ini atau oleh Kami dengan ini 	 	                                   dilindungi undang-undang.
								</p>
								
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
