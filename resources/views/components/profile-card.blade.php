<div class="flex  min-h-fit justify-around items-start ">
        <div class="flex">
           <div class="flex flex-col justify-between text-xl mx-4">
                <div class="py-4">
                {{ __('Username')}}
                </div>
                <div class="py-4">
                {{ __('Name')}}
                </div>
                <div class="py-4">
                {{ __('Email')}}
                </div>
            </div>

            <div class="flex flex-col justify-between text-lg text-blue-600 mx-4">
                <div class="py-4">
                    {{ Auth::user()->username}}
                </div>
                <div class="py-4">
                    {{ Auth::user()->name}}
                </div>
                <div class="py-4">
                {{ Auth::user()->email}}
                </div>
            </div>
        </div>
        <div></div>
</div>
