<!DOCTYPE html>
<html>
<head>
    <title>Minutes Converter</title>
</head>
<body>
    <form>
        <input type="number" name="min" placeholder="Enter minutes">
        <button type="submit">Convert</button>
    </form>

    <?php
        $min = $_GET['min'] ?? 0;
        $hours = floor($min / 60);
        $minutes = $min % 60;
        echo "$hours sati i $minutes minuta";
    ?>
</body>
</html>