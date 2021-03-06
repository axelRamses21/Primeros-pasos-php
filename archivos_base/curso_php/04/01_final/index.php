<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-12 columns">
        <h3>Inicio</h3>
          <p>Listado de artículos generales</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <div class="large-12 columns">
                  <table width="100%">
                    <thead>
                      <tr>
                        <th width="100">Autor</th>
                        <th width="100">Nombre</th>
                        <th width="500">Texto</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td>Autor</td>
                        <td>Nom</td>
                        <td>TXT</td>
                      </tr>
                      <tr>
                        <td colspan="3"><hr/></td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>