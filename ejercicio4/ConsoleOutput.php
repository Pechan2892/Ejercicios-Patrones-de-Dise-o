<?php

class ConsoleOutput implements OutputStrategy {
    public function output(string $message): void {
        echo "console" . $message . PHP_EOL;
    }
}



?>