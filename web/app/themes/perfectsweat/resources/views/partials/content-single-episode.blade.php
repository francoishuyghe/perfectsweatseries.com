<article {{ post_class() }}>
  <div class="entry-content">
    <div class="container">
      @php the_content() @endphp
    </div>
  </div>
  <footer class="text-center">

    @php next_post_link( '%link', 'Previous Episode' ) @endphp
    @php previous_post_link( '%link', 'Next Episode' ) @endphp
    
  </footer>
</article>
