<?php

return [

    'add_button'    => 'Add User',
    'add_customer_button' => 'Add Customer',
    'title' => 'Add New User',
    'title_customer'    => 'Add New Customer',
    'title_edit_customer'   => 'Edit Customer',
    'total_users' => 'Users',
    'total_customers' => 'Customers',
    'user_info_title' => 'User Information',
    'user_users_title' => 'Users in Company',
    'customers_not_found' => 'Customers not found',
    'invite_customer' => 'Invite Customer',
    'invite_user' => 'Invite User',
    'customer_info_title' => 'Contact Person',
    'customer_subscription_title' => 'Subscription',
    'permissions_title' => 'TYPE',
    'permissions_title_admin' => 'Administrator',
    'permissions_title_manager' => 'User',
    'permissions_select_role'  =>  'Select Role',
    'permissions_select_yes'  =>  'Yes',
    'permissions_select_no'  =>  'No',
    'permissions_select'  =>  'Select categories',
    'permissions_select_own'  =>  'Own',
    'table'         => [
        'name'          => 'Name',
        'position'      => 'Title',
        'company'       => 'Company',
        'region'        => 'Region',
        'telephone'     => 'Telephone',
        'mobile'        => 'Mobile',
        'work'          => 'Work',
        'email'         => 'Email',
        'user_type'     => 'Type',
        'date_added'    => 'Date Added',
        'status'        => 'Status',
        'actions'       =>'actions',
    ],
    'fields'         => [
        'company_name'  => 'Company',
        'name'          => 'Name',
        'password'      => 'Password',
        'username'      => 'Username',
        'telephone'     => 'Telephone',
        'mobile'        => 'Mobile',
        'work'          => 'Work',
        'region'        => 'Region',
        'position'      => 'Position',
        'email'         => 'Email',
        'city'          => 'City',
        'country'       => 'Country',
        'postcode'      => 'Postcode',
        'vat_nr'        => 'Vat Nr',
        'owner'         => 'Owner',
        'number'        => 'Number',
        'title'         => 'Titel',
        'user_type'     => 'Permissions',
        'package'       => 'Package',
        // 'user_type'     => 'User Type',
        'price'         => 'Price',
        'start_date'    => 'Start Date',
        'end_date'      => 'End Date',
        'notes'         => 'Notes',
    ],
    'type'         => [
        'owner'         => 'Owner',
        'admin'         => 'Administrator',
        'manager'       => 'User',
        'superuser'     => 'Super User',
    ],
    'status'         => [
        'active'        => 'Active',
        'inactive'      => 'Inactive',
    ],
    'permission_section' => [
        'users_title'                       => 'USER AUTHORIZATION',
        'users_add'                         => 'Add users and select permissions',
        'users_delete'                      => 'Delete Users',
        'users_tootip_yes'                  => 'You can add users and select different permissions',
        'users_tootip_no'                   => 'You can only get a normal user account with selected permissions from an administrator at your company',
        'users_tootip_delete_yes'           => 'You can delete users and change contact person as new person responsible for the contracts',
        'users_tootip_delete_no'            => 'You cannot delete any users in the company',

        //
        'contracts_title'                   => 'CONTRACTS AND CATEGORIES',
        'contracts_see_all'                 => 'See all contract categories ',
        'contracts_tooltip_see_yes'         => 'You can see all contract categories when you are logged in to Kontroll',
        // 'contracts_tooltip_see_no'          => 'You can only see folders that the administrator has given you permission to see',
        'contracts_tooltip_see_select'      => 'You can only see the categories that the administrator has given you permission to see',
        'contracts_register'                => 'Upload information and contracts to Kontroll ',
        'contracts_tooltip_register_yes'    => 'You can add contracts and information to Kontroll',
        'contracts_tooltip_register_no'     => 'You cannot add any contracts or information to Kontroll',
        // 'contracts_tooltip_register_own'    => 'You can only edit your own contracts that you have added in Kontroll',
        'contracts_edit'                    => 'Edit Contract Information',
        'contracts_tooltip_edit_yes'        => 'You can edit the information on all contracts',
        'contracts_tooltip_edit_no'         => 'You can\'t edit any contracts',
        'contracts_tooltip_edit_own'        => 'You can only edit your own contracts that you have added in Kontroll',
        'contracts_tooltip_edit_select'     => 'You can only edit contracts on the folder categories that the administrator has given you permission to edit',

        'contracts_delete'                  => 'Delete contracts in Kontroll',
        'contracts_tooltip_delete_yes'      => 'You can delete company contracts that are no longer active',
        'contracts_tooltip_delete_no'       => 'You can\'t delete any contracts',
        'contracts_tooltip_delete_own'      => 'You can only delete your own contracts that you have added in Kontroll',
        //
        'reminders_title'                   => 'Reminders',
        'reminders_receive'                 => 'Receive Contract Reminders on Email',
        'reminders_tootip_yes'              => 'You receive email reminders of all the company\'s contracts',
        'reminders_tootip_no'               => 'You don\'t receive any contract reminders',
        'reminders_tootip_own'              => 'You only receive email reminders for your own contracts that you have added or are responsible for',
        //
        'archive_title'                     => 'ARCHIVE PAGE',
        'archive_see_all'                   => 'See Archived Contracts',
        'archive_tootip_yes'                => 'You can see all archived contracts',
        'archive_tootip_no'                 => 'You can\'t access the archive page',
        'archive_tootip_select'             => 'You can only view archived contracts on the categories that the administrator has given you permission to see',
        //
        'costs_title'                       => 'CONTRACT COSTS',
        'costs_see_all'                     => 'See the company\'s contract costs',
        'costs_tootip_yes'                  => 'You can see all contract costs at the company',
        'costs_tootip_no'                   => 'You can\'t see any contract costs that are uploaded in Kontroll',
        'costs_tootip_own'                  => 'You can only see the costs of the contracts you have added or are Co-responsible for',
        'costs_tootip_select'               => 'You can only see costs on the folder categories that the administrator has given you permission to see',
    ],
    // settings screen
    'settings'         => [
        'active'        => 'Active',
        'inactive'      => 'Inactive',
    ],
];

