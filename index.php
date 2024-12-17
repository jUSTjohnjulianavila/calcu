<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grade = $_POST['grade'];

    if (!is_numeric($grade) || $grade < 0 || $grade > 100) {
        $result = "Error: Invalid grade. Please enter a grade between 0 and 100.";
    } else {
        if ($grade >= 90) {
            $universityGrade = "1.0";
        } elseif ($grade >= 85) {
            $universityGrade = "1.25";
        } elseif ($grade >= 80) {
            $universityGrade = "1.5";
        } elseif ($grade >= 75) {
            $universityGrade = "1.75";
        } elseif ($grade >= 70) {
            $universityGrade = "2.0";
        } elseif ($grade >= 65) {
            $universityGrade = "2.25";
        } elseif ($grade >= 60) {
            $universityGrade = "2.5";
        } elseif ($grade >= 55) {
            $universityGrade = "2.75";
        } elseif ($grade >= 50) {
            $universityGrade = "3.0";
        } else {
            $universityGrade = "Fail";
        }

        $result = "The grade is $grade, and the university grade is $universityGrade.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System Conversion Tool</title>
</head>
<body>
    <center>
    <h1>Grading System Conversion Tool</h1>
    <form method="post" action="">
        <label for="grade">Enter the grade (0-100):</label>
        <input type="text" id="grade" name="grade" required>
        <button type="submit">Convert</button>
    </form>

    <?php if (isset($result)): ?>
        <p><strong><?php echo $result; ?></strong></p>
    <?php endif; ?>
    </center>
</body>
</html>
