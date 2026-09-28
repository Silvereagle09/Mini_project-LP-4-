<!DOCTYPE html>
<html>

<head>
    <title>Afterlife Decision System</title>
    <p class="subtitle">
Karmic Evaluation and Afterlife Classification System
</p>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>⚖️ Afterlife Judgment Portal</h1>
<p style="text-align:center;">
Enter soul details for karmic evaluation
</p>

<form action="submit.php" method="post">

    <label>Name</label>

    <input
        type="text"
        name="name"
        pattern="[A-Za-z ]{3,30}"
        title="Only letters and spaces allowed"
        required>

    <label>Age</label>

    <input
        type="number"
        name="age"
        min="1"
        max="120"
        required>

    <label>Good Deeds</label>

    <input
        type="number"
        name="good_deeds"
        min="0"
        max="100"
        required>

    <label>Bad Deeds</label>

    <input
        type="number"
        name="bad_deeds"
        min="0"
        max="100"
        required>

    <button type="submit">
        Judge Soul
    </button>

</form>

<br>

<a href="results.php">
    <button>View Records</button>
</a>

</div>

</body>
</html>