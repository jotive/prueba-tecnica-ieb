<?php namespace App\Controllers\Api;

use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class Usuarios extends BaseController
{
    use ResponseTrait;

    private $m_user;

    public function __construct(){
        $this->m_user = new UserModel($db);
    }


    public function list($id=null){
        if(is_null($id)){
            $data  = $this->m_user->findAll();
        }else{
            $data = $this->m_user->find($id);
        }

        return $this->setResponseFormat('json')->respond($data, 200);
    }

    public function verificaUsuario(){
        // Capturo la informacion
        $user = $this->request->getVar('user');
        $pass = $this->request->getVar('pass');
        
        // Verifico que el usuario exista
        $data = $this->m_user->where('usuarioid', $user)->find();


        // Verifico si me trajo algo
        if( sizeof($data) == 0 ){
            return $this->setResponseFormat('json')->respond(['error' => true]);
        }else{
            return $this->setResponseFormat('json')->respond($data, 200);
        }
    }
}