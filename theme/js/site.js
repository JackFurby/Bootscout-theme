/*
 * site JS
 */

// Buttons

// set outline buttons to change colour on hover and revert after hover
var outlineButtons = document.getElementsByClassName("wp-block-button is-style-outline");

// set text colour to white and background to text colour on hover
var outlineButtonHover = function() {
	var btnColor = getComputedStyle(this).color;
	var btnBgColor = getComputedStyle(this).backgroundColor;
	this.style.setProperty("background-color", btnColor, "important")

	// if outline button has no background, set background to white
	if (this.classList.contains("has-background") == false) {
		this.style.setProperty("color", "white", "important");
	} else {
		this.style.setProperty("color", btnBgColor, "important");
	}
};

// revert hover colour to how they were before
var outlineButtonHoverOver = function() {
	var btnColor = getComputedStyle(this).backgroundColor;
	var btnBgColor = getComputedStyle(this).color;

	// if outline button has no background, set background to transparent
	if (this.classList.contains("has-background") == false) {
		this.style.setProperty("background-color", "transparent", "important");
	} else {
		this.style.setProperty("background-color", btnBgColor, "important");
	}
	this.style.setProperty("color", btnColor, "important");
};

for (var i = 0; i < outlineButtons.length; i++) {
	outlineButtons[i].getElementsByTagName("a")[0].addEventListener('mouseover', outlineButtonHover, false);
	outlineButtons[i].getElementsByTagName("a")[0].addEventListener('mouseout', outlineButtonHoverOver, false);
}
