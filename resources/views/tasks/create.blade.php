<div class="main-tab tab-pane active" id="create" role="tabpanel">
 
  <form method="post" action="tasks/save">
    @csrf
    <div class="row mb-3">
      <div class="col">
        <div class="form-outline">
          <label for="itemName">Item</label>
          <input type="text" class="form-control" id="itemName" name="item" >
        </div>
      </div>

      <div class="col">
        <div class="form-outline">
            <label for="description">Description</label>
          <input type="text" class="form-control" id="description" name="description">
        </div>
      </div>
    </div>
   
    <hr />                 
    <div class="row">
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10" >
            <button type="submit" style="margin-top: 10px;" class="btn btn-primary btn-lg float-left">Submit</button>
          </div>
        </div>
    </div>
  </form>
</div>