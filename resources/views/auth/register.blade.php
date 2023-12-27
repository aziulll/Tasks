@extends('layouts.auth')

@section('title', 'Registrar')


<div class="relative bg-[#B47DE3] h-screen flex items-center justify-center text-white font-poppins">
    <div class="bg-white rounded-xl shadow-md p-8 mb-8">

        <div class="flex flex-col sm:flex-row">

            <div class="w-full sm:w-1/2">
                <h2 class="text-3xl font-bold mb-8 text-black text-center">Criar conta!</h2>

                <form action="{{ route('users.createUser') }}" method="POST" class="text-black">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium mb-1">Nome</label>
                        <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="name" name="name" value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium  mb-1">Email</label>
                        <input class="w-full p-2 border border-gray-300 rounded-md" type="email" id="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium  mb-1">Senha</label>
                        <input class="w-full p-2 border border-gray-300 rounded-md" type="password" id="password" name="password" required>
                    </div>

                    <div class="flex space-x-2 mt-4">
                        <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2">Criar Usuário</button>

                        <a href="{{ route('auth.login') }}" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 ">Voltar ao Login</a>
                    </div>
                </form>
            </div>

            <div class="w-full ml-8 sm:w-1/2 mt-6 sm:mt-0">
                <img src="{{asset('img/image2.png')}}" alt="" class=" mt-16 w-[300px]">
            </div>

        </div>
    </div>
</div>