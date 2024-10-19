<?php
class UserModel {
    public function getUsers() {
        // Fetch users from a database (for example purposes)
        // In reality, you would use a database connection here
        return [
            ['name' => 'John Doe', 'email' => 'john@example.com'],
            ['name' => 'Jane Doe', 'email' => 'jane@example.com']
        ];
    }
}

