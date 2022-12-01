/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "ronda-orange": "#F89E37",
        "ronda-ligth": "#F5F5F5",
        "ronda-dark": "#222425",
        "ronda-dark-medium": "#414141",
        "ronda-dark-ligth": "#C3C3C3",
      }
    },
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}
