<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at', 'DESC')->get();
  
        return view('users.index', compact('user'));
    }
    public function create()
    { 
        return view('users.create');
    }
    public function store(Request $request)
{
    $user = User::create([
        'NomEmp' => $request->NomEmp,
        'PrenomEmp'=>$request->NomEmp,
        'poste'=>$request->poste,
        'email' => $request->email,
        'telephone'=>$request->telephone,
        'adresse'=>$request->adresse,
        'password' => Hash::make($request->NomEmp . '_2021'),
    ]);

    Auth::login($user);

    return redirect()->route('users.index')->with('success', 'Employee added successfully');
}

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
  
        return view('users.edit', compact('user'));
    }
    public function edit2()
    {
        $user = Auth::user();
        return view('users.edit2', compact('user'));
    }
    
    public function update2(Request $request, string $id)
    {
        $user = User::findOrFail($id);
    
        $user->update($request->all());
    
        return redirect()->route('users.profile')->with('success', 'Profile updated successfully');
    }
    
    

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
  
        $user->update($request->all());
  
        return redirect()->route('users.index')->with('success', 'Employe updated successfully');
    }
    public function destroy(string  $id)
    {
        $user = User::findOrFail($id);
  
        $user->delete();
  
        return redirect()->route('users.index')->with('success', 'Employe deleted successfully');
    }
    public function show(string $id)
    {
        $user = User::find($id);
    
        if (!$user) {
            abort(404); // Renvoie une réponse 404 si l'utilisateur n'est pas trouvé
        }
    
        return view('users.show', compact('user'));
    }
    
    
}