module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            },
            fontWeight: {
                thin: 100,
                extralight: 200,
                light: 300,
                regular: 400,
                medium: 500,
                semibold: 600,
                bold: 700,
                extrabold: 800,
                black: 900,
            },
            colors: {
                // black: "#000000",
                test: "#0C21C1",
                "light-black": "#282828",
                "light-gray": "#ABABAB",
                "dark-gray": "#7D7D7D",
                "very-dark-gray": "#4D4D4D",
                "darker-gray": "#3D3D3D",
                white: "#ffffff",
            },
        },
    },
    plugins: [],
};

console.log("tailwind is working");
