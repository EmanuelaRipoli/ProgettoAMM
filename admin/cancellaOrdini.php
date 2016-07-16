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


			<p> Cliccando su Cancella Ordini è possibile cancellare tutti gli ordini effettuati </p>

				
	        		<input id="cancella" type="submit" name="cancella" value="Cancella ordini"/>  
	        	


	        <div id="result"> </div>	
			</div>

		</div>

	</div>





 <script type="text/javascript">
   $(document).ready
    (
        function()
        {
            $('input[id="cancella"]').click
            (
                function()
                {
                    $.ajax
                    (
                        {
                            type: 'POST',
                            url:  '../admin/elimina.php',
                            data: {
                                "delete": true
                                },
                            
                            success: function(data) { 
                                 
                            	$('#result').html(data);
                            	$('#result').html("Ordini cancellati correttamente"); 
                            },
                            error:  function(data) { console.debug('Errore nella chiamata eliminaOrdini');} 
                        }

                    );
                }
            );
        }
    );
</script>
 <?php include('../inc/footer.php');?>
</body>