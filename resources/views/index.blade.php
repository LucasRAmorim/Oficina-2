<a href="{{ route('budget.create') }}">Criar novo Orçamento</a>
<hr>

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif


<form action="{{ route('budgets.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar">
    <button type="submit">Pesquisar pelo nome do vendedor, nome do cliente ou intervalo de datas</button>

</form>

<h1>Orçamentos</h1>


@foreach ($budgets as $budget)
    <p>
        {{ $budget->id }}
        {{ $budget->id }}
        [
        <a href="{{ route('budgets.show', $budget->id) }} ">Ver Orçamento</a> |
        <a href="{{ route('budgets.edit', $budget->id) }} ">Editar Orçamento</a>
        ]

    </p>
@endforeach


<hr>
@if (isset($filters))
    {{ $budgets->appends($filters)->links() }}
@else
    {{ $budgets->links() }}
@endif
