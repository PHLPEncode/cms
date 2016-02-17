{%= extends file="mainLayout.tpl"  %}

{%= block name="content-Column" %}
	<h2>Gestione degli utenti</h2>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Ultimo accesso</th>
				<th>Azioni</th>
			</tr>
		</thead>
		
		
		<tbody>
			{%= $manageUserList %}
		</tbody>
	</table>
	
	<a href="#" class="btn btn-default" id="showuserpanel">+ Aggiungi un nuovo utente</a>
	<br /><br />
	<div id="newuserpanel" class="panel panel-default">
		<div class="panel-body">
			<h3>Crea un nuovo utente</h3>
			<form action="index.php?req=Admin/User/Action/New" method="post" id="newuserform">
				<label class="label label-default">Username</label>
				<input class="form-control" type="text" id="usrname" name="usrname" required />
				<br />
				<label class="label label-default">Password</label>
				<input class="form-control" type="password" id="psword" name="psword" required />
				<br />
				<label class="label label-default">Email</label>
				<br />
				<input class="form-control" type="email" id="email" name="email" required />
				<br />
				<button class="btn btn-default">Crea nuovo utente</button>
				<a href="#" id="closeuserpanel" class="btn btn-default">Chiudi</a>
			</form>
		</div>
	</div>
	
{%= /block %}


{%= block name="extra-script" %}
<script type="text/javascript" src="public/js/admin/user/showuserpanel.js"></script>
<script type="text/javascript" src="public/js/vendor/jquery.form.js">
	$("#newuserform").validate();
</script>
{%= /block %}