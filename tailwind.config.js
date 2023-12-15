/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'section2': "url('/public/home/section2/leCoach.png')",
        'section21': "url('/public/home/section2/bg1.png')",
        'section22': "url('/public/home/section2/bg2.png')",
        'login': "url('/public/login/bglogin.png')",
        'login2': "url('/public/login/bglogin2.png')",
        'login3': "url('/public/login/bglogin3.png')",
        'login4': "url('/public/login/bglogin4.png')",
        'table': "url('/public/bgtable.png')",
        'table2': "url('/public/bgtable2.png')",
        'table3': "url('/public/bgtable3.png')",
        'table4': "url('/public/bgtable4.png')",
        'table5': "url('/public/bgtable5.png')",
        'table6': "url('/public/bgtable6.png')",
        'table7': "url('/public/bgtable7.png')",
        'table8': "url('/public/bgtable8.png')",
        'table9': "url('/public/bgtable9.png')",
        'table10': "url('/public/bgtable10.png')",
        'table11': "url('/public/bgtable11.png')",
      },
      colors: {
        primary: {"50":"#fef2f2","100":"#fee2e2","200":"#fecaca","300":"#fca5a5","400":"#f87171","500":"#ef4444","600":"#dc2626","700":"#b91c1c","800":"#991b1b","900":"#7f1d1d","950":"#450a0a"}
      }
    },
    fontFamily: {
      'body': [
        'Inter',
        'ui-sans-serif',
        'system-ui',
        '-apple-system',
        'system-ui',
        'Segoe UI',
        'Roboto',
        'Helvetica Neue',
        'Arial',
        'Noto Sans',
        'sans-serif',
        'Apple Color Emoji',
        'Segoe UI Emoji',
        'Segoe UI Symbol',
        'Noto Color Emoji'
      ],
      'sans': [
        'Inter',
        'ui-sans-serif',
        'system-ui',
        '-apple-system',
        'system-ui',
        'Segoe UI',
        'Roboto',
        'Helvetica Neue',
        'Arial',
        'Noto Sans',
        'sans-serif',
        'Apple Color Emoji',
        'Segoe UI Emoji',
        'Segoe UI Symbol',
        'Noto Color Emoji'
      ],
      gasoek: ['Climate Crisis', 'sans-serif'],
      saroigo: ['SAROIGO', 'sans-serif'],
      bang: ['i Imbang', 'sans-serif'],
      week: ['the Weekend', 'sans-serif'],
      sadlyre: ['Giantrick Sadlyre', 'sans-serif'],
      neko: ['Neko Neco', 'sans-serif'],
      polz: ['Mono Polz', 'sans-serif'],
      muskey: ['NCL Aekabih Muskey', 'sans-serif'],
      regular: ['Unbounded', 'sans-serif'],
      regular2: ['Rubik', 'sans-serif'],
      gasoek2: ['SF Speakeasy', 'sans-serif'],

    }
  },
  plugins: [
    require('flowbite/plugin'),
    require('tailwindcss-animated')
  ],
}

