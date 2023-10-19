// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	mode: 'jit',
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/theme.json',
	],
	safelist: [
		'-rotate-45 ',
		'top-1',
		'bottom-1',
		'rotate-45',
		'opacity-100',
		'opacity-0',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				heebo: ['"Heebo"'],
			},
			colors: {
				purple: '#604BD8',
				'dark-purple': '#291B64',
				'very-dark-purple': '#1D153C',
				'lime-green': '#CFFF4D',
				'mid-grey': '#626262',
			},
			dropShadow: {
				card: '0px 3px 15px rgba(41, 27, 100, 0.2)',
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson')(require('../theme/theme.json')),

		// Add Tailwind Typography.
		require('@tailwindcss/typography'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
