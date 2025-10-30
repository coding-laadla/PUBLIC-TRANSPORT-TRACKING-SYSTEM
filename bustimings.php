<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
     <style>
    body {
        font-family: Arial, sans-serif;
        background: #f8f8f8;
        text-align: center;
        margin: 0;
        padding: 0;
    }
    h2 {
        background: #007bff;
        color: white;
        padding: 15px;
        margin: 0;
    }
    table {
        width: 70%;
        margin: 40px auto;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
        border: 1px solid #444;
        padding: 10px;
        text-align: center;
        font-size: 16px;
    }
    th {
        background: #e0e0e0;
    }
    tr:nth-child(even) {
        background: #f2f2f2;
    }
    @media screen and (max-width: 768px) {
        table {
            width: 95%;
        }
        th, td {
            font-size: 14px;
            padding: 8px;
        }
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
<h2>900k Bus SCHEDULE</h2>

<table>
    <tr><th>RTC Complex</th><th>Car Shed</th><th>IT Hills</th></tr>
    <tr><td>6:00</td><td>6:30</td><td>6:55 / 7:00 (Via Marikavalasa)</td></tr>
    <tr><td>7:45 / 8:00</td><td>8:30</td><td>8:55 / 9:00</td></tr>
    <tr><td>9:15 / 9:30</td><td>10:00 / 10:15</td><td>10:40 / 10:45</td></tr>
    <tr><td>11:30 / 11:45</td><td>12:00 / 12:15</td><td>12:30 / 12:40</td></tr>
    <tr><td>13:15 / 13:30</td><td>13:45 / 14:00</td><td>14:15 / 14:30</td></tr>
    <tr><td>15:00 / 15:15</td><td>15:30</td><td>16:00</td></tr>
    <tr><td>16:30</td><td>16:55 / 17:00</td><td>17:15 / 17:30 (Via Marikavalasa)</td></tr>
    <tr><td>18:00</td><td>18:15 / 18:30</td><td>18:55 / 19:00 (Via Marikavalasa)</td></tr>
</table>

</body>
</html>
