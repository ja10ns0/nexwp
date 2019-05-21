<!DOCTYPE html>
<html <?php language_attributes()?> class="h-100">
<head>
    <meta <?php bloginfo('charset')?>>
    <title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body class="d-flex flex-column h-100">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">nex</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">el croquis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">nextoria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">contactanex</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">es</a>
            </li>      
            <li class="nav-item">
              <a class="nav-link" href="#">en</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>