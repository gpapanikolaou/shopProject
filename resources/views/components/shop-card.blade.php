@props(['shop'])
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$shop->logo ? asset('storage/' .$shop->logo) : asset('/images/store.png')}}" alt=""/>
        <div>
            <h3 class="text-2xl">
                <a href="/shops/{{$shop->id}}">{{$shop->name}}</a>
            </h3>
            <div class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                <a href="/?user={{$shop->user_id}}">{{$shop->user->name}}</a>
            </div>
            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="/?category={{$shop->category_id}}">{{$shop->category->name}}</a>
                </li>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$shop->city}}
            </div>
        </div>
    </div>
</x-card>
