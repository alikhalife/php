// 3. "Different greetings according to age" Exercise

<form method="get" action="age_greetings.php">
	<!-- <label for="age">...</label> -->
    <p>Your name: <input type="text" name="name" /></p>
	<p>Your age: <input type="text" name="age"></p>
	<input type="submit" name="submit" value="Greet me now">
</form>

Hi <?php echo htmlspecialchars($_GET['name']); ?>.
You are <?php echo (int)$_GET['age']; ?> years old.

<p><?php
if ($_GET['age'] < 12){
    echo "Hello Kiddo!";
} elseif ($_GET['age'] >= 12 AND $_GET['age'] < 18){
    echo "Hello Young Blood!";
} elseif ($_GET['age'] >= 18 AND $_GET['age'] <= 115) {
    echo "Hello Adult !";
} elseif ($_GET['age'] > 115) {
    echo "Damn are you an alien?";
}


?></p>


