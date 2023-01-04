@extends('layouts.app')

@section('title', 'Detalhes do orçamento')


@section('content')

    <h1 class="text-center text-3xl uppercase font-black my-4">Detalhes do orçamento {{ $budget->id }} </h1>


    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
        <ul>
            <li> <strong>ID do orçamento: </strong>{{ $budget->id }} </li>
            <li> <strong>Nome do cliente: </strong>{{ $budget->client_name }} </li>
            <li> <strong>Nome do vendedor: </strong>{{ $budget->seller_name }} </li>
            <li> <strong>Descrição do orçamento: </strong>{{ $budget->description }} </li>
            <li> <strong>Valor do orçamento: </strong>{{ $budget->budget_amount }} </li>
            <li> <strong>Data e hora do orçamento </strong>{{ $budget->created_at }} </li>
            <li> <strong>Data e hora da ultima edição do orçamento </strong>{{ $budget->updated_at }} </li>
        </ul>


        <form action=" {{ route('budgets.destroy', $budget->id) }} " method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-red-500 shadow-lg focus:outline-none hover:bg-red-900 hover:shadow-none">Deletar Orçamento {{ $budget->id }} </button>
        </form>
    </div>
    @endsection
