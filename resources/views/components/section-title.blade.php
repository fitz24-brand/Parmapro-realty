<div class="md:col-span-1 flex justify-between" style="background-color: black;">
    <div class="px-4 sm:px-0" >
        <h3 class="text-lg font-medium text-gray-900">{{ $title }}</h3>

        <p class="mt-1 text-sm text-gray-600" style="color:white;">
            {{ $description }}
        </p>
    </div>

    <div class="px-4 sm:px-0">
        {{ $aside ?? '' }}
    </div>
</div>
