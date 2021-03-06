<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$config = array(
    'user/changepassword' => array(
        array(
            'field' => 'firstname',
            'label' => 'firstname',
            'rules' => 'trim|required|alpha',
            'errors' => array(
                'required' => 'firstname is required field.',
                'alpha' => 'firstname is alphabet only.'
            )
        ),
        array(
            'field' => 'lastname',
            'label' => 'lastname',
            'rules' => 'trim|required|alpha',
            'errors' => array(
                'required' => 'lastname is required field.',
                'alpha' => 'lastname is alphabet only.'
            )
        ),
        array(
            'field' => 'business_email',
            'label' => 'business email',
            'rules' => 'trim|valid_email',
            'errors' => array(
                'valid_email' => '%s must be valid. For example, johndoe@example.com'
            )
        )
    ),
    'admin/login' => array(
        array(
            'field' => 'username',
            'label' => 'User Name',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'User Name is required field.'
            )
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'Dispatcher password is required field.',
            )
        )
    )
   
   
     
    
     
);
?>