@extends('layouts.app')

@section('title', "editar orçamento {$budget->id}")


@section('content')

<h1 class="text-center text-3xl uppercase font-black my-4">Editar Orçamento <strong> {{ $budget->id }} </strong></h1>

@if ($errors->any())
    <ul>
       @foreach ($errors->all() as $error)
           <li> {{$error}} </li>
       @endforeach
    </ul>
@endif
<div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
<form action=" {{ route('budgets.update', $budget->id) }} " method="post">
    @csrf
    @method('put')
    <li> <strong>ID do orçamento: </strong>{{ $budget->id }} </li>
<<<<<<< HEAD
    <input type="string" name="budget_amount" id="budget_amount" placeholder="Valor do orçamento" value="{{ $budget->budget_amount }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
    <input type="string" name="seller_name" id="seller_name" placeholder="Nome Do vendedor..." value="{{ $budget->seller_name }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
    <input type="string" name="client_name" id="client_name" placeholder="Nome Do Cliente..." value="{{ $budget->client_name }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
    <textarea name="description" id="description" cols="30" rows="5" placeholder="Descrição do orçamento" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">{{ $budget->description }}</textarea >
    <button type="submit"  class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">Salvar</button>
=======
    <input type="string" name="budget_amount" id="budget_amount" placeholder="Valor do orçamento" value="{{ $budget->budget_amount }}">
    <input type="string" name="seller_name" id="seller_name" placeholder="Nome Do vendedor..." value="{{ $budget->seller_name }}">
    <input type="string" name="client_name" id="client_name" placeholder="Nome Do Cliente..." value="{{ $budget->client_name }}">
    <textarea name="description" id="description" cols="30" rows="5" placeholder="Descrição do orçamento">{{ $budget->description }}</textarea>
    <button type="submit">Salvar</button>
>>>>>>> 0aa11674f95f52a6fea0adbef6a7c00fc1fd4a37
</form>
</div>

@endsection
