<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller {
    public function debug(Request $request) {
        info('WooCommerce Webhook Received:', $request->all());
        return response()->json(['message' => 'Webhook processed successfully'], 200);
    }
}
