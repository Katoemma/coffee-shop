/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/*.html"],
  theme: {
    screens: {
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },
    colors: {
      "white": "#ffffff",
      "black": "#000000",
      "coffee": "#6F4E37",
      "reddish": "#ff4000",
      "grayish" : "#e6e6e6",
      "cream" : "#FEFBEA",
    },
    extend: {
      backgroundImage : {
        
      },
    },
  },
  plugins: [],
}

