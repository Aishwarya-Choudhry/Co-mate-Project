<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php include 'link/links.php';?>
        <?php include 'css/style.php';?>
</head>
        <body>
        <nav class="navbar navbar-expand-lg nav_style p-2">
  <a class="navbar-brand pl = 5 " href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr = 5 ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class ="nav-item">
        <a class ="nav-link" href = "#sympid">Symptoms</a>
      </li>
      
      <li class = "nav-item">
       <a class = "nav-link" href ="#preventid">Preventions</a>
      </li>
      <li class = "nav-item">
        <a class = "nav-link" href = "indiacoronalive.php">indiacoronalive</a>
      </li>
      <li class = "nav-item">
      <a class ="nav-link" href = "#contactid">Contact</a>
      </li>
    </ul>
    
  </div>
</nav> 
<section class = "corona_update container-fluid">
     <div class= "mb-5">
<h3 class = "text-center text-uppercase">COVID-19 LIVE UPDATES OF INDIA</h3>
     </div>
     <div class ="table-responsive">
     <table class = " table table-bordered table-striped text-center">
     <tr>
       <th class = "text-capitalize">Country</th>
       <th class = "text-capitalize">state</th>
       <th calss = "text-capitalize">confirmed</th>
       <th class = " text-capitalize">active</th>
       <th class = "text-capitalize">recovered</th>
       <th class = "text-capitalize">deaths</th>
     </tr>

     <?php
     $data = file_get_contents('https://data.covid19india.org/data.json');
     $coronalive = json_decode($data ,true);
    
    
    $statescount =  count($coronalive['statewise']);
    $i = 1;
    while($i < $statescount){
        ?>
        <tr>
        <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']  ?></td>
        <td><?php echo $coronalive['statewise'][$i]['state']  ?></td>
        <td><?php echo $coronalive['statewise'][$i]['confirmed']  ?></td>
        <td><?php echo $coronalive['statewise'][$i]['active']  ?></td>
        <td><?php echo $coronalive['statewise'][$i]['recovered']  ?></td>
        <td><?php echo $coronalive['statewise'][$i]['deaths']  ?></td>
        </tr>
        
       <!-- echo $coronalive['statewise'][$i]['lastupdatedtime']. "<br>";
        echo $coronalive['statewise'][$i]['state']."<br>";
        echo $coronalive['statewise'][$i]['confirmed'] ."<br>";
        echo $coronalive['statewise'][$i]['active']."<br>";
        echo $coronalive['statewise'][$i]['recovered']."<br>";
        echo $coronalive['statewise'][$i]['deaths']. " <br>"; -->
     <?php
        $i++;
    }

    


     ?>
     </table>
</div>  
    </div>
</section>
</body>