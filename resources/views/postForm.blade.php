
<form action=" {{route( 'postForm' ) }}" method="POST">
	{{csrf_field()}}
	<input type="text" name="tuoi">
	<input type="submit" >
</form>