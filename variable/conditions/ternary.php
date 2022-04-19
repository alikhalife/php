<form method="get" action="ternary.php">
    <input type="radio" name="gender" value="female">Female 
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="other">Other

  <input type="submit" name="submit" value="Greet me now">
</form>

<p><?php

$hello = "Greetings to you. This greeting will appear only if you're a female.";

echo ($_GET['gender'] == "female") ? $hello : "bye";
?> </p>