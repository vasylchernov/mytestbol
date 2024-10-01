<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Picqer\Financials\Exact\Connection;
use Picqer\Financials\Exact\Division;

class ExactOnlineController extends Controller
{
    public function connect()
    {
        $connection = new Connection();
        $connection->setExactClientId(config('laravel-exact-online.exact_client_id'));
        $connection->setExactClientSecret(config('laravel-exact-online.exact_client_secret'));
        $connection->setRedirectUrl(route('exact.callback'));

        // Generate the authorization URL
//        return redirect()->route('exact.callback');
        return redirect($connection->getAuthUrl());
    }

    public function callback(Request $request)
    {
        $connection = new Connection();
        $connection->setExactClientId(config('laravel-exact-online.exact_client_id'));
        $connection->setExactClientSecret(config('laravel-exact-online.exact_client_secret'));
        $connection->setRedirectUrl(route('exact.return'));

        // Save the tokens for future use
        session([
            'exact_access_token' => $connection->getAccessToken(),
            'exact_refresh_token' => $connection->getRefreshToken(),
            'exact_token_expires' => $connection->getTokenExpires(),
        ]);

        return redirect()->route('exact.return'); // Redirect to another route
    }

    public function getDivisions()
    {
        $connection = new Connection();
//        $connection->setExactClientId(config('laravel-exact-online.exact_client_id'));
//        $connection->setExactClientSecret(config('laravel-exact-online.exact_client_secret'));
//        $connection->setRedirectUrl(route('exact.return'));
        $connection->setAccessToken(session('exact_access_token'));
        $connection->setRefreshToken(session('exact_refresh_token'));
        $connection->setTokenExpires(session('exact_token_expires'));

        // Fetch data from Exact Online
        $division = new Division($connection);
        $divisions = $division->get();

        return response()->json($divisions);  // Return the fetched data
    }
}
