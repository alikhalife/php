<?php
//normal capitalization
echo mb_strtoupper("hello, welcome to loups, ali's coding universe");

//shuffle the characters of a given text.
$text = '<h3> 1. This is a shuffled sentence</h3>';
$str = 'This is going to be shuffled !';
$str = str_shuffle($str);

echo $text .$str;

//another shuffle exercise
$str= "According to a researcher (sic) at Cambridge University , it doesn't matter in what order the letters in a word are, 
the only important thing is that the first and last letter be at the right place. 
The rest can be a total mess and you can still read it without problem. 
This is because the human mind does not read every letter by itself but the word as a whole .";

$str_oxford = [
    "According", "to", "researcher", "at", "Cambridge", "University,",
    "it", "doesn't", "matter", "in", "what", "order", "the", "letters", "in", "a", "word", "are,",
    "the", "only", "important", "thing", "is", "that", "the", "first", "and", "last", "letter", "be",
    "at", "the", "right", "place. ", "The", "rest", "can", "be", "a", "total", "mess", "and", "you",
    "can", "still", "read", "it", "without", "problem. ", "This", "is", "because", "the", "human",
    "mind", "does", "not", "read", "every", "letter", "by", "itself", "but", "the", "word", "as", "a", "whole."
];

echo "<pre>";
print_r($str_oxford);
echo"</pre>";


echo '<h3> 2. This is a shuffled paragraph that you can still read and understand...or not </h3>';

echo $str ."<br>";
echo "<p>";
for($i = 0; $i < count($str_oxford); $i++){
    $word = $str_oxford[$i];
    $word_shuffle = str_shuffle($word);
    echo $word_shuffle . " ";
}
echo "</p>";
echo "<br>";

$str= explode(" ", $str);

foreach ($str as $word){

    echo str_shuffle($word)." ";
}




//capitalize first letter with special character
//mb_strtoupper — Make a string uppercase
//mb_internal_encoding — Set/Get internal character encoding
//
echo '<h3> 3. Using a function to turn "émile" to "Émile" for example </h3>';

mb_internal_encoding( "UTF-8" );

function capitalize( $s )
{
    return mb_strtoupper(mb_substr( $s, 0, 1 )).mb_substr( $s, 1 );
}

echo capitalize( "émile" );



//display date and year
echo "<h3> 4. Displaying today's date then year in two different formats </h3>";

date_default_timezone_set("Europe/Brussels");
echo date("d/m/Y H:i:s");
echo "<br>";
echo date("Y");
echo "<br>";
echo date("y");

//sum function
echo "<h3> 5. Sum functions </h3>";
echo "<h4> 5.1. Simple Sum function </h4>";
echo"6 + 1 = ";
function sum($a,$b) {
    echo $a + $b;
}

sum(1, 6);

//Improve that function so that it checks whether the argument is indeed a Number.
$int1 = $_GET['int1'];
$int2 = $_GET['int2'];
$error = "";
?>
    <h4> 5.2. Sum function that takes only numbers</h4>

    <h5> 5.2.1. Try it here </h5>

    <form method="get" action="functions.php">
        <label>Let's Add Only numbers</label>
        <p>First number:
            <input type="text" name="int1" />
            <span class="error"> <?php echo $error;?></span>
        </p>
        <p>Second number:
            <input type="text" name="int2">
            <span class="error"> <?php echo $error;?></span>
        </p>
        <input type="submit" name="submit" value="Add numbers">
    </form>

<?php
function sum_num_only_form($int1,$int2) {
    if (isset($int1) AND isset($int2)) {
        $result = "";
        if (!empty($int1) AND !empty($int2)) {
            //return (int)$int1 == $int1 ? $result = $int1 + $int2: $result = "Error! Enter a valid number";
            return ($int1 == is_int($int1) AND $int2 == is_int($int2)) ? $result = $int1 + $int2:
                $result = "Error! Enter a valid number";
            /* if((int) $int1 == $int1  AND (int) $int2 == $int2){
                 $result = $int1 + $int2;
                 echo "it works";
             }
             else $result = "Error! Enter a valid number";*/
        }
        /*else $result = "Insert a number";*/
    }
    else {
        $result = "Error!";
    }
    return $result;

};

echo sum_num_only_form($int1, $int2);

echo   "<br>" ."<h5> 5.2.2. just function </h5>";
function sum_num_only($x,$y) {
    if (false == is_int($x) AND false == is_int($y)) {
        echo $x + $y;
    } else {
        echo "Error! Enter a valid number";
    }
};
sum_num_only(8, 4);

//Create a function that takes as argument a string of characters
// and returns an acronym made of the initials of each word.

echo "<h3> 6. Acronym function </h3>";
function acronym($string){
    $abbreviation = "";
    $string = ucwords($string);
    $words = explode(" ", "$string");
    foreach($words as $word){
        $abbreviation .= $word[0];
    }
    return $abbreviation;
}
echo "'In code we trust!' will output the following acronym: ";
echo acronym("In code we trust!");

//Create a function that replaces the letters "a" and "e" with "æ".

echo "<h3> 7. Replace letter function </h3>";

$words = array("caecotrophie", "chaenichthys","microsphaera", "sphaerotheca");
echo str_replace("ae","æ",$words[0]) ."<br>";

function replace($arr) {
    for($i =0; $i < count($arr); $i++){
       echo str_replace("ae","æ",$arr[$i])."<br>";
    }
}

replace($words);

echo "<h3> 9. Replace letter function... Create a function that does the opposite of the one above </h3>";

$words2 = array("cæcotrophie", "chænichthys","microsphæra", "sphærotheca");
echo str_replace("æ","ae",$words[0]) ."<br>";

function replace_inverse($arr) {
    //return str_replace("ae","æ",$arr[$i])."<br>";
    return preg_replace('/æ/', 'ae', $arr);
}
print_r(replace_inverse($words2));

echo "<h3> 10. Error Message </h3>";

function errorMessage($word1, $word2){
    return "<div class = '$word1'> '$word2' </div>";
}

echo errorMessage("error", "Incorrect email address");




echo "<h3> 11. Random Word Generator </h3>";



function getName() {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $smallWord = '';
    $bigWord = '';


    for ($i = 0; $i < 5; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $smallWord .= $characters[$index];
    }
    for ($i = 0; $i < 15; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $bigWord .= $characters[$index];
    }

    echo $smallWord ."<br>" .$bigWord;

}

echo getName();


echo "<h3> 12. Decapitalize </h3>";

$sentence = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!" ."<br>";
echo $sentence;
function decapitalize($word) {
    return strtolower($word);
}

echo decapitalize($sentence);


echo "<h3> 13. Calculate Cone Volume </h3>";

function calculate_cone_volume($ray, $height){
   $operation = $ray * 5 * 3.14 * $height * (1/3);
   $volume = "The volume of a cone which ray is " .$ray ." and height is " .$height ." = " . $operation . " cm<sup>3</sup><br />";
   return $volume;
}

echo calculate_cone_volume(5, 4);