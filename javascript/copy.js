function copyText(elementId) {
    var textToCopy = document.getElementById(elementId);
    var tempInput = document.createElement("input");
    tempInput.value = textToCopy.textContent;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    
    alert("Text copied to clipboard!");
  }