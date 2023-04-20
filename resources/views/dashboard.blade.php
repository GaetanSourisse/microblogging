<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color:#fbfbfc">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-black text-white">
                    {{ __("Tu es connecté.e !") }}
                </div>
                <div class="formulaire" style="padding:20px;">
                    <h2 style="margin-bottom:20px; font-weight:bold">Créer un nouveau post</h2>
                    <form method="POST" class="flex flex-col" >
                        <label>Title</label>
                        <input type="text">
                        <label>Content</label>
                        <input type="text">
                        <label>Image</label>
                        <input type="url">
                        <button type="submit" style="padding:10px; border:1px solid #fbfbfc; width:100px; margin-top:15px; background-color: #000000; color:#fbfbfc ">
                        Publier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="album py-5" style="background-color:#000000">
        @include('post.show')
    </div>
    
</x-app-layout>
