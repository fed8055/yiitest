<?php
    namespace  app\models;

    use yii\base\model;

    class EntryForm extends  model{
        public $name;
        public $email;

        function rules(){
            return [
                [['name', 'email'], 'required'],
                ['email', 'email'],
            ];
        }
    }