<h1>Editar Orçamento <strong> {{ $budget->id }} </strong></h1>

@if ($errors->any())
    <ul>
       @foreach ($errors->all() as $error)
           <li> {{$error}} </li>
       @endforeach
    </ul>
@endif
<form action=" {{ route('budgets.update', $budget->id) }} " method="post">
    @csrf
    @method('put')
    <li> <strong>ID do orçamento: </strong>{{ $budget->id }} </li>
    <input type="string" name="budget_amount" id="budget_amount" placeholder="Valor do orçamento" value="{{ $budget->budget_amount }}">
    <input type="string" name="seller_name" id="seller_name" placeholder="Nome Do vendedor..." value="{{ $budget->seller_name }}">
    <input type="string" name="client_name" id="client_name" placeholder="Nome Do Cliente..." value="{{ $budget->client_name }}">
    <textarea name="description" id="description" cols="30" rows="5" placeholder="Descrição do orçamento">{{ $budget->description }}</textarea>
    <button type="submit">Salvar</button>
</form>
