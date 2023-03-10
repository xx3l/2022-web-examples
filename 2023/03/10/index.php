<input id="param" value="var"><input id="value" value="5">
<button id="send">Make HTTP GET request to server</button>
<div id="response"></div>
<script>
window.onload = () => {
	console.log("loaded");
	document.getElementById("send").onclick = () => {
		params = "backend.php?" + document.getElementById("param").value + "="
			+ document.getElementById("value").value
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