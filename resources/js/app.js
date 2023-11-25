require("./bootstrap");

import Split from "split.js";

Split(["#split-0", "#split-1"], {
    minSize: [400, 400],
});

Split(["#split-3", "#split-4"], {
    sizes: [50, 50],
    direction: "vertical",
});

import ace from "ace-builds/src-noconflict/ace";
import "ace-builds/src-noconflict/theme-dracula";
import "ace-builds/src-noconflict/mode-javascript";

document.addEventListener("DOMContentLoaded", function () {
    const editor = ace.edit("codeInput");
    editor.setTheme("ace/theme/dracula");
    editor.session.setMode("ace/mode/javascript");
    editor.getSession().setUseWrapMode(true);
});

// import ace from "ace-builds/src-noconflict/ace";
// import "ace-builds/src-noconflict/theme-twilight";
// import "ace-builds/src-noconflict/mode-javascript";

// document.addEventListener("DOMContentLoaded", function () {
//     const editor = ace.edit("codeInput");
//     editor.setTheme("ace/theme/twilight");

//     const languageSelect = document.getElementById("languageSelect");
//     languageSelect.addEventListener("change", function () {
//         const selectedLanguage = languageSelect.value;
//         const languageModes = {
//             45: "assembly_x86",
//             46: "sh",
//             47: "plain_text",
//             75: "c_cpp", // C (Clang 7.0.1)
//             76: "c_cpp", // C++ (Clang 7.0.1)
//             48: "c_cpp", // C (GCC 7.4.0)
//             52: "c_cpp", // C++ (GCC 7.4.0)
//             49: "c_cpp", // C (GCC 8.3.0)
//             53: "c_cpp", // C++ (GCC 8.3.0)
//             50: "c_cpp", // C (GCC 9.2.0)
//             54: "c_cpp", // C++ (GCC 9.2.0)
//             86: "clojure",
//             51: "csharp",
//             77: "cobol",
//             55: "lisp",
//             56: "d",
//             57: "elixir",
//             58: "erlang",
//             44: "plain_text", // Executable
//             87: "fsharp",
//             59: "fortran",
//             60: "golang",
//             88: "groovy",
//             61: "haskell",
//             62: "java",
//             63: "javascript",
//             78: "kotlin",
//             64: "lua",
//             89: "plain_text", // Multi-file program
//             79: "objective_c",
//             65: "ocaml",
//             66: "octave",
//             67: "pascal",
//             85: "perl",
//             68: "php",
//             43: "plain_text", // Plain Text
//             69: "prolog",
//             70: "python",
//             71: "python",
//             80: "r",
//             72: "ruby",
//             73: "rust",
//             81: "scala",
//             82: "sql",
//             83: "swift",
//             74: "typescript",
//             84: "vbnet",
//         };

//         const selectedMode = languageModes[selectedLanguage];

//         if (selectedMode) {
//             const mode = `ace/mode/${selectedMode}`;
//             editor.session.setMode(mode);
//             console.log(mode);
//         } else {
//             console.error("Mode not found for selected language");
//         }
//     });
// });
