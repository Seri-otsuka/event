<nav x-data="{ open: false }" class="bg-blue-400 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- ログインのレイアウト -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('article') }}">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </div>

                <!-- Navigation Links -->
                 <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('article')" :active="request()->routeIs('article')">
                        {{ __('記事一覧') }}
                    </x-nav-link>
                </div>
                <!--保留-->
                 <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('mypage')" :active="request()->routeIs('mypage')">
                        {{ __('マイページ') }}
                    </x-nav-link>
                </div>
                 <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="/categories/1" :active="request()->routeIs('categories.show', ['category' => 1])">
                        {{ __('アニメ') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="/categories/2" :active="request()->routeIs('categories.show', ['category' => 2])">
                        {{ __('K-POP') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="/categories/3" :active="request()->routeIs('categories.show', ['category' => 3])">
                        {{ __('ゲーム'
                        
                        ) }}
                    </x-nav-link>
                </div>
                <div class="ml-2">
                      　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
                </div>
                <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="inline-flex items-center px-4 py-2 mt-4 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-600 focus:outline-none focus:border-red-600 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">
                        {{ __('Log Out') }}
                    </button>
                </form>
                </div>
            </div>


               
</nav>