@include('includes.head')
@include('includes.header')


<div class="card" style="height: 400px; background-color: #1a202c">

</div>



<script>
    function search_data(search_value) {
        $.ajax({
            url: '/search/' + search_value,
            method: 'GET'
        }).done(function(response){
            $('#results').html(response); // put the returning html in the 'results' div
        });
    }
</script>
