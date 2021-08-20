<table border="1">


  @foreach ($data as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->address}}</td>



      </tr>

  @endforeach

</table >
