<?php
?>
<!DOCTYPE html>
<html>
<head>
  <title>Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="gallery.css">
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="index.js"></script>
<script src="gallery.js"></script>

</head>
<body>
  <!--Navbar-->
    <?php include"nav.php";?>
    <!-- End of Navbar-->
  <div class="container mt-3 text"><h1>Wonders of Sri Lanka</h1></div>
  <!-- slide show -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item ">
        <img src="images/fish.jpg" style="height: 500px;" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/coco.jpg" style="height: 500px;" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item active">
        <img src="images/dalada.jpg " class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  

<!-- end slide show -->



<!-- The four columns -->
 <div class="text mt-3">Most Attractive places</div>
<div class="row background mt-2">
  <div class="columnImage">
    <img src="images/ella1.jpeg" alt="Nature" style="width:100%" onclick="myFunction(this);">
    
  </div>
  <div class="columnImage">
    <img src="images/ella2.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="columnImage">
    <img src="images/ella3.webp" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="columnImage">
    <img src="images/ella4.jpeg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="columnImage">
    <img src="images/ella5.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="columnImage">
    <img src="images/ella6.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="columnImage">
    <img src="images/diving3.jpeg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="columnImage">
    <img src="images/rope1.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="containerImage">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:70%">
  <div id="imgtext"></div>
</div>

<div class="text mt-3"><h2>Photos of visitors</h2></div>

<div class="row">
  <div class="column mt-4">
    <div class="placeText">Nuwara Eliya</div>
    <img src="images/pera1.jpg" style="width:100%">
    <img src="images/Ambewela.jpg" style="width:100%">
    <img src="images/pera2.png" style="width:100%">
    <img src="images/ambuluwawa-temple.jpg" style="width:100%">
    <img src="images/rafting.jpeg" style="width:100%">
    <img src="images/rafting2.jpeg" style="width:100%">
    <img src="images/hortan.jpg" style="width:100%">
  </div>
  <div class="column mt-4">
    <div class="placeText">Sigiriya</div>
    <img src="images/sigiriya.webp" style="width:100%">
    <img src="images/pidirangala.jpg" style="width:100%">
    <img src="images/sigiriya2.webp" style="width:100%">
    <img src="images/sigiriya3.jpeg" style="width:100%">
    <!-- <img src="images/sigiriya4.webp" style="width:100%">
    <div>minneriya</div> -->
    <img src="images/pidu.jpg" style="width:100%">
   
    <img src="images/hualanga.jpg" style="width:100%">
    
  </div>
  <div class="column mt-4">
    <div class="placeText">Galle</div>
    <img src="images/galle.jpg" style="width:100%">
    <img src="images/galle1.webp" style="width:100%">
    <img src="images/madu.jpeg" style="width:100%">
    <img src="images/madu1.jpg" style="width:100%">
    <img src="images/jungle.jpg" style="width:100%">
    <img src="images/thalpe.jpeg" style="width:100%">
    <img src="images/thalpe1.jpeg" style="width:100%">
    <img src="images/unawatuna2.webp" style="width:100%">
  </div>
  <div class="column mt-4">
    <div class="placeText">Tricomalee</div>
    <img src="images/kone.jpeg" style="width:100%">
    <img src="images/kone1.jpg" style="width:100%">
    <img src="images/trinco.jpeg" style="width:100%">
    
    <img src="images/nilaweli.webp" style="width:100%">
    <img src="images/diving.jpeg" style="width:100%">
    <img src="images/diving2.jpg" style="width:100%">
    <img src="images/trinco2.avif" style="width:100%">
    <img src="images/trinco3.jpg" style="width:100%">
  </div>
  <div class="column mt-5">
    <div class="placeText">Kataragama</div>
    <img src="images/bird.jpeg" style="width:100%">
    <img src="images/bundala.webp" style="width:100%">
    <img src="images/yala.jpg" style="width:100%">
    
    <img src="images/yala1.jpeg" style="width:100%">
    <img src="images/kirinda.jpg" style="width:100%">
    <img src="images/" style="width:100%">
    <img src="" style="width:100%">
  </div>
  <div class="column mt-5">
    <div class="placeText">India</div>
    <img src="images/india.jpeg" style="width:100%">
    <img src="images/india2.webp" style="width:100%">
    <img src="images/india3.jpg" style="width:100%">
    
    <img src="images/india4.webp" style="width:100%">
    <img src="images/india5.jpg" style="width:100%">
    <!-- <img src="" style="width:100%">
    <img src="" style="width:100%"> -->
  </div>
  <div class="column mt-5">
    <div class="placeText">Thailand</div>
    <img src="images/thai.jpg" style="width:100%">
    <img src="images/thai1.jpg" style="width:100%">
    <img src="images/thai2.webp" style="width:100%">
    
    <img src="images/thai3.jpg" style="width:100%">
    <img src="images/thai4.webp" style="width:100%">
    <!-- <img src="" style="width:100%">
    <img src="" style="width:100%"> -->
  </div>
  <div class="column mt-5">
    <div class="placeText">Maldive</div>
    <img src="images/mal.jpeg" style="width:100%">
    <img src="images/mal1.jpg" style="width:100%">
    <img src="images/mal3.webp" style="width:100%">
    
    <img src="images/mal4.webp" style="width:100%">
    <img src="images/mal2.jpg" style="width:100%">
    <!-- <img src="" style="width:100%">
    <img src="" style="width:100%"> -->
  </div>
</div>


  <!--Footer-->
        <?php include "footer.php"; ?>
        <!--End of Footer-->






</body>
</html>
