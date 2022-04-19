<?php

//trying different types of printing options
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' );

print_r($countries);
echo "</br>";

echo "<pre>";
print_r($countries);
echo "</pre>";

var_dump($countries);

echo $countries[0];

//adding element to an array
array_push($countries, 'England');
echo "<pre>";
print_r($countries);
echo "</pre>";

//a shorter way to add element to array
$countries[] = 'Brasil';
echo "<pre>";
print_r($countries);
echo "</pre>";

//associative key; changing old element without erasing it - you add a new one

$person['function'] = 'Junior Web Developer';
echo $person['function'] ."</br>";

$person['function'] = 'Junior Web Developer';
$person['function'] = 'Senior Web Developer';
echo $person['function'] ."</br>"; //only second line got printed

//associative arrays function much like the numeric arrays,
// except that instead of using numbers, we can use unique labels as indexes.
// It's pretty much the same as for "normal" arrays, except that you specify a label in front of each information.

$user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'address' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
);

echo $user['lastname'];

// Create an associative array that describes you
$me = array (
    'firstname' => 'Ali',
    'lastname' => 'Khalife',
    'address' => '3 Parastraat',
    'city' => 'Beirut',
    'soccer' => true,
    'favorite season' => 'Summer',
);

echo "<pre>";
print_r($me);
echo "</pre>";


//multidimensional array - you can store all types of values in an array... including other arrays!
// Very useful because now you can store many things that come as groups.
// For instance, let's add your favourite movies to the $me array :

$me = array (
    'firstname' => 'Ali',
    'lastname' => 'Khalife',
    'address' => '3 Parastraat',
    'city' => 'Beirut',
    'soccer' => true,
    'favorite_season' => 'Summer',
    'favorite_movies' => array('HP', 'ShawShank Redemption', 'Marvel Movies'),
    'hobbies' => array('Sports', 'Travel', 'Movies', 'Beach'),
    'mother' => array (
        'firstname' => 'Bernie',
        'lastname' => 'Granger',
        'address' => '3 Parastraat',
        'city' => 'Beirut',
        'soccer' => false,
        'favorite_season' => 'Spring',
        'favorite_movies' => array('HP', 'ShawShank Redemption', 'Marvel Movies'),
        'hobbies' => array('Sports', 'Travel', 'Movies', 'Beach')
    )
);

$mother = array (
    'firstname' => 'Bernie',
    'lastname' => 'Granger',
    'address' => '3 Parastraat',
    'city' => 'Beirut',
    'soccer' => false,
    'favorite_season' => 'Spring',
    'favorite_movies' => array('HP', 'ShawShank Redemption', 'Marvel Movies'),
    'hobbies' => array('Sports', 'Travel', 'Movies', 'Beach')
);


echo "<pre>";
print_r($me);
echo"</pre>";

//count array length
echo count($me['favorite_movies']);
echo $me['favorite_movies'][0];
echo "</br>";

// start with an empty array with two elements(of type array) then add elements to each one
$web_development = [
  'frontend' => [],
  'backend' => []
];

array_push($web_development['frontend'], 'CSS', 'xhtml', 'Flash', "Js");
array_push($web_development['backend'], 'Ruby on Rails', 'SQL');
echo "<pre>";
print_r($web_development);
echo"</pre>";

//replace xhtml by html
$web_development['frontend'][1] = "html";
echo "<pre>";
print_r($web_development);
echo"</pre>";

//remove flash from array
unset($web_development['frontend'][2]);
echo "<pre>";
print_r($web_development);
echo"</pre>";
