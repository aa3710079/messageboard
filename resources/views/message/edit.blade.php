@extends('layout.default')

@section('title','edit')

@section('content')
<br><br>
<form method="POST" action="{{url('message')}}/{{$message}}">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<table class="table table-bordered">
					<tr>
						<td>留言主旨: </td>
						<td style="vertical-align:middle;">
						<input style="width:300px;" type="text" name="subject" value="{{ $messages->subject }}" required />
						</td>
					</tr>
					<tr>
						<td>留言內容: </td>
						<td><textarea name="content" rows="10" cols="35">{{ $messages->content }}</textarea></td>
					</tr>
				</table>

				<div style="text-align: center;"><input class="btn btn-primary" type="submit" value="送出"></div>
			</div>
		</div>
	</div>
</form>
@stop