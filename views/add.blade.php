

<form action='add' method='POST'>
    @csrf
    enter the first operand
    <input type='number' name='operand1'  size='20' />
    <br>
    <br>
    enter the second operand
    <input type='number' name='operand2'  size='20' />
    <br>
    <br>
    <input type='submit' value='submit'  />

</form>
