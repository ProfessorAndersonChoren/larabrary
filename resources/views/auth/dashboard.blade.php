@extends('layouts.dashboard')

@section('main-content')
    <table class="w-full ">
        <caption class="text-6xl text-center my-9 text-red-950">Lista de livros cadastrados</caption>
        <thead class="bg-red-500 ">
            <th>ISBN</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Número de paginas</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <tr>
                <td>0-1541-3464-3</td>
                <td>Título livro 1</td>
                <td>Autor livro 1</td>
                <td>Editora livro 1</td>
                <td>200 páginas</td>
                <td class="action-td">
                    <a href="{{ route('edit-book', ['id' => 1]) }}"
                        class="flex items-center gap-2 action-button orange-button">
                        <img src="imgs/edit.svg" alt="Edit icon" width="20">
                        <span class="text-base font-bold">Editar</span>
                    </a>
                    <a href="{{ route('delete-book', ['id' => 1]) }}"
                        class="flex items-center gap-2 action-button red-button">
                        <img src="imgs/delete.svg" alt="Delete icon" width="20">
                        <span class="text-base font-bold">Deletar</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>0-3165-8506-8</td>
                <td>Título livro 2</td>
                <td>Autor livro 2</td>
                <td>Editora livro 2</td>
                <td>200 páginas</td>
                <td class="action-td">
                    <a href="{{ route('edit-book', ['id' => 2]) }}"
                        class="flex items-center gap-2 action-button orange-button">
                        <img src="imgs/edit.svg" alt="Edit icon" width="20">
                        <span class="text-base font-bold">Editar</span>
                    </a>
                    <a href="{{ route('delete-book', ['id' => 2]) }}"
                        class="flex items-center gap-2 action-button red-button">
                        <img src="imgs/delete.svg" alt="Delete icon" width="20">
                        <span class="text-base font-bold">Deletar</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>0-7200-6047-8</td>
                <td>Título livro 3</td>
                <td>Autor livro 3</td>
                <td>Editora livro 3</td>
                <td>200 páginas</td>
                <td class="action-td">
                    <a href="{{ route('edit-book', ['id' => 3]) }}"
                        class="flex items-center gap-2 action-button orange-button">
                        <img src="imgs/edit.svg" alt="Edit icon" width="20">
                        <span class="text-base font-bold">Editar</span>
                    </a>
                    <a href="{{ route('delete-book', ['id' => 3]) }}"
                        class="flex items-center gap-2 action-button red-button">
                        <img src="imgs/delete.svg" alt="Delete icon" width="20">
                        <span class="text-base font-bold">Deletar</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>0-7906-7736-9</td>
                <td>Título livro 4</td>
                <td>Autor livro 4</td>
                <td>Editora livro 4</td>
                <td>200 páginas</td>
                <td class="action-td">
                    <a href="{{ route('edit-book', ['id' => 4]) }}"
                        class="flex items-center gap-2 action-button orange-button">
                        <img src="imgs/edit.svg" alt="Edit icon" width="20">
                        <span class="text-base font-bold">Editar</span>
                    </a>
                    <a href="{{ route('delete-book', ['id' => 4]) }}"
                        class="flex items-center gap-2 action-button red-button">
                        <img src="imgs/delete.svg" alt="Delete icon" width="20">
                        <span class="text-base font-bold">Deletar</span>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
