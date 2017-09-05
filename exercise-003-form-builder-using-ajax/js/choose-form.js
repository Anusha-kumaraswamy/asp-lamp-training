var searchBox = document.getElementsByClassName("search");
var submitButton = document.getElementsByClassName("submit");
var labels = document.getElementsByClassName("label");
var errorMessage = document.getElementsByClassName("error-message");
submitButton[0].addEventListener("click",searchFile);


function searchFile() {
    document.getElementsByClassName("container")[0].innerHTML = "";
    searchBoxValue = searchBox[0].value;
    if (searchBoxValue == "") {
        if (labels[0].childNodes.length == 1) {
            errorMessage[0].innerHTML = "*Please enter a file name!!!";
        }
        return;
    }
    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function() {
    	if (httpRequest.status != 200) {
            errorMessage[0].innerHTML = httpRequest.statusText;
    	} else if (httpRequest.status == 200) {
            if (httpRequest.readyState == 4) {
                var content = JSON.parse(httpRequest.responseText);
                loadForm(content);
            }
        }
    }
    httpRequest.open("GET", "js/json/form-types/" + searchBox[0].value, true);
    httpRequest.send();
}