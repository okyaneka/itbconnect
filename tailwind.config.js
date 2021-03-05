const defaultTheme = require('tailwindcss/defaultTheme');

let colors = {
  "primary": {
    "50": "#e7ebf5",
    "100": "#c3cce7",
    "200": "#9cabd7",
    "300": "#758bc7",
    "400": "#5571bb",
    "500": "#3358b0",
    "DEFAULT": "#3358b0",
    "600": "#2c50a6",
    "700": "#22479a",
    "800": "#193d8e",
    "900": "#082c78"
  },
  "yellow": {
    "50": "#fef8e0",
    "100": "#fdecb0",
    "200": "#fcdf7c",
    "300": "#fad443",
    "400": "#fac905",
    "DEFAULT": "#fac905",
    "500": "#fac000",
    "600": "#fbb100",
    "700": "#fc9e00",
    "800": "#fd8c00",
    "900": "#fe6b00"
  },

  amber: "#fac705",
  rasberry: "#ED1651"
};

module.exports = {
  purge: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/laravel/jetstream/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      colors,
      borderColor: colors,
      textColor: colors,
      fontFamily: {
        sans: ['Radikal'],
      },
      zIndex: {
        '-10': '-10'
      }
    },
  },

  variants: {
    extend: {
      opacity: ['disabled'],
    },
  },

  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
