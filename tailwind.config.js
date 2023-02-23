/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js,php}"],
  theme: {
    extend: {
      height: {
        '70': '70vh',
        '71': '15vh',
        '88': '88vh',
        '0.5': '2px',
        '45': '45%',
      },
      width: {
        '1/7': '70%',
        '1/8': '30%',
      },
      gap: {
        '97': '440px'
      }
    },
  },
  plugins: [],
}
