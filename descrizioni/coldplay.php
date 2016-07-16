<!DOCTYPE html>
<html>
<?php 
        session_start();
        include ('../inc/head.php'); 
        include ('../inc/top_menu.php');
    ?>

    <body>

    <div id="contenitore">

         <?php include ('../inc/lateral_menu.php');?>
         <div id="contenuti">

            <div class="box">
					<h2>Descrizione</h2>
					<h3>A Head Full Of Dreams</h3>
					<p><center>di Coldplay</br>
						pubblicato da Warner Music Ent.</br></center>
					</p>
					
					<img src="../img/copertina_coldplay.jpg" class="copertina_musica2" alt="Copertina Coldplay ">
										
					<h4> Tracklist</h4>
					<ol>
						<li>A Head Full od Dreams</li>
						<li>Birds</li>
						<li>Hymm for the Weekend</li>
						<li>Everglow</li>
						<li>Adventure of a Lifetime</li>
						<li>Fun</li>
						<li>Kaleidoscope</li>
						<li>Army of One</li>
						<li>Amazing Day</li>
						<li>Colour Spectrum</li>
						<li>Up &amp; Up</li>
					</ol>
					<a href="../servizi/musica.php"><strong>Torna alla musica</strong></a>
										
				</div>
		</div>
	</div>
<?php include('../inc/footer.php');?>
    </body>
</html>