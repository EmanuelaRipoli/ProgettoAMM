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
					<h3>On</h3>
					<p><center>di Elisa</br>
						pubblicato da Warner Music Ent.</br></center>
					</p>
					
					<img src="../img/copertina_elisa.jpg" class="copertina_musica2" alt="Copertina Elisa">
										
					<h4> Tracklist</h4>
					<ol>
						<li>Bad Habits</li>
						<li>Rain Over My Head</li>
						<li>Love Me Forever</li>
						<li>Love as a Kinda War</li>
						<li>Hold On for a Minute</li>
						<li>Waste Your Time On Me</li>
						<li>With the Hurt</li>
						<li>Catch the Light</li>
						<li>Peter Pan</li>
						<li>No Hero</li>
						<li>Ready Now</li>
						<li>Bruciare Per Te</li>
						<li>Sorrido Già</li>
					</ol>
					<a href="../servizi/musica.php"><strong>Torna alla musica</strong></a>
										
				</div>
		</div>
	</div>
<?php include('../inc/footer.php');?>
    </body>
</html>