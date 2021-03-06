<!DOCTYPE html>
<html>
  <head>
    <title>REGISTER
    </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvEF88TUQE1XfTDginYNRWpU5YzDkGGrc&callback=initMap">
    </script>          
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-1.9.1.js">
    </script>
    <style type='text/css'>
      label:after {
        content: '*';
        color: #FF0000;
      }
      .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #80808059;
        background-clip: border-box;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: .25rem;
      }
      body{
        font-family: 'Raleway', sans-serif;
        background-image: url(images/stars-about.png);
      }
      input,select {
        width: 80%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border :0px;
        border-bottom: 2px solid white;
        display: block;
        border-radius: 0px;
        background-color: transparent;
        color:#fff;
      }
      button {
        background-color: #555555;
      }
      input:focus,
      select:focus,
      textarea:focus,
      button:focus {
        outline: none;
      }
      a {
        color: #fff;
      }
      label{
        color:#fff;
      }
      card-link{
        color:#fff;
      }
      <meta name="viewport" content="width=device-width, initial-scale=1">
#myImg {
    border-radius: 0px;
    cursor: pointer;
    transition: 0.3s;
}
#myImg:hover {opacity: 0.8;}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 30%;
    height: 500px;
    max-width: 700px;
}
/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 100px;
}
/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}
@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}
@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}
/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}
.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}
/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 70%;
    }
}
    </style>
  </head>
  <body>
    <?php include('navbar.php') ; ?>
    <div class='container mt-3'>
      <h2 style="color: #fff;margin-bottom:30px;">REGISTRATION
      </h2>
      <div id='accordion'>
        <?php
echo "
<div id='myModal' class='modal'>
  <span class='close'>&times;</span>
  <img class='modal-content' src='images/qrcode.jpg'>
  <div id='c aption'></div>
</div>
<form action='save.php' method='POST'>
<div class='card'>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapseOne' style='color: !important#fff;'>
<strong>DETAILS</strong>
</a>
</div>
<div id='collapseOne' class='open' data-parent='#accordion'>
<div class='card-body'>
<label for='fname'>NAME: </label>
<input required type='text' id='' name='name1'>
</br>
<label>EVENT:</label>
<select name='event'>
  <optgroup style='background-color:#404040;' label='Computer Science'>
    <option value='Robotics Workshop'>Future of Work - Robotics Workshop</option>
    <option value='Robotics Model Making Exhibition'>Robotics Model Making Exhibition</option>
    <option value='Tech Say'>Tech Say</option>
  </optgroup>
  <optgroup style='background-color:#404040;'label='Information science'>
    <option value='Web Design'>Workshop on: Web Design and 
Development</option>
    <option value='Poster Presentation'>Poster Presentation</option>
    <option value='Tech Talk'>Tech Talk</option>
  </optgroup>
  <optgroup style='background-color:#404040;'label='BSE & Humanities'>
    <option value='Magic and Origami for Maths'>Magic and Origami for Maths</option>
    <option value='Glass Preparation'>Glass Preparation</option>
    <option value='Movie on Nobel Laureate Chandra'>Movie on Nobel Laureate Chandra</option>
    <option value='Water Quality'>Water Quality</option>
    <option value='Report Writing'>Report Writing</option>
    <option value='Preparation of Nanoparticles'>Preparation of Nanoparticles</option>
      <option value='Will you eat it'>Will you eat it</option>
</optgroup>
 <optgroup style='background-color:#404040;' label='Mechanical Engineering'>
    <option value='Elastica - The Paradox of the Principle of Least Action'>Elastica - The Paradox of the Principle of Least Action</option>
    <option value='Automobile- Cars evolution till date'>Automobile- Cars evolution till date</option>
    <option value='Computer Aided Design Workshop'>Computer Aided Design Workshop</option>
    <option value='Poster presentation'>Poster presentation</option>
  </optgroup>
  <optgroup style='background-color:#404040;' label='Electronics and Communication'>
    <option value='Hardware'>Hardware</option>
    <option value='Build Your Own Robot from SCRATCH'>Build Your Own Robot from SCRATCH</option>
    <option value='Amazon ALEXA'>Amazon ALEXA</option>
    <option value='ARM'>ARM</option>
  </optgroup>
   <optgroup style='background-color:#404040;' label='Civil Events'>
   <option value='Next Generation Concrete-Invited Talk'>Next Generation Concrete-Invited Talk</option>
 <option value='Modelling of Civil Engineering Construction Marvels'>Modelling of Civil Engineering Construction Marvels</option>
<option value='Exposure to Civil Engineering-Hands on session'>Exposure to Civil Engineering-Hands on session</option>

<option value='Structure Capture'>Structure Capture</option>
<option value='Ecofriendly construction-Hands on session'>Ecofriendly construction-Hands on session</option>
<option value='Futuristic Civil Engineering'>Futuristic Civil Engineering</option>
<option value='Tech Debate'>Tech Debate</option>
<option value='Disaster management-Invited Talk'>Disaster management-Invited Talk</option>
  </optgroup>
</select>
</br>
<label>EMAIL:</label>
<input required type='email' id='' name='email1'>
</br>
<label>PHONE NUMBER:</label>
<input required type='text' id='' name='phone1'>
</br>
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='' name='dep1'>
</br>
<label>SEMESTER/YEAR:</label>
<select name='sem'>
<optgroup style='background-color:#404040;'>
<option value='2'>2</option>
<option value='3'>4</option>
<option value='6'>6</option>
<option value='8'>8</option></optgroup>
</select>
</br>
<button type='submit' style='width:130px;border-radius: 1px;height: 40px;margin-top:20px;color:white;background-color:#80808059; border: 1px solid white;' class='btn btn-default '>SUBMIT</button>
</div></div></div>;"

 

?>
      </div>
    </div>
    <?php include('footer.php') ; ?> 
    <script>
      /* function mul()
    {
         var x= <?php echo $id?>;
         var y=30*x;
         document.getElementById("demo").innerHTML = 'AMOUNT: '+ y;
    }
    function multiply()
    {
        var x=<?php echo $amount?>;
        document.getElementById("demo").innerHTML = 'AMOUNT: '+ x;
    }
      $("#name").on('input', function () {
        var val = this.value;
        if($('#colleges option').filter(function(){
          return this.value === val;
        }
                                       ).length) {
          var value=this.value;
          if(value=='Atria Institute Of Technology'){
            var x= <?php echo $id?>;
            var y=30*x;
            document.getElementById("demo").innerHTML = 'AMOUNT: '+ y;
          }
          else {
            var x=<?php echo $id?>;
            var y=30*2*x;
            document.getElementById("demo").innerHTML = 'AMOUNT: '+ y;
          }
        }
      });
      var modal = document.getElementById('myModal');
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
    modal.style.display = "none";
}*/
    </script> 

       <script src="js/jquery-1.11.3.js"></script> 
        <script src="js/bootstrap.js"></script>   

  </body>
</html>