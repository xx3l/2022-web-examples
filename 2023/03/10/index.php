<!doctype html>
<html>
<head></head>
<body>
<div class="content">
<div>
<button>Give me more!</button>
</body>
<script>
function getSomeMore() {
	fetch("backend.php")
		.then(resp => resp.json())
		.then(json => console.log(json))
}
window.onload = function() {
	console.log("page is loaded");
	getSomeMore();
}
</script>
</html>