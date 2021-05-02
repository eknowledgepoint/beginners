<?php   
    echo "<h3>Example for __LINE__</h3>";    
    // print Your current line number i.e;4     
    echo "You are at line number " . __LINE__ . "<br><br>"; 


	echo "<h3>Example for __FILE__</h3>";    
    //print full path of file with .php extension    
    echo __FILE__ . "<br><br>";  
	
	
	echo "<h3>Example for __FUNCTION__</h3>";    
    //Using magic constant inside function.    
    function test(){    
        //print the function name i.e; test.   
        echo 'The function name is '. __FUNCTION__ . "<br><br>";   
    }    
    test();


	echo "<h3>Example for __CLASS__</h3>";    
    class JTP    
    {    
        public function __construct() {    
            ;    
    }    
    function getClassName(){    
        //print name of the class JTP.   
        echo __CLASS__ . "<br><br>";   
        }    
    }    
    $t = new JTP;    
    $t->getClassName();
	
	
	
	
	echo "<h3>Example for __METHOD__</h3>";  
    class method {    
        public function __construct() {    
            //print method::__construct    
                echo __METHOD__ . "<br><br>";   
            }    
        public function meth_fun(){    
            //print method::meth_fun    
                echo __METHOD__;   
        }    
    }    
    $a = new method;    
    $a->meth_fun();  
?>  