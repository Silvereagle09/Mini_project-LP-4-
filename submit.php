<?php

include("db_connect.php");

if($_SERVER["REQUEST_METHOD"] != "POST")
{
    header("Location: index.php");
    exit();
}

$name = $_POST['name'];
$age = $_POST['age'];
$good_deeds = $_POST['good_deeds'];
$bad_deeds = $_POST['bad_deeds'];

$final_score = $good_deeds - $bad_deeds;

if($final_score >= 80)
{
    $destination = "Supreme Heaven";
    $reason = "Exceptional positive deeds recorded.";
}
elseif($final_score >= 40)
{
    $destination = "Heaven";
    $reason = "Good deeds outweigh bad deeds.";
}
elseif($final_score >= 0)
{
    $destination = "Rebirth";
    $reason = "Balanced karma requires another life cycle.";
}
else
{
    $destination = "Hell";
    $reason = "Negative karma exceeds positive karma.";
}


$stmt = $conn->prepare(
"INSERT INTO souls
(name, age, good_deeds, bad_deeds,
final_score, destination)
VALUES (?, ?, ?, ?, ?, ?)"
);

$stmt->bind_param(
"siiiis",
$name,
$age,
$good_deeds,
$bad_deeds,
$final_score,
$destination
);

$stmt->execute();


?>

<!DOCTYPE html>
<html>

<head>
    <title>Judgment Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Judgment Result</h2>

<p><b>Name :</b> <?php echo $name; ?></p>

<p><b>Final Score :</b> <?php echo $final_score; ?></p>

<p><b>Reason :</b> <?php echo $reason; ?></p>

<?php

if($destination=="Supreme Heaven")
{
    echo "<p class='supreme'>Destination : $destination</p>";
}
elseif($destination=="Heaven")
{
    echo "<p class='heaven'>Destination : $destination</p>";
}
elseif($destination=="Rebirth")
{
    echo "<p class='rebirth'>Destination : $destination</p>";
}
else
{
    echo "<p class='hell'>Destination : $destination</p>";
}

?>

<br>

<a href="index.php">
    <button>Judge Another Soul</button>
</a>

<br><br>

<a href="results.php">
    <button>View Records</button>
</a>

</div>

</body>
</html>