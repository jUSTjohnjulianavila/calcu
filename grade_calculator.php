<?php

echo "Enter the score: ";
$score = trim(fgets(STDIN));


if (!is_numeric($score)) {
    echo "Error: Invalid input. Please enter a numeric score.\n";
    exit();
}


$score = (int)$score;


if ($score < 0 || $score > 100) {
    echo "Error: Invalid score. Please enter a score between 0 and 100.\n";
} else {
   
    if ($score >= 90) {
        $grade = 'A';
    } elseif ($score >= 80) {
        $grade = 'B';
    } elseif ($score >= 70) {
        $grade = 'C';
    } elseif ($score >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    
    echo "The score is $score, and the grade is $grade.\n";
}
?>
