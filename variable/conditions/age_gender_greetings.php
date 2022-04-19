4. Different greetings according to age and gender Exercise

<form method="get" action="age_gender_greetings.php">
	<!-- <label for="age">...</label> -->
    <p>Your name: <input type="text" name="name"></p>
	<p>Your age: <input type="text" name="age"></p>
    <input type="radio" name="gender" value="female">Female
  
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="other">Other

	<input type="submit" name="submit" value="Greet me now">
</form>

Hi <?php echo htmlspecialchars($_GET['name']); ?>.
You are <?php echo (int)$_GET['age']; ?> years old.

<p><?php
if ($_GET['age'] < 12){
    if ($_GET['gender']=="female"){
        echo "Hello Miss Kiddo!";
    } elseif ($_GET['gender']=="male") {
        echo "Hello Mister Kiddo!";
    } else {
        echo "Hello Kiddo!";
    }
    
} elseif ($_GET['age'] >= 12 AND $_GET['age'] < 18){
    if ($_GET['gender']=="female"){
        echo "Hello Miss Teen!";
    } elseif ($_GET['gender']=="male") {
        echo "Hello Mister Teen!";
    } else {
        echo "Hello Young One!";
    }

} elseif ($_GET['age'] >= 18 AND $_GET['age'] <= 115){
    if ($_GET['gender']=="female"){
        echo "Hello Ma'am!";
    } elseif ($_GET['gender']=="male") {
        echo "Hello Sir!";
    } else {
        echo "Hello Adult!";
    }
} elseif ($_GET['age'] > 115) {
    if ($_GET['gender']=="female"){
        echo "Hello Madam Alien!";
    } elseif ($_GET['gender']=="male") {
        echo "Hello Sir Alien!";
    } else {
        echo "Hello Alien!";
    }
}


?></p>




