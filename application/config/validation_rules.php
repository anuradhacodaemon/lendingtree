<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * <h1>Validation Rules </h1>
 * The validation configuration file is created to set all validation rules from this file itself.
 *
 * @author  Shrikant Jadhav
 * @version 1.0
 * @see 
 * @since   2017-02-16
 */
// Dispatcher rules start here 
// 'array element 0 - is field actual name. 1 - is the label of the field. 2 - is a rules to apply on the field '
$config['dipatcher_insert_rules'][] = array(
    "field_name" => 'dispatcher_first_name',
    "field_label" => 'Dispatcher First Name',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['dipatcher_insert_rules'][] = array(
    "field_name" => 'dispatcher_second_name',
    "field_label" => 'Dispatcher Second Name',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['dipatcher_insert_rules'][] = array(
    "field_name" => 'dispatcher_password',
    "field_label" => 'Dispatcher Password',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['dipatcher_insert_rules'][] = array(
    "field_name" => 'franchise_id',
    "field_label" => 'Franchise Id',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['dipatcher_insert_rules'][] = array(
    "field_name" => 'username',
    "field_label" => 'username',
    "field_rule" => 'trim|required|is_unique[911m_dispatchers.username]',
    "field_error" => array()
);

// dispatcher rules end here

$config['client_insert_rules'][] = array(
    "field_name" => 'client_type',
    "field_label" => 'Client Type',
    "field_rule" => 'trim|required',
   'field_error' => array(
        'required' => '%s Is Required.'
    )
);
$config['client_insert_rules'][] = array(
    "field_name" => 'client_first_name',
    "field_label" => 'Client First Name',
    "field_rule" => 'trim|required',
    'field_error' => array(
        'required' => '%s Is Required.'
    )
);

$config['client_insert_rules'][] = array(
    "field_name" => 'client_password',
    "field_label" => 'Client Password',
    "field_rule" => 'trim|required',
    'field_error' => array(
        'required' => '%s Is Required.'
    )
);
$config['client_insert_rules'][] = array(
    "field_name" => 'client_email',
    "field_label" => 'Client Email',
    'field_rule' => 'trim|required|valid_email|is_unique[911m_clients.client_email]',
    'field_error' => array(
        'required' => '%s Is Required.',
        'is_unique' => '%s Is Already Taken.',
        'valid_email' => '%s must be valid. For example, johndoe@example.com'
    )
);
$config['client_insert_rules'][] = array(
    "field_name" => 'username',
    "field_label" => 'username',
    "field_rule" => 'trim|required|is_unique[911m_clients.username]',
    "field_error" => array(
        'required' => '%s Is Required.',
        'is_unique' => '%s Is Already Taken.',
    )
);
$config['client_insert_rules'][] = array(
    "field_name" => 'client_phone_number',
    "field_label" => 'Client Phone Number',
    "field_rule" => 'trim|required|numeric',
    "field_error" => array()
);
// client rules end here

$config['technician_insert_rules'][] = array(
    "field_name" => 'technician_type',
    "field_label" => 'Technician Type',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['technician_insert_rules'][] = array(
    "field_name" => 'contractor_id',
    "field_label" => 'Contractor Id',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['technician_insert_rules'][] = array(
    "field_name" => 'technician_first_name',
    "field_label" => 'Technician First Name',
    "field_rule" => 'trim|required',
    "field_error" => array()
);

$config['technician_insert_rules'][] = array(
    "field_name" => 'technician_email',
    "field_label" => 'Technician Email',
    'field_rule' => 'trim|required|valid_email|is_unique[911m_technicians.technician_email]',
    'field_error' => array(
        'required' => '%s Is Required.',
        'valid_email' => '%s must be valid. For example, johndoe@example.com',
        'is_unique' => '%s is already taken.',
    )
);
$config['technician_insert_rules'][] = array(
    "field_name" => 'technician_password',
    "field_label" => 'Technician Password',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['technician_insert_rules'][] = array(
    "field_name" => 'technician_categories',
    "field_label" => 'Technician Categories',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['technician_insert_rules'][] = array(
    "field_name" => 'technician_phone_number',
    "field_label" => 'Technician Phone Number',
    "field_rule" => 'trim|required|numeric',
    "field_error" => array()
);
$config['technician_insert_rules'][] = array(
    "field_name" => 'username',
    "field_label" => 'Technician username',
    'field_rule' => 'trim|required|is_unique[911m_technicians.username]',
    'field_error' => array(
        'required' => '%s Is Required.',
        'is_unique' => '%s is already taken.',
    )
);
// Technician rules end here
$config['project_insert_rules'][] = array(
    "field_name" => 'project_name',
    "field_label" => 'Project Name',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['project_insert_rules'][] = array(
    "field_name" => 'client_id',
    "field_label" => 'Client Id',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['project_insert_rules'][] = array(
    "field_name" => 'details',
    "field_label" => 'Details',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
// Projects end her
$config['job_insert_rules'][] = array(
    "field_name" => 'project_id',
    "field_label" => 'Project Id',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['job_insert_rules'][] = array(
    "field_name" => 'client_address_id',
    "field_label" => 'Client Address Id',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['job_insert_rules'][] = array(
    "field_name" => 'category_id',
    "field_label" => 'Category Id',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['job_insert_rules'][] = array(
    "field_name" => 'job_name',
    "field_label" => 'Job Name',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
$config['job_insert_rules'][] = array(
    "field_name" => 'job_description',
    "field_label" => 'Job Description',
    "field_rule" => 'trim|required',
    "field_error" => array()
);
// Projects end her
//Contractor Rules Start Here
$config['contractor_rules'][] = array(
    'field_name' => 'contractor_code',
    'field_label' => 'Contractor Code',
    'field_rule' => 'required',
    'field_error' => array(
        'required' => 'Contractor Code Is Required'
    )
);
$config['contractor_rules'][] = array(
    'field_name' => 'contractor_first_name',
    'field_label' => 'Contractor First Name',
    'field_rule' => 'trim|required',
    'field_error' => array(
        'required' => 'Contractor First Name Is Required'
    )
);
$config['contractor_rules'][] = array(
    'field_name' => 'contractor_phone_number',
    'field_label' => 'Phone Number',
    'field_rule' => 'trim|required|numeric',
    'field_error' => array(
        'required' => 'Phone Number Is Required',
        'number' => '%s must be a number',
    )
);
$config['contractor_rules'][] = array(
    'field_name' => 'contractor_phone_number_alt',
    'field_label' => 'Phone Number Alternative',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'number' => '%s must be a number',
    )
);
$config['contractor_rules'][] = array(
    'field_name' => 'contractor_phone_number_alt_2',
    'field_label' => 'Phone Number Alternative 2',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'number' => '%s must be a number',
    )
);
$config['contractor_rules'][] = array(
    'field_name' => 'contractor_email',
    'field_label' => 'Email',
    'field_rule' => 'trim|required|valid_email',
    'field_error' => array(
        'required' => '%s Is Required.',
        'valid_email' => '%s must be valid. For example, johndoe@example.com'
    )
);
$config['contractor_rules'][] = array(
    'field_name' => 'contractor_email_alt',
    'field_label' => 'Email Alternative',
    'field_rule' => 'trim|valid_email',
    'field_error' => array(
        'valid_email' => '%s must be valid. For example, johndoe@example.com'
    )
);
$config['contractor_rules'][] = array(
    'field_name' => 'contractor_tax_zip',
    'field_label' => 'Tax Zip',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'number' => '%s must be a number',
    )
);
$config['contractor_rules'][] = array(
    'field_name' => 'contractor_tax_country_code',
    'field_label' => 'Country Code',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'number' => '%s must be a number',
    )
);
//Contractor Rules End Here
//Franchise Insert Rule Start Here
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_code',
    'field_label' => 'Franchise Code',
    'field_rule' => 'trim|required',
    'field_error' => array(
        'is_unique' => '%s is already taken.',
        'required' => 'Franchise Code Is Required'
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'username',
    'field_label' => 'Username',
    'field_rule' => 'trim|required|is_unique[911m_franchises.username]',
    'field_error' => array(
        'is_unique' => '%s is already taken.',
        'required' => 'Username Is Required'
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_password',
    'field_label' => 'Password',
    'field_rule' => 'trim|required',
    'field_error' => array(
        'required' => 'Password Is Required'
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_owner_first_name',
    'field_label' => 'Franchise First Name',
    'field_rule' => 'trim|required',
    'field_error' => array(
        'required' => 'Franchise First Name Is Required'
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_manager_first_name',
    'field_label' => 'Franchise Manager First Name',
    'field_rule' => 'trim|required',
    'field_error' => array(
        'required' => 'Franchise Manager First Name Is Required'
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_phone_number',
    'field_label' => 'Phone Number',
    'field_rule' => 'trim|required|numeric',
    'field_error' => array(
        'required' => 'Franchise Phone Number Required',
        'number' => '%s must be a number',
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_phone_number_alt',
    'field_label' => 'Phone Number Alternative',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'number' => '%s must be a number',
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_owner_phone_number',
    'field_label' => 'Owner Phone Number',
    'field_rule' => 'trim|required|numeric',
    'field_error' => array(
        'required' => 'Franchise Owner Phone Number Required',
        'number' => '%s must be a number',
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_owner_phone_number_alt',
    'field_label' => 'Owner Phone Number Alternative',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'number' => '%s must be a number',
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_manager_phone_number',
    'field_label' => 'Manager Phone Number',
    'field_rule' => 'trim|required|numeric',
    'field_error' => array(
        'required' => 'Franchise Manager Phone Number Required',
        'number' => '%s must be a number',
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_manager_phone_number_alt',
    'field_label' => 'Manager Phone Number Alternative',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'number' => '%s must be a number',
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_email',
    'field_label' => 'Email',
    'field_rule' => 'trim|required|is_unique[911m_franchises.franchise_email]|valid_email',
    'field_error' => array(
        'required' => 'Email Is Required.',
        'is_unique' => '%s is already taken.',
        'valid_email' => '%s must be valid. For example, johndoe@example.com'
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_owner_email',
    'field_label' => 'Email',
    'field_rule' => 'trim|required|valid_email',
    'field_error' => array(
        'required' => 'Owner Email Is Required.',
        'valid_email' => '%s must be valid. For example, johndoe@example.com'
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_manager_email',
    'field_label' => 'Email',
    'field_rule' => 'trim|required|valid_email',
    'field_error' => array(
        'required' => 'Manager Email Is Required.',
        'valid_email' => '%s must be valid. For example, johndoe@example.com'
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_owner_email_alt',
    'field_label' => 'Owner Email Alternative',
    'field_rule' => 'trim|valid_email',
    'field_error' => array(
        'valid_email' => '%s must be valid. For example, johndoe@example.com'
    )
);
$config['franchise_insert_rules'][] = array(
    'field_name' => 'franchise_manager_email_alt',
    'field_label' => 'Manager Email Alternative',
    'field_rule' => 'trim|valid_email',
    'field_error' => array(
        'valid_email' => '%s must be valid. For example, johndoe@example.com'
    )
);
//Franchise Insert Rule end
//Franchise Edit Rule Start Here
$config['franchise_edit_rules'][] = array(
    'field_name' => 'franchise_owner_first_name',
    'field_label' => 'Franchise First Name',
    'field_rule' => 'trim|required',
    'field_error' => array(
        'required' => 'Franchise First Name Is Required'
    )
);
$config['franchise_edit_rules'][] = array(
    'field_name' => 'franchise_manager_first_name',
    'field_label' => 'Franchise Manager First Name',
    'field_rule' => 'trim|required',
    'field_error' => array(
        'required' => 'Franchise Manager First Name Is Required'
    )
);
$config['franchise_edit_rules'][] = array(
    'field_name' => 'franchise_phone_number',
    'field_label' => 'Phone Number',
    'field_rule' => 'trim|required|numeric',
    'field_error' => array(
        'required' => 'Franchise Phone Number Required',
        'number' => '%s must be a number',
    )
);
$config['franchise_edit_rules'][] = array(
    'field_name' => 'franchise_phone_number_alt',
    'field_label' => 'Phone Number Alternative',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'number' => '%s must be a number',
    )
);
$config['franchise_edit_rules'][] = array(
    'field_name' => 'franchise_owner_phone_number',
    'field_label' => 'Owner Phone Number',
    'field_rule' => 'trim|required|numeric',
    'field_error' => array(
        'required' => 'Franchise Owner Phone Number Required',
        'number' => '%s must be a number',
    )
);
$config['franchise_edit_rules'][] = array(
    'field_name' => 'franchise_owner_phone_number_alt',
    'field_label' => 'Owner Phone Number Alternative',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'number' => '%s must be a number',
    )
);
$config['franchise_edit_rules'][] = array(
    'field_name' => 'franchise_manager_phone_number',
    'field_label' => 'Manager Phone Number',
    'field_rule' => 'trim|required|numeric',
    'field_error' => array(
        'required' => 'Franchise Manager Phone Number Required',
        'number' => '%s must be a number',
    )
);
$config['franchise_edit_rules'][] = array(
    'field_name' => 'franchise_manager_phone_number_alt',
    'field_label' => 'Manager Phone Number Alternative',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'number' => '%s must be a number',
    )
);
$config['franchise_edit_rules'][] = array(
    'field_name' => 'franchise_owner_email',
    'field_label' => 'Email',
    'field_rule' => 'trim|required|valid_email',
    'field_error' => array(
        'required' => 'Owner Email Is Required.',
        'valid_email' => '%s must be valid. For example, johndoe@example.com'
    )
);
$config['franchise_edit_rules'][] = array(
    'field_name' => 'franchise_manager_email',
    'field_label' => 'Email',
    'field_rule' => 'trim|required|valid_email',
    'field_error' => array(
        'required' => 'Manager Email Is Required.',
        'valid_email' => '%s must be valid. For example, johndoe@example.com'
    )
);
$config['franchise_edit_rules'][] = array(
    'field_name' => 'franchise_owner_email_alt',
    'field_label' => 'Owner Email Alternative',
    'field_rule' => 'trim|valid_email',
    'field_error' => array(
        'valid_email' => '%s must be valid. For example, johndoe@example.com'
    )
);
$config['franchise_edit_rules'][] = array(
    'field_name' => 'franchise_manager_email_alt',
    'field_label' => 'Manager Email Alternative',
    'field_rule' => 'trim|valid_email',
    'field_error' => array(
        'valid_email' => '%s must be valid. For example, johndoe@example.com'
    )
);
//Franchise Edit Rule end
//Category Rule Start Here
$config['category_rules'][] = array(
    'field_name' => 'category_name',
    'field_label' => 'Category Name',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);
$config['category_rules'][] = array(
    'field_name' => 'code',
    'field_label' => 'Code',
    'field_rule' => 'trim|required',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);
$config['category_rules'][] = array(
    'field_name' => 'cost',
    'field_label' => 'Cost',
    'field_rule' => 'trim|numeric|required',
    'field_error' => array(
        'number' => '%s must be a number',
        'required' => '%s Is Required Field.',
    )
);
$config['neighborhood_insert_rules'][] = array(
    'field_name' => 'municipality_id',
    'field_label' => 'Municipality Id',
    'field_rule' => 'trim|required',
    'field_error' => array(
        'required' => 'Municipality Id Is Required.'
    )
);
$config['neighborhood_insert_rules'][] = array(
    'field_name' => 'neighborhood_name',
    'field_label' => 'Neighborhood Name',
    'field_rule' => 'trim|required',
    'field_error' => array(
        'required' => 'Neighborhood Name Is Required.'
    )
);

// neighborhood rules
//Client Address Rule Start
$config['clientaddress_rules'][] = array(
    'field_name' => 'street',
    'field_label' => 'Street',
    'field_rule' => 'trim|required',
    'field_error' => array(
        'required' => '%s Is Required Field'
    )
);
$config['clientaddress_rules'][] = array(
    'field_name' => 'municipality_id',
    'field_label' => 'Municipality',
    'field_rule' => 'trim|required|numeric',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Numeric'
    )
);
$config['clientaddress_rules'][] = array(
    'field_name' => 'country_code',
    'field_label' => 'Country Code',
    'field_rule' => 'required|trim|numeric',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Numeric'
    )
);



//Client Address Rule End
$config['jobstatus_insert_rules'][] = array(
    'field_name' => 'log_source',
    'field_label' => 'Job source',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.'
    )
);
//job log status Rule End

$config['review_insert_rules'][] = array(
    'field_name' => 'client_technician',
    'field_label' => 'Source from client (C) or a technician or architect Id',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.'
    )
);
$config['review_insert_rules'][] = array(
    'field_name' => 'client_technician_id',
    'field_label' => 'Customer or technician ID',
    'field_rule' => 'required|trim|numeric',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Numeric'
    )
);
$config['review_insert_rules'][] = array(
    'field_name' => 'rating',
    'field_label' => 'Rating',
    'field_rule' => 'required|trim|numeric',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Numeric'
    )
);
$config['review_insert_rules'][] = array(
    'field_name' => 'comments',
    'field_label' => 'Comments',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.'
    )
);
// review rule
$config['payment_insert_rules'][] = array(
    'field_name' => 'job_id',
    'field_label' => 'Job Id',
    'field_rule' => 'required|trim|numeric',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Numeric'
    )
);
$config['payment_insert_rules'][] = array(
    'field_name' => 'paid_to_from',
    'field_label' => 'Paid to from',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.'
    )
);
$config['payment_insert_rules'][] = array(
    'field_name' => 'amount',
    'field_label' => 'amount',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.'
    )
);
$config['payment_insert_rules'][] = array(
    'field_name' => 'balance_before_payment',
    'field_label' => 'balance before payment',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.'
    )
);
$config['payment_insert_rules'][] = array(
    'field_name' => 'balance_after_payment',
    'field_label' => 'balance after payment',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.'
    )
);
$config['payment_insert_rules'][] = array(
    'field_name' => 'bill_reference',
    'field_label' => 'bill reference',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.'
    )
);
$config['payment_insert_rules'][] = array(
    'field_name' => 'bill_name',
    'field_label' => 'bill name',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.'
    )
);
$config['payment_insert_rules'][] = array(
    'field_name' => 'bill_type',
    'field_label' => 'bill type',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.'
    )
);
// payment rules
//Contractor Neighborhood rule start here
$config['contractor_neighborhood_rules'][] = array(
    'field_name' => 'neighborhood_id',
    'field_label' => 'Neighborhood',
    'field_rule' => 'required|trim|numeric',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Numeric'
    )
);

$config['dipatcher_lockjob_rules'][] = array(
    'field_name' => 'job_id',
    'field_label' => 'Job Id',
    'field_rule' => 'required|trim|numeric',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Numeric'
    )
);
$config['dipatcher_confirmjob_rules'][] = array(
    'field_name' => 'job_id',
    'field_label' => 'Job Id',
    'field_rule' => 'required|trim|numeric',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Numeric'
    )
);
$config['dipatcher_confirmjob_rules'][] = array(
    'field_name' => 'fixed_price',
    'field_label' => 'Fixed Price',
    'field_rule' => 'required|trim|numeric',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Numeric'
    )
);
$config['dipatcher_assigntechnician_rules'][] = array(
    'field_name' => 'job_id',
    'field_label' => 'Job Id',
    'field_rule' => 'required|trim|integer',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Integer'
    )
);
$config['dipatcher_assigntechnician_rules'][] = array(
    'field_name' => 'technician_id',
    'field_label' => 'Technician Id',
    'field_rule' => 'required|trim|integer',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Integer'
    )
);

