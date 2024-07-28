<?php

namespace App\Http\Controllers;

use App\Models\Passkey;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class PasskeyController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Passkey::class);

        return Passkey::all();
    }

    public function store(Request $request)
    {
        $this->authorize('create', Passkey::class);

        $data = $request->validate([

        ]);

        return Passkey::create($data);
    }

    public function show(Passkey $passkey)
    {
        $this->authorize('view', $passkey);

        return $passkey;
    }

    public function update(Request $request, Passkey $passkey)
    {
        $this->authorize('update', $passkey);

        $data = $request->validate([

        ]);

        $passkey->update($data);

        return $passkey;
    }

    public function destroy(Passkey $passkey)
    {
        $this->authorize('delete', $passkey);

        $passkey->delete();

        return back();
    }
}
