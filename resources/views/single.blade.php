@extends('layouts.index')

@section('page_title', 'single')
@section('single', 'single')

@section('content')

    <!-- Main -->
    <div id="main">

        <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="#">{{ $article['title'] }}</a></h2>
                        <p>{{ $article['anons_title'] }}</p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-11-01">
                            {{ $article['created_at']->format('d M Y') }}
                        </time>
                        <a href="#" class="author"><span class="name">{{ $article->author()->username }}</span><img src="{{ $article->author()->image_url }}" alt="" /></a>
                    </div>
                </header>
                <span class="image featured"><img src="{{ $article->image_url }}" alt="" /></span>
                <p>{{ $article['content'] }}</p>
                <footer>
                    <ul class="stats">

                        @auth
                            <li><a href="#">Edit</a></li>
                            <li><a href="#" class="red">Delete</a></li>
                            <li><a href="#" class="red">Blocked</a></li>
                        @endauth

                        <li><a href="#" class="icon fa-eye">{{ $article->view_count }}</a></li>
                        <li><a href="#" class="icon fa-comment">128</a></li>
                        <li><a href="#">{{ $article->category()->name }}</a></li>
                    </ul>
                </footer>
            </article>

        <!-- Comments -->
            <div class="post">
                <section class="comments">
                    <h3>Comments</h3>
                    @auth
                        <form>
                            <textarea></textarea><br>
                            <input type="submit" class="button big fit" value="Add Comment">
                        </form>
                    @endauth
                </section>
                <article class="comment">
                    <div class="comment-autor">
                        <a href="#"><img src="public/images/avatar.jpg"></a>
                        <a href="#">User</a>
                    </div>
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat.</p>
                </article>
                <article class="comment">
                    <div class="comment-autor">
                        <a href="#"><img src="public/images/avatar.jpg"></a>
                        <a href="#">User</a>
                    </div>
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat.</p>
                </article>
                <article class="comment">
                    <div class="comment-autor">
                        <a href="#"><img src="public/images/avatar.jpg"></a>
                        <a href="#">User</a>
                    </div>
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat.</p>
                </article>
            </div>

    </div>

    <!-- Footer -->
    <section id="footer">
        <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
    </section>
@endsection
