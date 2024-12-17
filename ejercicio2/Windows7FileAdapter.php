<?php
class Windows7FileAdapter implements Windows10File {

       private $windows7File;
       public function __construct(Windows7File $windows7File){
           $this->windows7File = $windows7File;
       }

       public function readContent():string{
        return "converted: " . $this->windows7File->getWindows7Content();
       }
       
   }


?>