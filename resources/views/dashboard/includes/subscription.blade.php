<div class="card" style="margin-bottom: 1em">
	<header class="card-header">
		
	</header>
	<div class="card-content">
		<div class="title is-4">
			<span class="icon"><i class="fa fa-globe"></i></span> {{ $sub['domain_name'] }}
		</div>
		<div class="content">
			<div class="level">
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
			@if(Auth::user()->is_admin === 1)
				<update-subscription v-bind:subid="{{ $sub['id'] }}" key="{{ $sub['id'] }}" v-on:modal="showModal($event)"></update-subscription>
			@endif
			<span class="tag is-info">Website progress - {{ $sub['progress'] }}%</span>
			<span class="tag is-white has-text-weight-bold"><span class="icon has-text-primary"><i class="fa fa-info-circle"></i></span> {{ $sub['progress_description'] }}</span>
		</div>
	</div>
	
</div>