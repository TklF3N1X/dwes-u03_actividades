<?php
class User {
    private $username;
    private $password;
    private $mail;
    private $logged;

    public function __construct($username, $password, $mail) {
        $this->username = $username;
        $this->password = $password;
        $this->mail = $mail;
        $this->logged = false;
    }

    public function __get(string $property): mixed {
        return $this->$property;
    }

    public function __set(string $property, mixed $value): void {
        $this->$property = $value;
    }

    public function login(string $password): bool {
        if ($this->logged) {
            return false;
        }
        if ($password === $this->password) {
            $this->logged = true;
            return true;
        }
        return false;
    }

    public function logout(): void {
        $this->logged = false;
    }

    public function __toString(): string {
        return $this->username . ' (' . $this->mail . ')';
    }
}

function userExists(string $username, array $users): mixed {
    foreach ($users as $user) {
        if ((string)$user->username === $username) {
            return $user;
        }
    }

    return false;
}
?>