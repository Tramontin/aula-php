<?php


class User extends Model{
    //aqui é associado com o banco
    protected static $tableName = 'users';
    protected static $columns = [
        'id',
        'name',
        'password',
        'email'
    ];
}