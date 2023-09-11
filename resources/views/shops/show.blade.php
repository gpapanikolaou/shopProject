<x-layout>
    @include('partials._search')
    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10 bg-black">
            <div
                class="flex flex-col items-center justify-center text-center"
            >
                <img
                    class="w-48 mr-6 mb-6"
                    src="{{$shop->logo ? asset('storage/' .$shop->logo) : asset('/images/store.png')}}"
                    alt=""
                />

                <h3 class="text-2xl mb-2">{{$shop->name}}</h3>
                <div class="text-xl font-bold mb-4">{{$shop->user->name}}</div>
                <ul class="flex">
                    <li
                        class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                    >
                        <a href="#">{{$shop->category->name}}</a>
                    </li>

                </ul>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{$shop->city}}, {{$shop->address}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Shop Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{$shop->description}}
                        </p>
                    </div>
                </div>
            </div>
        </x-card>
{{--        <x-card class="mt-4 p-2 flex space-x-6">--}}
{{--            <a href="/shops/{{$shop->id}}/edit">--}}
{{--                <i class="fa-solid fa-pencil">Edit</i>--}}
{{--            </a>--}}

{{--            <form method="POST" action="/shops/{{$shop->id}}">--}}
{{--                @csrf--}}
{{--                @method('DELETE')--}}
{{--                <button class="text-red-500"><i class="fa-solid fa-trash">Delete</i></button>--}}
{{--            </form>--}}
{{--        </x-card>--}}

    </div>
</x-layout>