//Extra Job Amount
$config['extra_job_amount_rules'][] = array(
    'field_name' => 'extra_workforce_cost',
    'field_label' => 'Extra Workforce Cost',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'numeric' => '%s Contains Only Integer'
    )
);
$config['extra_job_amount_rules'][] = array(
    'field_name' => 'spare_parts_amount',
    'field_label' => 'Spare Parts Amount',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'numeric' => '%s Contains Only Integer'
    )
);

//Technician update job status
$config['technician_update_jobstatus_rules'][] = array(
    'field_name' => 'job_id',
    'field_label' => 'Job Id',
    'field_rule' => 'required|trim|numeric',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Numeric'
    )
);
$config['technician_update_jobstatus_rules'][] = array(
    'field_name' => 'job_status',
    'field_label' => 'Job status',
    'field_rule' => 'required|trim|numeric|callback_status_check',
    'field_error' => array(
        'required' => '%s Is Required Field.',
        'numeric' => '%s Contains Only Numeric'

)
);
//Extra Job Amount
$config['extra_job_amount_rules'][] = array(
    'field_name' => 'extra_workforce_cost',
    'field_label' => 'Extra Workforce Cost',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'numeric' => '%s Contains Only Integer'
    )
);
$config['extra_job_amount_rules'][] = array(
    'field_name' => 'spare_parts_amount',
    'field_label' => 'Spare Parts Amount',
    'field_rule' => 'trim|numeric',
    'field_error' => array(
        'numeric' => '%s Contains Only Integer'

    )
);
//Job Image rule start here
$config['JobImage_rules'][] = array(
    'field_name' => 'document_path',
    'field_label' => 'Document Path',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);
