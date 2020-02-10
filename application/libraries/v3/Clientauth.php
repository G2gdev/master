<?php
class Clientauth {
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function login($umap) {
		$this->CI->load->model ( 'v3/clientusers/user_model', 'clientuser' );
		$user_details = $this->CI->clientuser->getUserDetailByUsername( $umap['username'] );
		$map = array();
		if (count($user_details) > 0) {
			if (MD5($umap['password']) === $user_details[0]['password']) {
				if ($user_details[0]['client_status'] == 1) {
					$user = array();
					$user['brand_name'] = $user_details[0]['brand_name'];
					$user['username'] = $user_details[0]['username'];
					$user['id'] = $user_details[0]['id'];
					$map ['status'] = 1;
					$map ['msg'] = "Logged in successfully.";
					$map ['result'] = $user;
					return $map;
				} else {
					$map ['status'] = 0;
					$map ['msg'] = "Login to this site have been blocked by Admin.";
					$errors = array ();
					array_push ( $errors, "Unautharised access blocked." );
					$map ['errormsg'] [] = $errors;
					return $map;
				}
			} else {
				$map ['status'] = 0;
				$map ['msg'] = "Username or password is wrong.";
				$errors = array ();
				array_push ( $errors, "Username or password is wrong." );
				$map ['errormsg'] [] = $errors;
				return $map;
			}
		} else {
			$map ['status'] = 0;
			$map ['msg'] = "Username or password is wrong.";
			$errors = array ();
			array_push ( $errors, "Username or password is wrong." );
			$map ['errormsg'] [] = $errors;
			return $map;
		}
		
	}
	
	public function logout() {
		
	}
	
	/**
	 * Code For Edit Password
	 * @return integer
	 */
	public function editPassword($data)
	{
		$this->CI->load->model ( 'v3/clientusers/user_model', 'clientuser'  );
		return $userdetail = $this->CI->clientuser->editPassword($data);
	}
	
	/**
	 * Code For Check Password
	 * @return integer
	 */
	public function  checkPassword($data)
	{
		$response = array();
		$this->CI->load->model ( 'v3/clientusers/user_model', 'clientuser'  );
		$result = $this->CI->clientuser->checkPassword($data);
		if(count($result) > 0)
		{
			$response['status'] = 1;
			$response['msg'] = "Record Found";
		}
		else
		{
				
			$response['status'] = 0;
			$response['msg'] = "Old Password Not correct";
		}
		return $response;
	}
	
	public function getClients() {
		$this->CI->load->model ( 'v3/clientusers/user_model', 'clientuser'  );
		$result = $this->CI->clientuser->getClients();
		return $result;
	}
	
	public function getClientRestaurants($client_id) {
		$this->CI->load->model ( 'v3/clientusers/user_model', 'clientuser'  );
		$result = $this->CI->clientuser->getClientRestaurants($client_id);
		return $result;
	}
	
	public function addClientRestaurant($data) {
		$this->CI->load->model ( 'v3/clientusers/user_model', 'clientuser'  );
		$result = $this->CI->clientuser->addClientRestaurant($data);
	}
	
	public function deleteClientRestaurant($client_id) {
		$this->CI->load->model ( 'v3/clientusers/user_model', 'clientuser'  );
		$this->CI->clientuser->deleteClientRestaurant($client_id);
	}
	
	public function getClientById($id) {
		$this->CI->load->model ( 'v3/clientusers/user_model', 'clientuser'  );
		$result = $this->CI->clientuser->getUserById($id);
		return $result;
	}
	
	public function addClient($client) {
		$this->CI->load->model ( 'v3/clientusers/user_model', 'clientuser'  );
		$client['password'] = MD5($client['password']);
		return $this->CI->clientuser->addUser($client);
	} 
	
	public function updateClient($client) {
		$this->CI->load->model ( 'v3/clientusers/user_model', 'clientuser'  );
		if(!empty($client['password']))
		$client['password'] = MD5($client['password']);
		return $this->CI->clientuser->updateUser($client);
	}
	
	
}
