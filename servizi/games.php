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
			
			<!-- Primo Gioco -->
				<div class="box">
					<h2>Games</h2>
					<h3>Fifa 16</h3>
					<p><center>	pubblicato da Electronic Arts</br></center>
					</p>
					<img src="../img/copertina_fifa16.jpg" class="copertina_libri" alt="Copertina Fifa 16">
					
					<div style="float:left; width:300px; height:250px; margin-left: 20px; ">
						<p><b>Prezzo 39,26&euro; </b><p>
						
						<p>Genere Sportivo</br>		
						Editore Electronic Arts</br>
						Pubblicato 29/09/2015</br>
						Formato Sony PS4</br>
						Pegi 3+</br>
						EAN-13 5035224112876</p>
					</div>
					<div style="float:left; width:200px; height:250px;">
						<p><b>Disponibilit&agrave; immediata</b><p>
						
						<button align="right" type="submit" onclick="document.location.href='login.php'">Acquista ora</button>
						
						</br></br></br>
						<a href="../descrizioni/fifa16.php"><strong>Descrizione</strong></a>
					</div>
					
					<div style="clear:both;"></div>		
				</div>
			

			<!-- Secondo Gioco -->	
				<div class="box">
					<h3>Just Dance 2016</h3>
					<p><center>pubblicato da Ubisoft</br></center>
					</p>
					<img src="../img/copertina_justdance16.jpg" class="copertina_libri" alt="Copertina Just Dance 2016">
					
					<div style="float:left; width:300px; height:250px; margin-left: 20px; ">
						<p><b>Prezzo 28,49&euro; </b><p>
						
						<p>Genere Social Games</br>		
						Editore Ubisoft</br>
						Pubblicato 22/10/2015</br>
						Formato Nintendo wii</br>
						Pegi 3+</br>
						EAN-13 3307215897812</p>
					</div>
					<div style="float:left; width:200px; height:250px;">
						<p><b>Disponibilit&agrave; immediata</b><p>
						
						<button align="right" type="submit" onclick="document.location.href='login.php'">Acquista ora</button>
						
						</br></br></br>
						<a href="../descrizioni/justdance2016.php"><strong>Descrizione</strong></a>
					</div>
					
					<div style="clear:both;"></div>		
				</div>
				
				<!-- Terzo Gioco -->
				<div class="box">
					<h3>NBA 2K16</h3>
					<p><center>pubblicato da Take Two Interactive</br></center>
					</p>
					<img src="../img/copertina_nba2k16.jpg" class="copertina_libri" alt="Copertina NBA 2K16">
					
					<div style="float:left; width:300px; height:250px; margin-left: 20px; ">
						<p><b>Prezzo 49,90&euro; </b><p>
						
						<p>Genere Sportivo</br>		
						Editore Take Two Interactive</br>
						Pubblicato 29/09/2015</br>
						Formato X-Box 360</br>
						Pegi 3+</br>
						EAN-13 5026555264778</p>
					</div>
					<div style="float:left; width:200px; height:250px;">
						<p><b>Disponibilit&agrave; immediata</b><p>
						
						<button align="right" type="submit" onclick="document.location.href='login.php'">Acquista ora</button>
						
						</br></br></br>
						<a href="../descrizioni/nba2k16.php"><strong>Descrizione</strong></a>
					</div>
					
					<div style="clear:both;"></div>		
				</div>
							
			</div>
		</div>
		</div>
		<?php include('../inc/footer.php');?>
	</body>

</html>
