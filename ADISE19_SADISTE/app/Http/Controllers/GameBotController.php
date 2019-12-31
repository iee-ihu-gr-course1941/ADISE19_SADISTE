<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game\Game;

class GameBotController extends Controller
{

    private $game;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->game = new Game();
    }

    public function index()
    {
        return view('game_bot');
    }
}
