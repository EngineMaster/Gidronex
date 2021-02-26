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
                    <input type="text" id="check1" name="name" required>
                </div>
                <div class="input">
                    <label for="check1">Телефон<sup>*</sup></label>
                    <input type="text" id="check1" name="phone" required >
                </div>
                <div class="input">
                    <label for="check1">Email<sup>*</sup></label>
                    <input type="text" id="check1" name="email" required>
                </div>
                <div class="input">
                    <label for="check1">Комментарий</label><input type="text" id="check1" name="commentary" required>
                </div>
                <div class="input_checkbox">
                    <input type="checkbox" id="check2" name="checkbox" required>Согласен на обработку персональных данных
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
        <div class="overlay">
            <p class="cross_to_close" style="z-index: 3">
            </p>

        </div>
        <ul class="success_message_contact">
            <li>{{ session()->get('message') }}</li>
        </ul>

    @endif

</div>

<script>
        // your code
    let overlay = document.querySelector('overlay');

    overlay.onclick = function () {
        overlay.classList.add('.hide');
    }


</script>
<script>
    document.querySelector('.overlay').onclick = function () {
        let successMessage = document.querySelector('.success_message_contact');
        let overlay = document.querySelector('.overlay');
        successMessage.classList.add('hide');
        overlay.classList.add('hide');
    };
</script>
