<body>
    
</body>
<form action="concaténation.php" method="get">
    <label for="sujet">
        <input type="text" name="sujet" id="sujet" placeholder="un sujet">
    </label>
    <label for="verbe">
        <input type="text" name="verbe" id="verbe" placeholder="un verbe">
    </label>
    <label for="complement">
        <input type="text" name="complement" id="complement" placeholder="un complement">
    </label>
    <input type="submit" value="send">
</form>
</body>

<?php

  $sujet = $_GET["sujet"];
  $verbe = $_GET["verbe"];
  $complement = $_GET["complement"];
  
  echo $sujet.' '.$verbe.' '.$complement;  ?>
  