<?php	

        	$db = mysql_connect("localhost", "ripoliEmanuela", "tasso6062", "amm15_ripoliEmanuela") or die ("impossibile connettersi al server");

	        mysql_select_db("amm15_ripoliEmanuela", $db) or die ("impossibile connettersi al database");

        	$nome = $_POST['nome'];
        	$cognome = $_POST['cognome'];
        	$articolo = $_POST['articolo'];

			$find=""; 

			if($nome!=""){//hai inputato il nome
	    		$find.=" nome LIKE '$nome%' AND "; 
			} 
			if($cognome!=""){//hai inputato il cognome 
	   		 $find.=" cognome LIKE '$cognome%' AND "; 
			}

			if($articolo!=""){//hai inputato l'articolo 
	   		 $find.=" articolo LIKE '$articolo%' AND "; 
			}
			 
			 

			$find.= " 1=1 "; 
			

		$query="SELECT * FROM ordini WHERE $find"; 

		$risultati=mysql_query($query);
 
 		$num=mysql_numrows($risultati);
 		?>
<?php if( $num == 0 ):?>
 		<div id="contenuti">		
			
			<div class="box">
				<p> <img src="../img/stop.png" </a><strong>Al momento non sono stati effettuati ordini</strong> </p>
			</div>
		</div>
	<?php endif;?>
 	<?php	mysql_close();
?>
	
<?php		$i=0;
   			  
   		while ($i < $num) {
		     $nome=mysql_result($risultati,$i,"Nome");
	         $cognome=mysql_result($risultati,$i,"Cognome");
	         $email=mysql_result($risultati,$i,"email");
	         $telefono=mysql_result($risultati,$i,"telefono");
	         $categoria=mysql_result($risultati,$i,"categoria");
	         $articolo=mysql_result($risultati,$i,"articolo");
	         $quantita=mysql_result($risultati,$i,"quantita");

      
 ?>

        <div id="contenuti">		
			
			<div class="box">
				
				<h1> Ordine n° <?php echo $i+1 ?> </h1>

	 	<div id="ordini">
	 	<table border="0" cellspacing="5" cellpadding="20">
	    <tr>
	  	 <th><font face="Arial, Helvetica, sans-serif">Nome</font></th>
	     <td><font face="Arial, Helvetica, sans-serif"><?php echo  $nome?></font></td>
	    </tr>
	    <tr>
	     <th><font face="Arial, Helvetica, sans-serif">Cognome</font></th>
	     <td><font face="Arial, Helvetica, sans-serif"><?php echo  $cognome?></font></td>
	    </tr>
	    <tr>
	     <th><font face="Arial, Helvetica, sans-serif">E-mail</font></th>
	     <td><font face="Arial, Helvetica, sans-serif"><?php echo  $email?></font></td>
	    </tr>
	    <tr>
	     <th><font face="Arial, Helvetica, sans-serif">Telefono</font></th>
	     <td><font face="Arial, Helvetica, sans-serif"><?php echo  $telefono?></font></td>
	    </tr>
	    <tr>
	     <th><font face="Arial, Helvetica, sans-serif">Categoria</font></th>
	     <td><font face="Arial, Helvetica, sans-serif"><?php echo  $categoria?></font></td>
	    </tr>
	    <tr>
	     <th><font face="Arial, Helvetica, sans-serif">Articolo</font></th>
	     <td><font face="Arial, Helvetica, sans-serif"><?php echo  $articolo?></font></td>
	    </tr>
	    <tr>
	     <th><font face="Arial, Helvetica, sans-serif">Quantit&agrave; </font></th>
	     <td><font face="Arial, Helvetica, sans-serif"><?php echo  $quantita?></font></td>
            </tr>
		</table>
		</div>
		</div>
			<?php $i++; }?> 
			</div>

	</div>

	





 




