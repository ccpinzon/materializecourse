<!DOCTYPE html>
<html lang="es">
<head>
	<title>Curso Materialize CSS</title>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  
</head>
<body>
  <!-- nav bar con menu lateral - GRIDS -->
	<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
          

  <!-- SIEMPRE HAY QUE TENER UN CONTENEDOR PRINCPIAL  - GRIDS -->

  <div class="container">

  	
    <!-- Navbar goes here -->

    <!-- Page Layout here -->
    <div class="row">

      <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
        <!-- Grey navigation panel

              This content will be:
          3-columns-wide on large screens,
          4-columns-wide on medium screens,
          12-columns-wide on small screens  -->

      </div>

      <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
        <!-- Teal page content

              This content will be:
          9-columns-wide on large screens,
          8-columns-wide on medium screens,
          12-columns-wide on small screens  -->

      </div>

    </div>
          


  </div>
        
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $( document ).ready(function(){

      $(".button-collapse").sideNav();

    })
  </script>
</body>
</html>