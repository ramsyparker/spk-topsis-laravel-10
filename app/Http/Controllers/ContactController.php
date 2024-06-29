<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Logika pengiriman email
        Mail::send([], [], function ($message) use ($request) {
            $message->to('ramad7287@gmail.com')
                ->subject($request->subject)
                ->html('Nama: ' . $request->name . '<br>Email: ' . $request->email . '<br>Pesan: ' . $request->message);
        });

        return redirect()->route('landing')->with('success', 'Pesan berhasil dikirim!');
    }
}