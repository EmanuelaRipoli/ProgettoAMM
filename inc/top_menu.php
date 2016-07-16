<!DOCTYPE html>
<html>
<body>

		
	<div id="header" >

                
            <img src="../img/mondo3.png" class="logo"/>
             <h1>MondoER</h1>

		<div id="logIn"	>

			<?php if (isset($_SESSION['logged'])): ?>

		       <ul>     
			   <li><a href='../servizi/logout.php'><span>Logout</span></a></li>
		       </ul>
	   
	        <?php else: ?>

		       <ul>
	      	   <li><a href='../servizi/login.php'><span>Login</span></a></li>     
               </ul>

			<?php endif; ?>
		</div>
	</div>

	<div id="header_2"></div>
	<div id="header_3"></div>


     <div id="contenitore">
    
        <div id="menu">	
		
	       <ul id="navigation" >
				
		    <li><a href="../servizi/libri.php"><strong>Libri</strong></a></li>
                    <li><a href="../servizi/ebook.php"><strong>eBook</strong></a></li>
                    <li><a href="../servizi/musica.php" ><strong>Musica</strong></a></li>
                    <li><a href="../servizi/cinema.php"><strong>Cinema</strong></a></li>
                    <li><a href="../servizi/games.php"><strong>Games</strong></a></li>
			
			
		</ul>
			
	</div>
    </div>

</body>
</html>