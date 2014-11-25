<?php
$I = new FunctionalTester($scenario);
//$I->wantTo('perform actions and see result');
$I->am('laravel member');
$I->amOnPage('/');
$I->see('Login');
$I->click('Login');
$I->seeInCurrentUrl('login');
$I->see('Please login');
$I->fillField('User Name', 'stan');
$I->fillField('Email', 'stan@gmail.com');
$I->fillField('Password', '1234');
$I->click('Login');
$I->seeInCurrentUrl('dashboard');
$I->see('Current Issues');