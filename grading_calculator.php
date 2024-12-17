<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <center>
    <h1>Grade Calculator</h1>
    <div class="container">
    <form method="POST" action="">
        <label for="score">Enter the score:</label>
        <input type="number" id="score" name="score" required>
        <button type="submit">Calculate Grade</button>
    </form>
    </div>
    </center>
    <center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $score = $_POST['score'];

       
        if (!is_numeric($score)) {
            echo "<p style='color: red;'>Error: Invalid input. Please enter a numeric score.</p>";
        } else {
           
            $score = (int)$score;

            
            if ($score < 0 || $score > 100) {
                echo "<p style='color: red;'>Error: Invalid score. Please enter a score between 0 and 100.</p>";
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

              
                echo "<p>The score is <strong>$score</strong>, and the grade is <strong>$grade</strong>.</p>";
            }
        }
    }
    ?>
    </center>
</body>
</html>
