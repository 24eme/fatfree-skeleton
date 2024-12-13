<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <meta name="description" content="" />
    <link rel="icon" type="image/png" sizes="16x16" target="_blank" href="/images/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" target="_blank" href="/images/favicons/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" target="_blank" href="/images/favicons/apple-touch-icon.png">
    <link rel="manifest" href="/images/favicons/site.webmanifest">
    <link href="/vendor/bootstrap/bootstrap.min.css?v5.3.3" rel="stylesheet" />
    <link href="/vendor/bootstrap/bootstrap-icons.min.css?v5.3.3" rel="stylesheet" />
    <link href="/css/main.css?<?php echo $VERSION ?>" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
    <?php include($content); ?>
    </div>
    <script src="/vendor/bootstrap/bootstrap.bundle.min.js?v5.3.3"></script>
    <script src="/js/main.js?<?php echo $VERSION ?>"></script>
  </body>
</html>
