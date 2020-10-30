<?php
$questionName = filter_input(INPUT_POST, 'questionName');
$questionBody = filter_input(INPUT_POST, 'questionBody');
$questionSkills = filter_input(INPUT_POST, 'questionSkills');


//validate questionName
if(empty($questionName))
    echo 'error: question name not entered <br>';
else if(strlen($questionName) < 3)
    echo "question name must be at least 3 characters<br>";
else
    echo "question name:  $questionName <br> ";

//validate questionBody
if(empty($questionBody))
    echo 'error: questions body not entered <br>';
else if(strlen($questionBody) > 500)
    echo "question body must be less than 500 characters<br>";
else
    echo "question body :  $questionBody <br> ";

//validate questionSkills
$questionsSkills2 = explode("," , $questionSkills);
if(count($questionsSkills2) < 2 )
    echo "error: list at ";
else
    print_r($questionsSkills2);




