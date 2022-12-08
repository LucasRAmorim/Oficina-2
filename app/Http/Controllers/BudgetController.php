<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateBudget;
use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BudgetController extends Controller
{
    public function index()
    {

        $budgets = Budget::orderBy('id', 'DESC')->paginate();

        return view('index', compact('budgets'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreUpdateBudget $request)
    {
        $budget = Budget::create($request->all());

        return redirect()->route('budgets.index');
    }

    public function show($id)
    {
        // $budget = Budget::where('id', $id)->first();
        $budget = Budget::find($id);
        
        if (!$budget) {
            return redirect()->rout('budgets.index');
        }

        return view('show', compact('budget'));
    }

    public function destroy($id)
    {
        if (!$budget = Budget::find($id)) 
            return redirect()->route('budgets.index');

            $budget->delete();

            return redirect()
                ->route('budgets.index')
                ->with('message', 'Orçamento deletado com sucesso.');
        
    }

    public function edit($id)
    {
        
        if (!$budget = Budget::find($id)) {
            return redirect()->back();
        }

        return view('edit', compact('budget'));
        
    }

    public function update(StoreUpdateBudget $request, $id)
    {
        if (!$budget = Budget::find($id)) {
            return redirect()->back();
        }

        $budget->update($request->all());

        return redirect()
            ->route('budgets.index')
            ->with('message', 'Orçamento editado com sucesso.');
    }

    public function search(Request $request) 
    {
        $filters = $request->except('_token');
        
        $budgets = Budget::where('client_name', 'LIKE', "%{$request->search}%")
                            ->orWhere('seller_name', 'LIKE', "%{$request->search}%")
                            ->paginate();

        return view('index', compact('budgets', 'filters'));
    }
}
