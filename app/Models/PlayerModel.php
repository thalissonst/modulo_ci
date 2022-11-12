<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class PlayerModel extends Model
{

    /** 
     * [Função responsável por buscar informações do jogador que está de Dia]
    */
    public function getDayPlayer()
    {
        return 'Sou um jogador de LOL. Não programo, pois meu é papel é jogar joguinho! É dia: Infelizmente tenho que trabalhar agora!';
    }


    /** 
     * [Função responsável por buscar informações do desenvolvedor que está de Noite]
    */
    public function getNightPlayer()
    {
        return 'Sou um jogador de LOL. Não programo, pois meu é papel é jogar joguinho! É noite: Estou jogando agora!';
    }

}