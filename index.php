<!DOCTYPE html>
<html>
  <head>
  <style>
    .center {
    	width: 60%;
      margin: 0;
      padding: 1%;
  	  position: absolute;
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
    
    .border-red {
    	border: 3px solid red;
    }
  </style>
  </head>
  <body>
    <div class="center">
    <div class="border-red">
    	<h1>Elo - Openshift -> Teste de Build e Deploy</h1>

      <?php
      echo "Este é um print em PHP v2";
      ?>
    </div>
      <br />
      <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Elo_logo.png" alt="Elo" width="200" height="200">
      
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/OpenShift-LogoType.svg/1200px-OpenShift-LogoType.svg.png" alt="Elo" width="200" height="200">
    </div>
  </body>
</html>
