<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PeopleController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return view('people.index', compact('people'));
    }

    public function create()
    {
        return view('people.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:people',
            'phone' => 'nullable|string|max:20',
        ]);

        Person::create($request->all());

        return redirect()->route('people.index')->with('status', 'Человек успешно добавлен.');
    }

    public function show($id)
    {
        $person = Person::findOrFail($id);
        return view('people.show', compact('person'));
    }

    public function edit($id)
    {
        $person = Person::findOrFail($id);
        return view('people.edit', compact('person'));
    }

    public function update(Request $request, $id)
    {
        $person = Person::findOrFail($id);

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:people,email,' . $person->id,
            'phone' => 'nullable|string|max:20',
        ]);

        $person->update($request->all());

        return redirect()->route('people.index')->with('status', 'Данные обновлены.');
    }

    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();

        return redirect()->route('people.index')->with('status', 'Человек удалён.');
    }
}
