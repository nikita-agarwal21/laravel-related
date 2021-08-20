<h1>update member form</h1>

<form action='/edit' method='post'>
  @csrf
<input type='hidden' name='id' value="{{$data['id']}}"><br>
name:  <input type='text' name='name' value="{{$data['name']}}"><br>
address:  <input type='text' name='address' value="{{$data['address']}}"><br>


<button type='submit'>update member</button>



</form>
