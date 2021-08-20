

<h1>user login</h1>
<!--@//if($errors ->any())
@//foreach ($errors->all() as $err)
<li>{//{ $err }}</li>
@//endforeach
@//endif
-->

<style>
    form{
        background-color: blue;
        width:500px;
        text-align: center;
        color: aliceblue;
    }
    </style>





<form action="users" method="POST">
@csrf <!--provide a security token-->
<br> <br>
enter user id:
    <input type='text' name='username' /><br>
    
   <br>
   
   <span style='color:white'>@error('username'){{ $message }}@enderror</span>
   
   <br>
  
   enter password:
   <input type='password' name='password' /><br>

   <br>
    
   <span style='color:white'>@error('password'){{ $message }}@enderror</span>
   
   <br>
   <button type='submit'>login</button>
   <br> <br>
</form>