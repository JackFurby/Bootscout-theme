jQuery(document).ready(function($) {
	var el = wp.element.createElement,
		registerBlockType = wp.blocks.registerBlockType,
		blockStyle = { backgroundColor: '#900', color: '#fff', padding: '20px' };

	wp.blocks.registerBlockType("bootscout/row", {
		title: ( 'Row' ),
		description: ( 'Adds an element to place items on a single row' ),
		category: 'layout',
		icon: 'editor-kitchensink',
		keywords: [ ( 'line' ) ],
		align: true,
		align: [ 'left', 'right', 'center' ],

		edit: function() {
			return el( 'div', { style: 'row '}, 'hi' );
		},

		save( props ) {
			return wp.element.createElement(
				'div',
				null,
				props.attributes.content
			);
		},
	});

	wp.blocks.registerBlockType("bootscout/sections", {
		title: ( 'Sections' ),
		description: ( 'A block containing cards about sections' ),
		category: 'widgets',
		icon: 'networking',
		keywords: [ ( 'section' ), ( 'scouts' ), ( 'links' ) ],
		attributes: {
			url: {
				type: 'string',
				source: 'attribute',
				selector: 'img',
				attribute: 'src',
			},
		},
		align: true,
		align: [ 'left', 'right', 'center' ],
		alignWide: false,

		edit: function() {
			return el( 'p', { style: blockStyle }, 'Hello editor.' );
		},

		save: function() {
			return el( 'p', { style: blockStyle }, 'Hello saved content.' );
		},
	});
});
