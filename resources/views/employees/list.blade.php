<div class="main-tab tab-pane " id="list" role="tabpanel">
  <h5>All Employees</h5>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">SI No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">Department</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employees as $key=>$value)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$value->name}}</td>
          <td>{{$value->email}}</td>
          <td>{{$value->contact}}</td>
          <td>{{$value->department}}</td>
          <td>{{$value->status}}</td>
          <td><a href="/delete/{{$value->id}}"> Delete </a>
            <a href="/employee/{{$value->id}}"> Edit </a>
          </td>
        </tr>
     @endforeach
    </tbody>
  </table>
</div>