<div class="card" style="margin-bottom: 1em" id="sub-{{ $sub['id'] }}">
	<header class="card-header">
		
	</header>
	<div class="card-content">
		<h4 class="title is-6">
			<a href="{{ route('view_subscription', ['subscription'=>$sub['id']]) }}"><span class="icon"><i class="fa fa-globe"></i></span> {{ $sub['domain_name'] }}</a>
		</h4>
		<div class="content">
			<div class="level is-mobile">
				<div class="level-left">
					<div class="level-item"><span class="icon {{ (!$sub['is_active']) ? 'has-text-danger' : 'has-text-success' }}"><i class="fa fa-circle"></i></span> {{ ($sub['is_active']) ? 'Active' : 'Inactive' }}</div>
					<div class="level-item">
						{{ $sub['package']['name'] }}
					</div>
				</div>
				<div class="level-right">
					<div class="level-item">Created: {{ $sub['created_at'] }}</div>
					<div class="level-item">Expires: {{ $sub['expires']['date'] }}</div>
				</div>
			</div>
			<progress class="progress is-success" max="100" value="{{ $sub['progress'] }}"></progress>
			<div class="level is-mobile">
				<div class="level-left">
					@if(Auth::user()->is_admin === 1)
						<update-subscription v-bind:subid="{{ $sub['id'] }}" key="{{ $sub['id'] }}" v-on:modal="showModal($event)"></update-subscription>
					@endif
					<span class="button is-small is-info" style="margin-left: 1em">Website progress - {{ $sub['progress'] }}%</span>
					<span class="tag is-white has-text-weight-bold"><span class="icon has-text-primary"><i class="fa fa-info-circle"></i></span> {{ $sub['progress_description'] }}</span>
				</div>
				<div class="level-right">
					<subscription-actions subid="{{ $sub['id'] }}" is-active="{{ $sub['is_active'] }}"></subscription-actions>
				</div>
			</div>
			
		</div>
	</div>
	
</div>