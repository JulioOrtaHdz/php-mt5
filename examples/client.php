<?php
require_once __DIR__."/../vendor/autoload.php";

use JulioOrtaHdz\PhpMeta\MetaTraderClient;
use JulioOrtaHdz\PhpMeta\Entities\User;
use JulioOrtaHdz\PhpMeta\src\Lib\MTEnDealAction;

$server = "SERVER_MT4_IP";
$port = 443;
$login = "MANAGER LOGIN";
$password = "API PASSWORD";
$exampleLogin = 21001480007;

$api = new MetaTraderClient($server, $port, $login, $password);
$user = $api->getUser($exampleLogin);

/**
 * User Function
 */
// Create Account
// $user = new User();
// $user->setName("John Due Test");
// $user->setEmail("john@due.com");
// $user->setGroup("grouphere");
// $user->setLeverage("50");
// $user->setPhone("0856123456");
// $user->setAvar_dumpress("Sukabumi");
// $user->setCity("Sukabumi");
// $user->setState("Jawa Barat");
// $user->setCountry("Indonesia");
// $user->setZipCode(1470);
// $user->setMainPassword("Secure123");
// $user->setInvestorPassword("NotSecure123");
// $user->setPhonePassword("NotSecure123");
// $result = $api->createUser($user);
// var_dump($result);

// Get Client ID by login
// $login = [];
// $request = $api->getUserLogins('demoforex', $login);

// Get User Information
// $user = $api->getUser($exampleLogin);
// var_dump($user);

// Update User Information
// $user = $client->getUser(21001480007);
// $user->Name = "Name Changed";
// $newUser = $client->updateUser($user);


// Delete User
// $user = $api->deleteUser(2024);

// Change User Password
// $type = "MAIN"; // Change $type to INVESTOR if you want to change investor password
// $api->changePasswordUser($exampleLogin, 'SecurePassword', $type);

/**
 * ORDER FUNCTION
 */

// Get Order Detail
// $order = $api->getOrder($ticket = 100);
// var_dump($order);


// Get Open Order Total and pagination
// $total = $api->getOrderTotal($exampleLogin);
// $trades = $api->getOrderPagination($login, $offset, $total);
// var_dump($total);


// Get Closed Order Details by ticket
// $order = $api->getOrderHistory(4914208);
// var_dump($order);

// Get Closed Order Total and pagination
// $total = $api->getOrderHistoryTotal($exampleLogin, $timestampfrom, $timestampto);
// $trades = $api->getOrderHistoryPagination($exampleLogin, $timestampfrom, $timestampto, 0, $total);
// foreach ($trades as $trade) {
//     // see class MTOrder
//     echo "LOGIN : ".$trade->Login.PHP_EOL;
//     echo "TICKET : ".$trade->Order.PHP_EOL;
// }

// Get Open Position
// $total = $api->getPositionTotal($exampleLogin);
// $positions = $api->getPositionPaginate($exampleLogin, 0, $total);
// foreach ($positions as $p) {
//     echo "SYMBOL : ".$p->Symbol.PHP_EOL;
//     echo "LOGIN : ".$p->Login.PHP_EOL;
// }

// Get Deal By Ticket
// $deal = $api->dealGet(1402053);

// Get Deal Paginate
// $total = $api->dealGetTotal($exampleLogin, $timestampfrom, $timestampto);
// $deals = $api->dealGetPaginate($exampleLogin, $timestampfrom, $timestampto, 0, $total);
// var_dump($deals);


/**
 * BALANCE OPERATION
 */
// Conduct User Balance (CREDIT, DEBIT, DEPOSIT, WITHDRAWAL) see MTEnDealAction
// $ticket = $api->conductUserBalance(2024 , MTEnDealAction::DEAL_BALANCE, 100, 'your comment here');
