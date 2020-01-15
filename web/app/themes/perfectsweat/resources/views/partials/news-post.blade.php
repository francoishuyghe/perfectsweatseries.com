<div class="news-post">
<div class="row">
    <div class="col-md-6">
        <a href="{{ get_permalink($newspost->ID) }}">
            <h6>{{ get_the_date('', $newspost->ID) }}</h6>
            <h4>{{ $newspost->post_title }}</h4>
        </a>
        <p>{{ $newspost->post_excerpt }}</p>
    </div>
    <div class="col-md-6 thumbnail">
        {!! get_the_post_thumbnail( $newspost->ID, 'large' ) !!}
    </div>
</div>
</div>