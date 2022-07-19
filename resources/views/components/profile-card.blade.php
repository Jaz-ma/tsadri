<div x-data="{text_open: true}" class="flex  min-h-fit justify-around items-center ">
        <div class="flex">
           <div class="flex flex-col justify-between  text-xl mx-4">
                <div class="py-4">
                {{ __('Username')}}
                </div>
                <div class="py-4">
                {{ __('Name')}}
                </div>
                <div class="py-4">
                {{ __('Email')}}
                </div>

                <div x-show="!text_open" class="py-4 ">
                {{ __('Password')}}
                </div>
                 {{-- <div x-show="!text_open" class="py-4 ">
                {{ __('Confirmation')}}
                </div> --}}
            </div>

            <div x-show="text_open" class="flex flex-col justify-between text-lg text-blue-600 mx-4">
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
            <form action="{{route('user.update',Auth::user()->id)}}" method="POST">
                    @csrf
                    @method('PUT')
            <div x-show="!text_open" class="flex flex-col justify-between text-lg text-blue-600 mx-4">
                <div class="py-4">
                    <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />

                </div>
                <div class="py-4">

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>
                <div class="py-4">

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="py-4">

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')" required autofocus />
                </div>
                <x-button class="mt-4 ml-4" x-show="!text_open">
                        Save Changes
                    </x-button>
            </div>

                </form>

        </div>
        <div >
                <x-button @click.prevent="text_open = !text_open">
                    Edit
                </x-button>

        </div>
</div>
