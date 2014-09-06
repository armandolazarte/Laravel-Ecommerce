<?php 
$I = new FunctionalTester($scenario);
$I->am("a guest");
$I->wantTo('sign up for a shop account');

$I->amOnPage('/');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Email:', 'john@example.com');
$I->fillField('Password:', 'demo');
$I->fillField('Password Confirmation:', 'demo');

$I->click('Submit');
$I->seeCurrentUrlEquals('');
$I->see('Welcome!');
$I->seeRecord('users', [
	'email' => 'john@example.com'
]);