{%= extends file="mainLayout.tpl" %}

{%= block name="content-Column" %}
	<form id="modifyForm" action="index.php?req=Admin/Article/Action/Modify" method="post">
		<input type="hidden" name="idPost" id="idPost" value="{%= $idPost %}" />
		<label for="titlePost" class="label label-default">Inserisci il titolo del nuovo post</label>
		<input type="text" class="form-control" id="titlePost" name="titlePost" required minlenght="10" value="{%= $titlePost %}" />
		<br />
		<label for="tagsPost" class="label label-default">Inserisci i tags per questo post (separati da una virgola)</label>
		<input type="text" class="form-control" name="tagsPost" id="tagsPost" value="{%= $tagsPost %}" />
		<br />
		<label for="textPost" class="label label-default">Inserisci il testo</label>
		<br />
		<textarea id="textPost" name="textPost" class="form-control" rows="15" required minlenght="20">{%= $textPost %}</textarea>
		<br />
		<label class="label label-default">Seleziona una categoria</label>
		{%= $selectList %}
		<br />
		<button class="btn btn-default">Modifica il post</button>
	</form>
{%= /block %}

{%= block name="extra-script" %}
	<script type="text/javascript" src="jquery.form.js">
	
		$("#postForm").validate();
	
	</script>
{%= /block %}