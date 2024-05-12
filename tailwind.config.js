import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
          fontFamily: { 
            'franklin': ['Libre Franklin', 'sans-serif'],
          },
          colors:{
            primary: "#00D5FF",
            secondary: "#25EFD2",
            background: "#F8FAFA",
            tcolor: "#2E2F3A",
            purple: "#8E77D1"
          },
          backgroundImage: {
            'cloud': 'url("http://127.0.0.1:8000/storage/clouds-cloud-svgrepo-com.svg")',
          }
        },
      },
}
