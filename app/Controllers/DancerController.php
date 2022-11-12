<?php

/* 
 * [Arquivo que controla os métodos referentes ao Dançarino.]
 *
 * @category [Classe - Controller]
 * @name     [DancerController.php]
 * @author   [Thalisson Aquino <tlsn.aquino@gmail.com>]
 * @version  [1.0.0] 
*/
 
namespace App\Controllers;
 
use App\Models\DancerModel;
 
class DancerController extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new DancerModel();
    }


    /** 
     * [Função responsável por verificar qual o período do Dançarino.]
     * @return json 
    */
    public function getDancer()
    {
        $period = $this->request->getGet('period');

        $return = $period == 'day' ? $this->dayDancer() : $this->nightDancer(); //Verifica e chama o respectivo método 

        echo json_encode($return);
    }


    /** 
     * [Função responsável por buscar informações do dançarino que está de Dia.]
     * @return array 
    */
    public function dayDancer()
    {   
        $result = $this->model->getDayDancer();
        return ['status' => true, 'data' => $result];
    }

    
    /** 
     * [Função responsável por buscar informações do dançarino que está de Noite.]
     * @return array 
    */
    public function nightDancer()
    {
        $result = $this->model->getNightDancer();
        return ['status' => true, 'data' => $result];
    }
 
    
}