<?php

namespace app\models;
class User extends \dektrium\user\models\User
{

    public function rules()
    {
        $rules = parent::rules();
        // add some rules
        $rules['fieldRequired'] = ['src', 'required'];
        $rules['fieldLength']   = ['src', 'string', 'max' => 10];

        return $rules;
    }
}