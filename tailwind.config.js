const plugin = require("tailwindcss/plugin");
/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: "jit",


    content: [
        "./resources/**/*.blade.php",
    ],
    theme: {
        backgroundImage: ({theme}) => ({
            none: "none",
            "gradient-orange": "linear-gradient(310deg," + theme("colors.red.500") + "," + theme("colors.yellow.500") + ")",
            "gradient-red": "linear-gradient(310deg," + theme("colors.red.600") + "," + theme("colors.rose.400") + ")",
            "gradient-slate": "linear-gradient(310deg," + theme("colors.slate.600") + "," + theme("colors.slate.300") + ")",
            "gradient-dark-gray": "linear-gradient(310deg," + theme("colors.gray.900") + "," + theme("colors.slate.800") + ")",
            "gradient-gray": "linear-gradient(310deg," + theme("colors.gray.400") + "," + theme("colors.gray.100") + ")",

            "gradient-horizontal-dark": "linear-gradient(90deg,transparent,rgba(0,0,0,.4),transparent)",
            "gradient-horizontal-light": "linear-gradient(90deg,transparent,rgba(0,0,0,.1),transparent)",
        }),
        extend: {},
        container: {
            center: true,
            padding: '1rem',
        },
        letterSpacing: {
            1: '.1em',
            2: '.2em',
        }

    },
    plugins: [
        plugin(function ({matchUtilities, theme}) {
            matchUtilities({
                "bg-gradient": (angle) => ({
                    "background-image": `linear-gradient(${angle}, var(--tw-gradient-stops))`,
                }),
            });
        })
    ],
}
