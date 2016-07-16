
 <div id="menu-sx">

        <?php if(isset($_SESSION['logged']) == false): ?>

            <p> <strong>Benvenuto da Mondo ER</strong> </p>


        <?php endif;?>


        <?php if(isset($_SESSION['logged'])): ?>

   
	            <p><strong>Bentornato:</br></strong> <?=$_SESSION['username'];?></p>

	            <p><strong>Grado:</br></strong> <?=$_SESSION['livello'];?></p>


	        
                <?php if($_SESSION['livello'] == "admin"): ?>

                    <ul>  
                    <li><a href="../admin/cercaOrdini.php"><strong>Cerca Ordini</strong></a></li> 
                    <li><a href="../admin/cancellaOrdini.php"><strong>Cancella Ordini</strong></a></li> 
                    </ul>


        <?php else: ?>

                <ul>
                <li><a href="../utente/ordina.php"><strong>Ordina</strong></a></li>
                <li><a href="../utente/visualizzaOrdini.php"><strong>I miei Ordini</strong></a></li>
                </ul>
               
        <?php endif;?>
        <?php endif;?>
     <ul>   
    <li><a href="../servizi/about.php"><strong>Info Progetto AMM</strong></a></li>
</ul>
 </div>


 
