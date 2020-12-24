
<table style="width:100%">
    <tr>
        <th>Name</th>
        <th>Logo</th>
    </tr>
    @if (isset($data) && count($data) > 0)
        @foreach( $data as $business )
            <tr>
                <td>{{ $business->price }}</td>
            </tr>
        @endforeach
    @endif
</table>

<script>
    function search_data(search_value) {
        $.ajax({
            url: '/search/' + search_value,
            method: 'POST'
        }).done(function(response){
            $('#results').html(response); // put the returning html in the 'results' div
        });
    }
</script>
