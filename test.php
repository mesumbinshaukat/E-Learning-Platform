<?php

require __DIR__ . '/vendor/autoload.php';

// Load environment variables from .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Access the secret key
$secretKey = $_ENV['SECRET_KEY'] ?: 'HE!!O123';

// Now $secretKey contains your secret key, and you can use it in your encryption/decryption functions

$key = $secretKey; // Change this to a strong secret key

function encrypt_Password($password, $key)
{
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    return base64_encode($iv . openssl_encrypt($password, 'aes-256-cbc', $key, 0, $iv));
}

function decryptPassword($encryptedPassword, $key)
{
    $data = base64_decode($encryptedPassword);
    $iv = substr($data, 0, openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = substr($data, openssl_cipher_iv_length('aes-256-cbc'));
    return openssl_decrypt($encrypted, 'aes-256-cbc', $key, 0, $iv);
}

// Example usage
$originalPassword = 'user123';
$encryptedPassword = encrypt_Password($originalPassword, $key);

echo 'Encrypted Password: ' . $encryptedPassword . PHP_EOL;

$decryptedPassword = decryptPassword($encryptedPassword, $key);

echo 'Decrypted Password: ' . $decryptedPassword . PHP_EOL;

echo __DIR__;
