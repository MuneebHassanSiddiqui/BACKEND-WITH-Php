<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <style>
        h1{
            text-align: center;
            font-size: 60;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;            
            width: 60%;
        }
        th, td{
            height: 40px;
            border : solid black thin ;
        }
        th{
            width: 5%;
            text-align: center;
        }
        td{
            width: 10%;
            text-align: center;
        }

    </style>
</head>
<body>
    <?php
    // Student Information
    $rn = 6558;
    $sn = "Shahid";
    $class = 9;

    // Subject Scores
    $eng = 94;
    $urdu = 47;
    $islamiyat = 89;
    $ps = 32;
    $maths = 2;
    $science = 71;

    // Calculating Obtained Marks and Percentage
    $obt_marks = $eng + $urdu + $islamiyat + $ps + $maths + $science;
    $total_marks = 600;
    $percentage = ($obt_marks / $total_marks) * 100;
    $grade;
    $remarks;

    // Determines Grades and Remarks
    if ($percentage >= 80) {
        $grade = 'A+';
        $remarks = 'Excellent';
    }else if ($percentage >= 70 && $percentage <= 79) {
        $grade = 'A';
        $remarks = 'Very Good';
    }else if ($percentage >= 60 && $percentage <= 69) {
        $grade = 'B';
        $remarks = 'Good';
    }else if ($percentage >= 50 && $percentage <= 59) {
        $grade = 'C';
        $remarks = 'Average';
    }else if ($percentage >= 40 && $percentage <= 49) {
        $grade = 'D';
        $remarks = 'Satisfactory';
    }else if ($percentage >= 0 && $percentage <= 39) {
        $grade = 'F';
        $remarks = 'FAIL';
    }
    ?>

    <h1>Marksheet</h1>
    <table border="1">
        <tr><th>Roll Number:</th> <td><?php echo $rn ?></td></tr>
        <tr><th>Student Name:</th> <td><?php echo $sn ?></td></tr>
        <tr><th>Class:</th> <td><?php echo $class ?></td></tr>
        <tr><th>English:</th> <td><?php echo $eng ?></td></tr>
        <tr><th>Urdu:</th> <td><?php echo $urdu ?></td></tr>
        <tr><th>Pakistan Studies:</th> <td><?php echo $islamiyat ?></td></tr>
        <tr><th>Islamiat:</th> <td><?php echo $ps ?></td></tr>
        <tr><th>Maths:</th> <td><?php echo $maths ?></td></tr>
        <tr><th>Science:</th> <td><?php echo $science ?></td></tr>
        <tr><th>Obtained Marks:</th> <td><?php echo $obt_marks ?> / <?php echo $total_marks ?></td></tr>
        <tr><th>Percentage:</th> <td><?php echo $percentage ?></td></tr>
        <tr><th>Grade:</th> <td><?php echo $grade ?></td></tr>
        <tr><th>Remarks:</th> <td><?php echo $remarks ?></td></tr>
    </table>
</body>
</html>
