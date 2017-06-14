<?php 
require_once "connect.php";

//Vælg alt fra articles tabellen
$statement = $DBH->prepare("SELECT * FROM articles");
$statement->execute();


while( $row = $statement->fetch(PDO::FETCH_ASSOC) ) { ?>
   <article class="col-md-12">
        <img src="img/<?php echo $row['imgSrc'] ?>.jpg" alt="<?php echo $row['imgAlt'] ?>" class="img-responsive col-md-10 col-md-offset-1">
        <h2 class="col-md-12"><?php echo $row['heading'] ?></h2>
        <h5 class="well text-center col-md-2 col-md-offset-5"><?php echo $row['time'] ?></h5>
        <p class="col-md-12"><?php echo $row['articleText'] ?></p>
    </article>
<?php
}
?>