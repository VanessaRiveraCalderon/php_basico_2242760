<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form
        method="POST"
        action="{{ url ("buscar") }}"
        class="form-horizontal">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <center>
        <legend style="color: rgb(173, 115, 250); font-family:Edwardian Script ITC; font-size:42px;">Busqueda En Varios Motores</legend>
        </center>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="termino" style="color: rgb(186, 157, 255)">1. Ingrese el termino de búsqueda</label>
          <div class="col-md-5">
          <input id="termino" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motores" style="color: rgb(186, 157, 255)">2. Seleccione motor de búsqueda </label>
          <div class="col-md-4">
          <div class="radio">
            <label for="motores-0" style="color:rgb(173, 115, 250)">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
              <img style="width: 20px" src="https://rotulosmatesanz.com/wp-content/uploads/2017/09/2000px-Google_G_Logo.svg_.png">
              Google
            </label>
            </div>
          <div class="radio">
            <label for="motores-1" style="color:rgb(173, 115, 250)">
              <input type="radio" name="motores" id="motores-1" value="2">
              <img style="width: 18px" src="https://cdn.worldvectorlogo.com/logos/bing-2.svg">
              Bing
            </label>
            </div>
            <div class="radio">
            <label for="motores-1" style="color:rgb(173, 115, 250)">
              <input type="radio" name="motores" id="motores-2" value="3">
              <img style="width: 22px" src="https://cdn.iconscout.com/icon/free/png-512/yahoo-2752017-2284834.png">
              Yahoo
            </label>
            </div>
            <div class="radio">
            <label for="motores-1" style="color:rgb(173, 115, 250)">
              <input type="radio" name="motores" id="motores-3" value="4">
              <img style="width: 22px" src="https://logodownload.org/wp-content/uploads/2014/10/youtube-logo-5-2.png">
              YouTube
            </label>
            </div>
            <div class="radio">
            <label for="motores-1" style="color:rgb(173, 115, 250)">
              <input type="radio" name="motores" id="motores-4" value="5">
              <img style="width: 22px" src="https://w7.pngwing.com/pngs/750/461/png-transparent-instagram-application-logo-logo-computer-icons-instagram-miscellaneous-text-trademark.png">
              Instagram
            </label>
            </div>
            <div class="radio">
            <label for="motores-1" style="color:rgb(173, 115, 250)">
              <input type="radio" name="motores" id="motores-5" value="6">
              <img style="width: 22px" src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg">
              Facebook
            </label>
            </div>
            <div class="radio">
            <label for="motores-1" style="color:rgb(173, 115, 250)">
              <input type="radio" name="motores" id="motores-6" value="7">
              <img style="width: 21px" src="https://graffica.info/wp-content/uploads/2017/08/badgeRGB.png">
              Pinterest
            </label>
            </div>
            <div class="radio">
            <label for="motores-1" style="color:rgb(173, 115, 250)">
              <input type="radio" name="motores" id="motores-7" value="8">
              <img style="width: 24px" src="https://seeklogo.com/images/M/mercado-libre-logo-7848A94FE8-seeklogo.com.png">
              Mercado Libre
            </label>
            </div>
            <div class="radio">
            <label for="motores-1" style="color:rgb(173, 115, 250)">
              <input type="radio" name="motores" id="motores-8" value="9">
              <img style="width: 26px" src="https://brioagro.es/wp-content/uploads/2017/08/twitter_PNG281.png">
              Twitter
            </label>
            </div>
            <div class="radio">
            <label for="motores-1" style="color:rgb(173, 115, 250)">
              <input type="radio" name="motores" id="motores-9" value="10">
              <img style="width: 22px" src="https://cdn.worldvectorlogo.com/logos/tiktok-icon-white-1-1.svg">
              TikTok
            </label>
            </div>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button id="singlebutton" name="singlebutton" class="btn btn-info">Buscar</button>
            </div>
          </div>

        </fieldset>
        </form>
</body>
</html>
