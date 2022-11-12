<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class DancerModel extends Model
{

    /** 
     * [Função responsável por buscar informações do dançarino que está de Dia]
    */
    public function getDayDancer()
    {
        return 'Sou um dançarino e gostaria de programar, mas tenho coisas mais importantes para fazer! É dia: Estou dançando!';
    }


    /** 
     * [Função responsável por buscar informações do dançarino que está de Noite]
    */
    public function getNightDancer()
    {
        return 'Sou um dançarino e gostaria de programar, mas tenho coisas mais importantes para fazer! É noite: Não me amole... estou dormindo!';
    }

}