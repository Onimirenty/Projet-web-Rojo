<?php
    include("fonction.php");
    if(!isset($_GET['idHabitation'])){
        header("Location: liste.php");
    } else { 
        $id = $_GET['idHabitation'];
        $habitation = getHabitation($id);
        if(count($habitation)==0){
            header("Location: liste.php");
        } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> Modifier habitation </title>
</head>
<body>
     <h2> Modifier une habitation : </h2>
     <form action="traitementModif.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idHabitation" value="<?php echo $id ?>">
          <p> <input type="text" placeholder="<?php echo $habitation['typeHabitation']; ?>" name="type"/> </p>
          <p> <input type="text" placeholder="<?php echo $habitation['nombreChambre']; ?>" name="nbchambre"/> </p>
          <p> <input type="text" placeholder="<?php echo $habitation['loyer']; ?>" name="loyer"/> </p>

          <p> <input type="hidden" name="MAX_FILE_SIZE" value="10000"/> </p>
          <p> <input type="file" placeholder="<?php echo $habitation['photo']; ?>" name="photo"/> </p>
          <p> <input type="text" placeholder="<?php echo $habitation['quartier']; ?>" name="quartier"/> </p>
          <p> <input type="text" placeholder="<?php echo $habitation['descriptions']; ?>" name="description"/> </p>
          <p> <input type="submit" value="Modifier" > </p>
     </form>
</body>
</html>
<?php } } ?>
