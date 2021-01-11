@include('includes.head')
@include('includes.header')
    <div class="confirm_container">
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
    <form action="{{route('basket-confirm')}}" method="post" class="form-confirm">
        <h3 style="margin: 0 auto; padding: 20px">Заполните поля</h3>
        <label for="name">Имя</label><input type="text" name="name"><br>
        <label for="email">E-mail</label><input type="text" name="email"><br>
        <label for="phone">Номер Телефона</label><input type="text" name="phone"><br>
        <input type="checkbox" name="checkbox"><label for="checkbox" class="checkboxy">Даю согласие на обработку персональных данных</label>
        <button type="submit" class="">Подтвердить</button>
        @csrf
    </form>
    </div>
