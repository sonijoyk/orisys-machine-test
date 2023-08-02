<div class="main-tab tab-pane " id="picked_orders" role="tabpanel">
  <h5>Picked orders</h5>
  <form method="post" action="/delivered">
    @csrf
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">SI No</th>
          <th scope="col">Item</th>
          <th scope="col">ContactNumber</th>
          <th scope="col">Pick-up address</th>
          <th scope="col">Delivery address</th>
          <th scope="col">Picked On</th>
          <th scope="col">Delivered</th>
        </tr>
      </thead>
      <tbody>
        @foreach($picked_orders as $key=>$value)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->contact}}</td>
            <td>{{$value->pickup}}</td>
            <td>{{$value->delivery}}</td>
            <td>{{$value->picked_on}}</td>
            <td><input type="checkbox" name="orders[]" value="{{$value->id}}"></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="row">
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10" >
            <button type="submit" style="margin-top: 10px;" class="btn btn-primary btn-lg float-left">Submit</button>
          </div>
        </div>
    </div>
  </form>
</div>