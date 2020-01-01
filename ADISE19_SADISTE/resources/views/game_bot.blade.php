@extends('layouts.app')

@section('title', 'Home')

@section('content')
<script>

</script>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header"><h4>UNO Game</h4></div>

                <div class="card-body" id="test">
                    <center>
                        <table>
                            <tr id="opponent-cards">
                                {!! \App\Http\Controllers\GameBotController::getOpponentCards() !!}
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr id="deck-card">
                                {!! \App\Http\Controllers\GameBotController::getStackCard() !!}
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr id="user-cards">
                                {!! \App\Http\Controllers\GameBotController::getUserCards() !!}
                            </tr>
                        </table>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    
</script>
@endsection