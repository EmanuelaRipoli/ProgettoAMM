

 <?php include ('../inc/head.php');?>
 
  <?php include ('../inc/top_menu.php'); ?>

<?php




    session_start();

    $error = false;

   
    if(isset($_POST['goLogin']))
    {

        $_SESSION['logged'] = false;
        $user = $_POST['username'];
        $pass = md5($_POST['password']);

        $mysqli = new mysqli();
        $mysqli ->connect("localhost", "ripoliEmanuela", "tasso6062", "amm15_ripoliEmanuela");
        
        if($mysqli->connect_errno!= 0){
        // gestione errore
        $idErrore= $mysqli->connect_errno;
        $msg= $mysqli->connect_error;
        error_log("Errore nella connessione al server $idErrore: $msg", 0);
        echo"Errore nella connessione $msg";}
        else{// nessun errore 
            /*echo"Connessione Stabilita";*/
        }
        
        if(trim($user) == '' || trim($pass) == ''){ 
            $error = true;
            $_SESSION['logged'] = false;

        } 

       $query ="select * from utenti where username='$user' AND password='$pass'" ;
        $res = $mysqli->query($query);

       
        if($res->num_rows == 1)
        {
           $array = mysqli_fetch_array($res);
            $_SESSION['username']  = $array['username'];
            $_SESSION['livello']= $array['livello'];
            $_SESSION['logged']= true;
            $mysqli->close(); 
       
            header("Location: libri.php");/**se l'autenticazione va a buon fine, si reindirizza l'utente alla pagina di benvenuto**/
           

        }
        else
        {
           $error = true;
            $_SESSION['logged'] = false;
            
        }
        
        

    }

   ?>
<body> 


    
        
        <div id="contenitore">
        <?php include('../inc/lateral_menu.php'); ?>
        <div id="contenuti">

            <div class="box">
            <h1>Effettua l'accesso</h1>
          <?php if($error): ?>
                <div class="login-error"> Login errato, riprova </div>
            <?php endif;?>
            <form style="margin:20px 0 20px 0;" method="post" action="login.php">
                <label for="username">Username</label> <input type="text" name="username" id="username"/>
				</br>
                <label for="password">Password </label><input type="password" name="password" id="password" />
				</br>                
				<input type="submit" value="Login" name="goLogin"/>
            </form>
            
            <p> Username: amministratore, password: amministratore </p>
            <p> Username: utente, password: utente </p>

        </div>            
    </div>
</div>
 <?php include('../inc/footer.php');?>
</body>
</html>



                            
