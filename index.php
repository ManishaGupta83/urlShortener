<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrlShortner</title>
    <link rel="icon" type="image/svg" href="images/link.svg">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="" href="style.css">

</head>
<body>
<h2>UrlShortener</h2>

<div class="container">
<div class="col-6 m-auto">
<div id="error"></div>
<div class="input-group mb-3">
  <input type="text" id="longurl" class="form-control" placeholder="Enter Url to Short" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="btn">Shorten</span>
</div>
<div id="success"></div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="script.js"></script>

</body>
</html>