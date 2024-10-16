@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Adicionar Novo Livro</h1>

                    <form action="{{ route('livros.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="titulo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título:</label>
                            <input type="text" name="titulo" id="titulo" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div class="mb-4">
                            <label for="autor" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Autor:</label>
                            <input type="text" name="autor" id="autor" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div class="mb-4">
                            <label for="isbn" class="block text-sm font-medium text-gray-700 dark:text-gray-300">ISBN:</label>
                            <input type="text" name="isbn" id="isbn" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div class="mb-4">
                            <label for="editora" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Editora:</label>
                            <input type="text" name="editora" id="editora" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div class="mb-4">
                            <label for="ano_publicacao" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Ano de Publicação:</label>
                            <input type="number" name="ano_publicacao" id="ano_publicacao" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Adicionar Livro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
