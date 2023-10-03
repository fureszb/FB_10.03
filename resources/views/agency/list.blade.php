@foreach ($agencies as $agency)
    <form action="/api/agency/{{$agency->agency_id}}" method="post">
        {{csrf_field()}}
        {{method_field("GET")}}
        <div>
            <input type="submit" value="{{$agency->name}}">
        </div>
    </form>
@endforeach