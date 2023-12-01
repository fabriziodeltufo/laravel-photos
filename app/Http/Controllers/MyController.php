<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller {
    // MyController

    public function index( $param1, $param2 ) {

        $model = [
            'p1' => $param1,
            'p2' => $param2
        ];

        // caso 1 -- ritorno valore usando una serie di stringhe concatenate
        // return ' Parameter - My Controller --- '  . 'p1: ' . $model[ 'p1' ] . ' p2: ' . $model[ 'p2' ] ;

        // caso 2 - ritorno i valori ad una view che contiene le variabili settate nell array $model
        return view( 'pview', $model );
    }




    // caso 3 - ritorno alla view di valori inseriti nella url con ?
    public function queryString( Request $request ) {

        $allParam = $request->all(); // estrae da tutta la $request tutti i valori che hanno parametri come p1 e p2

        // oppure singolarmente 

        // $p1 = $request->input('p1');
        // $p2 = $request->input('p2');

        // var_dump($p1);
        // var_dump($p2);


        var_dump( $allParam ); // visualizza array con p1 e p1 solo.

        return view('pview', $allParam); // passa le keys p1 e p2 dell array  alla view pview

    }

}