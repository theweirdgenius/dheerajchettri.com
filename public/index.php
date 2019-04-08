<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/header.php');?>

<title>Dheeraj Chettri | Official Website</title>
<div class="fluid-container" id="wholeDiv">

  <div class="container">
    <img src="./img/1.png" id="topImage">
    <img src="./img/dc.jpg" id="displayPic">
  </div>

  <div class="container" id="displayText">
    <h1 align="center">Full Stack Web Developer</h1>
    <hr color="black">
    <h4 align="center">HTML/CSS | Bootstrap | JavaScript | React | ReactNative | NodeJS | Express | MongoDB | Unity </h4>
  </div>
  <br>
  <br>
  <div class="container">
    <h5>Check out some of my works.</h5>
    <div class="row">
      <div class="col-md-6 workLink">
        <a href="<?php echo url_for('unicorngame/index.php'); ?>" target="blank"><img src="./img/czcz.png" id="workImage"></a>
        <p id="description">Game</p>
        <p id="descriptionMain">
          An endless runner game having a Unicorn made with love in Unity.
        </p>
      </div>
      <div class="col-md-6 workLink">
        <a href="https://github.com/theweirdgenius/ReactPlay" target="blank"><img src="./img/dc2.png" id="workImage"></a>
        <p id="description">App</p>
        <p id="descriptionMain">
          An app that gives you the weather details of the particular location you put
          made with love using React.
        </p>
      </div>
    </div>
  </div>
  <br>
  <br>


  <div class="container">
    <div class="row">
      <div class="col-md-6 workLink">
        <a href="https://github.com/theweirdgenius/FirstRepo/tree/master/Bootstrap" target="blank"><img src="./img/dc3.jpg" id="workImage"></a>
        <p id="description">Webpage</p>
        <p id="descriptionMain">
          An test webpage built using bootstrap for the love of My Chemical Romance. Your memories WILL CARRY ON! 
        </p>
      </div>
      <div class="col-md-6 workLink">
        <a href="https://github.com/theweirdgenius/FirstRepo/tree/master/GuessTheNumber" target="blank"><img src="./img/dc4.png" id="workImage"></a>
        <p id="description">Game</p>
        <p id="descriptionMain">
          An simple game of guessing the correct number made using HTML and JavaScript. It's fun.
        </p>
      </div>
    </div>
  </div>
  <br>
  <br>

  <div class="container" id="quoteBox">
    <div class="row">
      <div class="col-md-6">
        <p id="quote">
          “Our greatest glory is not in ever falling, but in rising every time we fall.”
        </p>
        <p id="quoteAuthor">
          - Batman
        </p>
      </div>
      <div class="col-md-6">
        <img src="./img/dc5.png" id="pngImg">
      </div>
    </div>
  </div>

  <br>
  <br>
  <div class="container" id="qBox">
    <h5>Check out some of my quotes.</h5>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./img/dc6.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/dc7.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/dc8.png" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/dc9.png" alt="Fourth slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <br>
  <br>
  <div class="container" id="quoteBox1">
    <div class="row">
      <div class="col-md-6" id="sg1">
        <img src="./img/dc10.png" id="pngImg1">
      </div>
      <div class="col-md-6">
        <p id="quote">
          “Authenticity is my life. We only have one life, and it is very precious, and there's a lot we can do, and there's a lot we should do.”
        </p>
        <p id="quoteAuthor1">
          - Selena Gomez
        </p>

      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
</div>
<?php include(SHARED_PATH . '/footer.php'); ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>