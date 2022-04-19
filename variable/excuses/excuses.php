<?php

$name = $_POST["name"];
$grade = $_POST["grade"];
$parent = $_POST["parent"];
$gender = $_POST["gender"];
$teacher = $_POST["teacher"];
$teacher_gender = $_POST["teacher_gender"];
$excuse = $_POST["excuse"];

// $text = date('l jS \of F Y') ."</br Dear";
$text .= "Dear ";
$teacher_gender =="miss" ? $text.="Miss " : $text.="Mister ";
$text.=$teacher.", <p></p>";
$text.= "With due respect, it is to inform you that my child, " .$name .", 
    a student of class " .$grade ." will not be able to attend school today (".date('l jS \of F Y').") because of "
    .$excuse ."." ."</br> I am writing this letter to bring to your attention that " ;
switch ($excuse) {
    case "illness" :
        $gender=="female" ? $text.=" she's feeling very sick as she's suffering from high fever since last night. 
        The doctor is suspecting dengue and thus, has advised her complete bed rest for a week." :
            $text.=" he's feeling very sick as he's suffering from high fever since last night. 
        The doctor is suspecting dengue and thus, has advised him complete bed rest for a week." ;
        break;
    case "death_pet" :
        $gender=="female" ? $text.=" unfortunately, her pet died last night and she is devastated." :
            $text.="unfortunately, his pet died last night and he is devastated." ;
        break;
    case "death_family" :
        $gender=="female" ? $text.=" unfortunately, a close member of the family died last night and she is devastated about this news." :
            $text.=" unfortunately, a close member of the family died last night and he is devastated about this news." ;
        break;
    case "activity" :
        $gender=="female" ? $text.="she has a significant extra-curricular activity that requires a lot of time." :
            $text.="he has a significant extra-curricular activity that requires a lot of time." ;
        break;
}

$text.= "</br> Kindly grant me leave for a day. I shall be highly obliged.";
$text.= "</br> Sincerely,";
$text .= "</br>" .$parent;


echo $text;

