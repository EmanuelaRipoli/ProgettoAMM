<!DOCTYPE html>
<html>
<?php 
		session_start(); 
		include ('../inc/head.php');
		include ('../inc/top_menu.php');

	?>

	<body>
	
		<div id="contenitore">
			<?php include ('../inc/lateral_menu.php'); ?>
			
			<div id="contenuti">
			
			<!-- Primo Libro -->
				<div class="box">
					<h2>Libri</h2>
					<h3>La strategia di Bosch</h3>
					<p><center>di Michael Connelly</br>
						pubblicato da Piemme</br></center>
					</p>
					<img src="../img/copertina_connelly.jpg" class="copertina_libri" alt="Copertina Michael Connelly - La strategia di Bosch">
					
					<div style="float:left; width:300px; height:250px; margin-left: 20px; ">
						<p><b>Prezzo 16,91&euro; </b><p>
						
						<p>Genere Giallo - Thriller</br>		
						Editore Piemme</br>
						Pubblicato 10/05/2016</br>
						Formato Rilegato</br>
						Pagine 372</br>
						Lingua italiano</br>
						Isbn o codice id 9788856653816</p>
					</div>
					<div style="float:left; width:200px; height:250px;">
						<p><b>Disponibilit&agrave; immediata</b><p>
						
						<button align="right" type="submit" onclick="document.location.href='login.php'">Acquista ora</button>
						
						</br></br>
						<a href="../descrizioni/connellyL.php"><strong>Descrizione</strong></a>
						</br></br>
						<a href="../servizi/ebook.php"><strong>eBook</strong></a>
					</div>
					
					<div style="clear:both;"></div>		
				</div>
				
			<!-- Secondo Libro -->	
				<div class="box">
					<h3>Dopo di Te</h3>
					<p><center>di Jojo Moyes</br>
						pubblicato da Mondadori</br></center>
					</p>
					<img src="../img/copertina_moyes.jpg" class="copertina_libri" alt="Copertina Jojo Moyes - Dopo di Te">
					
					<div style="float:left; width:300px; height:250px; margin-left: 20px; ">
						<p><b>Prezzo 15,30&euro; </b><p>
						
						<p>Genere Romanzo rosa</br>		
						Editore Mondadori</br>
						Pubblicato 05/05/2016</br>
						Formato Rilegato</br>
						Pagine 380</br>
						Lingua italiano</br>
						Isbn o codice id 9788804660583</p>
					</div>
					<div style="float:left; width:200px; height:250px;">
						<p><b>Momentaneamente non disponibile</b><p>
						
						<button align="right" type="submit" onclick="document.location.href='login.php'">Acquista ora</button>
						
						</br></br>
						<a href="../descrizioni/moyesL.php"><strong>Descrizione</strong></a>
						</br></br>
						<a href="../servizi/ebook.php"><strong>eBook</strong></a>
					</div>
					
					<div style="clear:both;"></div>		
				</div>
				
				<!-- Terzo Libro -->
				<div class="box">
					<h3>She</h3>
					<p><center>di Michelle Latiolais</br>
						pubblicato da WW Norton &amp; Co</br></center>
					</p>
					<img src="../img/copertina_latiolais.jpg" class="copertina_libri" alt="Copertina Michelle Latiolais - She">
					
					<div style="float:left; width:300px; height:250px; margin-left: 20px; ">
						<p><b>Prezzo 20,82&euro; </b><p>
						
						<p>Genere Literature &amp; Fiction </br>		
						Editore WW Norton &amp; Co</br>
						Pubblicato 03/05/2016</br>
						Formato Rilegato</br>
						Pagine 256</br>
						Lingua inglese</br>
						Isbn o codice id 9780393285055</p>
					</div>
					<div style="float:left; width:200px; height:250px;">
						<p><b>Disponibilit&agrave; immediata</b><p>
						
						<button align="right" type="submit" onclick="document.location.href='login.php'">Acquista ora</button>
						
						</br></br>
						<a href="../descrizioni/latiolaisL.php"><strong>Descrizione</strong></a>
						</br></br>
						<a href="../servizi/ebook.php"><strong>eBook</strong></a>
					</div>
					
					<div style="clear:both;"></div>		
				</div>
							
			</div>
		</div>
		</div>
		<?php include('../inc/footer.php');?>
	</body>

</html>
