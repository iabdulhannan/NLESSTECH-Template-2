module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      screens: {
        'xxs': '300px',
        'xs': '400px',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ],
  content: ['./src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js']
}
