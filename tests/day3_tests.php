<?php

require_once __DIR__ . '/../entities/user.php';
require_once __DIR__ . '/../entities/basicUser.php';
require_once __DIR__ . '/../entities/proUser.php';
require_once __DIR__ . '/../entities/admin.php';

try {
    $basic = new BasicUser(1, 'john_doe', 'john@test.com', 'password123', 'Bio basique', 'basic', 'Paris', 15);
    echo "BasicUser cree\n";
} catch (Exception $e) {
    echo "BasicUser: " . $e->getMessage() . "\n";
}

try {
    $pro = new ProUser(2, 'pro_photo', 'pro@test.com', 'password456', 'Bio pro', 'pro', 'Lyon', 0, '2024-01-01', '2024-12-31');
    echo "ProUser cree\n";
} catch (Exception $e) {
    echo "ProUser: " . $e->getMessage() . "\n";
}

try {
    $admin = new Admin(3, 'admin_sys', 'admin@test.com', 'password789', 'Bio admin', 'admin', 'Marseille', true);
    echo "Admin cree\n";
} catch (Exception $e) {
    echo "Admin: " . $e->getMessage() . "\n";
}

if (isset($basic) && $basic instanceof User) echo "BasicUser est un User\n";
if (isset($pro) && $pro instanceof User) echo "ProUser est un User\n";
if (isset($admin) && $admin instanceof User) echo "Admin est un User\n";

if (isset($basic)) {
    echo "BasicUser:\n";
    echo "  UploadCount: " . $basic->getUploadCount() . "\n";
    echo "  Peut uploader: " . ($basic->canUploadPhoto() ? 'oui' : 'non') . "\n";
}

if (isset($pro)) {
    echo "ProUser:\n";
    echo "  Subscription: " . $pro->getSubscriptionStart() . " a " . $pro->getSubscriptionEnd() . "\n";
    echo "  Abonnement actif: " . ($pro->hasActiveSubscription() ? 'oui' : 'non') . "\n";
}

?>