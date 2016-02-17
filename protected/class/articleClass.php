<?php
class Article {
				
		public function Article() {
		}
		
		public function displayArticleForManage() {
			
			
			$return = ""; //variabile che ritorna la stringa con la tabella
			
			try {
				$list = R::find("articoli");
			}
			
			catch(RedException $e) {
				return
					"<div class='alert alert-danger'>
						<b>Errore nella ricerca dei dati: </b>"
						. $e->getMessage() .
					"</div>";
			}
			
			
			// Prende e mette a video tutti i dati richiesti per gestire gli articoli
			foreach($list as $result) {
				
				try {
				
					$idAutore = $result['id_autore'];
										
					$idStato = $result['id_stato'];
					
				
					$Autori = R::findOne("utenti", " id = :id ", [":id" => $idAutore]);
					$Stati = R::findOne("articoli_stati", " id = :id ", [":id" => $idStato]);
					
					$return = $return .
								"<tr>
									<td>" . $result['id'] . "</td>
									<td>" . $result['titolo'] . "</td>
									<td>" . $Autori['usrname'] . "</td>
									<td>" . $Stati['nome'] . "</td>
									<td>
											<a href='index.php?req=Admin/Article/Action/Remove&id=" . $result['id'] . "'><button class='btn btn-default'>Rimuovi</button></a>
											<a href='index.php?req=Admin/Article/Modify&id=" . $result['id'] . "'><button class='btn btn-default'>Modifica</button>
									</td>
								</tr>";
				}
				
				catch(RedException $e) {
					return
					"<div class='alert alert-danger'>
							<b>Errore nella creazione delle tabelle: </b>"
							. $e->getMessage() .
							"</div>";
				}
			}
			
			return $return;
		}
	
		public function showStateList() {
			
			$return = "";
			
			$state = R::findAll("articoli_stati");
			
			$return = $return . "<select name='stateList' id='stateList' class='form-control'>\n";
			
			for($i = 1; $i < count($state)+1; $i++) {
				
				$return = $return .
					"<option value='" . $state[$i]['id'] . "'>" . $state[$i]['nome'] . "</option>\n";
				
			}
			
			$return = $return . "</select>\n";
			
			return $return;
		}

		public function newArticle($titolo, $testo, $id_autore, $id_stato, $tags) {
			
			try {
				$articolo = R::dispense("articoli");
				$articolo->titolo = $titolo;
				$articolo->testo = $testo;
				$articolo->id_autore = $id_autore;
				$articolo->id_stato = $id_stato;
				$articolo->tags = $tags;
				
				$exec = R::store($articolo);
				
				$string = "<h2>
						Nuovo post inserito con successo
					 </h2>
						Complimenti, il post" . $titolo . " è stato inserito con successo all'interno
						del nostro database";
				
				return $string;
				
			}
			
			catch(RedException $e) {
				$string = "<div class='display display-error'>
							<b>Errore durante la creazione del nuovo articolo</b> 
							<br />" 
						. $e->getMessage() . 
						"</div>";
				
				return $string;
			}
		}
		
		public function removePost($id) {
			try {
				$article = R::load("articoli", $id);	
				R::trash($article);
				
				$string = "<h2>
						Post eliminato con successo
						</h2>
						Il post è stato correttamente eliminato dal database";
				
				return $string;
			}
				
			catch(RedException $e) {
				$string = "<div class='display display-error'>
							<b>Errore durante l'eliminazione del post</b> 
							<br />" 
						. $e->getMessage() . 
						"</div>";
				
				return $string;
			}
				
		}

		public function modifyPost($id, $titolo, $testo, $tags, $stato) {
			
			$return = "";
			
			try {
			
				$post = R::findOne("articoli", " id = :id ", [":id" => $id]);
			
				$post['titolo'] = $titolo;
				$post['tags'] = $tags;
				$post['testo'] = $testo;
				$post['id_stato'] = $stato;
				$post['id_autore'] = 1;
			
				$id = R::store($post);
				
				$return =
				"<div class='alert alert-success'>
						<b>Operazione completata</b>
						Il post selezionato <i>(" . $_POST['titlePost'] . ")</i> è stato correttamente modificato.
				</div>";
				
			}
			
			catch(RedException $e) {
				$return = 
				"<div class='alert alert-error'>
						<b>Errore</b>" . $e->getMessage() . 
				"</div>";
			}
				
			return $return;
			
		}
}