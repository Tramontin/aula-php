<?php

loadModel('User');

class Login extends Model{
    //aqui checa os valores da tela de login - email e senha
    public function checkLogin(){
        $user = User::getOne(['email' => $this->email]);
        if($user){
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }
        throw new appException('Usuário e/ou senha inválidos.');
    }
    
}