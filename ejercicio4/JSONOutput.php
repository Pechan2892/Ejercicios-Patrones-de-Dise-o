<?php

class JSONOutput implements OutputStrategy {
    public function output( string $message): void {
        echo json_encode(["message" => $message]) . PHP_EOL;
    }
}



?>