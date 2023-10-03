@foreach($agencies as $agency)
<form method="post" action="/api/agency/{{ $agency->agency_id }}">

    @method('DELETE')
    
    <h2>Biztosan törölni szeretnéd?</h2>

    <p>
        Name: {{ $agency->name }} <br>
        Country: {{ $agency->country }}<br>
        Type: {{ $agency->type }}
    </p>

    <input type="submit" value="Törlés">

</form>
@endforeach
