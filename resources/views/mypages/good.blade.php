<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Mypage</title>
    
            <!-- Fonts -->
            <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        </head>
        <body>
              <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('いいねした記事') }}
                </h2>
            </x-slot>
            <div align="right" class="m-5">
                <a href="/articles/create"><x-primary-button>＋記事を作る</x-primary-button></a>
            </div>
            <div class="container mx-auto">
                <div class="flex flex-wrap -mx-4">
                    @foreach ($articles as $article)
                        <div class="w-full md:w-1/2 lg:w-1/3 px-8 mb-8">
                            <a href="{{ route('article.show', $article->id)}}">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 text-gray-900">
                                        <div class="articles">
                                            <h1 class="text-2xl">
                                                <div class="display: flex border-b-2 border-red-500">
                                                    @if($article->user->profile_photo_path == null)
                                                        <img class="w-14 h-14 rounded-full object-cover border-none bg-gray-200" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1695984855/aqeoyds9gl2qkhb5dtni.jpg">
                                                    @else
                                                        <img class="w-14 h-14 rounded-full object-cover border-none bg-gray-200" src="{{ $article->user->profile_photo_path }}">
                                                    @endif
                                                    <div class="m-4">
                                                        <a class= 'text-sm' href="/users/{{ $article->user->id }}">{{ $article->user->name }}</a>
                                                    </div>
                                                    <!--フォローボタンの位置変えた-->
                                                    <div class="user-control m-3 ml-8">
                                                        @if (!Auth::user()->is_relationship($article->user_id))
                                                            <form action="{{ route('relationship.store', $article->user) }}" method="post">
                                                                @csrf
                                                                <button class="'inline-flex items-center px-4 py-2 bg-lime-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-lime-600 focus:bg-lime-600 active:bg-lime-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">フォロー<button>
                                                            </form>
                                                        @else
                                                            <form action="{{ route('relationship.destroy', $article->user) }}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <x-primary-button>フォロー解除</x-primary-button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                </div>
                                                <a href="{{ route('article.show', $article->id)}}">
                                            </h1>
                                            <div class="flex justify-between">
                                                <h1 class='title text-xl ml-5  line-clamp-1'>
                                                    {{ $article->title }}
                                                </h1>
                                            </div>
                                            <div class=" m-4 text-lg">
                                                <p class='text-sm  line-clamp-2'>{!!nl2br($article->text)!!}</p>
                                                    @if($article->image !== null)
                                                    <div class="flex justify-center">
                                                        <img class="object-contain rounded-lg aspect-auto w-60 h-30 flexbox" src="{{ $article->image }}"/>
                                                    </div>
                                                    @endif
                                            </div>
                                            <button class="inline-flex items-center rounded-full bg-pink-50 px-4 py-2 text-base font-medium text-pink-700 ring-1 ring-inset ring-pink-700/10 my-3">
                                                <a href="/categories/{{ $article->category->id }}">{{ $article->category->name }}</a>
                                            </button>
                                            <div class="ml-10 text-gray-400 text-right">
                                                    投稿日：{{ $article->created_at->format('Y-m-d H:i') }}
                                                </div>
                                            <div align="right" class="flex justify-end">
                                                @can('update', $article)
                                                    <div class="edit mx-3">
                                                        <x-primary-button>
                                                            <a href="/articles/{{ $article->id }}/edit">編集</a>
                                                        </x-primary-button>
                                                    </div>
                                                @endcan
                                                @can('delete', $article)
                                                    <form action="/articles/{{ $article->id }}" id="form_{{ $article->id }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <x-primary-button type="button" onclick="deleteArticle({{ $article->id }})">削除</x-primary-button>
                                                    </form>
                                                @endcan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div align="center" class='bg-red-100'>
                {{ $articles->links() }}
            </div>
            <script>
                function deleteArticle(id){
                    'use strict'
                    
                    if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </html>
</x-app-layout>
