<style>
.row {}
.cell {
	display: inline-block;
	width: 50px;
	height: 50px;
	border: 1px black solid;
	margin: 3px;
	background: #eea;
}
</style>
<div class="row">
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
</div>
<div class="row">
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
</div><div class="row">
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
</div>
<template id="figure">
  &#x2658;
</template>
<script>
window.addEventListener("load",() => {
	console.log("doc is loaded");
	const tpl = document.getElementById("figure");
	console.log(tpl);
})
</script>

