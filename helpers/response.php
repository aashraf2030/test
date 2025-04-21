<?php
// helpers/response.php

/**
 * Utility functions for sending API responses.
 */
class Response
{
    /**
     * Send a success response.
     * 
     * @param mixed $data The data to be included in the response.
     * @param string $message The message for the response.
     * @param int $statusCode The HTTP status code.
     */
    public static function success($data, $message = 'Request was successful', $statusCode = 200)
    {
        header('Content-Type: application/json');
        http_response_code($statusCode);

        echo json_encode([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ]);
        exit;
    }

    /**
     * Send an error response.
     * 
     * @param string $message The error message.
     * @param int $statusCode The HTTP status code.
     */
    public static function error($message, $statusCode = 400)
    {
        header('Content-Type: application/json');
        http_response_code($statusCode);

        echo json_encode([
            'status' => 'error',
            'message' => $message
        ]);
        exit;
    }
}
