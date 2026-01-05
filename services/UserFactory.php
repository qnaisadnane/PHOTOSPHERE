<?php

class UserFactory {
    public static function createUser(array $data): User {
        $role = $data['role'] ?? 'basic';
        
        switch ($role) {
            case 'admin':
                return new Admin($data);
            case 'pro':
                return new ProUser($data);
            case 'moderator':
                return new Moderator($data);
            default:
                return new BasicUser($data);
        }
    }
}