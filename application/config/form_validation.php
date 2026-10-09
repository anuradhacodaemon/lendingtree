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
    ),
   
   'domain/insert' => array(
        array(
            'field' => 'domain',
            'label' => 'Domain Name',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'Domain Name is required field.'
            )
        )
     
    ),
    'template/insert' => array(
        array(
            'field' => 'message',
            'label' => 'Content',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'Content is required field.'
            )
        )
     
    ),
     'emails/insert' => array(
        array(
            'field' => 'domain',
            'label' => 'Domain Name',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'Domain Name is required field.'
            )
        )
     
    ),
     'emails/insert' => array(
        array(
            'field' => 'emails',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email',
            'errors' => array(
                'required' => 'Email is required field.',
                'valid_email' => '%s must be valid. For example, johndoe@example.com'
            )
        )
     
    ),
    'settings/insert' => array(
        array(
            'field' => 'phone',
            'label' => 'phone',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'Email is required field.'
            )
        )
     
    ),
    'admin/state/store' => array(
        array(
            'field' => 'country_id',
            'label' => 'Country',
            'rules' => 'trim|required|integer|callback_validate_country',
            'errors' => array(
                'required' => 'Country is required field.',
                'integer' => 'Please select a valid Country.'
            )
        ),
        array(
            'field' => 'name',
            'label' => 'State Name',
            'rules' => 'trim|required|max_length[30]|callback_validate_state_unique',
            'errors' => array(
                'required' => 'State Name is required field.',
                'max_length' => 'State Name cannot exceed 30 characters.'
            )
        )
    ),
    'admin/state/update' => array(
        array(
            'field' => 'country_id',
            'label' => 'Country',
            'rules' => 'trim|required|integer|callback_validate_country',
            'errors' => array(
                'required' => 'Country is required field.',
                'integer' => 'Please select a valid Country.'
            )
        ),
        array(
            'field' => 'name',
            'label' => 'State Name',
            'rules' => 'trim|required|max_length[30]|callback_validate_state_unique',
            'errors' => array(
                'required' => 'State Name is required field.',
                'max_length' => 'State Name cannot exceed 30 characters.'
            )
        )
    ),
    'admin/city/store' => array(
        array(
            'field' => 'country_id',
            'label' => 'Country',
            'rules' => 'trim|required|integer|callback_validate_country',
            'errors' => array(
                'required' => 'Country is required field.',
                'integer' => 'Please select a valid Country.'
            )
        ),
        array(
            'field' => 'state_id',
            'label' => 'State',
            'rules' => 'trim|required|integer|callback_validate_state',
            'errors' => array(
                'required' => 'State is required field.',
                'integer' => 'Please select a valid State.'
            )
        ),
        array(
            'field' => 'name',
            'label' => 'City Name',
            'rules' => 'trim|required|max_length[30]|callback_validate_city_unique',
            'errors' => array(
                'required' => 'City Name is required field.',
                'max_length' => 'City Name cannot exceed 30 characters.'
            )
        )
    ),
    'admin/city/update' => array(
        array(
            'field' => 'country_id',
            'label' => 'Country',
            'rules' => 'trim|required|integer|callback_validate_country',
            'errors' => array(
                'required' => 'Country is required field.',
                'integer' => 'Please select a valid Country.'
            )
        ),
        array(
            'field' => 'state_id',
            'label' => 'State',
            'rules' => 'trim|required|integer|callback_validate_state',
            'errors' => array(
                'required' => 'State is required field.',
                'integer' => 'Please select a valid State.'
            )
        ),
        array(
            'field' => 'name',
            'label' => 'City Name',
            'rules' => 'trim|required|max_length[30]|callback_validate_city_unique',
            'errors' => array(
                'required' => 'City Name is required field.',
                'max_length' => 'City Name cannot exceed 30 characters.'
            )
        )
    )
     
);
?>