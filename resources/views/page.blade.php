
<table class="table table-bordered">
  <thead>
    <tr>
    
      <th scope="col">name</th>
      <th scope="col">language</th>
      <th scope="col">Prize</th>
      <th>Date </th>
    </tr>
  </thead>
  <tbody>
  @foreach($oderview as $row)
    <tr>

      <td>{{$row->name}}</td>
      <td>{{ $row->language }}</td>
      <td>{{ $row->prize }}</td>
      <td>{{date('d/m/Y - H:i', strtotime($row->created_at))}}</td>
    </tr>
   
    @endforeach
  </tbody>
</table>
