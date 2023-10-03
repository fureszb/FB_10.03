<form action="/api/agency/{{$agency->agency_id}}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <input type="text" name="author" placeholder="Author" value="{{ $agency->name }}">
    </div>

    <div class="form-group">
        <input type="text" name="title" placeholder="Title" value="{{ $agency->country }}">
    </div>

    <div class="form-group">
        <input type="text" name="pieces" placeholder="Pieces" value="{{ $agency->type }}">
    </div>
    <br>
    <input type="submit" class="btn btn-primary"></input>
</form>