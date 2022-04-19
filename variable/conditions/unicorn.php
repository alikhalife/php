<form method="get" action="unicorn.php">
Are you a Cat, a Unicorn or an Alien?
    <label>
        <input type="radio" name="gender" value="cat"> Cat
        <input type="radio" name="gender" value="unicorn"> Unicorn
        <input type="radio" name="gender" value="alien"> Alien
    </label>
  <input type="submit" name="submit" value="Greet me now">

</form>

<?php
$cat_url = 'https://media.giphy.com/media/BzyTuYCmvSORqs1ABM/giphy.gif';
$alien_url = 'https://media.giphy.com/media/l0MYx2rhu3WL5fUd2/giphy.gif';
$unicorn_url = 'https://media.giphy.com/media/G0nTMRctvIp4Q/giphy.gif';


echo ($_GET['gender'] == "cat") ?  "<img src =$cat_url alt='cat'/>" : "" ;
echo ($_GET['gender'] == "alien") ? "<img src =$alien_url alt='cat'/>": "" ;
echo ($_GET['gender'] == "unicorn") ? "<img src =$unicorn_url alt='cat'/>" : "" ;

/*switch ($_GET['gender']) {
    case "cat":
        echo "<img src ='https://media.giphy.com/media/BzyTuYCmvSORqs1ABM/giphy.gif' alt='cat'/>";
        break;
    case "unicorn":
        echo "<img src ='https://media.giphy.com/media/G0nTMRctvIp4Q/giphy.gif' alt='unicorn'/>";
        break;
    case "alien":
        echo "<img src ='https://media.giphy.com/media/l0MYx2rhu3WL5fUd2/giphy.gif' alt='alien'/>";
        break;
    default:
        echo "Choose wisely";
}*/

?>