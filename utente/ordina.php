<!DOCTYPE html>
<html>
<?php
    session_start();
    include ('../inc/head.php'); 
    include ('../inc/top_menu.php');


?>



   <?php  if(isset($_POST['ordina'])):

        $errore = true;


        $db = mysql_connect("localhost", "ripoliEmanuela", "tasso6062", "amm15_ripoliEmanuela") or die ("impossibile connettersi al server");

       mysql_select_db("amm15_ripoliEmanuela", $db) or die ("impossibile connettersi al database");

        /*memorizzo i dati inseriti dall utente*/
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $email= $_POST['email'];
        $telefono = $_POST['telefono'];
        $categoria = $_POST['categoria'];
        $articolo = $_POST['articolo'];
        $quantita = $_POST['quantita'];
    ?>
        
        <?php if(trim($nome) == '' || trim($cognome) == ''|| trim($email) == ''|| trim($telefono) == ''|| trim($categoria) == ''||trim($articolo) == ''|| trim($quantita) == ''): ?> 
 
        <div class="messaggi"><img src="../img/stop.png" </a><strong>Errore, devi compilare tutti i campi</strong>  </div>

            <?php  $errore = false; ?>

        <?php endif;?> 

      
        <?php if($errore):?>
        
        <?php
            $query = "INSERT INTO ordini (nome, cognome, email, telefono, categoria, articolo, quantita)
            VALUES ('$nome','$cognome','$email','$telefono','$categoria','$articolo','$quantita')"; 

            $result = mysql_query($query);  

        ?>
          
        <?php if($result):?>

            <div class="messaggi"><img src="../img/spunta-blu.png" </a><strong>Inserimento avvenuto correttamente</strong></div>;
        
        <?php else: ?>
            
            <div class="messaggi"><img src="../img/stop.png" </a><strong>Inserimento non eseguito <?=mysql_error();?></strong><br> </div>;
        <?php endif;?>
        
        <?php endif;?>

       <?php  mysql_close();/*chiudo la connessione*/?>

       
    <?php endif;?>

 
<body>


	  <div id="contenitore">
        <?php  include ('../inc/lateral_menu.php');?>

        <div id="contenuti">
        <div class="box">
        
            <h3>Ordina</h3>


            <form action="ordina.php" method="post" id="ordina">

             <table>
                <tr>
                    <td><label>Nome <span class="required">*</span></label></td>
                    <td><input type="text" name="nome" id="nome" /></td>
                </tr>
                <tr>
                    <td><label>Cognome <span class="required">*</span></label></td>
                    <td><input type="text" name="cognome" id="cognome" /></td>
                </tr>
                <tr>
                    <td><label>Email <span class="required">*</span></label></td>
                    <td><input type="text" name="email" id="email" /></td>
                </tr>
                <tr>
                    <td><label>Telefono <span class="required">*</span></label></td>
                    <td><input type="text" name="telefono" id="telefono" /></td>
                </tr>
                <tr>
                    <td><label>Categoria<span class="required">*</span></label></td>
                    <td><input type="text" name="categoria" id="categoria" /></td>									
                </tr>
                <tr>
                    <td><label>Articolo<span class="required">*</span></label></td>
                    <td><input type="text" name="articolo" id="articolo" /></td>
                </tr>
                <tr>
                    <td><label>Quantit&agrave; <span class="required">*</span></label></td>
                    <td><input type="number" name="quantita" id="quantita" ></td>
                </tr>
                <tr>
                    <td><input type="submit" name="ordina" value="ordina" /></td>
                    <td><img src="spinner.gif" id="loading" style="display:none" /></td>
                </tr>
            </table>

             <li> <img src="../img/attenzione.gif"/> Avviso: I campi con l'asterisco sono obbligatori.</li> 
            </form>
    </div>
</div>

</div>
<?php include('../inc/footer.php');?>

</body>
</html>
