

<div class="hero is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="pricing-table">
                <div class="pricing-plan is-primary">
                    <div class="plan-header">Basic</div>
                    <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">N</span>{{ number_format($packages[0]->monthly_cost) }}</span>/month</div>
                    <div class="plan-items">
                        <h3 class="plan-item">Setup Fee <span class="naira">{{ number_format($packages[0]->setup_cost) }}</span></h3>
                        <div class="plan-item">10 Pages</div>
                        <div class="plan-item">5 Email Addresses</div>
                        <div class="plan-item">Free Weekly Updates</div>
                        <div class="plan-item">Free Domain</div>
                        <div class="plan-item">Free Hosting</div>
                    </div>
                    <div class="plan-footer">
                        <a href="/register?type=1" class="button is-fullwidth is-medium">Sign up</a>
                    </div>
                </div>
                <div class="pricing-plan is-link is-active">
                    <div class="plan-header">Business</div>
                    <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">N</span>{{ number_format($packages[1]->monthly_cost) }}</span>/month</div>
                    <div class="plan-items">
                        <h3 class="plan-item">Setup Fee <span class="naira">{{ number_format($packages[1]->setup_cost) }}</span></h3>
                        <div class="plan-item">25 Pages</div>
                        <div class="plan-item">15 Email Addresses</div>
                        <div class="plan-item">Free Daily Updates</div>
                        <div class="plan-item">Free Domain</div>
                        <div class="plan-item">Free Hosting</div>
                    </div>
                    <div class="plan-footer">
                        <a href="/register?type=2" class="button is-fullwidth is-medium">Sign up</a>
                    </div>
                </div>
                <div class="pricing-plan is-danger">
                    <div class="plan-header">Pro</div>
                    <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">N</span>10,000</span>/month</div>
                    <div class="plan-items">
                        <h3 class="plan-item">No Setup Fee</h3>
                        <div class="plan-item">Unlimited Pages</div>
                        <div class="plan-item">Unlimited Email Addresses</div>
                        <div class="plan-item">Free Daily Updates</div>
                        <div class="plan-item">Free Domain</div>
                        <div class="plan-item">Free Hosting</div>
                    </div>
                    <div class="plan-footer">
                        <a href="/contact" class="button is-fullwidth is-medium">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 2em">
            <div class="column has-text-centered">
                <h3 class="title is-5 is-size-4-mobile">
                    Not sure which package is ideal for you?
                </h3>
                <h4 class="subtitle is-size-6-mobile has-text-grey" style="margin-top: 0em">
                    <a href="/contact" class="button is-success is-long-button is-medium">Contact Us</a>
                </h4>
            </div>
        </div>
    </div>
</div>