<?php

/**
 * Root index.php - Entry point for the application
 * This file ensures proper redirection to the backend public directory
 */

// Get the current request URI
$requestUri = $_SERVER['REQUEST_URI'];

// Get the host
$host = $_SERVER['HTTP_HOST'];

// Get the protocol (http or https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// Base URL for the backend application
$baseUrl = "{$protocol}://{$host}";

// Remove any double slashes and redirect to the backend
$targetUrl = $baseUrl . '/backend/public' . $requestUri;
$targetUrl = preg_replace('#([^:])//+#', '$1/', $targetUrl);

// Perform the redirect
header("Location: {$targetUrl}", true, 302);
exit();
