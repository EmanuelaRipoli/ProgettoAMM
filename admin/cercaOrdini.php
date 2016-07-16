
<html>
<!--
<head>
 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
</head>
-->


		

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
       
          

            <h3>Ricerca Ordine</h3>


            <form action="../utente/function.php" method="post" id="ricerca">

             <table>
                <tr>
                    <td><label>Nome <span ></span></label></td>
                    <td><input type="text" name="nome" id="nome" /></td>
                </tr>

                <tr>
                    <td><label>Cognome <span></span></label></td>
                    <td><input type="text" name="cognome" id="cognome" /></td>
                </tr>

                
                    <td><label>Articolo<span></span></label></td>
                    <td><input type="text" name="articolo" id="articolo" /></td>
                </tr>

               
                <tr>
                    <td><input type="submit" name="ricerca" value="ricerca" /></td>

                </tr>

            </table>
            <p>   <li>* è possibile effettuare la ricerca compilando anche un solo campo</li> </br>
                <li>se si desidera visualizzare tutti gli ordini è sufficiente lasciare in bianco tutti i campi e cliccare sul bottone ricerca</li> </p>
            </form>

           

    	</div>
           <div id="result"></br></div>  
    	</div>  

    </div>


<script type="text/javascript">  

       $('#ricerca').submit( 

            function(event){  


                 event.preventDefault();  

                 term = $(this).serialize(); 

                 url = $(this).attr('action');  

                 $.post(  
                           url,  
                           term,  
                           function(data){$('#result').html(data);}  
                           ).error(function(){$('#result').html('impossibile inviare il modulo');})  
            }  
  )  
  </script> 
  <?php include('../inc/footer.php');?>  
  </body> 
</html> 