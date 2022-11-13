<?php session_start(); 


    setcookie('pseudo', 'Shaidox_');
    setcookie('id', 18);

    if(isset($_COOKIE['age']))
    {
        echo "l'element existe" . $_COOKIE['pseudo'];
    }
    else
    {
        echo "l'element existe pas";
    }

    echo "id: " . $_COOKIE['id'];




    // delete
    // setcookie('pseudo', '');
    // var_dump($_COOKIE);

?>


<!DOCTYPE html>
<html>
<head>
<title>Kangs</title>
</head>
<body>

    <h1>Bienvenue sur votre profil</h1>
    <?php 
    
        if(isset($_SESSION['email']) && (isset($_SESSION['date'])))
        {
            ?>
            
            <p>Votre Email : <?= $_SESSION['email']; ?> </p>
            <p>Votre Date : <?= $_SESSION['date']; ?> </p>

            <?php

        }else{
            echo "Veuillez vous connecter à votre compte";
        }
    
    
    
    
    ?>
           
           





    <!-- MENU NAV -->
    <?php include 'menu-navigation.php'; 
    
    include 'includes/database.php';
    global $db;
    
    ?>

    


    <h1>Connection</h1>
    <form method="post">
        <input type="text" name="lemail" id="lemail" placeholder="email" required><br/>
        <input type="password" name="lpassword" id="lpassword" placeholder="Mot de passe" required><br/>
        <input type="submit" name="formlogin" id="formlogin" value="Connection">
</form>
    

    
    
<?php include 'includes/login.php'; ?>
    <h1>S'inscrire</h1>
    <form method="post">
        <input type="text" name="email" id="email" placeholder="email" required><br/>
        <input type="password" name="password" id="password" placeholder="Mot de passe" required><br/>
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre mot de passe" required><br/>
        <input type="submit" name="formsend" id="formsend" value="S'inscrire">
</form>

        <?php include 'includes/signin.php'; ?>





<!-- FOOTER & PARA -->
<div id="content">

		<div class="leftbox"> 
			
			<div class="annonce">
			<p>
				
				BIENVENUE SUR KANGS


				<!-- <img src="img/logo.png"> -->
			</p>
		<div class="para2">
			<p>
				
				Découvrez les offres de notre site
				<!-- <img src="img/logo.png"> -->
			</p>
		</div>

        <footer>
		<p>

			Copyright &copy; Kangs - All Right reserved
		</p>
	</footer>

</body>
</html>