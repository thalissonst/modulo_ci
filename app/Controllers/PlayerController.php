<?php

/* 
 * [Arquivo que controla os métodos referentes ao Jogador.]
 *
 * @category [Classe - Controller]
 * @name     [PlayerController.php]
 * @author   [Thalisson Aquino <tlsn.aquino@gmail.com>]
 * @version  [1.0.0] 
*/
 
namespace App\Controllers;
 
use App\Models\PlayerModel;
 
class PlayerController extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new PlayerModel();
    }


    /** 
     * [Função responsável por verificar qual o período do Jogador.]
     * @return json 
    */
    public function getPlayer()
    {
        $period = $this->request->getGet('period');

        $return = $period == 'day' ? $this->dayPlayer() : $this->nightPlayer(); //Verifica e chama o respectivo método 

        echo json_encode($return);
    }


    /** 
     * [Função responsável por buscar informações do jogador que está de Dia.]
     * @return array 
    */
    public function dayPlayer()
    {   
        $result = $this->model->getDayPlayer();
        return ['status' => true, 'data' => $result];
    }

    
    /** 
     * [Função responsável por buscar informações do jogador que está de Noite.]
     * @return array 
    */
    public function nightPlayer()
    {
        $result = $this->model->getNightPlayer();
        return ['status' => true, 'data' => $result];
    }
 
    
}