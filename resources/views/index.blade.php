@extends('layouts.app')

@section('title', 'Listagem dos orçamentos')


@section('content')

    <h1 class="text-center text-3xl uppercase font-black my-4">Listagem dos Orçamentos</h1>

    <div class="grid">
        <a href="{{ route('budget.create') }}"
            class="my-4 uppercase px-8 py-2 rounded bg-green-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Criar Novo
            Orçamento</a>
    </div>
    @if (session('message'))
        <div
            class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
            {{ session('message') }}
        </div>
    @endif


    <form action="{{ route('budgets.search') }}" method="budget">
        @csrf
        <div class="max-w-sm my-4 p-1 pr-0 flex items-center">
            <input type="text" name="search" placeholder="Filtrar:"
                class="flex-1 appearance-none rounded shadow p-3 text-grey-dark mr-2 focus:outline-none">
            <button type="submit"
                class="uppercase p-3 rounded bg-blue-500 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Filtrar</button>
        </div>
    </form>

    <h1>Orçamentos</h1>


    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">ID do
                    orçamento</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                    Nome do cliente</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                    Nome do vendedor</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                    Data de criação/edição do orçamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($budgets as $budget)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                        #{{ $budget->id }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                        {{ $budget->client_name }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                        {{ $budget->seller_name }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                        {{ $budget->created_at }}</td>
                    <td
                        class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5 text-right">
                        <a href="{{ route('budgets.show', $budget->id) }}"
                            class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Ver
                            orçamento</a>
                        <a href="{{ route('budgets.edit', $budget->id) }}"
                            class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-700 hover:text-white focus:outline-none">Editar
                            Orçamento</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <hr>
    @if (isset($filters))
        {{ $budgets->appends($filters)->links() }}
    @else
        {{ $budgets->links() }}
    @endif


@endsection
