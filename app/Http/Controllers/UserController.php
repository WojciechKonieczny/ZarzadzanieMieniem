<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Users\UserRequest;

class UserController extends Controller
{
    
    public function index() {
        return view(
            'users.index',
            [
                'users' => User::with('roles')->withCount('items')->get()
            ],
        );
    }

     // metoda generujaca widok
     public function create() {
        return view(
            'users.create', [
                'roles' => Role::orderBy('name', 'DESC')->get()
            ]
        );
    }

    // metoda do dodawania rekordow do bazy
    public function store(UserRequest $request) {
        // jesli w modelu w $fillable nazwy zgadzaja sie z nazwami pol formularza, to moge uzyc $request->all()

        $newUser = DB::transaction(function () use ($request) {

            $user = User::create(
                $request->merge([
                    'password' => Hash::make( $request->password ),
                    'created_by' => Auth::id()
                ])->all()
            );
    
            $user->assignRole( $request->role_id );

            return $user;
        });
        

        return redirect()->route('users.index')->with( 'success', __('translations.users.toasts.success.stored', [
            'email' => $newUser->email,
            'role' => $newUser->getRoleNames()->first()
         ]));
    }

    // wyswietlajaca formularz
    public function edit(Request $request, User $user) {
        $isEdit = true;
        $roles = Role::orderBy('name', 'DESC')->get();

        return view(
            'users.create',
            compact( 'user', 'isEdit', 'roles' )
        );
    }

    // wysylajace dane do bazy
    public function update(UserRequest $request, User $user) {

        $user->fill(
            $request->merge([
                'password' => Hash::make( $request->password ),
                'created_by' => Auth::id()
            ])->all()
        )->save();

        $user->roles()->sync([$request->role_id]);

        return redirect()->route('users.index')->with(
            'success', 
            // sprawdzamy, czy zostaly zmienione jakies dane, by wysswietlic prawdilowy komunikat
            __( $user->wasChanged()? 'translations.users.toasts.success.updated' : 'translations.users.toasts.success.nothing-changed', [ 
                'email' => $user->email,
                'role' => $user->getRoleNames()->first()
            ])
        );
    }

}
