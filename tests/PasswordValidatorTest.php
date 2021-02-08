<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\PasswordValidator;

class PasswordValidatorTest extends TestCase {

	/** @test */
    public function test_password_should_have_more_than_8_char()
    {
        //Given
        $validator = new PasswordValidator();
        //When
        $validPassword = $validator->validate('000000001');
        $invalidPassword = $validator->validate('12345678');
        //Then
        $this->assertEquals($validPassword, true);
        $this->assertEquals($invalidPassword, false);
    }

    public function test_password_should_have_at_least_one_char_uppercase()
    {
        //Given
        $validator = new PasswordValidator();
        //When
        $validPassword = $validator->validate('000000001A');
        $invalidPassword = $validator->validate('123456789');
        //Then
        $this->assertEquals($validPassword, true);
        $this->assertEquals($invalidPassword, false);
    }
    
	
}


