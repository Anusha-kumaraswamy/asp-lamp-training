//To get the json string that gives the data to build the form 
function getJsonForm() {
    var jsonForm = '{"registration": [{"fieldName":"firstName","fieldTagName":"input","fieldType":"text","description":"First name","pattern":"([a-zA-Z][ ]?)+","fieldRequirement":"true"},{"fieldName":"lastName","fieldTagName":"input","fieldType":"text","description":"Last name", "pattern":"([a-zA-Z][ ]?)+"},{"fieldName":"age","fieldTagName":"input","fieldType":"number","description":"Age","min":"5"},{"fieldName":"email","fieldTagName":"input","fieldType":"email","description":"E-mail","pattern":"[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}","fieldRequirement":"true"},{"fieldName":"password","fieldTagName":"input","fieldType":"password","description":"Password","fieldRequirement":"true"},{"fieldName":"mobile","fieldTagName":"input","fieldType":"text","description":"Mobile number", "pattern":"[7-9][0-9]{9}","fieldRequirement":"true"},{"fieldName":"gender","fieldType":"radio","fieldTagName":"input","description":"Gender","fieldValue":"Male","fieldRequirement":"true"},{"fieldName":"gender","fieldType":"radio","fieldTagName":"input","description":"Gender","fieldValue":"Female","fieldRequirement":"true"},{"fieldName":"department","fieldTagName":"select","description":"Department","options":["Lamp","Mobility","Bigdata"]},{"fieldValue":"Register","fieldName":"Register","fieldTagName":"input","fieldType":"submit","description":"Register","action":"http://www.register.com"}]}';
    return jsonForm;
}

//To set attributes for the form
function setFormAttributes(formKeyName) {
    var newForm = document.createElement("form");
    var formTitle = document.createElement("h1");
    var formTitleContent = document.createTextNode(formKeyName.toUpperCase());
    appendChildTag(formTitleContent, formTitle);
    appendChildTag(formTitle, newForm);
    newForm.setAttribute("method","post");
    newForm.setAttribute("name",formKeyName);
    return newForm;
}
    
//To set attributes for the select tag 
function setSelectTagAttributes(select, appendTag, parentTag) {
    var selectLabelTag = document.createElement("label");
    selectLabelTag.innerHTML = select["description"] + " : ";
    appendChildTag(selectLabelTag, parentTag);
    for (var optionIndex = 0; optionIndex < select["options"].length; optionIndex++) { 
        var opt = document.createElement('option');
        opt.value = select["options"][optionIndex];
        opt.innerHTML = select["options"][optionIndex];
        opt.name = select["options"][optionIndex]; 
        appendChildTag(opt, appendTag);
    }
}

//To set common tag attributes
function setCommonTagAttributes(common, appendTag) {
    appendTag.setAttribute("type", common["fieldType"]);
    if (common["fieldValue"]) {
        appendTag.setAttribute("value", common["fieldValue"]);
    }
}

//To set attributes for the input tag
function setInputTagAttributes(input, appendTag, parentTag) {
    switch (input["fieldType"]) {
    case RADIO_TYPE:
    case CHECKBOX_TYPE:
        if (input["fieldType"] === "radio"|| input["fieldType"] === "checkbox") {
            var labelTag = document.createElement("label");
            labelTag.innerHTML = input["fieldValue"];
            appendChildTag(labelTag, parentTag);
        }
        break;
    case SUBMIT_TYPE:
        appendTag.setAttribute("formaction", input["action"]);
        break;
    case NUMBER_TYPE:
        appendTag.setAttribute("min", input["min"]);
        appendTag.setAttribute("max", input["max"]);
    case TEXT_TYPE:
    case EMAIL_TYPE:
    case URL_TYPE:
    case PASSWORD_TYPE:
        if (input["pattern"]) {
            appendTag.setAttribute("pattern", input["pattern"]);
        }
        appendTag.setAttribute("placeholder", input["description"]);
    }
}

//To add new line
function addNewLine(parentTag) {
    var nextLine = document.createElement("br");
    appendChildTag(nextLine, parentTag);
}

//To append a new tag to the parent tag
function appendChildTag(childTag, parentTag) {
    parentTag.appendChild(childTag);
}

window.onload = loadForm;

//To load the form
function loadForm() {
    var jsonString = getJsonForm();
    var jsForm = JSON.parse(jsonString);
    for (var formIndex = 0; formIndex < Object.keys(jsForm).length; formIndex++) {
        var formKeyName = Object.keys(jsForm)[formIndex];
        var form = setFormAttributes(formKeyName);
        for (var iteration = 0; iteration < jsForm[formKeyName].length; iteration++) { 
            var appendTag = document.createElement(jsForm[formKeyName][iteration]["fieldTagName"]);
            appendTag.setAttribute("name", jsForm[formKeyName][iteration]["fieldName"]);
            appendTag.required = jsForm[formKeyName][iteration]["fieldRequirement"];
            switch (jsForm[formKeyName][iteration]["fieldTagName"]) {
            case SELECT_TAG:
                setSelectTagAttributes(jsForm[formKeyName][iteration], appendTag, form);
                break;
            case INPUT_TAG:
                setInputTagAttributes(jsForm[formKeyName][iteration], appendTag, form);
            case BUTTON_TAG:
                setCommonTagAttributes(jsForm[formKeyName][iteration], appendTag);
            }
            appendChildTag(appendTag, form);            
            addNewLine(form);
        }
        appendChildTag(form, document.body);
    }
}