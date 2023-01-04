@extends('layouts.app')

@section('title', 'Criar Um Novo Orçamento')

@section('content')
<h1 class="text-center text-3x1 uppercase font-black my-4">Novo Orçamento</h1>

@if ($errors->any())
    <ul>
       @foreach ($errors->all() as $error)
       <li class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-yellow-700 bg-yellow-100 border border-yellow-300">{{ $error }}</li>
       @endforeach
    </ul>
@endif

<div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
<form action="{{ route('budgets.store') }}" method="post">
    @csrf
    <input type="string" name="budget_amount" id="budget_amount" placeholder="Valor do orçamento" value="{{old('budget_amount')}}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
    <input type="string" name="seller_name" id="seller_name" placeholder="Nome Do vendedor..." value="{{old('seller_name')}}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
    <input type="string" name="client_name" id="client_name" placeholder="Nome Do Cliente..." value="{{old('client_name')}}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
    <textarea name="description" id="description" cols="30" rows="5" placeholder="Descrição do orçamento" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">{{old('description')}}</textarea>
    <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">Salvar</button>
</form>
</div>
@endsection
