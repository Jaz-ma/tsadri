<div x-data="{text_open: true}" class="flex  min-h-fit justify-around items-center ">
        <div class="flex">
           <div x-show="text_open"class="flex flex-col justify-between  text-xl mx-4">
                <div class="py-4 ">
                {{ __('Username')}}
                </div>
                <div class="py-4 ">
                {{ __('Name')}}
                </div>
                <div class="py-4 ">
                {{ __('Email')}}
                </div>

                <div x-show="!text_open" class="py-4 ">
                {{ __('Password')}}
                </div>

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

            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form  id="edit_profile_form"action="{{route('user.update',Auth::user()->id)}}" method="POST" class="flex flex-col justify-center">
                    @csrf
                    @method('PUT')
            <div x-show="!text_open" class="flex flex-col justify-between text-lg text-blue-600 mx-4">
                <div class="py-4">

                    <x-label for="username" :value="__('Username')" />

                    <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />

                </div>
                <div class="py-4">

                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>
                <div class="py-4">

                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="py-4">

                    <x-label for="password" :value="__('Confirm your password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')" required autofocus />
                </div>
            </div>
                 <x-button
                         @click="text_open = false"
                         x-text="text_open? 'Edit' : 'Save'"
                         class="ml-4"
                         >

                </x-button>
                </form>

        </div>
        <div >


        </div>
</div>
