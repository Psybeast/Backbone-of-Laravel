<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Backbone-ofLaravel</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="welcome">
    <h1>You have arrived.</h1>
</div>
<main></main>
<script type="text/template" id="plineTemplate">
    <img src="<%= pPic %>"/>
    <p class="pLineName"><%= pLine %></p>
</script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/underscore-min.js"></script>
<script src="js/backbone-min.js"></script>
<script src="js/main.js"></script>
<script src="js/code.js"></script>
<script> new App.Views.App</script>
</body>
</html>
