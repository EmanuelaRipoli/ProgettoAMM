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
			
			<div class="box">
			
        	<h1>Informazioni sul progetto</h1>
        	<p>Url progetto : <a href="http://spano.sc.unica.it/amm2015/ripoliEmanuela/servizi/libri.php" target="_blank" onclick="window.open(this.href);return false;">MondoER</a></br></p>
            <p> Il progetto permette di ordinare libri, ebook, cd musicali, film e giochi.</br></p>
            <p>Sono presenti due ruoli: utente e amministratore</br></p>
            <p><strong>Utente</strong></br></p>
            <p>l'utente è in grado di ordina uno o pi&ugrave; articoli e visualizzare i proprie ordini</br></p>
            <p><strong>Amministratore</strong></br></p>
            <p>l'amministratore &egrave; in grado di visualizzare gli ordini effettuati presso MondoER secondo tre criteri di ricerca:</br> Nome, Cognome, Articolo
            </br>&Egrave; possibile inoltre cancellare tutti gli ordini effettuati presso MondoER</p>

            <p><strong> Requisiti soddisfatti: </strong>
                <ul>
                    <li>Utilizzo di HTML e CSS</li>
                    <li>Utilizzo di PHP e MySQL</li>
                    <li>Due ruoli (amministratore ed utente)</li>
                    <li>Caricamento ajax dei risultati della ricerca degli ordini (ruolo amministratore)</li>
                    <li>Transazione: la funzione eliminaOrdini cancella tutti gli ordini dal database</li>
                    <li>Credenziali di autenticazione</li>
                </ul>
            </p>

			</div>
			</div>
		</div>
		<?php include('../inc/footer.php');?>
	</body>

</html>