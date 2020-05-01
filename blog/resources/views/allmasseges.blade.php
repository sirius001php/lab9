@extends('layoutss.app')
@section('title') Все сообщения @endsection
@section('content')
      <div class="check">
        <ul>
          <h1>Все сообщения</h1>
          @foreach($date as $element)
            <li>
              <p>Email: {{$element->email}}</p>
              <a href="{{route('one-info', $element->id)}}"><button type="submit">Посмотреть сообщение</button></a>
            </li>
          @endforeach
        </ul>
      </div>
@endsection
