
<?php

$results = shell_exec("python grade-calculator.py " . $_POST['course'] . ' ' . $_POST['time'] . ' ' . $_POST['grade1'] . ' ' . $_POST['grade2'] . ' ' . $_POST['grade3'] . ' ' . $_POST['grade4'] . ' ' . $_POST['quiz1'] . ' ' . $_POST['quiz2'] . ' ' . $_POST['exam']);

echo $results;

?>