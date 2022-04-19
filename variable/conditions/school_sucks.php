<form method="get" action="school_sucks.php">
	<!-- <label for="garde">...</label> -->
    <p>Your name: <input type="text" name="name" /></p>
	<p>Your grade: <input type="text" name="grade"></p>
	<input type="submit" name="submit" value="Grade me now">
</form>

Hi <?php echo htmlspecialchars($_GET['name']); ?>.
You have <?php echo (int)$_GET['grade']; ?>/20.

<p><?php
if ($_GET['grade'] < 4){
    echo "This work is really bad. What a dumb kid!";
} elseif ($_GET['grade'] >= 5 AND $_GET['grade'] <= 9){
    echo "This is not sufficient. More studying is required.";
} elseif ($_GET['grade'] == 10) {
    echo "barely enough!";
} elseif ($_GET['grade'] >= 11 AND $_GET['garde'] <= 14) {
    echo "Not bad!";
} elseif ($_GET['garde'] >= 15 AND $_GET['garde'] <= 18) {
    echo "Bravo, bravissimo!";
}elseif ($_GET['garde'] == 19 OR $_GET['grade'] == 20) {
    echo "Too good to be true : confront the cheater!";
} else {
    echo "Please enter a valid grade between 0 and 20";
}


?></p>
