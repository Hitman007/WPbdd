<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('See that the browser can launch');
$I->amOnUrl("https://wordpress-bdd.com");
$I->see("Programmers must rule the world");