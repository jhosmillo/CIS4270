<?php

/**
 * View model for login functions.
 *
 * @author jam
 * @version 210707
 */
class LoginVM {

	public $enteredUserEmail;
    public $enteredPassword;
    public $userType;
    public $errorMsg;
    public $statusMsg;
    private $userDAM;
    
    // User type constants used for switching in the controller.
    const VALID_LOGIN = 'valid_login';
    const INVALID_LOGIN = 'invalid_login';
    
    public function __construct() {
        $this->userDAM = new UserDAM();
        $this->errorMsg = '';
        $this->statusMsg = array();
        $this->enteredUserId = '';
        $this->enteredPassword = '';
    }

    public static function getInstance() {
        $vm = new self();
        //$vm->enteredUserEmail = filter_input(INPUT_POST,'username');
        //$vm->enteredPassword = filter_input(INPUT_POST,'password');
        //$user = $vm->userDAM->readUser($vm->enteredUserEmail);
		$vm->enteredUserId = hPOST('username');
		$vm->enteredPassword = hPOST('password');
		$user = $vm->userDAM->readUser($vm->enteredUserId);

        if ($vm->authenticateUser($user)) {
            $vm->userType = self::VALID_LOGIN;
			session_start();
			after_successful_login();
			$_SESSION ['userName'] = $user->firstName . ' ' . $user->lastName;
			$_SESSION ['userId'] = $vm->enteredUserId;
        } else {
             $vm->userType = self::INVALID_LOGIN;
        }
        return $vm;
    }
   
	
    
    
    
    
    private function authenticateUser($user) {
        $userFound = true;
        if ($user === null) {
            $userFound = false;
        }

       // This code validates the password. Uncomment in secure version.
 return $userFound && password_verify($this->enteredPassword, $user->password);
// This always returns true. Remove this in the secure version.
        //return true;
    }

}
