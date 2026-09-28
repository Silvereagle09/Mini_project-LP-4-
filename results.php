<?php

include("db_connect.php");

/* Statistics */

$heaven = $conn->query(
"SELECT COUNT(*) AS total
FROM souls
WHERE destination='Heaven'"
)->fetch_assoc()['total'];

$supreme = $conn->query(
"SELECT COUNT(*) AS total
FROM souls
WHERE destination='Supreme Heaven'"
)->fetch_assoc()['total'];

$rebirth = $conn->query(
"SELECT COUNT(*) AS total
FROM souls
WHERE destination='Rebirth'"
)->fetch_assoc()['total'];

$hell = $conn->query(
"SELECT COUNT(*) AS total
FROM souls
WHERE destination='Hell'"
)->fetch_assoc()['total'];

/* Search */

if(isset($_GET['search']) && $_GET['search'] != "")
{
    $search = $_GET['search'];

    $result = $conn->query(
    "SELECT *
     FROM souls
     WHERE name LIKE '%$search%'
     ORDER BY id DESC"
    );
}
else
{
    $result = $conn->query(
    "SELECT *
     FROM souls
     ORDER BY id DESC"
    );
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Afterlife Records</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>📜 Afterlife Records</h1>

    <div class="stats">

        <div class="card">
            <h3><?php echo $supreme; ?></h3>
            <p>👑 Supreme Heaven</p>
        </div>

        <div class="card">
            <h3><?php echo $heaven; ?></h3>
            <p>☁️ Heaven</p>
        </div>

        <div class="card">
            <h3><?php echo $rebirth; ?></h3>
            <p>🔄 Rebirth</p>
        </div>

        <div class="card">
            <h3><?php echo $hell; ?></h3>
            <p>🔥 Hell</p>
        </div>

    </div>

    <form method="GET">

        <input
            type="text"
            name="search"
            placeholder="Search by Name"
            value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">

        <button type="submit">
            Search Soul
        </button>

    </form>

    <br>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Good</th>
            <th>Bad</th>
            <th>Score</th>
            <th>Destination</th>
            <th>Date</th>
        </tr>

        <?php

        while($row = $result->fetch_assoc())
        {
            echo "<tr>";

            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>".$row['good_deeds']."</td>";
            echo "<td>".$row['bad_deeds']."</td>";
            echo "<td>".$row['final_score']."</td>";

            if($row['destination'] == "Supreme Heaven")
            {
                echo "<td>👑 ".$row['destination']."</td>";
            }
            elseif($row['destination'] == "Heaven")
            {
                echo "<td>☁️ ".$row['destination']."</td>";
            }
            elseif($row['destination'] == "Rebirth")
            {
                echo "<td>🔄 ".$row['destination']."</td>";
            }
            else
            {
                echo "<td>🔥 ".$row['destination']."</td>";
            }

            echo "<td>".$row['created_at']."</td>";

            echo "</tr>";
        }

        ?>

    </table>

    <br>

    <a href="index.php">
        <button>
            🏠 Back to Home
        </button>
    </a>

</div>

</body>
</html>

<?php
$conn->close();
?>