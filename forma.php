<?php
   include "header.php";
?>
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
          <h1 class="text-center">
            Menu Superfish
          </h1>
        </div>
      <form role="form" action="post.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Message</label>
    <textarea rows="5" cols="35" id="exampleInputFile" name="message">
    </textarea>
  </div>
  <button type="submit" class="btn btn-default">Отправить</button>
</form>
    
    </div>
  </div>
     
<?php include"footer.php"; ?>