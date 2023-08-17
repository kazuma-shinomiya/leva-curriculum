<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <a href="">{{ $post->category->name }}</a>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>