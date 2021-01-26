@include('includes.head')
@include('includes.header')
    <section class="confirm_container">
        @if ($errors->any())
            <div class="alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

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
        <div class="form_confirm_wrap">
    <form action="{{route('basket-confirm')}}" method="post" class="form-confirm"  >
        <h3 style="margin: 0 auto; padding: 0">Заполните поля</h3>
        <label for="name">Имя</label><input type="text" name="name" required><br>
        <label for="email">E-mail</label><input type="text" name="email" required><br>
        <label for="phone">Номер Телефона</label><input type="text" name="phone" required><br>
        <input type="checkbox" name="checkbox"><label for="checkbox" class="checkboxy" required>Даю согласие на обработку персональных данных</label>
        <button type="submit" class="">Подтвердить</button>
        @csrf
    </form>
        </div>
    </section>
<div class="dialogue">
    Скоро с вами свяжутся! Спасибо за заказ.
</div>
<script>
    showDialogWindow = () =>{
        const showMessage = document.querySelector('dialogue');
        showMessage.classList.toggle('show');
        return false;
    }
</script>
