<x-guest-layout>
    <!-- Session Status -->
    <div class="flex justify-center">
    </div>
    <div class="flex justify-center">
         @if (Route::has('login'))
                    @auth
                        <a href="{{ route('mypage') }}" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full my-3 mx-3">自分のページへ</a>
                    @else
                        <a href="{{ route('login') }}" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full my-3 mx-3">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full my-3 mx-3">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
</x-guest-layout>