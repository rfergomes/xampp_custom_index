<?php

function carregaPagina()
{
  setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
  date_default_timezone_set('America/Sao_Paulo');

  isset($_GET["p"]) ? $pagina = $_GET["p"] : $pagina = "projetos";
  if (file_exists($pagina . ".php")) {
    require_once $pagina . ".php";
  } else {
    require_once "404.php";
  }
}

?>

<!doctype html>
<html lang="pt_br">

<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Use title if it's in the page YAML frontmatter -->
  <title>XAMPP Localhost</title>

  <meta name="description" content="XAMPP is an easy to install Apache distribution containing MariaDB, PHP and Perl." />
  <meta name="keywords" content="xampp, apache, php, perl, mariadb, open source distribution" />

  <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" />
  <link href="/dashboard/stylesheets/bootstrap.min.css" rel="stylesheet">
  <link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
  <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>
  <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />
</head>

<body class="pt_br pt_br_index index">
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=277385395761685";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <div class="contain-to-grid">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="https://localhost/"><img src="/dashboard/images/xampp-newsletter-logo.png" alt="Logo Bitnami" width="180" /></a></h1>
        </li>
        <li class="toggle-topbar menu-icon">
          <a href="#">
            <span>Menu</span>
          </a>
        </li>
      </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
          <li class=""><a href="?p=home">Home</a></li>
          <li class=""><a href="?p=projetos">Projetos</a></li>
          <li class=""><a href="?p=applications">Aplicações</a></li>
          <li class=""><a href="?p=faq">Perguntas Frequentes</a></li>
          <li class=""><a href="?p=howto">Como Fazer</a></li>
          <li class=""><a target="_blank" href="https://github.com/rfergomes/xampp_custom_index"><img src="/dashboard/images/github.png" alt="Logo Bitnami" width="45" height="20" /></a></li>
          <li class=""><a target="_blank" href="phpinfo.php"><img src="/dashboard/images/phpinfo.png" alt="Logo Bitnami" width="50" height="20" /></a></li>
          <li class=""><a target="_blank" href="/phpmyadmin/"><img src="/dashboard/images/phpmyadmin.png" alt="Logo Bitnami" width="70" height="20" /></a></li>
        </ul>
      </section>
    </nav>
  </div>

  <?php carregaPagina(); ?>

  <footer>
    <div class="row">
      <div class="large-12 columns">
        <div class="row">
          <div class="large-8 columns">
            <ul class="social">
              <li class="twitter"><a href="https://twitter.com/apachefriends">Follow us on Twitter</a></li>
              <li class="facebook"><a href="https://www.facebook.com/we.are.xampp">Like us on Facebook</a></li>
              <li class="google"><a href="https://plus.google.com/+xampp/posts">Add us to your G+ Circles</a></li>
            </ul>

            <ul class="inline-list">
              <li><a href="https://www.apachefriends.org/blog.html">Blog</a></li>
              <li><a href="https://www.apachefriends.org/privacy_policy.html">Política de Privacidade</a></li>
              <li>
                <a target="_blank" href="http://www.fastly.com/"> CDN fornecida pela
                  <img width="48" data-2x="/dashboard/images/fastly-logo@2x.png" src="/dashboard/images/fastly-logo.png" />
                </a>
              </li>
            </ul>
          </div>
          <div class="large-4 columns">
            <p class="text-right">Copyright (c) <?= date("Y") ?>, Apache Friends by <a href="https://github.com/rfergomes" target="_blank">rfergomes</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JS Libraries -->
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="/dashboard/javascripts/all.js" type="text/javascript"></script>
  <script src="/dashboard/javascripts/bootstrap.min.js"></script>
</body>

</html>