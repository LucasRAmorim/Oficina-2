<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateBudget;
use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BudgetController extends Controller
{

    /**
     * Função utilizada para retornar a página de index da aplicação.
     * Ordena os orçamentos em ordem descendente pelo ID.
     */

    public function index()
    {

        $budgets = Budget::orderBy('id', 'DESC')->paginate();

        return view('index', compact('budgets'));
    }

   /**
    * Função utilizada para realizar a criação dos orçamentos,
    * retorna a view do formulário com as informações a serem preenchidas para o cadastro.
    */

    public function create()
    {
        return view('create');
    }

    /**
     * Função que requere que os campos da view estejam preenchidos para o orçamento ser salvo com sucesso.
     */

    public function store(StoreUpdateBudget $request)
    {
        $budget = Budget::create($request->all());

        return redirect()->route('budgets.index');
    }

    /**
     * Função utilizada para vizualizar o orçamento clicado na página
     */

    public function show($id)
    {
        // $budget = Budget::where('id', $id)->first();
        $budget = Budget::find($id);

        if (!$budget) {
            return redirect()->route('budgets.index');
        }

        return view('show', compact('budget'));
    }

    /**
     * Função utilizada para deletar um orçamento, pegando o ID como parâmetro.
     */

    public function destroy($id)
    {
        if (!$budget = Budget::find($id))
            return redirect()->route('budgets.index');

            $budget->delete();

            return redirect()
                ->route('budgets.index')
                ->with('message', 'Orçamento deletado com sucesso.');

    }

    /**
     * Função utilizada para editar um orçamento, pegando o ID como parâmetro.
     */

    public function edit($id)
    {

        $budget = Budget::find($id);
        if (!$budget) {
            return redirect()->back();
        }

        return view('edit', compact('budget'));

    }


    /**
     * Função utilizada para salvar um orçamento editado pegando todos os campos como parâmetros obrigatórios para salvar.
     */

    public function update(StoreUpdateBudget $request, $id)
    {
        $budget = Budget::find($id);
        if (!$budget) {
            return redirect()->back();
        }

        $budget->update($request->all());

        return redirect()
            ->route('budgets.index')
            ->with('message', 'Orçamento editado com sucesso.');
    }

    /**
     * Função utilizada para procurar um orçamento já criado pelo nome do vendedor, nome do cliente ou por um intervalo entre datas.
     */

    public function search(Request $request)
    {
        $filters = $request->except('_token');

        $budgets = Budget::where('client_name', 'LIKE', "%{$request->search}%")
                            ->orWhere('seller_name', 'LIKE', "%{$request->search}%")
                            ->paginate();

        return view('index', compact('budgets', 'filters'));
    }
}
