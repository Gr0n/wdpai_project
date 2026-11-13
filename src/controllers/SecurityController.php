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
                $email = $_POST['email'] ?? '';
                $password = $_POST['password'] ?? '';

                if ($email === 'admin@admin.com' && $password === 'admin') {
                    session_start();
                    $_SESSION['user'] = $email;
                    header('Location: /profile');
                    exit;
                }

                $this->render('login', [
                    'pageTitle' => 'Logowanie',
                    'error' => 'Nieprawidłowy adres e-mail lub hasło.',
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