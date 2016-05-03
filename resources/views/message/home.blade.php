@extends('layout.default')

@section('title','home')

@section('content')
<br><br>
@foreach($messages as $message)
	<div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>暱稱</td>
              <td>{{$message->user}}</td>
              @if( session('account') == $message->account )
              <td rowspan="4" style="width: 45px; vertical-align:middle;">
              <form method="POST" action="{{url('message')}}/{{$message->id}}">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE">
              <div style="text-align: center;"><input class="btn btn-primary" type="submit" value="刪除" 
                  onclick="return confirm('你確定要刪除嗎？')"></div>
              </form>
              </td>
              <td rowspan="4" style="width: 45px; vertical-align:middle;">
              <form method="GET" action="{{url('message')}}/{{$message->id}}/edit">
              {{ csrf_field() }}
              <div style="text-align: center;"><input class="btn btn-primary" type="submit" value="編輯"></div>
              </form>
              </td>
              @endif
            </tr>
            <tr>
              <td>主旨</td>
              <td>{{$message->subject}}</td>
            </tr>
            <tr>
              <td>內容</td>
              <td>{{$message->content}}</td>
            </tr>
            <tr>
              <td>時間</td>
              <td>{{$message->updated_at}}</td>
            </tr>
           </tbody>
        </table>
      </div>
    </div>
  </div><br><br>
@endforeach
@stop