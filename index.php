<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php include 'link/links.php';?>
        <?php include 'css/style.php';?>
</head>
        <body onload="fetch()">
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
<div class = " main_header">
  <div class = "row w-100 h-100">
    <div class = "col-log-5 col-md-5 col-12 order-lg-1 order-2"> 
     <div class = "leftside w-100 h-100 d-flex justify-content-center align-items-center">
       <img src = "images/eksaath.png" width = "200" height ="200">
     </div>
    </div>
    <div class ="col-log-7 col-md-7 col-12 order-lg-2 order-1">
       <div class = "rightside w-100 h-100 d-flex justify-content-center align-items-center">
         <h1>Let's Stay Safe & Fight Together Against Cor  <img class="corona1_rot" src ="images/corona1.png" alt="rotat">  na Virus</h1>
       </div>
    </div>
  </div>
</div>
   <!--**************corona update**********-->
   <!--<section class = "corona_update container-fluid">
     <div class= "mb-3">
<h3 class = "text-center text-uppercase">covid-19 updates</h3>
     </div>
     <div class ="table-responsive">
     <table class = "table-bordered table-striped text-center" id = "tbval">
     <tr>
       <th>Country</th>
       <th>TotalConfirmed</th>
       <th>TotalRecovered</th>
       <th>TotalDeaths</th>
       <th>NewRecovered</th>
       <th>NewDeaths</th>
     </tr>
     
     </table>
       
    </div>
  </div>
   </section>-->
  <!--*************about section***********-->
  <div class = " container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class = "section_header text-center mb-5 mt-4">
      <h1> About COVID-19</h1>
    </div>
 
    <div class = "row pt-5">
      <div class = "col-lg-5 col-md-6 col-12 ml-5">
        <img src ="images/aboutcorona.png" class ="img-fluid"> 
</div>
<div class ="col-lg-6 col-md-6 col-12">
  <h2>What is COVID-19(Corona-Virus)</h2>
   <p>Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus. The virus can spread from an infected person???s mouth or nose in small liquid particles when they cough, sneeze, speak, sing or breathe. These particles range from larger respiratory droplets to smaller aerosols.</p>
   <p>Some variants of the coronavirus, such as Delta and Omicron, are spreading more easily between people.Omicron - B.1.1.529, BA.1, BA.1.1, BA.2, BA.3, BA.4 and BA.5</p>
</div>
<!--/////////// corona symptons ////////-->
<div class = " container-fluid  pt-5 pb-5" id="sympid">
    <div class = "section_header text-center mb-5 mt-4">
      <h1> Coronavirus symptoms</h1>
</div>
<div class ="container">
  <div class ="row">
  <div class ="col-lg-4 col-md-4 col-12  mt-5">
    <figure class= "text-center">
      <img src = "images/cough.png" class = "img-fluids" width ="120" height ="120">
      <figcaption>Cough</figcaption>
    </figure>
</div>
<div class ="col-lg-4 col-md-4 col-12  mt-5">
    <figure class= "text-center">
      <img src = "images/runny-nose.png" class = "img-fluids" width ="120" height ="120">
      <figcaption>Runny nose</figcaption>
    </figure>
</div>
<div class ="col-lg-4 col-md-4 col-12 mt-5 ">
    <figure class= "text-center">
      <img src = "images/fever.png" class = "img-fluids" width ="120" height ="120">
      <figcaption>Fever</figcaption>
    </figure>
</div>
<div class ="col-lg-4 col-md-4 col-12 mt-5">
    <figure class= "text-center">
      <img src = "images/cold.png" class = "img-fluids" width ="120" height ="120">
      <figcaption>Cold</figcaption>
    </figure>
</div>
<div class ="col-lg-4 col-md-4 col-12 mt-5">
    <figure class= "text-center">
      <img src = "images/tiredness.png" class = "img-fluids" width ="120" height ="120">
      <figcaption>Tiredness</figcaption>
    </figure>
