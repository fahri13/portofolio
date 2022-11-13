/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    // extend: {},
    extend: {
      colors: {
        primary: '#14b8a6',
        dark: '#0f172a'
      }
    },
  },
  plugins: [],
}
