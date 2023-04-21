tailwind.config = {
    content: [
        './views/*.ejs',
        './views/partials/*.ejs',
        './views/adminpanel/*.ejs',
        './views/partials/dropdowns/*.ejs',
        './views/partials/modals/*.ejs',
        './views/partials/bank/*.ejs',
        './views/partials/sity/*.ejs',
        './node_modules/flowbite/**/*.js'
    ],
    theme: {
        extend: {
            backgroundImage: {
                'slider': "url('/src/img/Group91.svg')",
            },
            colors: {
                'tavern-black': '#111414',
                'tavern-link': '#1d72f2',
                'tavern-grid': '#1C1C1C',
                'tavern-grid-br': '#3F3F3F',
                'tavern-input-br': '#1d72f2',
                'tavern-bank': '#CDDFFF',
                'tavern-bg-bank': '#1E70FF',
                'white/15': 'hsla(0,0%,100%,.15);',
            },
            height: {
                '18': '4.66rem',
            },
            spacing: {
                '1000': '50rem',
                '18': '4.5rem',
            },
        },
    }
}