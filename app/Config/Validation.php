<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        BaseConfig::class
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
        'contact_list' => 'App\Views\errors\errors_list',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public array $contact = [
        'name'        => 'required',
        'email'       => 'required|max_length[255]|valid_email',
        'subject'     => 'required|min_length[5]|max_length[50]',
        'message'     => 'required|min_length[10]'
    ];

    public array $contact_errors = [
        'name' => [
            'required' => 'Your name is required.',
        ],
        'email' => [
            'required' => 'Your email is required for us to reach you with a response.',
            'max_length' => 'Your email needs to be less then 250 characters.',
            'valid_email' => 'Your email requires to be a valid email.'
        ],
        'subject' => [
            'required' => 'A subject is required.',
            'min_length' => 'Your subject needs to be at least 5 characters.',
            'max_length' => 'Your subject cant be more then 50 characters.'
        ],
        'message' => [
            'required' => 'A message is required.',
            'min_length' => 'A message needs to be at least 10 characters long.'
        ]
        ];
}
