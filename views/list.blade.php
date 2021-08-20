<h1>members list from database</h1>
<table border="1">

    <tr>
      <td>id</td>
      <td>name</td>
      <td>address</td>
  </tr>
  @foreach ($users as $user)
  <tr>
    <td>{{$user['id']}}</td>
    <td>{{$user['name']}}</td>
    <td>{{$user['address']}}</td>

    <td><a href={{"delete/".$user['id']}}>delete</a></td>
    <td><a href={{"edit/".$user['id']}}>edit</a></td>

      </tr>

  @endforeach

</table >
