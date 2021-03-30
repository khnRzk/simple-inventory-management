<div class="modal fade" id="form_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label> Category Name</label>
            <input type="text" class="form-control" name="cat_name" id="cat_id">
            <small id="cat_error" class="small form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label> Parent Category</label>
            <select class="form-control" name="parent_cat" id="parent_cat">
              <option value="0">Root</option>
            </select>
            <small id="par_error" class="small form-text text-muted"></small>
          </div>

          <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
      </div>
    </div>
  </div>
</div>