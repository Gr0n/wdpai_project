<?php

declare(strict_types=1);

require_once __DIR__ . '/AppController.php';

final class SecurityController extends AppController
{
    public function login(): void
    {
        if ($this->isPost()) {
            $formType = $_POST['form_type'] ?? '';

            if ($formType === 'login') {
                $username = $_POST['username'] ?? '';
                $password = $_POST['password'] ?? '';

                if ($username === 'admin' && $password === 'admin') {
                    session_start();
                    $_SESSION['user'] = $username;
                    header('Location: /profile');
                    exit;
                }

                $this->render('login', [
                    'pageTitle' => 'Logowanie',
                    'error' => 'Nieprawidłowa nazwa użytkownika lub hasło.',
                ]);
                return;
            }

            if ($formType === 'register') {
                $this->register();
                return;
            }
        }

        $this->render('login', [
            'pageTitle' => 'Logowanie',
        ]);
    }
    
    public function register() : void
    {
        if ($this->isPost()) {
            $username = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            // Tutaj można dodać logikę rejestracji użytkownika, np. zapis do bazy danych

            // Po udanej rejestracji przekierowujemy użytkownika na stronę logowania
            header('Location: /login');
            exit;
        }

        $this->render('register', [
            'pageTitle' => 'Rejestracja',
        ]);
    }
}