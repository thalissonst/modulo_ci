<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class DeveloperModel extends Model
{

    /** 
     * [Função responsável por buscar informações do desenvolvedor que está de Dia]
    */
    public function getDayDev()
    {
        return 'Sou um candango que programa e não tenho vida... É dia: Estou programando agora!';
    }


    /** 
     * [Função responsável por buscar informações do desenvolvedor que está de Noite]
    */
    public function getNightDev()
    {
        return 'Sou um candango que programa e não tenho vida... É noite: Eu nunca paro de programar!';
    }

}