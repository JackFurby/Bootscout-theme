/*
 * site JS
 */

/* Buttons */

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

/* Tables */

/* Update table styles to ensure border width and colour match user applied settings

CSS for tables disables all but bottom borders for cells. These take the varables specified in theme.json.
As the tables CSS could not use inherit use specified border width and colour are not applied correctly. The
following JS updates border, style and colour parameters from the table (where user specified properties are set)
and adds them to each td and th element for the table.

*/
document.addEventListener("DOMContentLoaded", function () {

	// Function to apply bottom borders to all cells of a table
	function updateTableBorders(table) {
	const style = table.style;

	// Width & style hierarchy: inline → default
	const borderWidth =
		style.borderBottomWidth ||
		style.borderWidth ||
		'var(--wp--custom--table-border-width)';

	const borderStyle =
		style.borderBottomStyle ||
		style.borderStyle ||
		'var(--wp--custom--table-border-style)';

	// Colour hierarchy: inline → class → default
	let borderColor =
		style.borderBottomColor ||
		style.borderColor;

	// Ignore unusable inline values
	if (!borderColor || borderColor === 'initial' || borderColor === 'inherit') {
		borderColor = '';
	}

	// Named WordPress colour class
	if (!borderColor) {
		const colorClass = [...table.classList].find(c =>
			c.startsWith('has-') && c.endsWith('-border-color') && c !== 'has-border-color'
		);

		// Set borderColor to the varable for the WP colour class
		if (colorClass) {
			const slug = colorClass
				.replace('has-', '')
				.replace('-border-color', '');
			borderColor = `var(--wp--preset--color--${slug})`;
		}
	}

	// Default fallback
	if (!borderColor) {
		borderColor = 'var(--wp--custom--table-border-color)';
	}

	// Update cell style properties
	table.querySelectorAll('td, th').forEach(cell => {
		cell.style.borderTop = '0';
		cell.style.borderLeft = '0';
		cell.style.borderRight = '0';
		cell.style.borderBottom = `${borderWidth} ${borderStyle} ${borderColor}`;
	});
}


	// Initialize all tables on page load
	document.querySelectorAll('.wp-block-table table').forEach(table => {
		updateTableBorders(table);

		// Observe changes to the inline style attribute (use in the page / post editor)
		const observer = new MutationObserver(mutations => {
			mutations.forEach(mutation => {
				if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
					updateTableBorders(table);
				}
			});
		});

		observer.observe(table, { attributes: true });
	});

});
