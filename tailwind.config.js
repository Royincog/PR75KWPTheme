/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./templates/**/*.{html,php}",
    "./src/**/*.{js,jsx,ts,tsx}", // Include any custom block files or JSX files
    "./**/*.php", // Include all PHP files if necessary
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
