<div class="hero is-medium pricing">
    <div class="hero-body">
        <div class="container">
            @if(isset($use_title) && $use_title == true)
            <h2 class="title has-text-weight-light has-text-centered">Our Pricing</h2>
            <h4 class="subtitle has-text-centered">There is a package for everyone</h4>
            @endif
            <div class="columns is-centered" style="margin-top: 5em">
                <div class="column is-two-thirds">
                    <div class="columns is-gapless">
                        <div class="column">
                            <div class="card">
                                <div class="card-content">
                                    <h2 class="title">Basic</h2>
                                    <h4 class="subtitle has-text-success naira">{{ number_format($packages[0]->monthly_cost) }} Monthly</h4>
                                </div>
                                <ul class="is-option-list">
                                    <li class="is-primary"><h4 class="naira">{{ number_format($packages[0]->setup_cost) }} Setup Cost</h4></li>
                                    <li>Bespoke Design</li>
                                    <li class="has-text-weight-bold">Up to 5 Pages</li>
                                    <li>Free Domain Name (.com &amp; .com.ng)</li>
                                    <li>Free Website Hosting</li>
                                    <li>5 Email Addresses</li>
                                    <li>Mobile Optimized</li>
                                    <li>SEO Friendly</li>
                                    <li>Contact Form</li>
                                    <li>Content Management System</li>
                                    <li>Quaterly Scheduled Maintenance</li>
                                </ul>
                                <div class="card-footer">
                                    <a href="/register?type=1" class="card-footer-item button is-success is-large no-border-radius">I want this plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card is-popular">
                                <div class="card-content">
                                    <h2 class="title">Business</h2>
                                    <h4 class="subtitle has-text-success naira">{{ number_format($packages[1]->monthly_cost) }} Monthly</h4>
                                </div>
                                <ul class="is-option-list">
                                    <li><h4 class="naira">{{ number_format($packages[1]->setup_cost) }} Setup Cost</h4></li>
                                    <li>Bespoke Design</li>
                                    <li class="has-text-weight-bold">Up to 15 Pages</li>
                                    <li>Free Domain Name (.com &amp; .com.ng)</li>
                                    <li>Free Website Hosting</li>
                                    <li>10 Email Addresses</li>
                                    <li>Mobile Optimized</li>
                                    <li>SEO Friendly</li>
                                    <li>Custom Contact Form</li>
                                    <li>Content Management System</li>
                                    <li>Monthly Scheduled Maintenance</li>
                                    <li>Live Chat Integration</li>
                                    <li>Newsletter Integration</li>
                                    <li>Portfolio &amp; Team Management</li>
                                    <li>Google Analytics</li>
                                    <li>Blog</li>
                                </ul>
                                <div class="card-footer">
                                    <a href="/register?type=2" class="card-footer-item button is-link is-large no-border-radius">I want this plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <div class="card-content">
                                    <h2 class="title">Pro</h2>
                                    <h4 class="subtitle has-text-success">Call for pricing</h4>
                                </div>
                                <ul class="is-option-list">
                                    <li>Bespoke Design</li>
                                    <li class="has-text-weight-bold">Unlimited Pages</li>
                                    <li>Free Domain Name (.com &amp; .com.ng)</li>
                                    <li>Free Website Hosting</li>
                                    <li>Unlimited Email Addresses</li>
                                    <li>Mobile Optimized</li>
                                    <li>SEO Friendly</li>
                                    <li>Content Management System</li>
                                    <li>Monthly Scheduled Maintenance</li>
                                    <li>Custom Requirements</li>
                                    <li>Ecommerce Functionality</li>
                                    <li>Google Analytics</li>
                                    <li>Live Chat Integration</li>
                                    <li>Newsletter Integration</li>
                                    <li>Blog</li>
                                </ul>
                                <div class="card-footer">
                                    <a href="/contact" class="card-footer-item button is-primary is-large no-border-radius">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container" style="margin-top: 5em">
            <div class="column has-text-centered">
                <h3 class="title is-2">
                    Not sure which package is ideal for you?
                </h3>
                <h4 class="subtitle has-text-grey" style="margin-top: 0em">
                    Give us a call on <a href="tel:09022422022">090 2242 2022</a> or <a href="/contact" class="has-text-link">click here to contact us</a>
                </h4>
            </div>
        </div>
    </div>
</div>