<?php

namespace App\Http\Controllers;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $paymentMethods = PaymentMethod::all();
        return view('payment_methods.index', compact('paymentMethods'));
    }

    // Menampilkan form untuk membuat data baru
    public function create()
    {
        return view('payment_methods.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        // Validasi data
    $request->validate([
        'name' => 'required|string|max:255',
        'type' => 'required|string'
    ]);

    // Simpan data ke database
    PaymentMethod::create([
        'name' => $request->name,
        'type' => $request->type,
    ]);

        return redirect()->route('payment_methods.index');
    }

    // Menampilkan form untuk mengedit data
    public function edit(PaymentMethod $paymentMethod)
    {
        return view('payment_methods.edit', compact('paymentMethod'));
    }

    // Memperbarui data
    public function update(Request $request, PaymentMethod $paymentMethod)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
        ]);

        $paymentMethod->update($request->all());
        return redirect()->route('payment_methods.index');
    }

    // Menghapus data
    public function destroy(PaymentMethod $paymentMethod)
    {
        $paymentMethod->delete();
        return redirect()->route('payment_methods.index');
    }
}