</div>
<div class ="col-lg-4 col-md-4 col-12 mt-5">
    <figure class= "text-center">
      <img src = "images/difficulty-breathing.png" class = "img-fluids" width ="120" height ="120">
      <figcaption>Difficulty-breathing</figcaption>
    </figure>
</div>
</div>
</div>
<!--/////////// Prevention Against Corona-Virus ////////-->
<div class = " container-fluid sub_section pt-5 pb-5" id="preventid">
    <div class = "section_header text-center mb-5 mt-4">
      <h1> 6 Steps Prevention Against Corona-Virus</h1>
</div>
<div class = "container">
  <div class = "row">
    
  <div class =" col-lg-4 col-md-4 col-12">
      <div class = "row">
      <div class = "col-lg-4 col-md-4 col-12" >
      <figure class= "text-center">
      <img src = "images/washing-hand.png" class = "img-fluids" width ="90" height ="90">
  
    </figure>
      </div>
      <div class = "col-log-8 col-md-8 col-12 ">
        <p>Wash your hands regularly for 20 seconds, with soap or water or alcohol-based hand rub.</p>
      </div>
    </div>
  </div>
  <div class =" col-lg-4 col-md-4 col-12">
      <div class = "row">
      <div class = "col-lg-4 col-md-4 col-12" >
      <figure class= "text-center">
      <img src = "images/mask.png" class = "img-fluids" width ="90" height ="90">
  
    </figure>
      </div>
      <div class = "col-log-8 col-md-8 col-12 ">
        <p>Cover your nose and mouth with disposable tissue or flexed elbow when you cough or sneeze.</p>
      </div>
    </div>
  </div>
  
  <div class =" col-lg-4 col-md-4 col-12">
      <div class = "row">
      <div class = "col-lg-4 col-md-4 col-12" >
      <figure class= "text-center">
      <img src = "images/distancing.png" class = "img-fluids" width ="90" height ="90">
  
    </figure>
      </div>
      <div class = "col-log-8 col-md-8 col-12 ">
        <p>Avoid close contact(1 meter or 3 feet) with people who are unwell.</p>
      </div>
    </div>
  </div>

  
  <div class =" col-lg-4 col-md-4 col-12">
      <div class = "row">
      <div class = "col-lg-4 col-md-4 col-12" >
      <figure class= "text-center">
      <img src = "images/television.png" class = "img-fluids" width ="90" height ="90">
  
    </figure>
      </div>
      <div class = "col-log-8 col-md-8 col-12 ">
        <p>Stay informed by watching news and follow the recommended practices.</p>
      </div>
    </div>
  </div>
  
  <div class =" col-lg-4 col-md-4 col-12">
      <div class = "row">
      <div class = "col-lg-4 col-md-4 col-12" >
      <figure class= "text-center">
      <img src = "images/house.png" class = "img-fluids" width ="90" height ="90">
  
    </figure>
      </div>
      <div class = "col-log-8 col-md-8 col-12 ">
        <p>Stay home and self isolate from others in the household if you feel unwell.</p>
      </div>
    </div>
  </div>

  <div class =" col-lg-4 col-md-4 col-12">
      <div class = "row">
      <div class = "col-lg-4 col-md-4 col-12" >
      <figure class= "text-center">
      <img src = "images/flu.png" class = "img-fluids" width ="90" height ="90">
  
    </figure>
      </div>
      <div class = "col-log-8 col-md-8 col-12 ">
        <p>If you have fever,cough and difficulty breathing, seek medical care early.</p>
      </div>
    </div>
  </div>

  <!--/////////// Contact Us ASAP ////////-->
<div class = " container-fluid pt-5 pb-5" id="contactid">
    <div class = "section_header text-center mb-5 mt-4">
      <h1> Contact Us ASAP</h1>
