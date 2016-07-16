<!DOCTYPE html>
<html>
<?php 
		session_start(); 
		include ('../inc/head.php');
		include ('../inc/top_menu.php');

	?>

	<body>
	
		<div id="contenitore">
			<?php include ('../inc/lateral_menu.php');	?>
			
			
			<div id="contenuti">
			
			<!-- Primo Film -->
				<div class="box">
					<h2>Cinema</h2>
					<h3>American Sniper</h3>
					<p><center>di Clint Eastwood</br>
						pubblicato da Warner</br></center>
					</p>
					<img src="../img/copertina_sniper.jpg" class="copertina_libri" alt="Copertina American Sniper">
					
					<div style="float:left; width:300px; height:250px; margin-left: 20px; ">
						<p><b>Prezzo 19,99&euro; </b><p>
						
						<p>Genere Azione</br>		
						Editore Warner</br>
						Pubblicato 15/10/2015</br>
						Formato Blu Ray</br>
						Durata 126 minuti</br>
						EAN-13 5051891129764</p>
					</div>
					<div style="float:left; width:200px; height:250px;">
						<p><b>Disponibilit&agrave; immediata</b><p>
						
						<button align="right" type="submit" onclick="document.location.href='login.php'">Acquista ora</button>
						
						</br></br></br>
						<a href="../descrizioni/americansniper.php"><strong>Descrizione</strong></a>
					</div>
					
					<div style="clear:both;"></div>		
				</div>
				
			<!-- Secondo Film -->	
				<div class="box">
					<h3>Inside Out</h3>
					<p><center>di Peter Docter - Ronnie Del Carmen</br>
						pubblicato da The Walt Disney video</br></center>
					</p>
					<img src="../img/copertina_insideout.jpg" class="copertina_libri" alt="Copertina Inside Out">
					
					<div style="float:left; width:300px; height:250px; margin-left: 20px; ">
						<p><b>Prezzo 15,99&euro; </b><p>
						
						<p>Genere Animazione</br>		
						Editore The Walt Disney video</br>
						Pubblicato 20/02/2016</br>
						Formato DVD</br>
						Durata 90 minuti</br>
						EAN-13 8717418473891</p>
					</div>
					<div style="float:left; width:200px; height:250px;">
						<p><b>Disponibilit&agrave; immediata</b><p>
						
						<button align="right" type="submit" onclick="document.location.href='login.php'">Acquista ora</button>
						
						</br></br></br>
						<a href="../descrizioni/insideout.php"><strong>Descrizione</strong></a>
					</div>
					
					<div style="clear:both;"></div>		
				</div>
				
				<!-- Terzo Film -->
				<div class="box">
					<h3>Insurgent</h3>
					<p><center>di Robert Schwentke</br>
						pubblicato da Eagle Pictures</br></center>
					</p>
					<img src="../img/copertina_insurgent.jpg" class="copertina_libri" alt="Copertina Insurgent">
					
					<div style="float:left; width:300px; height:250px; margin-left: 20px; ">
						<p><b>Prezzo 12,90&euro; </b><p>
						
						<p>Genere Fantascienza</br>		
						Editore Eagle Pictures</br>
						Pubblicato 05/08/2015</br>
						Formato DVD</br>
						Durata 114 minuti</br>
						EAN-13 8031179939909</p>
					</div>
					<div style="float:left; width:200px; height:250px;">
						<p><b>Disponibilit&agrave; immediata</b><p>
						
						<button align="right" type="submit" onclick="document.location.href='login.php'">Acquista ora</button>
						
						</br></br></br>
						<a href="../descrizioni/insurgent.php"><strong>Descrizione</strong></a>
					</div>
					
					<div style="clear:both;"></div>		
				</div>
							
			</div>
		</div>
		</div>
		<?php include('../inc/footer.php');?>
	</body>

</html>
