
<?php
include_once('nav.php');
?>


<div class="container">

<form class="needs-validation" novalidate>

<div class="container">

  <div class="form-row">



  <div class="form-group col-md-6">

      <input type="text" class="form-control"  placeholder="First name">
    </div>

   <div class="form-group col-md-6">

      <input type="text" class="form-control"  placeholder="Last name">
    </div>
  
   <div class="form-group col-md-6">

      <input type="text" class="form-control"  placeholder="Age">
    </div>
  
   <div class="form-group col-md-6">
      
      <input type="email" class="form-control"  placeholder="Email">
    </div>

    <div class="form-group col-md-6">
      
      <input type="User name" class="form-control" id="inputUserName" placeholder="User name">
    </div>
   
    <div class="form-group col-md-6">
      
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
 
   <div class="form-group">
  
    <input type="text" class="form-control" id="inputAddress" placeholder="Address">
  </div>

 
    <div class="col-md-3 mb-3">
      
      <input type="text" class="form-control" id="inputCity" placeholder="City" required>
    
    </div>
 

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
    
    </div>
  </div>
  <button class="btn btn-primary ml-3 mt-3" type="submit">Submit</button>
  </div>
</form>
</div>
</div>




<?php
include_once('footer.php');
?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal("Unfortunately, this feature is not functional.", "you can still use our other features, click on sports!");</script>