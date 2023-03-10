<input id="v1" value="51"><input id="v2" value="52">
<button id="send">Make HTTP GET request to server</button>
<div id="response"></div>
<script>
window.onload = () => {
	console.log("loaded");
	document.getElementById("send").onclick = () => {
		params = "backend.php?v1=" + document.getElementById("v1").value + "&v2="
			+ document.getElementById("v2").value
		console.log(params);
		fetch(params)
			.then(response => response.text())
			.then(data => {
				document.getElementById("response").innerText = data;
			});
		console.log("code is woking still");
	}
}
</script>