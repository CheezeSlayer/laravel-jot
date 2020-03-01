@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300">
    <div class="w-96 bg-blue-900 rounded-lg shadow-xl p-6">

        <svg width="108" height="83" xmlns="http://www.w3.org/2000/svg">
            <text stroke="#f9ffe7" transform="matrix(4.033860206604004,0,0,3.1111111640930176,-341.30927324295044,-277.51215974241495) " xml:space="preserve" text-anchor="start" font-family="Helvetica, Arial, sans-serif" font-size="20" id="svg_1" y="105.858813" x="86.00431" stroke-width="0" fill="#f9ffe7">jot</text>
            <line stroke-width="4" x1="22.5" stroke-linecap="null" stroke-linejoin="null" id="svg_2" y2="62.953125" x2="92.5" y1="62.953125" fill-opacity="null" stroke-opacity="null" stroke="#f9ffe7" fill="none"/>
        </svg>

        <h1 class="text-white text-3xl pt-8">Welcome Back</h2>
        <h2 class="text-blue-300 ">Enter your credentials below</h2>

        <form method="POST" action="{{ route('login') }}" class="pt-8">
            @csrf

            <div class="relative">
                <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">E-mail</label>

                <div>
                    <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" autocomplete="email" autofocus placeholder="your@email.com">

                    @error('email')
                        <span class="text-red-600 font-sm pt-1" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="relative pt-3">
                <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Password</label>

                <div class="">
                    <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="password" autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="text-red-600 font-sm pt-1" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="pt-2">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="text-white" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="">
                <div class="pt-8">
                    <button type="submit" class="w-full bg-gray-400 py-2 px-3 text-left uppercase rounded text-blue-800 font-bold">
                        Login
                    </button>
                </div>
            </div>

            <div class="flex justify-between pt-8 text-white text-sm font-bold">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot your Password?
                </a>
                <a class="btn btn-link" href="{{ route('register') }}">
                    Register
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