$config['JobImage_rules'][] = array(
    'field_name' => 'document_name',
    'field_label' => 'Document Name',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);
$config['JobImage_rules'][] = array(
    'field_name' => 'document_type',
    'field_label' => 'Document Type',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);
$config['JobImage_rules'][] = array(
    'field_name' => 'document_source',
    'field_label' => 'Document Source',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);
//Job Image rule end here
//Email rule start here
$config['email_insert_rules'][] = array(
    'field_name' => 'from_email',
    'field_label' => 'Email From',
    'field_rule' => 'trim',
    'field_error' => array(
        'required' => '%s Is Required.',
    )
);
$config['email_insert_rules'][] = array(
    'field_name' => 'from_name',
    'field_label' => 'Email From Name',
    'field_rule' => 'trim',
    'field_error' => array(
        'required' => '%s Is Required.',
    )
);
$config['email_insert_rules'][] = array(
    'field_name' => 'to_email',
    'field_label' => 'Send To',
    'field_rule' => 'required|trim|valid_email',
    'field_error' => array(
        'required' => '%s Is Required.',
        'valid_email' => '%s must be valid. For example, johndoe@example.com',
    )
);
$config['email_insert_rules'][] = array(
    'field_name' => 'subject',
    'field_label' => 'Subject',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required.',
    )
);
$config['email_insert_rules'][] = array(
    'field_name' => 'message',
    'field_label' => 'Message',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required.',
    )
);

