@extends('layouts.app')
@section('content')
<div class="bg-white rounded-xl shadow-md p-8 w-[500px] mx-auto mt-16 ">
    <div class="container">
        <h1 class="text-4xl font-bold mb-8 text-center">Novas Task</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-600">Nome da task:</label>
                <input type="text" class="w-full p-3 border border-gray-300 rounded-md" id="title" name="title" required>
            </div>
            <div class="mb-6">
                <label for="content" class="block text-sm font-medium text-gray-600">Detalhes:</label>
                <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Detalhe a task..." required></textarea>
            </div>

            <div class="mb-6">
                <label for="category" class="block text-sm font-medium text-gray-600">Categoria:</label>
                <select id="category" name="category" class="appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option class="py-2">Estudos</option>
                    <option class="py-2">Trabalho</option>
                    <option class="py-2">Outros</option>
                </select>
            </div>
            <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2">Criar</button>
        </form>

        <a href="{{ route('tasks.index') }}" class="block mt-4 text-sm text-gray-600 hover:underline text-center">Voltar para lista de tasks</a>
    </div>
</div>
