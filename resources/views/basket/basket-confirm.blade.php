<ul>
    @foreach($items as $item)
        <li>
            {{$item->price}}

        </li>
        <li>
            {{$item->name}}
        </li>
        <li>
            {{$item->quantity}}
        </li>

        <li><form action="{{route('basket-add', $item->id)}}" method="POST">
                <button type="submit" class="btn_product_select">+</button>
                @csrf
            </form></li>
        <li><form action="{{route('basket-delete', $item->id)}}" method="POST">
                <button type="submit" class="btn_product_select">-</button>
                @csrf
            </form></li>
    @endforeach
</ul>
<form action="{{route('basket-confirm')}}" method="post">
<input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="phone">
    <button type="submit">submit</button>
    @csrf
</form>
