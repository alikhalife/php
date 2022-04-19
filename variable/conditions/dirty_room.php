<html>
<p> 
    <?php
  /**change temperature */

  function cover_my_chest_with () {
    if( $temperature >= 15 ) {
      // code to execute if the condition results TRUE
      echo $clothes = "T-shirt";
      $should_i_wear_a_scarf = false;
    } else {
      // code to execute if the condition results FALSE
      echo $clothes = "Sweatshirt. \n";
      $should_i_wear_a_scarf = true;
    }
    
    if ($should_i_wear_a_scarf == true){
      echo "I will go grab my scarf";
    }
  }
    // The following function will be executed everytime, 
    // but its $clothes argument changes according to the result
    // of our previous conditional structure
  cover_my_chest_with($clothes);
  ?>
</p>


 <!-- Series of exercises on PHP conditional structures.  

1.1 Clean your room Exercise  -->

  <h3> 1.1 Clean your room Exercise </h3>
    <p><?php

$room_is_filthy = true;

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}
 ?></p>

  <h3> 1.2 Clean your room Exercise Improved</h3>
    <p><?php
      $possible_states = array ("health hazard", "filthy", "dirty", "clean", "immaculate");
      $room_filthiness = $possible_states[0];

// When testing, change the index value to navigate to the possible array values


if( $room_filthiness == $possible_states[0]){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $possible_states[2] ){
	echo "Yuk, Room is dirty : let's clean it up !";

}  else if( $possible_states[1] ){
	echo "Dayum!!Your room is filthy : let's clean it up !";

} else if( $possible_states[3] ){
	echo "Oh waw!! Your room is so clean: let's make it dirty !";

}else {
	echo "<br>Nothing to do, room is neat.";
}
 ?></p>

/
 </html>