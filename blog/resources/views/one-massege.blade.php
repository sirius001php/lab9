@extends('layoutss.app')
@section('title') Сообщения от {{$date->email}} @endsection
@section('content')
      <div class="check">
        <ul>
          <h1>Сообщения от {{$date->email}}</h1>

            <li>
              <p>Email: {{$date->email}}</p>
              <p>От: {{$date->name}}</p>
              <p>Сообщение: {{$date->message}}</p>
            </li>
          </ul>
      </div>
@endsection
