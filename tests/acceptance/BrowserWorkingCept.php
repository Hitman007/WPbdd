<?php

$I = /*am a */ new AcceptanceTester($scenario);

$I->wantTo('See that the browser can launch');
$I->amOnUrl("https://wordpress-bdd.com");
$I->see("Behavior Driven Development in WordPress");
sleep(5);