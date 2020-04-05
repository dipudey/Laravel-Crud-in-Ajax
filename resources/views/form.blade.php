<div class="modal" id="Modal-Show">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Employer Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            <span class="text-danger" id="name-err"></span>
          </div>

          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" id="age" aria-describedby="emailHelp">
            <span class="text-danger" id="age-err"></span>
          </div>

          <div class="form-group">
            <label for="position">Position</label>
            <select class="form-control" id="position" name="position">
              <option value="">Select--</option>
              <option value="1">Manager</option>
              <option value="2">Account Manger</option>
              <option value="3">Worker</option>
            </select>
            <span class="text-danger" id="position-err"></span>
          </div>

          <div class="form-group">
            <label for="salery">Salery</label>
            <input type="number" name="salery" class="form-control" id="salery" aria-describedby="emailHelp">
            <span class="text-danger" id="salery-err"></span>
          </div>


          <button type="submit" class="btn btn-success float-right" id="submit">Add</button>
        </form>



      </div>
    </div>
  </div>
</div>


<!-- Edit Model -->
<div class="modal" id="edit-Modal-Show">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Employer Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" id="editid">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="editname" class="form-control" id="editname" aria-describedby="emailHelp">
            <span class="text-danger" id="name-err"></span>
          </div>

          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" id="editage" aria-describedby="emailHelp">
            <span class="text-danger" id="age-err"></span>
          </div>

          <div class="form-group" id="editposition">
            <label for="position">Position</label>
            <select class="form-control" id="edit-position" name="position">
              <option value="">Select--</option>
              <option value="1">Manager</option>
              <option value="2">Account Manger</option>
              <option value="3">Worker</option>
            </select>
            <span class="text-danger" id="position-err"></span>
          </div>

          <div class="form-group">
            <label for="salery">Salery</label>
            <input type="number" name="salery" class="form-control" id="editsalery" aria-describedby="emailHelp">
            <span class="text-danger" id="salery-err"></span>
          </div>


          <button type="submit" class="btn btn-success float-right" id="edit-submit">Add</button>
        </form>



      </div>
    </div>
  </div>
</div>
