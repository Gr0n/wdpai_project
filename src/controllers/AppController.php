<?php

declare(strict_types=1);

abstract class AppController
{
    protected function isPost(): bool
    {
        return ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST';
    }

    protected function render(string $template, array $variables = []): void
    {
        $viewsPath = dirname(__DIR__, 2) . '/public/views';
        $templatePath = $viewsPath . '/' . $template . '.php';
        $layoutHeader = $viewsPath . '/layout/header.php';
        $layoutFooter = $viewsPath . '/layout/footer.php';

        if (!is_file($templatePath)) {
            throw new \RuntimeException('View not found: ' . $template);
        }

        if (!ob_start()) {
            throw new \RuntimeException('Unable to start output buffering');
        }

        extract($variables, EXTR_SKIP);
        try {
            require $templatePath;
            $content = ob_get_contents();
        } finally {
            ob_end_clean();
        }

        if ($content === false) {
            throw new \RuntimeException('Unable to capture view output: ' . $template);
        }

        require $layoutHeader;
        require $layoutFooter;
    }
}