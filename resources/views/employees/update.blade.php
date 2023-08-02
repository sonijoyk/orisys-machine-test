@extends('layouts.app')

@section('content')
<div class="main-tab tab-pane active" id="create" role="tabpanel">
  <form method="post" action="/update">
    @csrf
    <div class="row mb-3">
      <div class="col">
        <div class="form-outline">
          <label for="itemName">Name</label>
          <input type="text" class="form-control" id="itemName" name="name">
        </div>
      </div>

      <div class="col">
        <div class="form-outline">
            <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <div class="form-outline">
            <label for="contactNumber">Contact Number</label>
          <input type="text" class="form-control" id="contactNumber" name="contact">
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <label for="department">Department</label>
          <select  class="form-control" id="department" name="department">
            <option value="sales">Sales</option>
            <option value="marketing">Marketing</option>
            <option value="it">IT</option>
          </select>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <label for="status">Status</label>
          <select  class="form-control" id="status" name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
          </select>
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
@endsection