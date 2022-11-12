<?php

/* 
 * [Arquivo que controla os métodos referentes ao módulo.]
 *
 * @category [Classe - Controller]
 * @name     [Home.php]
 * @author   [Thalisson Aquino <tlsn.aquino@gmail.com>]
 * @version  [1.0.0] 
*/

namespace App\Controllers;

class Home extends BaseController
{

    /** 
     * [Função responsável por retornar view inicial.]
     * @return json 
    */
    public function index()
    {
        return view('home');
    }


}
