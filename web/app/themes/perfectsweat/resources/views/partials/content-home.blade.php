<section id="top">
    <img src="@asset('images/TPS_title.svg')" />
    <div class="gradient-circle parallax" data-depth="0.2"></div>
    <div class="gradient-circle-white parallax" data-depth="0.6"></div>
</section>

<section id="intro">
    <div class="container">
    The sweat bath in its many forms has comforted, healed, and strengthened the social bonds between rich and poor, young and old, strong and the weak.
    </div>
</section>

<section id="content">
    <div class="container">
        {!! the_content() !!}
    </div>
</section>

<section id="episodes">
    <div class="container">
        <h2>Episodes</h2>
        <div class="row">
            @foreach ($episodes as $episode)
                <div class="col-md-6 episode-block">
                    <div class="thumbnail">
                        {!! get_the_post_thumbnail( $episode->ID, 'large' ) !!}
                    </div>
                    <a href="{{ $episode->permalink }}">
                        <h6>Episode {{ $loop->iteration }}</h6>
                        <h4>{{ $episode->post_title }}</h4>
                    </a>
                    <p>{{ $episode->post_excerpt }}</p>
                    <a class="btn" href="/#">Watch</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
