/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                red: "#fff",
                darkBlue: "#020024",
                pink: "#e7005e",
            },
            fontFamily: {
                sans: ["Ubuntu"],
            },
        },
    },
    plugins: [],
};
