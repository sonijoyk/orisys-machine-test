<div class="main-tab tab-pane " id="list" role="tabpanel">
  <h5>All Tasks</h5>
  <form method="post" action="/tasks/assign">
    @csrf
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">SI No</th>
          <th scope="col">Item</th>
          <th scope="col">Description</th>
          <th scope="col">Status</th>
          <th scope="col">Assigne</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tasks as $key=>$value)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->item}}</td>
            <td>{{$value->description}}</td>
            <td>
              <select name="status[{{$value->id}}][]">
               
              @if($value->status == 'Unassigned')
                <option @if($value->status == 'Unassigned') selected="selected" @endif value='Unassigned'>Unassigned</option>
               
              @elseif($value->status == 'done')
                <option @if($value->status == 'done') selected="selected" @endif value="done">Done</option>
              @else                  
                <option @if($value->status == 'assigned') selected="selected" @endif value="assigned">Assigned</option>
                <option @if($value->status == 'in_progress') selected="selected" @endif  value="in_progress">In Progress</option>
                <option @if($value->status == 'done') selected="selected" @endif value="done">Done</option>
                <option value=0>Select</option>
              @endif
              </select>
            </td>
            <td>
              <select name="assignee[{{$value->id}}][]">
              @if($value->status == 'Unassigned' || $value->status == 'assigned')
                  <option value=0>Select</option>
                  @foreach ($employees as $e_key => $e_value) 
                  <option @if($value->employee_id == $e_value->id) selected="selected" @endif  value="{{$e_value->id}}">{{$e_value->name}}</option>
                  @endforeach
              @else
               <option  value="{{$value->employee_id}}">{{$value->assignee->name}}</option>
              @endif
              </select>
            </td>
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
