@if($errors->any())
  <div class="erorr">
    <ul>
<!-- в обєкті ерорс ми звертаємся до функції ені для перевірки наявності помилок -->
<!--  в циклі форічі ми звертаємся до обєкту і перебираєм помилки через змінну ерор -->
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
@if(session('success'))
  <p>{{session('success')}}</p>
@endif
