
<?php include("dbnord.php");

if(isset($_POST["submit"]))

{
    $navn=$_POST["navn"];
    $email=$_POST["email"];
    $tlf=$_POST["tlf"];

  
    $sql = "INSERT INTO oplysninger (Navn, Email, Tlf)
    VALUES ('$navn', '$email', '$tlf')";

if ($conn->query($sql) === TRUE) {
    /*header('Location: ' .'http://localhost/nordild/index.php');*/
  echo "Succes !";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

}




?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="style.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <title>Nordild</title>
  </head>
  <body>

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand mx-5" href="#"><img src="/nordild/img/Nordlid_logo_thicker_black_WEB.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

<!-- Header -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/nordild/img/bag1.png" class="d-block w-100" alt="...">
        
      </div>
      <div class="carousel-item">
        <img src="/nordild/img/bag2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/nordild/img/bag4.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
 <div>
<h2 class="text-center mt-5 mx-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo quaerat unde necessitatibus. Recusandae eos incidunt, voluptatem voluptates saepe, atque quasi fugit consequatur commodi voluptatibus aspernatur! Cupiditate quia officiis assumenda dicta.</h2>
<div class="container mt-5">
    <div class="row">
      <div class="col-sm-6">
        <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt alias deleniti enim cum at veritatis, laboriosam velit dolorem veniam vel ducimus provident id sequi sunt quo unde ex ad obcaecati!</p>
      <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eos cupiditate exercitationem voluptatum nobis iure omnis quo cumque ut dolorem, voluptas aliquam eum facilis aut dolore. Vero aliquam dolores officiis.</p>
    </div>
      <div class="col-sm-6">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptatibus perferendis hic enim. Temporibus eveniet, aliquid sequi repellendus in fuga, eligendi natus, dolorum sed ipsa ullam earum et incidunt asperiores.</p>
        <form method="post" action="#" class="needs-validation" novalidate>
          <div class="form-row">
            <div class="col-md-8 mb-1">
            <input type="text" class="border-bottom border-dark form-control" id="validationCustom01" name="navn" placeholder="Navn" value="Navn"
                required>
                <div class="invalid-feedback">
                  <p class="colortxt"> UPS! Du mangler at udfylde noget.</p>
                </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-8 col-sm-4 mb-1 ">
          
              <input type="text" class="border-bottom border-dark form-control" id="validationCustom03" name="email" placeholder="Email" required>
              <div class="invalid-feedback">
                <p class="colortxt"> UPS! Du mangler at udfylde noget.</p>
              </div>
            </div>
            <div class="col-md-8 col-sm-4 mb-1">
          
              <input type="text" class="border-bottom border-dark form-control  " id="validationCustom03" name="tlf" placeholder="Tlf" required>
              <div class="colortxt invalid-feedback">
                <p class="colortxt"> UPS! Du mangler at udfylde noget.</p>
              </div>
            </div>
            
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="checkbox form-check-input " type="checkbox" name="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                <p class="textinfo"> Jeg giver hermed tilladse til, at Nordlid må gemme og bruge min data til interne projekter. Jeg kan til hver en tid tilbageklade min accept.</p>
              </label>
              <div class="invalid-feedback">
                UPS! Du mangler at udfylde feltet.
              </div>
            </div>
          </div>
          <button class="colorsend mb-5 btn btn-primary btn-sm" name="submit" type="submit">SEND</button>
          <span id="alert"></span>
        </form>
       
       
       
       
       
       
       
        <!--
          <form class="form col-sm"  name="kontaktForm" action="/submit.php"
            onsubmit="return KONTAKT()" method="post">

            <input class="form" type="text" size="65" name="Name" value="Navn" />
            <br /> 
            <br /> 
         <input class="form" type="text" size="65" name="EMail" value="Email" />
            <br /> 
            <br /> 
            <input class="form" type="text" size="65" name="Telephone" value="Tlf" /> 
            <br /> 
            <br /> 
              <input class="colorsend mb-5" type="submit"
                value="SEND" name="Submit" /> 
          </form> 
          -->
          <!--
        
        <form class="form" name="myform" action="MinarrayForm.php" method="post" onsubmit = "return(validate());">
    
            <input class="form" type="text" name="navn" value="Navn"  size="20">
            <br/>
            <br/>
            <input class="form" type="text" name="email" value="Email" size="20">
            <br/>
            <br/>
            <input class="form" type="text" name="tlf" value="Tlf" size="20">
            <br/>
            <br/>
            <input class="colorsend" type="submit" name="send" value="SEND">
            <br/>
            <br/>
            </p>
        </form>
        -->
    </div>
    
    </div>
  </div>
<div>

</div>

<div class="container-fluid bagxx text-center">
    <div class="container">
        <div class="row">
          <div class="col-sm mt-5">
            <img src="/nordild/img/icon-light-bulb.png" alt="">
            <h5 class="text-white mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
          </div>
          <div class="col-sm mt-5">
            <img src="/nordild/img/icon-speech-bubble.png" alt="">
            <h5 class="text-white mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
          </div>
          <div class="col-sm mt-5 mb-5">
            <img src="/nordild/img/icon-gold-medal.png" alt="">
            <h5 class="text-white mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
          </div>
        </div>
      </div>

</div>
<footer class="bg-dark">
<div class="container justify-content">
    <div class="row">
        <div class="col-sm mt-5">
         <div>
             <img src="/nordild/img/contact-info.png" alt="">
             <br>
             <br>
             <br>
         </div>
        </div>
        <div class="col-sm mt-5 socialimg">
        <img src="/nordild/img/social.png" alt="">
        </div>
        
      </div>
    </div>


</div>

</footer>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="/nordild/script.js" ></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>