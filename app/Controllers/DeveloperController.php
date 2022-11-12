<?php
 
/* 
 * [Arquivo que controla os métodos referentes ao Desenvolvedor.]
 *
 * @category [Classe - Controller]
 * @name     [DeveloperController.php]
 * @author   [Thalisson Aquino <tlsn.aquino@gmail.com>]
 * @version  [1.0.0] 
*/

namespace App\Controllers;
 
use App\Models\DeveloperModel;
 
class DeveloperController extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new DeveloperModel();
    }


    /** 
     * [Função responsável por verificar qual o período do Jogador.]
     * @return json 
    */
    public function getDev()
    {
        $period = $this->request->getGet('period');

        $return = $period == 'day' ? $this->dayDev() : $this->nightDev(); //Verifica e chama o respectivo método 

        echo json_encode($return);
    }


    /** 
     * [Função responsável por buscar informações do jogador que está de Dia.]
     * @return array 
    */
    public function dayDev()
    {   
        $result = $this->model->getDayDev();
        return ['status' => true, 'data' => $result];
    }

    
    /** 
     * [Função responsável por buscar informações do jogador que está de Noite.]
     * @return array 
    */
    public function nightDev()
    {
        $result = $this->model->getNightDev();
        return ['status' => true, 'data' => $result];
    }
 
    
}