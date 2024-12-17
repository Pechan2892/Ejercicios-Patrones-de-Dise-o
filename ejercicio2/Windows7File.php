<?php

class windows7File {
    
    //Atributos
    private $content;

    public function __construct($content) {
        $this->content = $content;
    }
    



    /**
     * Get the value of content
     */ 
    public function getWindows7Content(): string
    {
        return $this->content;
    }
}


?>