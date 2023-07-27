
<!-- Modal -->
<div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginmodalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="http://localhost/training/codewithharry/forumproject/partials/handlelogin.php" method="POST">
          <div class="mb-3">
            <label for="loginEmail" class="form-label">UserEmailID</label>
            <input type="email" class="form-control" id="loginEmail" name="loginEmail">
          </div>
          <div class="mb-3">
            <label for="loginPass" class="form-label">Password</label>
            <input type="password" class="form-control" id="loginPass" name="loginPass">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>