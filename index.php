<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dischi</title>

  <!-- CSS my style -->
  <link rel="stylesheet" href="style.css">
  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Handlebars -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.5.3/handlebars.min.js"></script>
  <!-- JS my script -->
  <script src="script.js"></script>

</head>
<body>

<div class="search">
  <input id="search-input" type="text">
  <button id="search-button">Search</button>
</div>



<div class="container">
</div>
  
<!-- Handlebars Template -->
<script id="cd-template" type="text/x-handlebars-template">
  <div class="cd">
    <img src="{{poster}}" alt="">
    <h3>{{title}}</h3>
    <span class="author">{{author}}</span>
    <span class="year">{{year}}</span>
  </div>
</script>

</body>
</html>