<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CMS Opgave Del 2</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <header class="container-fluid">
      <img src="img/header.jpg" class="img-responsive" alt="header-img">
  </header>
    <!-- Navigation -->
   <nav class="navbar  navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bjerge etc</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Forside</a></li>
            <li><a href="#about">Log ind</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      
      <?php include "fetchDB.php" ?>
      
      <!-- Artikel her! -->
      src
      alt
      heading
      time
      articleText
      id
      
      
      <!-- Lav php blok -->
      
      <!-- Skriv noget ud i html -->
      <!-- Konkatiner to stykker tekst -->
      <!-- Lav en variabel -->
      <!-- Udskriv den -->
      <!-- "" vs '' -->
      
      
      
    <div class="container">
      <div class="row">
        <section class="col-md-8">
          <article>
            <h2>Mount Fuji</h2>
            <img src="img/mount_fuji.jpg" class="img-responsive" alt="mt-fuji">
            <span class="date">07-06-2017</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus lobortis ligula eu pellentesque. Cras finibus urna non erat accumsan dapibus. Fusce pellentesque quam semper nulla imperdiet, ac porta sem suscipit. Sed nec scelerisque dolor. Proin sagittis, turpis non viverra consectetur, risus nibh posuere libero, in finibus sem enim vitae ligula. Duis ut lacinia libero, vitae bibendum ex. Etiam in quam facilisis nisl consequat faucibus a quis nibh. Etiam egestas dolor a est efficitur, non egestas diam gravida.

Sed augue ante, facilisis eu felis at, aliquam ullamcorper dolor. Ut orci ipsum, ultrices luctus cursus sit amet, accumsan sed felis. Sed maximus lacinia eros et rutrum. Proin eget iaculis elit, vitae sodales enim. Phasellus sit amet sodales augue, et euismod dui. Praesent odio orci, dapibus aliquam eros blandit.</p>
          </article>
          <article>
            <h2>K2</h2>
            <img src="img/K2_cropped.jpg" class="img-responsive" alt="k2">
            <span class="date">04-22-2017</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus lobortis ligula eu pellentesque. Cras finibus urna non erat accumsan dapibus. Fusce pellentesque quam semper nulla imperdiet, ac porta sem suscipit. Sed nec scelerisque dolor. Proin sagittis, turpis non viverra consectetur, risus nibh posuere libero, in finibus sem enim vitae ligula. Duis ut lacinia libero, vitae bibendum ex. Etiam in quam facilisis nisl consequat faucibus a quis nibh. Etiam egestas dolor a est efficitur, non egestas diam gravida.

Sed augue ante, facilisis eu felis at, aliquam ullamcorper dolor. Ut orci ipsum, ultrices luctus cursus sit amet, accumsan sed felis. Sed maximus lacinia eros et rutrum. Proin eget iaculis elit, vitae sodales enim. Phasellus sit amet sodales augue, et euismod dui. Praesent odio orci, dapibus aliquam eros blandit.</p>
          </article>
          <article>
            <h2>Mount Everest</h2>
            <img src="img/mount-everest.jpg" class="img-responsive" alt="mt-everest">
            <span class="date">02-16-2017</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus lobortis ligula eu pellentesque. Cras finibus urna non erat accumsan dapibus. Fusce pellentesque quam semper nulla imperdiet, ac porta sem suscipit. Sed nec scelerisque dolor. Proin sagittis, turpis non viverra consectetur, risus nibh posuere libero, in finibus sem enim vitae ligula. Duis ut lacinia libero, vitae bibendum ex. Etiam in quam facilisis nisl consequat faucibus a quis nibh. Etiam egestas dolor a est efficitur, non egestas diam gravida.

Sed augue ante, facilisis eu felis at, aliquam ullamcorper dolor. Ut orci ipsum, ultrices luctus cursus sit amet, accumsan sed felis. Sed maximus lacinia eros et rutrum. Proin eget iaculis elit, vitae sodales enim. Phasellus sit amet sodales augue, et euismod dui. Praesent odio orci, dapibus aliquam eros blandit.</p>
          </article>
        </section>
        
        <aside class="col-md-4">
     <form>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email" type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password" placeholder="Kodeord">
       </div>
        <br>
      <div class="input-group">
        <input type="submit" class="btn btn-info" value="Log ind">
      </div>
   </form>
        </aside>
      </div>

      <div class="row">
        <footer class="col-md-12">&copy - 2017 - </footer>
      </div>

    </div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>