<style>
.row {}
.cell {
	display: inline-block;
	width: 50px;
	height: 50px;
	border: 1px black solid;
	margin: 3px;
	background: #eea;
	vertical-align: bottom;
	text-align: center;
}
.figure {
	font-size: 40px;
	cursor: pointer;
	border-radius: 30px;
}
.figure::selection {
	color: #000;
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
  <div class="figure" draggable="true">
      &#x2658;
  </div>
</template>
<script>
window.addEventListener("load",() => {
	const tpl = document.getElementById("figure").content;	

	document.querySelectorAll(".cell")[0].appendChild(tpl.cloneNode(true));
	document.querySelectorAll(".cell")[4].appendChild(tpl.cloneNode(true));
	for (el of document.querySelectorAll(".figure")) {
		el.addEventListener("dragstart", ev => {
			console.log("drag started", ev.toElement);
		})
	}
	for (el of document.querySelectorAll(".cell")) {
			el.addEventListener("dragend", ev => {
			console.log("drag end", ev);
		})
	}
})
</script>

