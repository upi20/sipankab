@extends('layouts.frontend.master')
@section('content')
    <!-- blog-details-area -->
    <section class="blog-details-area pt-175 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="blog-details-wrap">
                        <h2 class="title">{{ $model->nama }}</h2>
                        <div class="blog-meta-two">
                            <ul class="list-wrap">
                                @if (isset($model->categories[0]))
                                    <li class="tag">
                                        <a href="{{ url("artikel?kategori={$model->categories[0]->slug}") }}">
                                            {{ $model->categories[0]->nama }}
                                        </a>
                                    </li>
                                @endif

                                <li><i class="fal fa-calendar"></i>{{ $model->dateFormat('d F Y') }}</li>
                                @if ($model->user)
                                    <li>Oleh <a href="javascript:void(0)">{{ $model->user->name }}</a></li>
                                @endif
                            </ul>
                        </div>

                        {{-- Artikel detail --}}
                        {!! $model->detail !!}

                    </div>
                    <div class="comment-wrap">
                        <h2 class="title"><span>Komentar</span></h2>
                        <div id="respond" class="comment-respond bg-white">
                            <div class="add-comment">
                                <!-- post comments -->
                                <div id="disqus_thread"></div>
                                <script>
                                    /**
                                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

                                    var disqus_config = function() {
                                        this.page.url = '{{ Request::url() }}'; // Replace PAGE_URL with your page's canonical URL variable
                                        this.page.identifier =
                                            '{{ $model->slug }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                    };
                                    (function() { // DON'T EDIT BELOW THIS LINE
                                        var d = document,
                                            s = d.createElement('script');
                                        s.src = 'https://tahfidz-arrahman.disqus.com/embed.js';
                                        s.setAttribute('data-timestamp', +new Date());
                                        (d.head || d.body).appendChild(s);
                                    })();
                                </script>
                                <noscript>
                                    Please enable JavaScript to view the
                                    <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
                                </noscript>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->
@endsection

@section('stylesheet')
    <style>
        .blogCard a {
            color: #0d6efd !important;
            text-decoration: underline;
        }
    </style>
@endsection

@section('javascript')
    <script id="dsq-count-scr" src="//wkg-roastery.disqus.com/count.js" async></script>
@endsection
