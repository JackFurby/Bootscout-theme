/*
 * site editor JS
 */

// Buttons

// set text colour to white and background to text colour on hover
var editorOutlineButtonHover = function() {
	var btnColor = getComputedStyle(this.firstChild).color;
	this.firstChild.style.setProperty("background-color", btnColor, "important")
	this.firstChild.style.setProperty("color", "white", "important");
};

// revert hover colour to how they were before
var editorOutlineButtonHoverOver = function() {
	var btnColor = getComputedStyle(this.firstChild).backgroundColor;
	this.firstChild.style.setProperty("background-color", "transparent", "important");
	this.firstChild.style.setProperty("color", btnColor, "important");
};

window.onload = function(){
	// set outline buttons to change colour on hover and revert after hover
	var outlineButtons = document.getElementsByClassName("wp-block-button is-style-outline");

	for (var i = 0; i < outlineButtons.length; i++) {
		outlineButtons[i].addEventListener('mouseover', editorOutlineButtonHover, false);
		outlineButtons[i].addEventListener('mouseout', editorOutlineButtonHoverOver, false);

		// if outline button has background, set background to transparent
		outlineButtons[i].firstChild.style.setProperty("background-color", "transparent", "important");
	};
}
