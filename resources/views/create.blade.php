<h1>Novo Orçamento</h1>

@if ($errors->any())
    <ul>
       @foreach ($errors->all() as $error)
           <li> {{$error}} </li>
       @endforeach
    </ul>
@endif
<form action="{{ route('budgets.store') }}" method="post">
    @csrf
    <input type="string" name="budget_amount" id="budget_amount" placeholder="Valor do orçamento" value="{{old('budget_amount')}}">
    <input type="string" name="seller_name" id="seller_name" placeholder="Nome Do vendedor..." value="{{old('seller_name')}}">
    <input type="string" name="client_name" id="client_name" placeholder="Nome Do Cliente..." value="{{old('client_name')}}">
    <textarea name="description" id="description" cols="30" rows="5" placeholder="Descrição do orçamento">{{old('description')}}</textarea>
    <button type="submit">Salvar</button>
</form>
