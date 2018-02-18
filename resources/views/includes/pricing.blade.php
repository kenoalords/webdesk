<div class="hero is-medium pricing">
    <div class="hero-body">
        <div class="columns is-centered">
            <div class="column is-10">
                <div class="">
                    @if(isset($use_title) && $use_title == true)
                    <h2 class="title has-text-weight-light has-text-centered">Pricing</h2>
                    <h4 class="subtitle has-text-centered">There is a package for everyone</h4>
                    @endif
                    <div class="columns is-centered" style="margin-top: 5em">
                        <div class="column ">
                            <div class="columns">
                                <div class="column">
                                    <div class="card basic has-text-centered">
                                        <div class="card-content">
                                            <img src="{{ asset('images/basic.svg') }}" alt="Basic Package" class="image is-centered">
                                            <h2 class="title is-4">Basic</h2>
                                            <div class="subtitle is-6 info">Bloggers &amp; Small Businesses</div>
                                            <h4 class="setup-fee naira">{{ number_format($packages[0]->setup_cost) }}</h4>
                                            <div class="info">Setup Fee</div>
                                            <hr>
                                            <h4 class="subtitle has-text-success naira">{{ number_format($packages[0]->monthly_cost) }} per month</h4>
                                            <ul class="has-text-centered">
                                                <li class="has-text-weight-bold">15 Pages</li>
                                                <li>25 Email Addresses</li>
                                            </ul>
                                            <a href="/register?type=1" class="button is-long-button is-success is-rounded has-text-weight-bold ">Sign me up</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="card is-popular business has-text-centered">
                                        <div class="card-content">
                                            <img src="{{ asset('images/business.svg') }}" alt="Business Package" class="image is-centered">
                                            <h2 class="title is-4">Business</h2>
                                            <div class="subtitle is-6 info">Large Companies</div>
                                            <h4 class="setup-fee naira">{{ number_format($packages[1]->setup_cost) }}</h4>
                                            <div class="info">Setup Fee</div>
                                            <hr>
                                            <h4 class="subtitle has-text-success naira">{{ number_format($packages[1]->monthly_cost) }} per month</h4>
                                            <ul class="has-text-centered">
                                                <li class="has-text-weight-bold">25 Pages</li>
                                                <li>50 Email Addresses</li>
                                            </ul>
                                            <a href="/register?type=2" class="button is-long-button is-success is-rounded has-text-weight-bold">Sign me up</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="card pro has-text-centered">
                                        <div class="card-content">
                                            <img src="{{ asset('images/pro.svg') }}" alt="Pro Package" class="image is-centered">
                                            <h2 class="title is-4">Pro</h2>
                                            <h4 class="setup-fee">Call Us</h4>
                                            <div class="info">No Setup Fee</div>
                                            <hr>
                                            <h4 class="subtitle has-text-success">Call us</h4>
                                            <ul>
                                                <li class="has-text-weight-bold">Website Application</li>
                                                <li>Unlimited Email Addresses</li>
                                            </ul>
                                            <a href="/contact" class="button is-long-button is-success is-rounded has-text-weight-bold">Contact us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!-- Standard features -->
                    <h3 class="title is-3 has-text-centered" style="margin-top: 2em;">Standard Features</h3>
                    <p class="subtitle is-5 has-text-centered has-text-grey">All our website solutions comes standard with the following features</p>
                    <ul class="features is-clearfix">
                        <li><span>Custom Design</span></li>
                        <li><span>Free Domain Name</span></li>
                        <li><span>Free Website Hosting</span></li>
                        <li><span>Mobile Optimized</span></li>
                        <li><span>Wordpress CMS</span></li>
                        <li><span>SEO Optimization</span></li>
                        <li><span>Monthly Maintenance</span></li>
                        <li><span>Live Chat Integration</span></li>
                        <li><span>MailChimp Newsletter</span></li>
                        <li><span>Portfolio Management</span></li>
                        <li><span>Team Management</span></li>
                        <li><span>Contact Form</span></li>
                        <li><span>Google Analytics</span></li>
                        <li><span>Google Webmaster</span></li>
                        <li><span>Blog &amp; News Update</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 2em">
            <div class="column has-text-centered">
                <h3 class="title is-5 is-size-3-mobile">
                    Not sure which package is ideal for you?
                </h3>
                <h4 class="subtitle is-size-6-mobile has-text-grey" style="margin-top: 0em">
                    <a href="/contact" class="button is-success is-long-button is-raised">Contact Us</a>
                </h4>
            </div>
        </div>
    </div>
</div>