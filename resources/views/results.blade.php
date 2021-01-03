
<table style="width:100%">
    <tr>
        <th>Name</th>
        <th>Logo</th>
    </tr>
    @if (isset($data) && count($data) > 0)
        @foreach( $data as $business )
            <tr>
                <td>{{ $business->name }}</td>
                <td>{{ $business->price }}</td>
            </tr>
        @endforeach
    @endif
</table>

