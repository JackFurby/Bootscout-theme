/*
 * site JS
 */

// Buttons

// set outline buttons to change colour on hover and revert after hover
var outlineButtons = document.getElementsByClassName("wp-block-button is-style-outline");

// set text colour to white and background to text colour on hover
var outlineButtonHover = function() {
	var btnColor = getComputedStyle(this.getElementsByTagName("a")[0]).color;
	this.getElementsByTagName("a")[0].style.setProperty("background-color", btnColor, "important")
	this.getElementsByTagName("a")[0].style.setProperty("color", "white", "important");
};

// revert hover colour to how they were before
var outlineButtonHoverOver = function() {
	var btnColor = getComputedStyle(this.getElementsByTagName("a")[0]).backgroundColor;
	this.getElementsByTagName("a")[0].style.setProperty("background-color", "transparent", "important");
	this.getElementsByTagName("a")[0].style.setProperty("color", btnColor, "important");
};

for (var i = 0; i < outlineButtons.length; i++) {
	outlineButtons[i].addEventListener('mouseover', outlineButtonHover, false);
	outlineButtons[i].addEventListener('mouseout', outlineButtonHoverOver, false);

	// if outline button has background, set background to transparent
	outlineButtons[i].getElementsByTagName("a")[0].style.setProperty("background-color", "transparent", "important");
}

// darken regular buttons (no outline)
var regularButtons = document.querySelectorAll( '.wp-block-button:not(.is-style-outline)' );

// darken background colour by 10%
var regularButtonHover = function() {
	var btnColor = getComputedStyle(this.getElementsByTagName("a")[0]).backgroundColor;
	var newBgColour = LightenDarkenColor(rgbToHex(btnColor), 10);
	this.getElementsByTagName("a")[0].style.setProperty("background-color", newBgColour, "important");
};

// revert background colour (lighten by 10%)
var regularButtonHoverOver = function() {
	var btnColor = getComputedStyle(this.getElementsByTagName("a")[0]).backgroundColor;
	var newBgColour = LightenDarkenColor(rgbToHex(btnColor), -10);
	this.getElementsByTagName("a")[0].style.setProperty("background-color", newBgColour, "important");
};

for (var i = 0; i < regularButtons.length; i++) {
	regularButtons[i].addEventListener('mouseover', regularButtonHover, false);
	regularButtons[i].addEventListener('mouseout', regularButtonHoverOver, false);
}

// utils

// RGB to hex (https://stackoverflow.com/questions/5623838/rgb-to-hex-and-hex-to-rgb)
function componentToHex(c) {
	var hex = c.toString(16);
	return hex.length == 1 ? "0" + hex : hex;
}

function rgbToHex(rgb) {
	// extract RGb values
	var rgbSplit = rgb.replace(/[^\d,]/g, '').split(',');
	// convert rgb values to hex
	return "#" + componentToHex(Number(rgbSplit[0])) + componentToHex(Number(rgbSplit[1])) + componentToHex(Number(rgbSplit[2]));
}

// lighten / darken hex colours (https://jonlabelle.com/snippets/view/javascript/lighten-and-darken-colors-in-javascript)
function LightenDarkenColor(colorCode, amount) {
	var usePound = false;

	if (colorCode[0] == "#") {
		colorCode = colorCode.slice(1);
		usePound = true;
	}

	var num = parseInt(colorCode, 16);

	var r = (num >> 16) + amount;

	if (r > 255) {
		r = 255;
	} else if (r < 0) {
		r = 0;
	}

	var b = ((num >> 8) & 0x00FF) + amount;

	if (b > 255) {
		b = 255;
	} else if (b < 0) {
		b = 0;
	}

	var g = (num & 0x0000FF) + amount;

	if (g > 255) {
		g = 255;
	} else if (g < 0) {
		g = 0;
	}

	return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16);
}
