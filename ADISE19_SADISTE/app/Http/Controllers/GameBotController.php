<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Game\Game;

class GameBotController extends Controller
{

    private static $game;
    
    public function __construct()
    {
        $this->middleware('auth');
        self::$game = new Game();
    }

    public function index()
    {
        return view('game_bot');
    }

    public static function getOpponentCards()
    {
        $deckSize = self::$game->getOpponentSizeOfDeck();
        $var = "";
        for($count = 0;$count < $deckSize;$count++)
        {
            $var = $var . "<td><img src=\"" . Storage::url('cards/back-back.png') . "\"/></td>\n";
        }
        return $var;
    }

    public static function getStackCard()
    {
        $card = self::$game->getStackCard();
        return "<td><img src=\"" . Storage::url('cards/' . $card->getColor() . "-" . $card->getType() . ".png") . "\"/></td>";
    }

    public static function getUserCards()
    {
        $var = "";
        $cards = self::$game->getUserCards();
        foreach($cards as $card)
        {
            $var = $var . "<td><img src=\"" . Storage::url('cards/' . $card->getColor() . "-" . $card->getType() . ".png") . "\"/></td>\n";
        }
        return $var;
    }
}
