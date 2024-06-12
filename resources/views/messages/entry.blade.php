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
              <div class="py-5">
              <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <x-input-label for="title" :value="__('ユーザー一覧')" />
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg overflow-auto ">
             @foreach ($users as $user)
              <div class="display: flex border-b-2 border-indigo-400">
                  @if($user->profile_photo_path == null)
                <img class="w-10 h-10 rounded-full object-cover border-none bg-gray-200 ml-4" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1695984855/aqeoyds9gl2qkhb5dtni.jpg">
                 @else
                <img class="w-10 h-10 rounded-full object-cover border-none bg-gray-200 mx-3 ml-4" src="{{ $user->profile_photo_path }}">
                @endif
               <div class="user_name mx-3 my-2">
                   <a href="/users/{{ $user->id }}">
                   {{ $user->name }}
                   </a>
               </div>
               <!--もうちょい小さく-->
               <div class="user_name mx-3 my-2 text-gray-500">
                   <a href="/users/{{ $user->id }}">
                   {{ $user->text }}
                   </a>
               </div>
            </div>
             @endforeach
         </div>
         </div>
        </body>
    </html>
</x-app-layout>