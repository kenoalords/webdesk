@if(Request::session()->has('status'))
<div class="notification is-primary">
	<span class="icon"><i class="fa fa-check"></i></span><span>{{Request::session()->get('status')}}</span>
</div>
@endif