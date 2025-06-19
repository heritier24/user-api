<?php

namespace App\Services;
use Illuminate\Support\Str;

class UserService
{
    protected array $users = [];

    public function __construct()
    {
        // Initialize in session or static memory
        if (!session()->has('users')) {
            session(['users' => []]);
        }
    }

    public function createUser(array $data): array
    {
        $user = [
            'id' => Str::uuid()->toString(),
            'name' => $data['name'],
            'email' => $data['email'],
        ];
        $users = session('users');
        $users[$user['id']] = $user;
        session(['users' => $users]);

        return $user;
    }

    public function getUser(string $id): ?array
    {
        return session('users')[$id] ?? null;
    }
}
