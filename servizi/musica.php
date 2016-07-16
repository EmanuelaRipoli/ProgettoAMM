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
			
				<!-- Primo Cd -->
				<div class="box">
					<h2>Musica</h2>
					<h3>On</h3>
					<p><center>di Elisa</br>
						pubblicato da Warner Music Ent.</br></center>
					</p>
					<img src="../img/copertina_elisa.jpg" class="copertina_musica" alt="Copertina Elisa - On">
					
					<div style="float:left; width:300px; height:250px; margin-left: 20px; ">
						<p><b>Prezzo 19,99&euro;</b><p>
						
						<p>Dettagli</br>
						Genere Pop Rock italiana</br>		
						Etichetta Warner Music Ent.</br>
						Pubblicato 25/03/2016</br>
						Formato Audio CD</br>
						EAN-13 8033120987199</p>
					</div>
					<div style="float:left; width:200px; height:250px;">
						<p><b>Disponibilit&agrave; immediata</b><p>
						
						<button align="right" type="submit" onclick="document.location.href='login.php'">Acquista ora</button>
						
						</br></br></br>
						<a href="../descrizioni/elisa.php"><strong>Descrizione</strong></a>
					</div>
					
					<div style="clear:both;"></div>		
				</div>
			
			
				<!-- Secondo Cd -->
				<div class="box">
					<h3>A Head Full Of Dreams</h3>
					<p><center>di Coldplay</br>
						pubblicato da Warner Music Ent.</br></center>
					</p>
					<img src="../img/copertina_coldplay.jpg" class="copertina_musica" alt="Copertina Coldplay - A Head Full Of Dreams">
					
					<div style="float:left; width:300px; height:250px; margin-left: 20px; ">
						<p><b>Prezzo 16,99&euro;</b><p>
						
						<p>Dettagli</br>
						Genere Pop Rock internazionale</br>		
						Etichetta Warner Music Ent.</br>
						Pubblicato 04/12/2015</br>
						Formato Audio CD</br>
						EAN-13 0825646982646</p>
					</div>
					<div style="float:left; width:200px; height:250px;">
						<p><b>Momentaneamente non disponibile</b><p>
						
						<button align="right" type="submit" onclick="document.location.href='login.php'">Acquista ora</button>
						
						</br></br></br>
						<a href="../descrizioni/coldplay.php"><strong>Descrizione</strong></a>

					</div>
					
					<div style="clear:both;"></div>	
				</div>
			
				<!-- Terzo Cd -->
				<div class="box">
					<h3>Simili</h3>
					<p><center>di Laura Pausini</br>
						pubblicato da Warner Music Ent.</br></center>
					</p>
					<img src="../img/copertina_laurapausini.jpg" class="copertina_musica" alt="Copertina Laura Pausini - Simili">
					
					<div style="float:left; width:300px; height:250px; margin-left: 20px; ">
						<p><b>Prezzo 14,99&euro;</b><p>
						
						<p>Dettagli</br>
						Genere Pop Rock italiana</br>		
						Etichetta Warner Music Ent.</br>
						Pubblicato 06/11/2015</br>
						Formato Audio CD</br>
						EAN-13 5054196804725</p>
					</div>
					
					<div style="float:left; width:200px; height:250px;">
						<p><b>Disponibilit&agrave; immediata</b><p>
						
						<button align="right" type="submit" onclick="document.location.href='login.php'">Acquista ora</button>
						
						</br></br></br>
						<a href="../descrizioni/laurapausini.php"><strong>Descrizione</strong></a>

					</div>
					
					<div style="clear:both;"></div>		
				</div>
							
			</div>
		</div>
		</div>
		<?php include('../inc/footer.php');?>
	</body>

</html>
