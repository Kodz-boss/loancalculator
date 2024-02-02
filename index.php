<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Loan Calculator</title>
</head>
<body>
    <div class="container">
    <form method="post" class="form">
        <h1>Loan Calculator</h1>
        <div class="part">
        <label for="loanAmount">Loan Amount ($):</label>
        <input type="number" name="loanAmount" required>
        </div>
        <div class="part2">
        <label for="interestRate">Interest Rate (%):</label>
        <input type="number" name="interestRate" value="11" readonly>
        </div>
        <div class="part3">
        <label for="loanDuration">Loan Duration (years):</label>
        <select name="loanDuration" >
            <?php
            for($i = 2; $i <= 40; $i++){
                echo"<option value='$i'>$i</option>";
            } 
            ?>
        </select>
        </div>
        <input type="submit" value="calculate" class="but">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $loanAmount = $_POST["loanAmount"];
        $interestRate = $_POST["interestRate"];
        $loanDuration = $_POST["loanDuration"];

        $totalInterest = ($loanAmount * $interestRate * $loanDuration) / 100;

        echo"<br><strong>Loan Details</strong>";
        echo"<br>Loan Amount : $ $loanAmount";
        echo"<br>Interest Rate : $interestRate%";
        echo"<br>Loan Duration : $loanDuration years";
        echo"<br>Total Interest Payable : $totalInterest";

    } 
    ?>
    </div>
</body>
</html>