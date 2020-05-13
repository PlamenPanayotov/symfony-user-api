<?php

namespace App\Service\Validation;

interface UserValidationServiceInterface
{
    public function checkEmail($email);

    public function checkPassword($password, $passwordConfirmation);
    
}