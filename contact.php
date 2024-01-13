<!doctype html>
<html>

<head>
    <title>Inscription</title>
	<link  rel="stylesheet" href="contactstyle.css" >
    <script language="JavaScript">
       
       function verification() {
            if (document.getElementById("nom").value == "") { alert("Veuillez taper votre nom!"); return false;}
       
    
            if (document.getElementById("email").value == "") { alert("Veuillez entrer votre adresse e-mail!"); return false;}
           if (document.getElementById("email").value.indexOf('@') == -1) { alert("Adresse e-mail incorrecte!"); return false; }    
        }
    </script>
</head>

<body>
  
   <form id="formulaire_test" action="contact.php" method="post" onSubmit="verification()">
   <h1 >Formulaire d'inscription</h1>
 <table>
 <tr> <td><label for="cin" >Cin :</label> </td>
<td> <input type="text" size= "30" id="cin" name="cin" /></td>
</tr>
 <tr> <td><label for="nom" >Nom :</label> </td>
<td> <input type="text" size= "30" id="nom" name="nom" /></td>
</tr>
<tr><td>
  <label for="email">Adresse e-mail :</label></td>
<td> <input type="text" size="30" name="email" id="email"> </td></tr> 
<tr><td>
<label for="tel">telephone:</label></td>
<td> <input type="text" size="30" name="tel" id="tel"> </td></tr> 
<tr><td>
<button type="submit">S'inscrire</button>&nbsp;&nbsp;&nbsp;<button type="reset">Anuuler</button></td></tr>


    </table>

 </form>
 <?php

    
	if(isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['tel']))
	{
		if(!empty($_POST['cin']) and  !empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['tel']))
		{
			try
			{
				global $bdd;
				$bdd = new PDO('mysql:host=localhost;dbname=devWeb;charset=utf8', 'root', '');
				
			}
			catch (Exception $e)
			{
					die('Erreur : ' . $e->getMessage());
			}
		$sql1="select * from client where cin='".$_POST['cin']."'";
		$reponse = $bdd->query($sql1);
	    $donnees = $reponse->fetch();
	
			if(empty($donnees))
			{   
				$sql2="insert into client(cin, nom, email,tel) values('".$_POST['cin']."','".$_POST['nom']."','".$_POST['email']."','".$_POST['tel']."')";
				$bdd->exec($sql2);
				echo"<center>Utilisateur " .$_POST['nom']. " est ajouté avec succés</center>";
			}
			else
			echo "<center>Utilisateur existe déja !!!</center>";
		} 
	}
	?>
</body>

</html>
