@section('content')
<div class='nav nav-tabs' >
    <div class='container' >
      <ul class=' pull-left nav nav-tabs'>
      @if(null !== (session('account')))
        <li><a href="{{ url('home/') }}">Home</a></li>
        <li><a href="{{ url('message/create') }}">新增留言</a></li>
      </ul>
      <ul class='pull-right nav nav-tabs'>
        <li><a href="{{ url('auth/logout/') }}">{{Session::get('user')}}, 登出</a></li>
      @else
        <li><a href="{{ url('home/') }}">HOME</a></li>
        <li><a href="{{ url('auth/register/') }}">註冊</a></li>
        <li><a href="{{ url('auth/login/') }}">登入</a></li>
      @endif
      </ul>
  </div>
</div>