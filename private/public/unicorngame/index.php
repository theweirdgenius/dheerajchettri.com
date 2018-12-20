<?php require_once('../../private/initialize.php'); ?>

    <title>Dheeraj Chettri | UnicornGame </title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="<?php echo url_for('/unicorngame/Build/UnityLoader.js'); ?>"></script>  
    <script src="<?php echo url_for('/unicorngame/TemplateData/UnityProgress.js'); ?>"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/UniGame.json", {onProgress: UnityProgress});
    </script>
    
<?php include(SHARED_PATH . '/header.php'); ?>



    <div class="webgl-content">
      <div id="gameContainer" style="width: 1100px; height: 850px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">UnicornGo</div>
      </div>
    </div>








     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
