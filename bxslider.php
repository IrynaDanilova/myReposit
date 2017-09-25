<?php
   include "header.php";
?>
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
          <h1 class="text-center">
            Slider BxSlider
          </h1>
        </div>
      <div class="col-lg-12 col-md-12">
        <ul class="bxslider">
          <li><img src="img/img1.jpg" alt=""></li>
          <li><img src="img/img2.jpg" alt=""></li>
          <li><img src="img/img3.jpg" alt=""></li>
          <li><iframe width="560" height="315" src="https://www.youtube.com/embed/7-XsH6Jx2mo" frameborder="0" allowfullscreen></iframe></li>
        </ul>
        <div id="bx-pager">
          <a data-slide-index="0" href=""><img  width="50px" src="img/img1.jpg" /></a>
          <a data-slide-index="1" href=""><img  width="50px" src="img/img2.jpg" /></a>
          <a data-slide-index="2" href=""><img  width="50px" src="img/img3.jpg" /></a>
        </div>
      </div>
    
    </div>
  </div>
     
<?php include"footer.php"; ?>