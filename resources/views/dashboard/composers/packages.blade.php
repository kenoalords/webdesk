<div class="control is-block">
    <div class="select is-large is-focused is-block {{ ($errors->has('package')) ? 'is-danger' : 'is-primary' }}">
        <select name="package" style="width: 100%" id="packages">
            <option value="0">Choose a package</option>
            @foreach($packages as $package)
            <option value="{{ $package->id }}" {{ (old('package') == $package->id || Request::get('type') == $package->id ) ? 'selected' : '' }} data-package-monthly="{{ $package->monthly_cost }}" data-package-setup="{{ $package->setup_cost }}"> {{ $package->name }} | ₦{{ $package->setup_cost }} (Setup Cost) @ ₦{{ number_format($package->monthly_cost) }}/Monthly</option>
            @endforeach
        </select>
        <span class="help">1st month is free</span>
    </div>
</div>