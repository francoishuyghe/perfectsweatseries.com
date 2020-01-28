<section id="top">
    <img src="@asset('images/TPS_title.svg')" />
    <div class="gradient-circle parallax" data-depth="0.2"></div>
    <div class="gradient-circle-white parallax" data-depth="0.6"></div>
</section>

<section id="intro">
    <div class="container">
        <div class="text">{{ $data['intro_text'] }}</div>
        <div class="video-wrap">
            <a class="btn blue video-btn">Watch Trailer</a>
            <div class="video-player">
                {!! $data['trailer'] !!}
            </div>
        </div>
    </div>
    <div class="gradient-circle-white parallax" data-depth="0.6"></div>
</section>

<section id="content">
    <div class="container">
        {!! the_content() !!}
    </div>
</section>

<section id="episodes">
    <div class="container">
        <h2>Enter the Sweat Bath</h2>
        <div class="row">
            @foreach ($episodes as $episode)
                <div class="col-md-6 episode-block">
                    <div class="thumbnail">
                        <a href="{{ get_permalink($episode->ID) }}">
                            {!! get_the_post_thumbnail( $episode->ID, 'large' ) !!}
                        </a>
                    </div>
                    <a class="color-black" href="{{ get_permalink($episode->ID) }}">
                        <h6>Episode {{ $loop->iteration }}</h6>
                        <h4>{{ $episode->post_title }}</h4>
                    </a>
                    <p>{{ $episode->post_excerpt }}</p>
                    <a href="{{ get_permalink($episode->ID) }}"><i class="fas fa-play"></i> Watch</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
