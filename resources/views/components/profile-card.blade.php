<div class="flex flex-col min-h-fit justify-center items-center ">
    <div class="flex justify-around min-w-full">
        <div class="text-xl">
            {{__('Username')}}
        </div>

        <div class="text-lg">
            {{Auth::user()->username}}
        </div>
    </div>
</div>
