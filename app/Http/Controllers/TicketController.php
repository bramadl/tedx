<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function payment(Request $request)
    {
        if (!Auth::check()) {
            redirect('/');
        }
        
        $ticketType = $request->query('type');
        $user = Auth::user();
        $ticket = Ticket::where('type', $ticketType)->first();

        if (!$user->street_address) {
            return redirect()->route('profile')->with('warning', 'Mohon isi alamat terlebih dahulu.');
        }

        return view('ticket.payment', [
            'user' => $user,
            'ticket' => $ticket
        ]);
    }

    public function storePayment(Request $request)
    {
        return $request->only(['payment_method', 'payment_proof']);
    }
}
