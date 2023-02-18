@extends('layouts.index')

@section('page_title', 'Update' . $article->title)
@section('single', 'single')

@section('content')
<!-- Main -->
<div id="main">
        @if($errors->any())
            <div class="errors">
                @foreach($errors->all() as $error)
                    <p>
                        {{ $error }}
                    </p>
                @endforeach
            </div>
        @endif
        <!-- Post -->
            <form method="post" enctype="multipart/form-data" action="{{ route('article.updatePost', $article) }}" class="post">
                <h1>Update Post</h1>
                @csrf
                <input value="{{ $article->title }}" type="text" name="title" placeholder="Title"><br>
                <input value="{{ $article->anons_title }}" type="text" name="anons_title" placeholder="Anons title"><br>
                <textarea name="content" placeholder="Post content">{{ $article->content }}</textarea><br>

                <img height="480px"  width="100%" style="object-fit: contain" src="{{ $article->image_url }}" alt="">

                <input type="file" name="file"><br><br>

                <select name="category_id">
                    @foreach($categories as $category)
                        <option
                        @if($article->category_id === $category['id'])
                            selected
                        @endif
                            value="{{ $category['id'] }}">
                            {{ $category['name'] }}
                        </option>
                    @endforeach
                </select><br><br>

                <input type="submit" class="button big fit" value="Add Post">
            </form>

    </div>

<!-- Footer -->
<section id="footer">
        <p class="copyright">&copy; Blog. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
    </section>
@endsection
