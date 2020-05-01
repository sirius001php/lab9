@extends('layoutss.app')
@section('title') Регистрация @endsection
@section('content')
			<div class="register">
				<div>
					<form action="{{ route('register-form') }}" method="post"> <!-- Метод передачі даних пост -->
						@csrf <!-- Захищений ключ, що перевіряє чи не боти відбравляють данні -->
						<p>Сообщение</p>
						<input type="text" name="name" id="login" placeholder="Введите имя"><br>
						<input type="text" name="email" id="name" placeholder="Введите email"><br>
						<textarea name="message" id="password" placeholder="Ваше сообщение"></textarea><br>
						<button type="submit">Отправить</button>
				</form>
				</div>
			</div>
@endsection
