5. Girls soccer team

<form method="get" action="girls_soccer_team.php">
	<!-- <label for="age">...</label> -->
    <p>Your name: <input type="text" name="name"></p>
	<p>Your age: <input type="text" name="age"></p>
    <input type="radio" name="gender" value="female">Female
  
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="other">Other

	<input type="submit" name="submit" value="Greet me now">
</form>

Hi <?php echo htmlspecialchars($_GET['name']); ?>.
You are <?php echo $_GET['age']; ?> years old.

<p><?php
echo ($_GET['age'] >= 21 AND $_GET['age'] <=40 AND $_GET['gender'] == "female") ? "Welcome" : "bye";
// if ($_GET["gender"]=="female") {
//     if ($_GET['age'] < 21 ){
//     echo "Sorry you are too young to be in the team. Come back when you're 21!";
        
//     } elseif ($_GET['age'] >= 21 AND $_GET['age'] < 41){
//         echo "Welcome to the team Gurl!";

//     } elseif ($_GET['age'] > 40 ) {
//         echo "Sorry you are too old to do this sport. You can always do something else.";
//     }
// }

// if ($_GET["gender"]=="male") {
//     echo "Sorry you can't be in the team. This a team for ladies only!"
// }

?></p>