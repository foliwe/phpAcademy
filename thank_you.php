<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="">
    <img src="images/face.png" alt="" width="200" height="200">
    </div>
    <h1 class="big">Thank You!</h1> 
    <p>Dear  <span class="name"> <?php echo $_GET['name']; ?></span>, your message has been saved!</p>
    <!-- Add additional content or styling as desired -->
    <p> <a href="index.php">Home</a> </p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
