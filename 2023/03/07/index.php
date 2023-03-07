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
  <span class="a">some text</span>
</template>
<script>
window.addEventListener("load",() => {
	const tpl = document.getElementById("figure");
	const tplForInsert = tpl.content.cloneNode(true);
	console.log(tplForInsert);
})
</script>

