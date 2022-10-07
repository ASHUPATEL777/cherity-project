<!--content start here-->
<div class="container mt-5">
          <h2 class="text-success mt-5 line1">Create Your Account <i class="bi bi-person"></i></h2>
    <div class="row">
      <div class="col-md-5  line">
        <img src="<?php echo $mainurl;?>images/1.jpeg" class="img-fluid" style="width: 100%" style="height: 700%">
      </div>

      <div class="col-md-7">
      <form method="post" name="frm" id="frm"  onsubmit="return valid(this.value)">
          <div class="form-group mt-2">
            <input type="text" name="fname" class="form-control" placeholder="Enter FirstName *">
          </div>
          <div id="error"></div>
          <div class="form-group mt-2">
            <input type="text" name="lname" class="form-control" placeholder="Enter LastName *">
          </div>
          <div class="form-group mt-2">
            <input type="text" name="email" class="form-control" placeholder="Enter Email *">
          </div>
          <div class="form-group mt-2">
            <input type="password" name="pass" class="form-control" placeholder="Enter Password *">
          </div>

          <div class="form-group mt-2">
            <input type="password" name="cpass" class="form-control" placeholder="Enter confirm Password *">
          </div>

          <div class="form-group mt-2">
            <input type="text" name="mobile" class="form-control" placeholder="Enter Phone *">
          </div>

          <div class="form-group mt-2">
            <textarea name="address" class="form-control" placeholder="Enter Address *"></textarea>
          </div>

          <div class="form-group mt-2">
            <input type="submit" name="reg" class="btn btn-lg" id="btn" placeholder="Enter FirstName *"
              value="Register">

            <input type="reset" name="res" class="btn btn-lg btn-danger" placeholder="Enter FirstName *" value="Reset">

          </div>
          <div class="form-group mt-2">
            <b>Already have an account ? <a href="" data-bs-toggle="modal" data-bs-target="#log">Login here</a></b>
          </div>
        </form>
      </div>
    </div>
  </div>