<section id="posts">
    <div class="container">
        @foreach ($news as $newspost)
            @include('partials.news-post')    
        @endforeach
    </div>
</section>
