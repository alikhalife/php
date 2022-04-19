<?php

//This foreach is a logical structure called a loop.
// Loops are used whenever an instruction (or a series of instructions) need to be repeated several times.

$plates= array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach( $plates as $plate){
    echo "I don't want to wash my plate </br>";
}
//For each element of the array $plates, call it $plate then apply the instruction : I don't want to wash my plate.


function capitalize($texte)
{
    $texte = strtoupper($texte);
    $texte = strtr($texte,
        "äâàáåàéèëêòóôõöøìíîïùúûüýñçþÿæ?ðø",
        "ÄÂÀÁÅàÉÈËÊÒÓÔÕÖØÌÍÎÏÙÚÛÜÝÑÇÞÝÆ?ÐØ");
    return $texte;
}


//You want to make sure that each name in it has the first letter capitalized.
// This native PHP function should do the job: ucfirst($string);
// For each element of the array $names, call it $name then apply the function ucfirst() then display it.

$names= array('John', 'jeanne', 'Joan', 'émile');
foreach ($names as $name){
    echo "</br>" .ucfirst($name);
}

echo "</br>";
echo capitalize($names);

//In the previous example, we capitalize the first letter then display it,
// but the array itself still contains the non-capitalized names.
// What would be better is to get the value, capitalize it then save it back in the array.
// In order to do that, we could use the element's key index, to know where to save back the data.

$names= array('John', 'jeanne', 'Joan', 'émile');
echo "</br>";
var_dump($names);

foreach ($names as $key=> $value){
    $names[$key] = ucfirst($value);
}
echo "</br>";
var_dump($names);
echo "</br>";

//conjugate the verb to code
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach( $pronouns as $key => $value){
    echo $value;
    if($key==2) echo "codes";
    else echo "code";
    echo "</br>";
};



//while loop
$amount_of_lines = 1;

while ($amount_of_lines <= 50)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    // shorthand writing for
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++;

}

echo "</br>";


//for loop
for ($amount_of_lines = 1; $amount_of_lines <= 50; $amount_of_lines ++)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
};


//select a country
$country = ['Argentina', 'Brazil', 'Morocco', 'Belgium', 'Lebanon'];


echo "<p> Select your country?
<select name='country'>
<option value=''>Select...</option>";

for($i = 0; $i <= count($country); $i++){
    echo "<option value='" .$country[$i] ."'>" .$country[$i] ."</option>";
};
echo "</select></p>";

echo "<pre>";
print_r($country);
echo"</pre>";

//edit your array so that it becomes an associative array:
// use the country ISO code as array key, and the country name as value.
$countries = [
    'ARG' => 'Argentina',
    'BR' => 'Brazil',
    'MAR' => 'Morocco',
    'BE' => 'Belgium',
    'LEB' => 'Lebanon'
];

echo "<p> Select your country?
<select name='country'>
<option value=''>Select...</option>";
foreach($countries as $x => $x_value) {
    echo "<option value='" .$x_value ."'>" .$x ."</option>";
   // echo "Key=" . $x . ", Value=" . $x_value;
    //echo "<br>";
}
echo "</select></p>";

echo "<pre>";
print_r($countries);
echo"</pre>";
?>



<p>
Select your country?
<select name="country">
  <option value="">Select...</option>
  <option value="M">Male</option>
  <option value="F">Female</option>
</select>
</p>

