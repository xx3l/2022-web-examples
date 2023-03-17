<!doctype html>
<html>
<head></head>
<body>
<div class="content">
<div>
<button id="more">Give me more!</button>
</body>
<script>
function getSomeMore() {
	fetch("backend.php")
		.then(function(resp) {
			return resp.json();
		})
		.then(function(set) {
			console.log(set);
			html = '';
			for (example of set) {
				html += example.number1 + example.action +example.number2 + "<br>" ;
			}
			//html = 
		})
}
window.onload = function() {
	console.log("page is loaded");
	document.getElementById("more").onclick = function() {
		getSomeMore();
	}
	getSomeMore();
}
</script>
</html>