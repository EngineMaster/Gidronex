@include('includes.head')
@include('includes.header')
<div class="form_container">
    <h1>Связаться с нами</h1>
    <form action="{{route('contact-confirm')}}" method="POST">
    <div class="form_container_wrapper">
        @if ($errors->any())
            <div class="alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
        <hr>
            <div class="form_container_wrapper_inputs">
                <div class="input">
                    <label for="check1">Имя<sup>*</sup></label>
                    <input type="text" id="check1" name="name">
                </div>
                <div class="input">
                    <label for="check1">Телефон<sup>*</sup></label>
                    <input type="text" id="check1" name="phone">
                </div>
                <div class="input">
                    <label for="check1">Email<sup>*</sup></label>
                    <input type="text" id="check1" name="email">
                </div>
                <div class="input">
                    <label for="check1">Населённый Пункт<sup>*</sup></label>
                    <input type="text" id="check1" name="city">
                </div>
                <div class="input">
                    <label for="check1">Комментарий</label><input type="text" id="check1" name="commentary">
                </div>
                <div class="input">
                    <label for="check1">Социальные сети</label><input type="text" id="check1" name="social_networking">
                </div>
                <div class="input_checkbox">
                    <input type="checkbox" id="check2" name="checkbox">Согласен на обработку персональных данных
                </div>

    </div>
    </div>

        <input type="submit" value="Подтвердить">
        @csrf
        <p>
            Ваша персональная информация не может быть разглашена и доступна третьим лицам.
        </p>
    </form>

    @if(session()->has('message'))
        <ul>
            <li>{{ session()->get('message') }}</li>
        </ul>

    @endif

</div>
