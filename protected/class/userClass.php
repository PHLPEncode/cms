<?php
	class User {
		public function User() {
		}
		
		public function displayUserForManage() {
			
			$return = "";
			
			try {
				
				$userList = R::findAll("utenti");
			
				foreach($userList as $user) {
					$return .= 
					"<tr>
							<td>" . $user['id'] . "</td>
							<td>" . $user['usrname'] . "</td>
							<td>" . $user['email'] . "</td>
							<td>" . $user['ultimo_accesso'] . "</td>
							<td><a href='index.php?req=Admin/User/Action/Remove&id=" . $user['id'] . "'><button class='btn btn-default'>Rimuovi</button></a></td>
					</tr>";
				}
				
			}
			
			catch(RedException $e) {
				$return = $e->getMessage();
			}
			
			return $return;
		}
	
		public function removeUser($id) {
			$return = "";
			try {
				$user = R::load("utenti", $id);
				R::trash($user);
				$return = "
						<div class='alert alert-success'>
							<b>Utente eliminato con successo</b>
							L'utente è stato eliminato con successo dal sistema.
						</div>
					";
			}
			
			catch(RedException $e) {
				$return = "
						<div class='alert alert-error'>
							<b>Impossibile completare l'operazione</b>
							Errore durante l'eliminazione dell'utente: " . $e->getMessage() .
						"</div>
					";
			}
				
			return $return;
		}
		
		public function getLogin($usr, $psw) {
			try {
				$userData = R::findOne("utenti", " usrname = :usr ", [":usr" => $usr]);
				if(empty($userData)) {
					throw new Exception();
				}
				
				if($userData['psword'] != $psw) {
					throw new Exception();
				}
				
				return TRUE;
			}
			
			catch(RedException $e) {
				return FALSE;
			}
			
			catch(Exception $e) {
				return FALSE;
			}
		}

		public function newUser($usr, $psw, $email) {
			
			$return = "";
			
			try {
			
				$userTable = R::dispense("utenti");
			
				$userTable->usrname = $usr;
				$userTable->psword = $psw;
				$userTable->email = $email;
				
				R::store($userTable);
				
				$return = "
						<div class='alert alert-success'>
							<b>Operazione riuscita</b>
							L'utente è stato correttamente inserito
							all'interno del database.
						</div>";
				
				return $return;
				
			} catch(RedException $e) {
				$return = "<div class='alert alert-error'>
							<b>Errore</b>" 
							. $e->getMessage() .
						"</div>";
				return $return;
			}
		}
	}