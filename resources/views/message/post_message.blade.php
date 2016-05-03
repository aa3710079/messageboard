@extends('layout.default')

@section('title','post')

@section('content')
<form method="post" action="{{url('message')}}">
{{ csrf_field() }}
<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<table class="table table-bordered">
					<tr>
						<td>留言主旨</td>
						<td style="vertical-align:middle;"><input type="text" name="subject" style="width:300px;" required /></td>
					</tr>
					<tr>
						<td>留言內容</td>
						<td><textarea name="content" rows="10" cols="35"></textarea></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div style="text-align: center;"><input class="btn btn-primary" type="submit" value="送出"></div>
</form>
@stop