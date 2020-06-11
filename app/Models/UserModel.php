<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
        protected $table      = 'users';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['name', 'email'];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        /**Para las Validaciones */
        protected $validationRules    = [
                'name'=>'required|alpha_numeric_space|min_length[3]',
                'email'=>'required|valid_email|is_unique[users.email]'
        ];
        /**Para Mostrar los Mensajes de Errores */
        protected $validationMessages = [
                'email'=>[
                        'is_unique'=>'El Email Ingresado ya Existe'
                ]
        ];
        protected $skipValidation     = false;
} 