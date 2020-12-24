@include('includes.head')
@include('includes.header')

<form action="{{route('admin-insert')}}" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="number" name="quantity" placeholder="qty">
    <input type="number" name="price" placeholder="pr">
    <input type="text" name="category_id" placeholder="cat">
    <input type="text" name="index" placeholder="cat">
    @csrf
</form>
