
<!-- Modal -->
<div class="modal fade" id="signupmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupmodalLabel">Sign up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="http://localhost/training/codewithharry/forumproject/partials/handle.php" method="POST">
          <div class="mb-3">
            <label for="signupuseremail" class="form-label">EmailID</label>
            <input type="email" class="form-control" id="signupuseremail" name="signupuseremail">
          </div>
          <div class="mb-3">
            <label for="signuppassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="signuppassword" name="signuppassword">
          </div>
           <div class="mb-3">
            <label for="signupcpassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="signupcpassword" name="signupcpassword">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    
    </div>
  </div>
</div>