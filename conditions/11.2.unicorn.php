<?php

  //11.2 Ternary exercises
  if(isset($_POST['type'])) {
    $response = $_POST['type'];

  $human = ($response == 'human') ? 'https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExYWlqczN4d2N6NGF2c3J4b2doN2VvbzRwNHdyZ3BmeHZibG5oeXQwNyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/3ohs81rDuEz9ioJzAA/giphy-downsized-large.gif' : '';
 
  $cat = ($response == 'cat') ? 'https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExd2F4MG8yczJ5bG51cHVxbmEyeGMyaDdjcHVrdWM4amEybnNudjI2aCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/22HZyXo5EocWA/giphy.gif': '';

  $unicorn = ($response =='unicorn') ? 'https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExcWs4ejVqYzRjeDlqbDl1ZWVpZXFobGk3MWx6OXZydm5oeG0zZWZrcyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/HULqwwF5tWKznstIEE/giphy.gif':'';
  }
?>

<form action="11.2.unicorn.php" method="post">
    <p>"Are you a human, a cat or a unicorn ?"</p>
    <span>Choose :</span>
    <br>
    <label for="human">
        <input type="radio" name="type" value="human" id="human">human
    </label>
    <br>
    <label for="cat">
        <input type="radio" name="type" value="cat" id="cat">cat
    </label>
    <br>
    <label for="unicorn">
        <input type="radio" name="type" value="unicorn" id="unicorn">unicorn
    </label>
    <br>
    <input type="submit" value = "send">
</form>

<?php

if(isset($human)) {
    echo '<img src=' . $human . '>';
}

if(isset($cat)){
    echo '<img src=' .$cat . '>';
}
if(isset($unicorn)){
    echo '<img src=' .$unicorn . '>';
}

?>