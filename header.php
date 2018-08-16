<?php
require('config.php');
?>

<!DOCTYPE html>
  <html>
      <head>
          <meta charset="UTF-8">
          <title><?php echo $config_blogname;?></title>
          <link rel="stylesheet" href="styles.css" type="text/css">
      </head>
      <body>
          <div class="header">
              <a href="#" class="logo"><?php echo $config_blogname;?></a>
              <div class="header-right">
                  <a class="active" href="#">Home</a>
                  <a href="#">Categories</a>
                  <a href="#">Login</a>
              </div>
          </div>
       