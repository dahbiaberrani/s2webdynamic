<html>

<head>
<title>Choix d'une opération sur 2 nombres</title>
</head>
 <body>
    <?php include("./entete.php");?>
  <form action="./resultatRecherche.php" method="GET">
   <label  for = 'categorie'>Sélectionner un catégorie: </label>
	<select  id="categorie" name ="categorie">
		<option value="*">Tous catégorie </option>
		<option value="plat"> Plat principal</option>
		<option value="entre">Entrée</option>
		<option value="dessert">Dessert</option>
	</select> 
	 
	<label  for = 'cout'>Sélectionner par prix</label>
	<select  id="cout" name ="cout">
		<option value="*">tout prix</option>	
		<option value="moins_3">moins 3€ </option>
		<option value="moins_5"> moins 5 € </option>
		<option value="moyen_10"> moins 10€</option>
	</select>
	<br/> 
	<input value="Selectionner" type="submit"/> 
	
   </form>
   <?php include_once("./pied_de_page.html")?>
 </body>

</html>