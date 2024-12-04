module.exports = {
  content: [
    './*.html',
    './**/*.html',
    './src/**/*.{js,jsx,ts,tsx}',
    './**/*.php',
  ],
  theme: {
    extend: {
      backgroundImage: {
        place: "url('place.png')",
      },
      fontSize: {
        sm: '0.8rem',
        base: '1rem',
        xl: '1.25rem',
        '2xl': '1.563rem',
        '3xl': '1.953rem',
        '4xl': '2.441rem',
        '5xl': '3.125rem',
        '6xl': '6.052rem',
        '7xl': '8.052rem',
      },
      colors: {
        blue: '#1DA1F2',
        body: '#6699CC',
        db: '#000C66',
        lb: '#0000ff',
        gold: '#D3B87A',
        lavender: '#E6E6FA',
        red: '#B22222',
        
      },
      fontFamily: {
        body: ['"calibri-light"'],
      },
    },
  },
  plugins: [],
};
