<?php
// Get bus number from URL
$bus = $_GET['bus'] ?? '';

// Dummy timeline data (replace with DB later)
$timeline = [
    ["time" => "7:00 AM", "stop" => "Railway Station", "status" => "crossed"],
    ["time" => "7:20 AM", "stop" => "Waltair", "status" => "crossed"],
    ["time" => "7:40 AM", "stop" => "MVP", "status" => "upcoming"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Registration</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
body {
    font-family: Arial;
    background: #fafafa;
}
.container {
    width: 60%;
    margin: auto;
    padding-top: 40px;
}
.timeline {
    border-left: 3px solid #b5006d;
    padding-left: 30px;
    margin-left: 20px;
}
.entry {
    margin-bottom: 40px;
}
.time {
    font-size: 14px;
    color: gray;
}
.circle {
    width: 10px;
    height: 10px;
    background: #b5006d;
    border-radius: 50%;
    position: relative;
    left: -37px;
    top: 7px;
}
.stop {
    font-size: 20px;
    font-weight: bold;
}
.status {
    font-size: 14px;
    color: #555;
}
.line {
    border-bottom: 1px dashed #999;
    margin: 15px 0;
}
.back {
    margin-bottom: 25px;
}
button {
    padding: 10px 18px;
    background: #b5006d;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
button:hover {
    background: #8a0053;
}
</style>

  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">PUBLIC TRANSPORT TRACKING SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">LOGIN</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="register.php">REGISTER</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="track1.php">TRACK</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container">

<a href="index.php"><button class="back">← Back</button></a>

<h2>Bus Route: <?php echo strtoupper($bus); ?></h2>

<div class="timeline">
<?php foreach($timeline as $point): ?>
<div class="entry">
    <div class="time"><?php echo $point['time']; ?></div>
    <div class="circle"></div>
    <div class="stop"><?php echo $bus; ?></div>
    <div class="status"><?php echo $point['stop']; ?> <br> <?php echo $point['status']; ?></div>
    <div class="line"></div>
</div>
<?php endforeach; ?>
</div>

</div>
</body>
</html>
