<h1>add member</h1>
@if(session('user'))
<h3 style='color: blue'>{{session('user')}} user has been added</h3>
@endif
<form action='addmember' method='post'> <!--url of the controller mentioned in web
-->
@csrf
  user name:
  <input type='text' name='user' sixe='10'><br><br>
    password:
  <input type='password' name='password' sixe='10'><br><br>
    email:
  <input type='text' name='email' sixe='10'><br><br>
    <button>add member</button>
  </form>
