
<html>
<head><title>Hi!</title></head>
<body>

<?php
$name = "Kali";
$age = 129;
$color = "red";
$family_members = array ('Cindy', 'Jean', 'Mustapha', 'Pierre', 'Bernard', 'Eric'); 
$is_hungry = true;

?>
     <p>Hi! My name is <?php echo $name?>. </p>
     <p> I am <?php echo $age ?>  years old.</p>
     <p>My eyes are <?php echo $color ?>. </p>
     <p>First family member is <?php echo $family_members[0] ?> </p>

     <?php for($i= 1; count($family_members[$i]); $i++) { ?>
        <p>My other family member is <?php echo $family_members[$i] ?> </p>
     <?php } ?>
     <p> Are you hungry ? </p>
     <?php
    if ($is_hungry == true) {
        echo "Yes";
    }
    else {
        echo"No";
    }
    ?>
</body>
</html>