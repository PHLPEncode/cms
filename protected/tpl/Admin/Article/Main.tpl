{%= extends file="mainLayout.tpl" %}

{%= block name="content-Column" %}

	<h2>Gestione dei post</h2>

	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Titolo</th>
				<th>Autore</th>
				<th>Stato</th>
				<th>Azioni</th>
			</tr>
		</thead>
		
		<tbody>
			{%= $managePostList %}
		</tbody>
		
	</table>
	
	<a href="index.php?req=Admin/Article/New"><button class='btn btn-default'>+ Aggiungi un nuovo post</button></a>
{%= /block %}