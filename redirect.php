<?php
$db = mysqli_connect('localhost', 'root', '', 'urlshortener') or die("Database is not connected");

if (isset($_GET['url'])) {
    $shortUrl = mysqli_real_escape_string($db, $_GET['url']);
    $query = "SELECT long_url FROM urltable WHERE short_url='$shortUrl'";
    $result = mysqli_query($db, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $longUrl = $row['long_url'];
        header("Location: $longUrl");
        exit;
    } else {
        echo "URL not found!";
    }
} else {
    echo "Invalid URL!";
}
?>
