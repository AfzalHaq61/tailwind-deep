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
        brand: {
          light: "#6461A0",
          DEFAULT: "#9062A1",
          dark: "#1E1B1F",
        }
      },
      lineClamp: {
        10: "10",
        12: "12",
      },
    },
  },
  variants: {
    extend: {
      lineClamp: ["hover"],
      dropShadow: ["hover"],
    }
  },
  plugins: [require("@tailwindcss/line-clamp")],
}
