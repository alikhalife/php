5. Different greetings according to age, gender and mother tongue

<form method="get" action="age_gender_tongue_greetings.php">
	<!-- <label for="age">...</label> -->
    <p>Your name: <input type="text" name="name"></p>
	<p>Your age: <input type="text" name="age"></p>

    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="other"> Other

    <p>Do you speak english? 
        <input type="radio" name="language" value="yes"> Yes
        <input type="radio" name="language" value="no"> No
    
    </p>
    
   
    
	<input type="submit" name="submit" value="Greet me now">
</form>

Hi <?php echo htmlspecialchars($_GET['name']); ?>.
You are <?php echo (int)$_GET['age']; ?> years old.

<p><?php
//Under 12
if ($_GET['age'] < 12 AND $_GET['language']=="yes"){
    if ($_GET['gender']=="female"){
        echo "Hello lil girl!";
    } elseif ($_GET['gender']=="male") {
        echo "Hello lil boy!";
    } else {
        echo "Hello lil Kiddo!";
    }  
} elseif ($_GET['age'] < 12 AND $_GET['language']=="no"){
    if ($_GET['gender']=="female"){
        echo "Aloha lil girl!";
    } elseif ($_GET['gender']=="male") {
        echo "Aloha lil boy!";
    } else {
        echo "Aloha lil Kiddo!";
    }
}

//Between 12 and 18
elseif ($_GET['age'] >= 12 AND $_GET['age'] < 18 AND $_GET['language']=="yes"){
    if ($_GET['gender']=="female"){
        echo "Hello Miss Teen!";
    } elseif ($_GET['gender']=="male") {
        echo "Hello Mister Teen!";
    } else {
        echo "Hello Young One!";
    }
}
elseif ($_GET['age'] >= 12 AND $_GET['age'] < 18 AND $_GET['language']=="no"){
    if ($_GET['gender']=="female"){
        echo "Aloha Miss Teen!";
    } elseif ($_GET['gender']=="male") {
        echo "Aloha Mister Teen!";
    } else {
        echo "Aloha Young One!";
    }
}

//Between 18 and 115
elseif ($_GET['age'] >= 18 AND $_GET['age'] <= 115 AND $_GET['language']=="yes"){
    if ($_GET['gender']=="female"){
        echo "Hello Ma'am!";
    } elseif ($_GET['gender']=="male") {
        echo "Hello Sir!";
    } else {
        echo "Hello Adult!";
    }
} 

elseif ($_GET['age'] >= 18 AND $_GET['age'] <= 115 AND $_GET['language']=="no"){
    if ($_GET['gender']=="female"){
        echo "Aloha Ma'am!";
    } elseif ($_GET['gender']=="male") {
        echo "Aloha Sir!";
    } else {
        echo "Aloha Adult!";
    }
} 

// After 115
elseif ($_GET['age'] > 115 AND $_GET['language']=="yes") {
    if ($_GET['gender']=="female"){
        echo "Hello Madam Alien!";
    } elseif ($_GET['gender']=="male") {
        echo "Hello Sir Alien!";
    } else {
        echo "Hello Alien!";
    }
}
elseif ($_GET['age'] > 115 AND $_GET['language']=="no") {
    if ($_GET['gender']=="female"){
        echo "Aloha Madam Alien!";
    } elseif ($_GET['gender']=="male") {
        echo "Aloha Sir Alien!";
    } else {
        echo "Aloha Alien!";
    }
}

?></p>




