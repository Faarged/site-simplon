<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js%22%3E%3E%22%3E"></script>
      <script src="https://use.fontawesome.com/0eccec29f2.js"></script>
      <link rel ="stylesheet" href ="header.css">
      <link rel="stylesheet" href ="footer.css">
        <link rel ="stylesheet" href ="menu.css">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <title>Menu simplon charleville</title>

    </head>
    <body>
      <?php include('header.php');?>

          <div class= "container-fluid"  id="corps">
            <div class="d-flex">
          <div class="row" id="ligne">
              <div class="col-lg-3">
                <a href="programme.php"><img src="maingauche.jpg" class="gauche"></a>
              </div>
                  <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12" id="pctext">
                      <div class="overlay-image">
                          <img src= "pcl.png" class= "center" alt="Alt text" />
                          <div class="normal">
                              <div class="text">Menu</div>
                          </div>
                          <div class="hover">
                              <div class="text">Bienvenue à Simplon Charleville</div>
                              <iframe name="date du jour" id="date-du-jour" style="width:105px;height:75px;" src="https://www.mathieuweb.fr/calendrier/date-jour-blanc.html" scrolling="no" frameborder="0" allowtransparency="true"></iframe>

                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="col-lg-3">
                <a href="portfolio.php"><img src="main.jpg" class="droite"></a>
              </div>
              </div>
                </div>
            <div class="row">
                  <div class="col-lg-12" id="bas">
                      <a href="contact.php"><img src="mainbas.jpg" class="bas"></a>
                  </div>
            </div>

        </div>




      <?php include('footer.php');?>
    </body>
