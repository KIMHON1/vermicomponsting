@extends('Normal.layout')
@section('content')

            <a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
        
            <div class="mx-4">
                <div
                    class="bg-laravel border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text-center text-white">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Log In
                        </h2>
                        <p class="mb-4">Log To Your DashBoard</p>
                    </header>

                    <form  method="POST" action="{{url('/log')}}">
                        @csrf
                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2 text-white"
                                >Email</label
                            >
                            <input
                                type="email"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email"
                            />
                        </div>

                        <div class="mb-6">
                            <label
                                for="password"
                                class="inline-block text-lg mb-2 text-white"
                            >
                                Password
                            </label>
                            <input
                                type="password"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="password"
                            />
                        </div>

                        <div class="mb-6">
                            <button
                                type="submit"
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Sign In
                            </button>
                        </div>

                        <div class="mt-8">
                            <p>
                                Don't have an account?
                                <a href="/register" class="text-white"
                                    >Register</a
                                    class="text-white"
                                >
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        



@endsection