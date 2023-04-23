/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js,php}"],
	theme: {
		fontFamily: {
			'display': ['Horizon'],
			'body': ['Montserrat'],
		},
		extend: {
		colors: {
			'blue': {
				100: '#CAF0F8',
				200: '#ADE8F4',
				300: '#90E0EF',
				400: '#48CAE4',
				500: '#00B4D8',
				600: '#0096C7',
				700: '#0077B6',
				800: '#023E8A',
				900: '#03045E'
			},
			'cyan': {
				50: '#D9ED92',
				100: '#B5E48C',
				200: '#00D98C',
				300: '#76C893',
				400: '#52B69A',
				500: '#34A0A4',
				600: '#168AAD',
				700: '#1A759F',
				800: '#1E6091',
				900: '#184E77'
			},
			'purple': {
				50: '#80FFD8',
				100: '#72EFDD',
				200: '#64DFDF',
				300: '#56CFE1',
				400: '#48BFE3',
				500: '#4EA8DE',
				600: '#5390D9',
				700: '#5E60CE',
				800: '#6930C3',
				900: '#7400B8'
			}
		}
		}
	},
  plugins: [],
}
