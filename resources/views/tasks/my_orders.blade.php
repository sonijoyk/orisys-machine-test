<div class="main-tab tab-pane " id="my_orders" role="tabpanel">
  <h5>Delivered orders</h5>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">SI No</th>
        <th scope="col">Item</th>
        <th scope="col">ContactNumber</th>
        <th scope="col">Pick-up address</th>
        <th scope="col">Delivery address</th>
        <th scope="col">Picked On</th>
        <th scope="col">Delivered On</th>
      </tr>
    </thead>
    <tbody>
      @foreach($delivered_orders as $key=>$value)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$value->name}}</td>
          <td>{{$value->contact}}</td>
          <td>{{$value->pickup}}</td>
          <td>{{$value->delivery}}</td>
          <td>{{$value->picked_on}}</td>
          <td>{{$value->delivered_on}}</td>
        </tr>
     @endforeach
    </tbody>
  </table>
</div>