  <!-- login form modal -->
  <div class="modal fade" id="log" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content p-5">
        <h2 class="text-success mt-2">Login Form <i class="bi bi-person"></i> <button
            class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal">&times;</button> </h2>
        <hr class="border border-2 border-danger">
        <form method="post" class="row g-3 needs-validation" novalidate>
        <input type="hidden" name="fname" class="form-control" id="validationCustom03" required placeholder="Enter firstname *">
          <div class="col-md-8">
            <input type="email" name="email" class="form-control" id="validationCustom03" required placeholder="Enter Email *">
            <div class="invalid-feedback">
              Please provide a email Address.
            </div>
          </div>
          <div class="col-md-8">
            <input type="password" class="form-control" id="validationCustom03" name="pass" required placeholder="Enter Password *">
            <div class="invalid-feedback">
              Please provide a Password.
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="log">Login</button>
            <b><a href="registretion.php">Forget Password</a></b>
          </div>
          <div class="form-group mt-2">
            <b>Don't have an account ? <a href="registretion.php">Registertion here</a></b>
          </div>
        </form>
      </div>
    </div>
  </div>