let output = document.getElementById('output');
let clearFlag = false;

function appendToOutput(value) {
    if (clearFlag) {
        output.value = '';
        clearFlag = false;
    }
    output.value += value;
}

function clearOutput() {
    output.value = '';
}

function calculateResult() {
    try {
        output.value = eval(output.value);
        clearFlag = true;
    } catch (error) {
        output.value = 'Error';
    }
}

function calculateSquareRoot() {
    try {
        output.value = Math.sqrt(eval(output.value));
        clearFlag = true;
    } catch (error) {
        output.value = 'Error';
    }
}

function calculateSine() {
    try {
        output.value = Math.sin(eval(output.value));
        clearFlag = true;
    } catch (error) {
        output.value = 'Error';
    }
}

function calculateCosine() {
    try {
        output.value = Math.cos(eval(output.value));
        clearFlag = true;
    } catch (error) {
        output.value = 'Error';
    }
}

function calculateTangent() {
    try {
        output.value = Math.tan(eval(output.value));
        clearFlag = true;
    } catch (error) {
        output.value = 'Error';
    }
}
