<div class="w-full max-w-sm lg:max-w-lg flex flex-col gap-4">
    @unless($lat && $long)
    <button
        class="text-3xl font-semibold px-10 py-2 bg-yellow-500 rounded-md capitalize"
        x-data=""
        @click="$wire.setLocation(await getLocation())"
        wire:loading.remove
    >
        {{ __("order ?") }}
    </button>
    <div wire:loading.flex class="h-96 backdrop-blur-sm bg-black/20 rounded-lg shadow-black shadow-2xl p-3 flex items-center justify-center gap-2">
        <x-loader />
    </div>
    @else
        <div class="h-96 backdrop-blur-sm bg-black/20 rounded-lg shadow-black shadow-2xl p-3 flex flex-col gap-2">
            @foreach($orders as $order)
            <div class="p-2 bg-white/60 rounded text-black flex gap-4">
                <img class="inline-block h-8 w-8 rounded-full" src="{{ $order['avatar'] }}" alt="">

                <div class="flex flex-col">
                    <p class="capitalize text-gray-700 text-sm">{{ $order['username'] }}</p>
                    <p class="font-semibold text-sm">{{ $order['place'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    @endunless
</div>
