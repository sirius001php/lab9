<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ConRequest;
use App\RegModel;

class RegController extends Controller
{
    public function submit(ConRequest $r)
    {
      // Записуэмо в табличку данні
      $reg = new RegModel();
      $reg->name = $r->input('name');
      $reg->email = $r->input('email');
      $reg->message = $r->input('message');

      $reg->save();
      //
      return redirect()->route('register')->with('success', 'Сообщение успешно отправлено!');
    }

    public function allInfo(){
      $reg = new RegModel;
      return view('allmasseges', ['date' => $reg->all()]);
    }

    public function oneInfo($id){
      $reg = new RegModel;
      return view('one-massege', ['date' => $reg->find($id)]);
    }
}
