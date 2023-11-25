const codeInput = document.getElementById("codeInput");

const defaultValue = `/**
  * @param {number[]} nums
  * @param {number} target
  * @return {number[]}
*/
var twoSum = function twoSum(nums, target) {
    for (let i = 0; i < nums.length; i++) {
        for (let j = i + 1; j < nums.length; j++) {
            if (nums[i] + nums[j] === target) {
                return [i, j];
            }
        }
    }
  return [];
}`;

codeInput.textContent = defaultValue;

$(document).ready(function () {
    $(".result-content").addClass("hide-content");
    $(".test-case").addClass("console-menu-isActive");

    $(".test-case").click(function () {
        $(".result").removeClass("console-menu-isActive");
        $(".test-case").addClass("console-menu-isActive");
        $(".result-content")
            .removeClass("show-content")
            .addClass("hide-content");
        $(".test-case-content")
            .removeClass("hide-content")
            .addClass("show-content");
    });

    $(".result").click(function () {
        $(".test-case").removeClass("console-menu-isActive");
        $(".result").addClass("console-menu-isActive");
        $(".test-case-content")
            .removeClass("show-content")
            .addClass("hide-content");
        $(".result-content")
            .removeClass("hide-content")
            .addClass("show-content");
    });
});

const textarea = document.getElementById("single-line-textarea");

function adjustTextAreaHeight() {
    textarea.style.height = "auto";
    textarea.style.height = textarea.scrollHeight + "px";
}

textarea.addEventListener("input", function () {
    adjustTextAreaHeight();
    const lines = this.value.split("\n");
    const totalLines = lines.length;
    this.rows = totalLines > 1 ? totalLines : 1;
});

textarea.addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
        adjustTextAreaHeight();
    }

    if (event.key === "Backspace") {
        const lines = this.value.split("\n");
        const currentCursorPosition = this.selectionStart;
        const currentLineIndex =
            this.value.substr(0, currentCursorPosition).split("\n").length - 1;

        if (
            lines.length > 1 &&
            currentLineIndex > 0 &&
            lines[currentLineIndex].length === 0
        ) {
            this.rows -= 1;
            adjustTextAreaHeight();
        }
    }
});
