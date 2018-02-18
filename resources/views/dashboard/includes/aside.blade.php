<div class="hero" style="min-height: 93vh" >
     <div class="hero-body">
         <div class="menu">
                @if(Auth::user() && Auth::user()->is_admin == "1")
                <p class="menu-label">Administrator</p>
                <ul class="menu-list">
                    <li><a href="{{ route('subscriptions_admin') }}" class="{{ (Request::path() == 'dashboard/admin/subscriptions') ? 'is-active' : '' }}"><span class="icon"><i class="fa fa-gear"></i></span>Subscriptions</a></li>
                    <li><a href="{{ route('invoices_admin') }}" class="{{ (Request::path() == 'dashboard/admin/invoices') ? 'is-active' : '' }}"><span class="icon"><i class="fa fa-gear"></i></span>Invoices</a></li>
                    <li><a href="{{ route('faq_admin') }}"><span class="icon"><i class="fa fa-gear"></i></span>Faq</a></li>
                    <li><a href="{{ route('website_contact') }}" class="{{ (Request::path() == 'dashboard/admin/contacts') ? 'is-active' : '' }}"><span class="icon"><i class="fa fa-envelope"></i></span>Contacts</a></li>
                </ul>
                @endif
                
         		<p class="menu-label">General</p>
         		<ul class="menu-list">
         			<li><a href="/dashboard" class="{{ (Request::path() == 'dashboard') ? 'is-active' : '' }}"><span class="icon"><i class="fa fa-dashboard"></i></span>Dashboard</a></li>
         			<li><a href="{{ route('subscriptions') }}" class="{{ (Request::path() == 'dashboard/subscriptions') ? 'is-active' : '' }}"><span class="icon"><i class="fa fa-briefcase"></i></span>Subscriptions</a></li>
         			<li><a href="{{ route('invoices') }}" class="{{ (Request::path() == 'dashboard/invoices') ? 'is-active' : '' }}"><span class="icon"><i class="fa fa-credit-card"></i></span>Invoices</a></li>
         		</ul>
                
                <p class="menu-label">Support</p>
                <ul class="menu-list">
                    <li><a href="{{ route('admin_contact') }}" class="{{ (Request::path() == 'dashboard/contact') ? 'is-active' : '' }}"><span class="icon"><i class="fa fa-envelope"></i></span>Contact Us</a></li>
                    <li><a href="{{ route('admin_faq') }}" class="{{ (Request::path() == 'dashboard/faq') ? 'is-active' : '' }}"><span class="icon"><i class="fa fa-question-circle"></i></span><span>FAQ</span></a></li>
                </ul>
                <p class="menu-label">Account</p>
         		<ul class="menu-list">
         			<li><a href="{{ route('edit_profile') }}"><span class="icon"><i class="fa fa-user"></i></span>Edit Profile</a></li>
         			<li><a href="/logout"><span class="icon"><i class="fa fa-power-off"></i></span> <span>Logout</span></a></li>
         		</ul>
         </div>
     </div>
 </div>