</div>
 <div class =" container">
   <div class = "row">
     <div class = " col-lg-8 offset-lg-2 col-12">
     <form action = ""method = "POST">




  <div class="form-group">
    <label>username</label>
    <input type="text" class="form-control" name ="username" placeholder="name" autocomplete="off" required>
  </div>
  
     

      
  <div class="form-group">
    <label>Email <address></address></label>
    <input type = "email" class ="form-control" name="email" placeholder="name@example.com" required autocomplete ="off">
  </div>

  <div class="form-group">
    <label>mobile</label>
    <input type="number" class="form-control" name ="mobile" placeholder="mobile" autocomplete="off" required>
  </div>

  <div class ="form-group">
        <label>Select Symptoms</label> <br>


         <div class = "custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type = "checkbox" class ="custom-control-input" id ="customcheckbox1" name="coronasym[]" value = "cold">
          <label class = "custom-control-label" for="customcheckbox1">Cold</label>
          </div>
          
          <div class = "custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type = "checkbox" class ="custom-control-input" id ="customcheckbox2" name="coronasym[]" value = "fever">
          <label class = "custom-control-label" for="customcheckbox2">fever</label> 
          </div>

          <div class = "custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type = "checkbox" class ="custom-control-input" id ="customcheckbox3" name="coronasym[]" value = "breath">
          <label class = "custom-control-label" for="customcheckbox3">Difficult in breathing</label> 
          </div>

          <div class = "custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type = "checkbox" class ="custom-control-input" id ="customcheckbox4" name="coronasym[]" value = "weakness">
          <label class = "custom-control-label" for="customcheckbox4">weakness</label> 
          </div>
          


  </div>
  <div class = "form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name ="msg"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
</form>
 </div>
</div>
</div>




<!--////////top cursor//////-->
<div class = "container scrolltop float-right pr-5">
  <i class =" fa fa-arrow-up" onclick="topFunction()" id = "myBtn"></i>
</div>

<script type  = "text/javascript">
  myButton = document.getElementsById("myself");
  window.onscroll = function() {scrollFunction()};
  function scrollFunction(){

  if( document.body.scrollTop >100 || document.documentElement.scrollTop > 100){
    mybutton.style.dispaly = "block";
  }else{
    mybutton.style.dispaly = "none";
  }
  }
function topfunction(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
function fetch(){
   $.get("https://api.covid19.com/summary",
  function (data){
    console.log(data['Countries'].length);
    var tbval = document.getElementById('tbval');
    for(var i =1; 1<(data['Countries'].length); i++){
      var x = tbval.insertRow();
      x.insertCell(0);
      tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
      tbval.rows[i].cells[0].style.background = '#7a4a91';
      tbval.rows[i].cells[0].style.color = '#fff';
      x.insertCell(1);
      tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
      tbval.rows[i].cells[1].style.background = '#4bb7d8';
      x.insertCell(2);
      tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
      tbval.rows[i].cells[2].style.background = '#4bb7d8';
      x.insertCell(3);
      tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
      tbval.rows[i].cells[3].style.background = '#f36e23';
      x.insertCell(4);
      tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
      tbval.rows[i].cells[4].style.background = '#4bb7d8';
      x.insertCell(5);
      tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewConfirmed'];
      tbval.rows[i].cells[5].style.background = '#9cc850';
      x.insertCell(6);
      tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
      tbval.rows[i].cells[6].style.background = '#f36e23';
      }
    }
  );
}


 

</script>
        </body>
    
</html>

<?php

include'dbcon.php';
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $symp = $_POST['coronasym'];
  $msg = $_POST['msg'];

  $chk = "";
  foreach($symp as $chk1){
    $chk .= $chk1.",";
  }
  $insertquery = " insert into coronacases(username,email,mobile,symp,message) values('$username','$email', '$mobile', '$chk', '$msg')";
  $query = mysqli_query($con , $insertquery);
  if($query){
    ?>
    <script>
        alert("inserted successfully");
    </script>
    <?php
}else {
   ?>
   <script>
       alert(" No insertion");
   </script>
   <?php
}
}

?>