<input id="param" value="var"><input id="value" value="5">
<button id="send">Make HTTP GET request to server</button>
<script>
window.onload = () => {
	console.log("loaded");
	document.getElementById("send").onclick = () => {
		params = "?" + document.getElementById("param").value + "="
			+ document.getElementById("value").value
		console.log(params);
	}
}
</script>