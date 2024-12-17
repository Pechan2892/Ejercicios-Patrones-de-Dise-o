<?php

class FileOutput implements OutputStrategy{

    public function output( string $message): void {
        file_put_contents("output.txt", $message . PHP_EOL, FILE_APPEND);
        echo "file" . $message . PHP_EOL;
    }
}



?>