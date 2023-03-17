<!doctype html>
<html>
<head>
<style>
span.example { 
  width: 100px; 
  display: inline-block;
  text-align: right;
  padding: 0 10px;
}
input {
	width: 50px;
}
</style>
</head>
<body>
<div class="content">
  <div class="end"></div>
</div>
<button id="more">Give me more!</button>
</body>
<script>
function getSomeMore() {
	fetch("backend.php")
		.then(function(resp) {
			return resp.json();
		})
		.then(function(set) {
			html = '';
			for (example of set) {
				console.log(example);
				html += `<div><span class="example">${example.number1} ${example.action} ${example.number2} = </span><input type="number"><button>Check</button></div>`;
			}
			html += `<div class="end"></div>`;
			document.querySelector('.content .end').outerHTML = html;
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