//Technician docs rule start here
$config['Techniciandocs_rules'][] = array(
    'field_name' => 'document_path',
    'field_label' => 'Document Path',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);
$config['Techniciandocs_rules'][] = array(
    'field_name' => 'document_name',
    'field_label' => 'Document Name',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);
$config['Techniciandocs_rules'][] = array(
    'field_name' => 'document_type',
    'field_label' => 'Document Type',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);

$config['android_rules'][] = array(
    'field_name' => 'mtitle',
    'field_label' => 'Title',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);

$config['android_rules'][] = array(
    'field_name' => 'mdesc',
    'field_label' => 'Description',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);


$config['ios_rules'][] = array(
    'field_name' => 'mtitle',
    'field_label' => 'Title',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);

$config['ios_rules'][] = array(
    'field_name' => 'mdesc',
    'field_label' => 'Description',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);
$config['ios_rules'][] = array(
    'field_name' => 'devicetoken',
    'field_label' => 'Device Token',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);

$config['twilio_insert_rules'][] = array(
    'field_name' => 'to',
    'field_label' => 'To',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);

$config['twilio_insert_rules'][] = array(
    'field_name' => 'message',
    'field_label' => 'Message',
    'field_rule' => 'required|trim',
    'field_error' => array(
        'required' => '%s Is Required Field.',
    )
);

//Job Image rule end here
?>