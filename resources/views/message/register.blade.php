@extends('layout.default')

@section('title','register')

@section('content')
<form method="post" action="register">
{{ csrf_field() }}
<br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<table class="table table-bordered">
						<tr>
							<td>帳號</td>
							<td><input type="text" name="account" style="width:300px;"required /></td>
						</tr>
						<tr>
							<td>密碼</td>
							<td><input type="password" name="password"  style="width:300px;"required /></td>
						</tr>
						<tr>
							<td>暱稱</td>
							<td><input type="text" name="user"  style="width:300px;"required /></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div style="text-align: center;"><input class="btn btn-primary" type="submit" value="註冊"></div>
	</form>
@if( 'existed' == session('msg') ) {
<br><p class='bg-danger' style='text-align: center;'>此帳號已存在!</p>;
}
@endif

@stop