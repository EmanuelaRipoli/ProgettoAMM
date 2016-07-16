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
					<h3>Inside Out</h3>
					<p><center>di Peter Docter - Ronnie Del Carmen</br>
						pubblicato da The Walt Disney video</br></center>
					</p>
					
					<img src="../img/copertina_insideout.jpg" class="copertina_libri2" alt="Copertina Inside Out">
					
					<p>Il Centro di controllo della mente di Rile, una ragazzina di undici anni, è localizzato nel 
					Quartier Generale, dove cinque Emozioni sono al lavoro, guidate dalla simpatica e ottimista Gioia, 
					la cui missione è di garantire la felicità di Rile. Quando la famiglia di Rile si trasferisce in 
					una nuova città, Gioia e Tristezza si avventurano in luoghi sconosciuti fra cui la Memoria a 
					Lungo Termine, Immagilandia, il Pensiero Astratto e la Cineproduzione, nel disperato tentativo 
					di tornare al Quartier Generale e da Rile. 
					</p>
					
					<a href="../servizi/cinema.php"><strong>Torna al cinema</strong></a>
										
				</div>
		</div>
	</div>
<?php include('../inc/footer.php');?>
    </body>
</html>