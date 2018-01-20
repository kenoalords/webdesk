@if($users)
<div class="select is-block">
	<select name="user_id" style="width: 100%" id="users-select">
		<option value="0">Select user</option>
		@foreach($users as $user)
		<option value="{{ $user->id }}">{{ $user->fullname }}</option>
		@endforeach
	</select>
</div>
@endif
