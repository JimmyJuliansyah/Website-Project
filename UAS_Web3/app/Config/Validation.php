<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	
	public $register = [
		'nama' => 'required',
		'email' => 'required|valid_email',
		'password' => 'required|min_length[6]|matches[password2]',
		'password2' => 'required|min_length[6]',
		'telp' => 'required'
	];

	public $register_errors = [
		'nama' => [
			'required' => 'Username is required.'
		],
		
		'email' => [
			'required' => 'Email is required.',
			'valid_email' => 'Email is not valid.'
		],
	
		'password' => [
			'required' => 'Password is required.',
			'min_length' => 'Your new password must contain at least 6 characters.',
			'matches' => 'Your passwords don\'t match.'
		],
		
		'password2' => [
			'required' => 'Confirm Password is required.',
			'min_length' => 'Your confirm password must contain at least 6 characters.'
		],
		
		'telp' => [
			'required' => 'Telp is required.'
		]
	];
	
	public $update = [
		'nama' => 'required',
		'email' => 'required|valid_email',
		'password' => 'required|min_length[6]',
		'telp' => 'required'
	];

	public $update_errors = [
		'nama' => [
			'required' => 'Username is required.'
		],
		
		'email' => [
			'required' => 'Email is required.',
			'valid_email' => 'Email is not valid.'
		],
	
		'password' => [
			'required' => 'Password is required.',
			'min_length' => 'Your new password must contain at least 6 characters.'
		],
		
		'telp' => [
			'required' => 'Telp is required.'
		]
	];
	
	
	
	
}
