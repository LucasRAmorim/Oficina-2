<h1>Detalhes do orçamento {{ $budget->id }} </h1>


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
    <button type="submit">Deletar Orçamento {{$budget->id}} </button>
</form>
