tailwind.config = {
  theme: {
    fontFamily: {
      display: "Playfair Display",
      body: "Lato",
    },
    colors: {
      transparent: "transparent",
      current: "currentColor",
      kinoblack: "#171716",
      kinodeepblack: "#000000",
      kinogrey: "#DEDEDE",
      kinored: "#751010",
      kinowhite: "#FCFBF9",
      white: "#ffffff",
      black: "#000000",
    },
    extend: {
      maxWidth: {
        "1/2": "50%",
        "1/3": "33.333%",
        "1/20": "5%",
        "2/20": "10%",
        "3/20": "15%",
        "4/20": "20%",
        "5/20": "25%",
        "6/20": "30%",
        "7/20": "35%",
        "8/20": "40%",
        "9/20": "45%",
        "10/20": "50%",
        "11/20": "55%",
        "12/20": "60%",
        "13/20": "65%",
        "14/20": "70%",
        "15/20": "75%",
        "16/20": "80%",
        "17/20": "85%",
        "18/20": "90%",
        "19/20": "95%",
      },
      fontSize: {
        big: ["180px", "150px"],
      },
    },
    letterSpacing: {
      tightest: "-.055em", //ls -5.5% h1
      tighter: "-.04em", //ls -4% h2, h3, h4
      tight: "-.02em", //ls -2% h1
      small: "-0.01em", //ls -1% burger navlink
      normal: "0",
      wide: ".01em", //ls 1% body-light
      wider: ".03em", //ls 3% h4 body-semi-bold
      widest: ".34em", //ls 34% styled h2 Joanna helander
      mega: "1.5rem",
    },
    lineHeight: {
      headingOne: "96px",
      headingTwo: "112px",
      headingThree: "150px",
      headingFour: "208px",
      links: "24px",
    },
  },
};
