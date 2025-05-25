/*
 * site JS
 */

function outlineButtonHover() {
	const btnColor = getComputedStyle(this).color;
	const btnBgColor = getComputedStyle(this).backgroundColor;

	this.style.setProperty("background-color", btnColor, "important");

	if (!this.classList.contains("has-background")) {
		this.style.setProperty("color", "white", "important");
	} else {
		this.style.setProperty("color", btnBgColor, "important");
	}

	// Change border color to match background to make it less visible
	this.style.setProperty("border-color", btnColor, "important");
}

function outlineButtonHoverOut() {
	const btnColor = getComputedStyle(this).backgroundColor;
	const btnBgColor = getComputedStyle(this).color;

	if (!this.classList.contains("has-background")) {
		this.style.setProperty("background-color", "transparent", "important");
	} else {
		this.style.setProperty("background-color", btnBgColor, "important");
	}
	this.style.setProperty("color", btnColor, "important");

	// Restore original border color (usually matches the text color)
	this.style.setProperty("border-color", btnColor, "important");
}

// Attaches event listeners to all "outline-style" buttons
function attachOutlineButtonEvents(container = document) {
	// Front end: <a> inside .wp-block-button
	// Editor: .wp-block-button__link directly
	const selector = '.wp-block-button.is-style-outline .wp-block-button__link';

	const buttons = container.querySelectorAll(selector);

	buttons.forEach(button => {
		// Remove existing listeners to avoid duplicates (optional)
		button.removeEventListener('mouseover', outlineButtonHover);
		button.removeEventListener('mouseout', outlineButtonHoverOut);

		// Add hover effects
		button.addEventListener('mouseover', outlineButtonHover, false);
		button.addEventListener('mouseout', outlineButtonHoverOut, false);
	});
}

// Front end
document.addEventListener("DOMContentLoaded", function () {
	attachOutlineButtonEvents(document);
});

// Block editor
if (typeof wp !== 'undefined' && wp.domReady) {
	wp.domReady(function () {
		// Use MutationObserver to handle dynamic changes in editor
		const observer = new MutationObserver(() => {
			const iframe = document.querySelector('.block-editor-writing-flow iframe');

			if (iframe && iframe.contentDocument) {
				attachOutlineButtonEvents(iframe.contentDocument);
			} else {
				// Fallback: attach directly to editor DOM if not using iframe
				attachOutlineButtonEvents(document.querySelector('.block-editor-writing-flow'));
			}
		});

		observer.observe(document.body, { childList: true, subtree: true });

		// Initial run
		setTimeout(() => {
			const iframe = document.querySelector('.block-editor-writing-flow iframe');

			if (iframe && iframe.contentDocument) {
				attachOutlineButtonEvents(iframe.contentDocument);
			} else {
				attachOutlineButtonEvents(document.querySelector('.block-editor-writing-flow'));
			}
		}, 300);
	});
}
