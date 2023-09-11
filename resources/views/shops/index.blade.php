<x-layout>
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($shops) == 0)
        @foreach($shops as $shop)
        <x-shop-card :shop="$shop"/>
        @endforeach
    @else
        <p>No Listings Found</p>
    @endunless
    </div>

    <div class="mt-6 p-4">{{$shops->links()}}</div>
</x-layout>


