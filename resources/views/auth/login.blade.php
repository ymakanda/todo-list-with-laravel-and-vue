@extends('layouts.app')

@section('content')
<div class="font-sans">
    <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
        <div class="relative sm:max-w-sm w-full">
            <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                <label for="" class="block mt-3 text-lm text-gray-700 text-center font-semibold">
                    Login 
                </label>
                <form method="POST" action="{{ route('login') }}" class="mt-10">
                    @csrf           
                    <div>
                        <input id="email" type="email" placeholder="your@mail.com" name="email" value="{{ old('email') }}" autocomplete="email" autofocus class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        @error('email')
                        <span class="text-red-600 text-sm pt-1" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="mt-7">                         
                        <input id="password" type="password" name="password" autocomplete="current-password"placeholder="password" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">

                        @error('password')
                            <span class="text-red-600 text-sm pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mt-7">
                        <button class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            Login
                        </button>
                    </div>
                    <div class="flex justify-between pt-8 text-blue-300 text-sm font-bold">
                        <a class="btn btn-link" href="#">
                            Forgot Your Password
                        </a>
                        <a class="btn btn-link" href="{{ route('register') }}">
                            Register
                        </a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
