<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">    
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input required type="text" name="first_name" id="first_name" class="block min-w-0 grow py-1.5 px-3 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" value={{old('first_name')}}>
                                </div>
                            </div>
                        <x-form-error name="first_name"/>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="last_name">Last Name</x-form-label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input required type="text" name="last_name" id="last_name" class="block min-w-0 grow py-1.5 px-3 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" value={{old('last_name')}}>
                                </div>
                            </div>
                        <x-form-error name="last_name"/>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input required type="email" name="email" id="email" class="block min-w-0 grow py-1.5 px-3 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" value={{old('email')}}>
                                </div>
                            </div>
                        <x-form-error name="email"/>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input required type="password" name="password" id="password" class="block min-w-0 grow py-1.5 px-3 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" >
                                </div>
                            </div>
                        <x-form-error name="password"/>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input required type="password" name="password_confirmation" id="password_confirmation" class="block min-w-0 grow py-1.5 px-3 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" >
                                </div>
                            </div>
                        <x-form-error name="password_confirmation"/>
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>

    </form>

</x-layout>