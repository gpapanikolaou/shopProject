<x-layout>
<x-card class="p-10  max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create a Shop
        </h2>

    </header>

    <form method="POST" action="/shops" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label
                for="company"
                class="inline-block text-lg mb-2"
            >Shop Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name" value="{{old('name')}}"
            />
            @error('name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="category_id">Select a Category:</label>
            <select id="category_id" name="category_id">
                <option value="">Select a Category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </select>
            @error('category_id')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="location"
                class="inline-block text-lg mb-2"
            >City</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="city" value="{{old('city')}}"
            />
            @error('city')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
            >Address</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="address" value="{{old('address')}}"
            />
            @error('address')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Open Hours
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="open_hours"
                placeholder="09.00-17.00" value="{{old('open_hours')}}"
            />
            @error('open_hours')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                Shop Logo
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="logo"
            />
            @error('logo')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
            >
                 Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
                placeholder="" value="{{old('description')}}"
            ></textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Create Shop
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-card>
</x-layout>
