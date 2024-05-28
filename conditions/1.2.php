<?php 
  //1.2 Clean you room, improved

  $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

$room_filthiness = $possible_states[1];

if($room_filthiness == "health hazard" || $room_filthiness == "filthy"){
    echo "Yuk, Room is disgusting! Let's clean it up!";
} elseif ($room_filthiness == "dirty") {
    echo "Yuk, Room is dirty! Let's clean it up!";
} else {
    echo "<br>Nothing to do, room is neat.";
}
?>