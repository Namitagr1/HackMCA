
<?php

$results = shell_exec("python college-finder.py " . $_POST['state'] . ' ' . $_POST['zipcode'] . ' ' . $_POST['degree'] . ' ' . $_POST['SAT/ACT'] . ' ' . $_POST['Score'] . ' 2>&1');

echo $results;

?>