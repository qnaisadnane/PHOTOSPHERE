<?php

require_once __DIR__ . '/entities/user.php';
require_once __DIR__ . '/entities/basicUser.php';
require_once __DIR__ . '/entities/proUser.php';
require_once __DIR__ . '/entities/moderator.php';
require_once __DIR__ . '/entities/admin.php';

try {
    $basic = new BasicUser(1, 'test', 'test@test.com', 'pass', 'Bio', 'basic_user', 'Ville', 0);
    echo "BasicUser OK\n";
} catch (Exception $e) {
    echo "BasicUser error: " . $e->getMessage() . "\n";
}

try {
    $pro = new ProUser(2, 'test', 'test@test.com', 'pass', 'Bio', 'pro_user', 'Ville', 0, '2024-01-01', '2024-12-31');
    echo "ProUser OK\n";
} catch (Exception $e) {
    echo "ProUser error: " . $e->getMessage() . "\n";
}

try {
    $mod = new Moderator(3, 'test', 'test@test.com', 'pass', 'Bio', 'moderator', 'Ville', 'junior');
    echo "Moderator OK\n";
} catch (Exception $e) {
    echo "Moderator error: " . $e->getMessage() . "\n";
}

try {
    $admin = new Admin(4, 'test', 'test@test.com', 'pass', 'Bio', 'admin', 'Ville', false);
    echo "Admin OK\n";
} catch (Exception $e) {
    echo "Admin error: " . $e->getMessage() . "\n";
}



?>