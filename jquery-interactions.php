<?php
   include "header.php";
?>
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
          <h1 class="text-center">
            Dragged Interaction
          </h1>
              <div class="col-lg-4 col-md-4">  
                <img src="img/babochka-s-chupa-chupsom.jpg"  class="img-responsive drag" alt="">
              </div>
              <div class="col-lg-4 col-md-4">
                <img src="img/easy-paper-heart-flower-wall-art-5.jpg"  class="img-responsive drag" alt="">
              </div>
              <div class="col-lg-4 col-md-4">
                <img src="img/obemnoe-derevo-1.jpg"  class="img-responsive drag" alt="">
              </div>
      
        </div>        
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <h1 class="text-center">
          Droppable and Draggable
        </h1>
      </div>
        <div class="col-lg-8 col-md-8">
          <img src="img/img1.jpg" class="dragpic" width="150px" alt="">
          <img src="img/img2.jpg" class="dragpic" width="150px" alt="">
          <img src="img/img3.jpg" class="dragpic" width="150px" alt="">
        </div>
        <div class="col-lg-4 col-md-4">
          <img src="img/trashcan-empty-icon.png" class="drop" alt="">
        </div>

    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <h1 class="text-center">
          Sortable
        </h1>
      </div>
      <div class="col-lg-6 col-md-6">
        <ul id="sort">
          <li class="ui-state-default">Punkt 1</li>
          <li class="ui-state-default">Punkt 2</li>
          <li class="ui-state-default">Punkt 3</li>
          <li class="ui-state-default">Punkt 4</li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6">
        <ul id="sort1">
          <li class="ui-state-default">Punkt 1</li>
          <li class="ui-state-default">Punkt 2</li>
          <li class="ui-state-default">Punkt 3</li>
          <li class="ui-state-default">Punkt 4</li>
        </ul>
      </div>
    </div>
  </div>
     
<?php include"footer.php"; ?>