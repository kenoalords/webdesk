@if($reviews->count())
<div class="hero">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-two-thirds has-text-centered">
                    <h2 class="title is-4 is-size-5-mobile pointing-header"><i class="fa fa-comments"></i> What our customers say</h2>
                    <div class="single-slick-js">
                        @foreach($reviews as $review)
                        <div class="testimonials">
                            <div>
                                <p>{{$review->review}}</p>
                                <h4 class="title is-4 text-is-uppercase">{{$review->name}}</h4> 
                                <h5 class="subtitle">{{$review->position}}</h5>                   
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif