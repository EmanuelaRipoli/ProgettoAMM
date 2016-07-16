<?php
	include ('../inc/top_menu.php');
include ('../sql/settings.php');
?>
<?php
	 if (isset($_POST['delete'])) 
        eliminaOrdini();
    /*
     * Funzione che cancella tutti gli ordini effettuati 
     */
	function eliminaOrdini(){
		$mysqli = new mysqli("localhost", "ripoliEmanuela", "tasso6062", "amm15_ripoliEmanuela");

		/*
		 * Inizio la transazione
		 */
		$mysqli->autocommit(false);	

		if(!$mysqli->query("DELETE FROM ordini"))
			$mysqli->rollback();
	
			
		$mysqli->commit();
		$mysqli->autocommit(true); 
		/*
		 * Fine transazione
		 */
		$mysqli->close();
	}
?>
