{%= extends file="mainLayout.tpl" %}

{%= block name="content-Column" %}

	<h2>Login</h2>

	<form action="index.php?req=Admin/User/Action/Login" method="post" id="loginForm">
		<label class="label label-default" for="usrname">Username</label>
		<input type="text" class="form-control" id="usrname" name="usrname" required />
		<br />
		<label class="label label-default" for="psword">Password</label>
		<input type="password" class="form-control" id="psword" name="psword" required />
		<br />
		<button class="btn btn-default">Effettua il login</button>
	</form>
{%= /block %}


{%= block name="extra-script" %}
<script type="text/javascript" src="public/js/vendor/jquery.form.js">
	$("#loginForm").validate();
</script>
{%= /block %}