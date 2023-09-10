<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿一覧</title>
</head>
<!-- <script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/test.js') }}"></script>
<script src="{{ asset('js/lib/vue.global.js') }})"></script> -->
<body>
    <header>
        <nav>
            <div>
                <a href="{{ route('posts.index') }}">投稿アプリ</a>            
            </div>
        </nav>
    </header>
    
    <main>
        <article>
            <div>                
                <h1>投稿一覧</h1>    
                <div id="app2">
                    <p v-text="message"></p>   
                </div>  
                @if (session('flash_message'))
                    <p>{{ session('flash_message') }}</p>
                @endif

                <div>
                    <a href="{{ route('posts.create') }}">新規投稿</a>                                   
                </div>

                @foreach($posts as $post)
                    <div>
                        <div>
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->content }}</p>    
                            
                            <div>
                                <a href="{{ route('posts.show', $post) }}">詳細</a>   
                                <a href="{{ route('posts.edit', $post) }}">編集</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="post">
                                    @csrf
                                    @method('delete')                                        
                                    <button type="submit">削除</button>
                                </form>
                            </div>                             
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </article>
    </main>

    <footer>        
        <p>&copy; 投稿アプリ All rights reserved.</p>
    </footer>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@3.3.4/dist/vue.global.js"></script> -->
    
</body>
<script src="js/app.js"></script>
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
<!-- <script src="../../js/lib/vue.global.ls"></script> -->
</html>