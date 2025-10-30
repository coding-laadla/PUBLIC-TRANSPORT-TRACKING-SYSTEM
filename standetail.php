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
        background: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 90%;
        margin: 30px auto;
        background: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        border-radius: 6px;
    }

    h2 {
        text-align: center;
        color: white;
        background: #007bff;
        padding: 12px;
        margin-top: 0;
        border-radius: 6px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        border: 1px solid #999;
        padding: 10px;
        text-align: left;
        font-size: 15px;
    }

    th {
        background: #e1e1e1;
    }

    tr:nth-child(even) {
        background: #f9f9f9;
    }

    @media screen and (max-width: 768px) {
        table, th, td {
            font-size: 13px;
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
<div class="container">
<h2>Bus Route Numbers & Route Names</h2>

<table>
    <tr>
        <th>Route Number</th>
        <th>Route Name</th>
    </tr>

    <tr><td>10K</td><td>10K: RTC Complex to Kailasagiri</td></tr>
    <tr><td>10K</td><td>10K: Kailasagiri to RTC Complex</td></tr>
    <tr><td>14</td><td>Old Post Office - Venkojipalem</td></tr>
    <tr><td>28K</td><td>28K: Kothavalasa to RK Beach</td></tr>
    <tr><td>205</td><td>205: Vizianagaram to Anakappalli</td></tr>
    <tr><td>12D</td><td>12D: Devarapalli to RTC Complex</td></tr>
    <tr><td>12D</td><td>12D: RTC Complex to Devarapalli</td></tr>
    <tr><td>58K</td><td>58K: Kothavalasa to S Kota</td></tr>
    <tr><td>58K</td><td>58K: S Kota to Kothavalasa</td></tr>
    <tr><td>68K</td><td>68K: Kothavalasa to RK Beach</td></tr>
    <tr><td>68K</td><td>68K: RK Beach to Kothavalasa</td></tr>
    <tr><td>222V</td><td>222V: Vizianagaram to Vishakapattanam</td></tr>
    <tr><td>22RR</td><td>22RR: Railway Station to Thagarpuvalasa</td></tr>
    <tr><td>201V</td><td>201V: S Kota to Visakhapatnam</td></tr>
    <tr><td>122</td><td>122: Vizianagaram to S Kota</td></tr>
    <tr><td>101</td><td>101: Vizianagaram to Simhachalam</td></tr>
    <tr><td>7D</td><td>7D: Vizianagaram to Simhachalam Hill Top</td></tr>
    <tr><td>701</td><td>701: Maddilapalem to Kothavalasa</td></tr>
    <tr><td>541</td><td>541: Kothavalasa to Maddilapalem</td></tr>
    <tr><td>541P</td><td>541P: Maddilapalem to Padmanabham</td></tr>
    <tr><td>60D</td><td>60D: Anakappalli to Steel Plant</td></tr>
    <tr><td>48A</td><td>48A: Madhavadhara to Old Post Office</td></tr>
    <tr><td>25P</td><td>25P: Rajiv Nagar to Old Post Office</td></tr>
    <tr><td>60C</td><td>60C: Arilova Colony to Old Post Office</td></tr>
    <tr><td>60C</td><td>60C: Old Post Office to Arilova Colony</td></tr>
    <tr><td>30</td><td>30: RTC Complex to Rajeev Nagar</td></tr>
    <tr><td>311</td><td>311: Simhachalam to Chodavaram</td></tr>
    <tr><td>8H</td><td>8H: Simhachalam Hill Top to Old Post Office</td></tr>
    <tr><td>28ZH</td><td>28 ZH: Simhachalam Hill Top to Zilla Parishad</td></tr>
    <tr><td>899</td><td>899: Anakapalli to Tagarapuvalasa</td></tr>
    <tr><td>888</td><td>888: Anakapalli to Tagarapuvalasa</td></tr>
    <tr><td>300C</td><td>300C: Old Gajuwaka to Visakhapatnam</td></tr>
    <tr><td>300N</td><td>300N: Sabbavaram to RTC Complex</td></tr>
    <tr><td>52D</td><td>52D: Ravindra Nagar to Old Post Office</td></tr>
</table>
</div>

</body>
</html>
