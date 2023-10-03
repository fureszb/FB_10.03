<form action="/api/agency" method="post">
    {{csrf_field()}}
    <input type="text" name="name">
    <input type="text" name="country">
    <input type="text" name="type">
    
    <input type="submit" value="Ok">
</form>