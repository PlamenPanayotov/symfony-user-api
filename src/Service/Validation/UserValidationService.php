<?php

namespace App\Service\Validation;

use Exception;

class UserValidationService implements UserValidationServiceInterface
{
    public function checkEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email format!');
        }
    }

    public function checkPassword($password, $passwordConfirmation)
    {
        if($password != $passwordConfirmation) {
            throw new Exception('Password does not match the password confirmation.');
        }

        if(strlen($password) < 6) {
            throw new Exception('Password should be at least 6 characters.');
        }
    }
}