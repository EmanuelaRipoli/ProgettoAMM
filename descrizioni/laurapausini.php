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
					<h3>Simili</h3>
					<p><center>di Laura Pausini</br>
						pubblicato da Warner Music Ent.</br></center>
					</p>
					
					<img src="../img/copertina_laurapausini.jpg" class="copertina_musica2" alt="Copertina Laura Pausini">
										
					<h4> Tracklist</h4>
					<ol>
						<li>Lato Destro del Cuore</li>
						<li>Simili</li>
						<li>200 Note</li>
						<li>Innamorata</li>
						<li>Chiedilo al Cielo</li>
						<li>Ho Creduto a Me</li>
						<li>Nella Porta Accanto</li>
						<li>Il Nostro Amore Quotidiano</li>
						<li>Torner&ograve; &#40;con calma si vedr&agrave;&#41; </li>
						<li>Colpevole</li>
						<li>Io c'ero &#40;&#43; amore x favore&#41; </li>
						<li>Sono Solo Nuvole</li>
						<li>Per La Musica</li>
						<li>Lo Sapevi Prima Tu</li>
						<li>È A Lei Che Devo L'Amore</li>
					</ol>
					<a href="../servizi/musica.php"><strong>Torna alla musica</strong></a>
										
				</div>
		</div>
	</div>
<?php include('../inc/footer.php');?>
    </body>
</html>