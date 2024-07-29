/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.{php,js}",
    "!./node_modules",
  ],
  theme: {
    extend: {
      colors: {
        base: {
          'black-primary': 'var(--color-black-primary)',
          'black-secondary': 'var(--color-black-secondary)',
          'white-primary': 'var(--color-white-primary)',
          'white-secondary': 'var(--color-white-secondary)',
          'gray': 'var(--color-gray)',
        },
        contrast: {
          'purple': 'var(--color-purple)',
          'red': 'var(--color-red)',
          'orange': 'var(--color-orange)',
          'light-orange': 'var(--color-light-orange)',
        },
      },
      fontFamily: {
        inter: ['inter', 'sans-serif'],
        bai: ['bai', 'Arial'],
      },
      spacing: {
        m3: '30px',
        m6: '60px',
      },
    },
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px',
    },
    lineHeight: {
      '1': '1',
      '2': '1.2',
      '3': '1.3',
      '4': '1.4',
      '6': '1.6',
      '8': '1.8',
      '10': '2',
    }
  },
  plugins: [],
}