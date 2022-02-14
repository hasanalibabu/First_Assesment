<?php


namespace App\classes;


class Register
{


    public function getAllUser(){

        return [
            0 => [
                'id' => 1,
                'name' => 'ali',
                'email' => 'ali@gmail.com',
                'password' => '12345',
                'image' => '1.jpg'
            ],
            1 => [
                'id' => 2,
                'name' => 'hasan',
                'email' => 'hasan@gmail.com',
                'password' => '123456',
                'image' => '2.jpg'
            ],
        ];
    }


}