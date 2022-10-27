<?php

/**
 * View model for user registration functions.
 *
 * @author jam
 * @version 210307
 */
class RegisterVM {

    public $enteredPW;
    public $enteredConfPW;
    public $registrationType;
    public $errorMsg;
    public $statusMsg;
    public $newUser;
	public $categories;
	private $categoryDAM;
    
    // User type constants used for switching in the controller.
    const VALID_REGISTRATION = 'valid_registration';
    const INVALID_REGISTRATION = 'invalid_registration';
    
    public function __construct() {
		$this->categoryDAM = new CategoryDAM();
        $this->errorMsg = '';
        $this->statusMsg = array();
        $this->enteredPW = '';
        $this->enteredConfPW = '';
        $this->registrationType = self::INVALID_REGISTRATION;
        $this->newUser = null;
		$this->categories = $this->categoryDAM->readCategories();
    }

    public static function getInstance() {
        $vm = new self();
        
        $varArray = array('email' => filter_input(INPUT_POST, 'email'),
        		'lastName' => filter_input(INPUT_POST, 'lastName'),
        		'firstName' => filter_input(INPUT_POST, 'firstName'),
        		'phoneNumber' => filter_input(INPUT_POST, 'phoneNumber'));
        $vm->newUser = new User($varArray);
        $vm->enteredPW = filter_input(INPUT_POST, 'password');
        $vm->enteredConfPW = filter_input(INPUT_POST, 'confirmPassword');
        if ($vm->validateUserInput()) {
            $vm->registrationType = self::VALID_REGISTRATION;
        }
        return $vm;
    }
      
    private function validateUserInput() {
        $success = false;
		$statusMsgs = array();
		$phoneNum = filter_input(INPUT_POST, 'phoneNumber');
		$userEmail = filter_input(INPUT_POST, 'email');
		function has_format_matching($value, $regex='//') {
			return preg_match($regex, $value);
		}
		$regx = has_format_matching($phoneNum,'/^(1?(-?\d{3})-?)?(\d{3})(-?\d{4})$/i');
		$emailFormat = has_format_matching($userEmail,'/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/i');
        // Add validation code here. 
		// If all validation tests pass, set $success = true. 
		if ($this->newUser->firstName == null) { 
			//$this->errorMsg = 
			array_push($statusMsgs,'First name is required.'); 
		} 
		if ($this->newUser->lastName == null) { 
			//$this->errorMsg = 
			array_push($statusMsgs, 'Last name is required.'); 
		}
		if ($this->newUser->email == null) { 
			//$this->errorMsg = 
			array_push($statusMsgs,'A valid email address is required.'); 
		}
		if ($emailFormat == false) { 
			//$this->errorMsg = 
			array_push($statusMsgs,'A valid email address is required.'); 
		}
		if ($this->newUser->phoneNumber == null) { 
			//$this->errorMsg = 
			array_push($statusMsgs,'A valid phone number is required.'); 
		}
		if ($regx == false) { 
			//$this->errorMsg = 
			array_push($statusMsgs,'A valid phone number is required.'); 

	  
	//  } else if ($this->newUser->storeName == null) { 
	 //       $this->errorMsg = 'A store name is required.'; 
		}
		if ($this->enteredPW == null) { 
			//$this->errorMsg = 
			array_push($statusMsgs,'Password required.'); 
		}
		if ($this->enteredConfPW == null) { 
			//$this->errorMsg = 
			array_push($statusMsgs,'Password confirmation required.'); 
		}
		if ($this->enteredConfPW != null && $this->enteredConfPW != $this->enteredPW) { 
			//$this->errorMsg = 
			array_push($statusMsgs,'Password and confirmation password are different.'); 
		} 
		if(count($statusMsgs) == 0){ 
			$success = true; 
		} 
	$statusMsgs = array_unique($statusMsgs);
	$this->statusMsg = $statusMsgs;
    return $success; 
	} 
        
    
}
