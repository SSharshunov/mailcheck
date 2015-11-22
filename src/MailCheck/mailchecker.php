<?php 

namespace MailCheck;

class mailchecker
{
    public static function isValid($service, $user, $pass)
    {
		if (!$pass) {
			throw new Exception('Something wrong.');
		}
		else 
			return 1; //Passwd true
        return 'Hello World, Composer!';
    }
	
	
    
}
}