/**
 * To get the json string that gives the data to build the form 
 * 
 * @return string
 */
function getJsonForm() {
    var jsonForm = '{"registration": [{"fieldName":"firstName","fieldTagName":"input","fieldType":"text","description":"First name","pattern":"^([a-zA-Z][ ]?)+$","fieldRequirement":"true","minLength":"3","maxLength":"20"},{"fieldName":"lastName","fieldTagName":"input","fieldType":"text","description":"Last name", "pattern":"^([a-zA-Z][ ]?)+$","minLength":"3","maxLength":"20"},{"fieldName":"age","fieldTagName":"input","fieldType":"number","description":"Age","min":"5","max":"150","fieldRequirement":"true"},{"fieldName":"email","fieldTagName":"input","fieldType":"email","description":"E-mail","pattern":"[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$","fieldRequirement":"true"},{"fieldName":"password","fieldTagName":"input","fieldType":"password","description":"Password","fieldRequirement":"true"},{"fieldName":"mobile","fieldTagName":"input","fieldType":"text","description":"Mobile number", "pattern":"^[7-9][0-9]{9}$","fieldRequirement":"true"},{"fieldName":"gender","fieldType":"radio","fieldTagName":"input","description":"Gender","fieldValue":"Male","fieldRequirement":"true"},{"fieldName":"gender","fieldType":"radio","fieldTagName":"input","description":"Gender","fieldValue":"Female","fieldRequirement":"true"},{"fieldName":"department","fieldTagName":"select","description":"Department","options":["Lamp","Mobility","Bigdata"]},{"fieldValue":"Register","fieldName":"Register","fieldTagName":"input","fieldType":"submit","description":"Register","action":"http://www.register.com"}]}';
    return jsonForm;
}

/**
 * To set attributes for the form
 * 
 * @param string formKeyName
 * @return object
 */
function setFormAttributes(formKeyName) {
    var newForm = document.createElement("form");
    var formTitle = document.createElement("h1");
    var formTitleContent = document.createTextNode(formKeyName.toUpperCase());
    appendChildTag(formTitleContent, formTitle);
    appendChildTag(formTitle, newForm);
    newForm.setAttribute("method", "post");
    newForm.setAttribute("name", formKeyName);
    newForm.setAttribute("noValidate", "");
    newForm.setAttribute("onsubmit", "return validate(this)");
    return newForm;
}

/**
 * To set attributes for the select tag 
 * 
 * @param object select
 * @param object appendTag
 * @param object parentTag
 */
function setSelectTagAttributes(select, appendTag, parentTag) {
    var selectLabelTag = document.createElement("label");
    selectLabelTag.innerHTML = select["description"] + " : ";
    parentTag.insertBefore(selectLabelTag, appendTag);
    for (var optionIndex = 0; optionIndex < select["options"].length; optionIndex++) { 
        var opt = document.createElement('option');
        opt.value = select["options"][optionIndex];
        opt.innerHTML = select["options"][optionIndex];
        opt.name = select["options"][optionIndex]; 
        appendChildTag(opt, appendTag);
    }
}

/**
 * To set common tag attributes
 * 
 * @param object common
 * @param object appendTag
 */
function setCommonTagAttributes(common, appendTag) {
    appendTag.setAttribute("type", common["fieldType"]);
    if (common["fieldValue"]) {
        appendTag.setAttribute("value", common["fieldValue"]);
    }
}

/**
 * To check for pattern validation
 * 
 * @param object field
 * @param object messageSpan
 * @param string pattern
 *
 * @return boolean
 */
function validatePattern(field, messageSpan, pattern) {
    pattern = new RegExp(pattern); 
    if (!pattern.test(field.value)) {
        return false;
    } else {
        return true;
    }
}

/**
 * To validate the fields
 * 
 * @param object form
 *
 * @return boolean
 */
function validate(form) {
    validityCheck = validateInputFields(form);
    if (!validityCheck) {
        return false;
    } else {
        return true;
    }
}

/**
 * To check if it is required field
 * 
 * @param string valueRequired
 * @param object messageSpan
 */
function isRequired(valueRequired, messageSpan) {
    if (valueRequired) {
        messageSpan.innerHTML = "*Please fill this field";
    } else {
        messageSpan.innerHTML = "";
    }
}

/**
 * To validate the text field
 * 
 * @param object field
 * @param object messageSpan
 *
 * @return boolean
 */
function validateTextField(field, messageSpan) {
    var pattern = field.getAttribute("pattern-check");
    var minLength = field.getAttribute("minLength");
    var maxLength = field.getAttribute("maxLength");
    if (pattern) {
        var isValid = validatePattern(field, messageSpan, pattern);
        if (!isValid) { 
            messageSpan.innerHTML = "*Enter a valid " + field.placeholder;
            return false;
        }
    }
    if (minLength) {
        if (field.value.length < minLength) {
            messageSpan.innerHTML = "*Must have atleast " + minLength + " characters";
            return false;
        }
    }
    if (maxLength) {
        if (field.value.length > maxLength) {
            messageSpan.innerHTML = "*Must have atmost " + maxLength + " characters";
            return false;
        }
    }
    return true;
}


/**
 * To validate number field
 * 
 * @param object field
 * @param object messageSpan
 *
 * @return boolean
 */
function validateNumberField(field, messageSpan) {
    var minValue = field.getAttribute("min");
    var maxValue = field.getAttribute("max");
    var fieldValue = parseInt(field.value);
    if (minValue) {
        if (fieldValue < minValue) {
            messageSpan.innerHTML = "*" + field.placeholder +" must be greater than " + minValue;
            return false;
        }
    }
    if (maxValue) {
         if (fieldValue > maxValue) {
            messageSpan.innerHTML = "*" + field.placeholder +" must be less than " + maxValue;
            return false;
        }
    }
    return true;
}


/**
 * To validate the input fields
 * 
 * @param object form
 *
 * @return boolean
 */
function validateInputFields(form) {
    var fields = form.getElementsByClassName("inputField");
    var messageSpans = form.getElementsByClassName("errorMessage");
    var isFormReady = 0;
    for (var fieldIndex = 0; fieldIndex < fields.length; fieldIndex++) { 
        var valueRequired = fields[fieldIndex].getAttribute("value-required");
        var fieldValue = fields[fieldIndex].value;
        var isValid = true;
        switch (fields[fieldIndex].type) { 
        case NUMBER_TYPE:
        case RANGE_TYPE:
            if (validateNumberField(fields[fieldIndex], messageSpans[fieldIndex])) {
                isValid = true;
            } else {
                isValid = false;
            }
            break;
        case TEXT_TYPE:
        case EMAIL_TYPE:
        case URL_TYPE:
        case PASSWORD_TYPE:
            if (validateTextField(fields[fieldIndex], messageSpans[fieldIndex])) {
                isValid = true;  
            } else {
                isValid = false;
            }
            break;
        }
        if (fieldValue === "") {
            if (!valueRequired) {
                isFormReady++;
            }
            isRequired(valueRequired, messageSpans[fieldIndex]);
            continue;
        }
        if (isValid) {
            isFormReady++;
            if (valueRequired) {
                messageSpans[fieldIndex].innerHTML = "*";
            } else {
                messageSpans[fieldIndex].innerHTML = "";
            }
        }
    } 
    if (isFormReady === fields.length) {
        return true;
    } else {
        return false;
    }
}


/**
 * To set attributes for the input tag
 * 
 * @param object inpur
 * @param object appendTag
 * @param object parentTag
 */
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
    case RANGE_TYPE:
        appendTag.setAttribute("min", input["min"]);
        appendTag.setAttribute("max", input["max"]);
    case TEXT_TYPE:
    case EMAIL_TYPE:
    case URL_TYPE:
    case PASSWORD_TYPE:
        appendTag.setAttribute("class", "inputField");
        if (input["pattern"]) {
            appendTag.setAttribute("pattern-check", input["pattern"]);
        }
        if (input["minLength"]) {
            appendTag.setAttribute("minLength", input["minLength"]);
        }
        if (input["maxLength"]) {
            appendTag.setAttribute("maxLength", input["maxLength"])
        }
        appendTag.setAttribute("placeholder", input["description"]);
    }
}


/**
 * To add new line
 * 
 * @param object parentTag
 *
 */
function addNewLine(parentTag) {
    var nextLine = document.createElement("br");
    appendChildTag(nextLine, parentTag);
}


/**
 * To append a new tag to the parent tag
 * 
 * @param object childTag
 * @param object parentTag
 */
function appendChildTag(childTag, parentTag) {
    parentTag.appendChild(childTag);
}

window.onload = loadForm;


/**
 * To load the form
 */
function loadForm() {
    var jsonString = getJsonForm();
    var jsForm = JSON.parse(jsonString);
    for (var formIndex = 0; formIndex < Object.keys(jsForm).length; formIndex++) {
        var formKeyName = Object.keys(jsForm)[formIndex];
        var form = setFormAttributes(formKeyName);
        for (var iteration = 0; iteration < jsForm[formKeyName].length; iteration++) { 
            var appendTag = document.createElement(jsForm[formKeyName][iteration]["fieldTagName"]);
            var spanTag = document.createElement("span");
            appendTag.setAttribute("name", jsForm[formKeyName][iteration]["fieldName"]);
            spanTag.setAttribute("class", "errorMessage");
            if (jsForm[formKeyName][iteration]["fieldRequirement"]) {
                appendTag.setAttribute("value-required", jsForm[formKeyName][iteration]["fieldRequirement"]);
            }
            appendChildTag(appendTag, form);  
            appendChildTag(spanTag, form);
            switch (jsForm[formKeyName][iteration]["fieldTagName"]) {
            case SELECT_TAG:
                setSelectTagAttributes(jsForm[formKeyName][iteration], appendTag, form);
                break;
            case INPUT_TAG:
                setInputTagAttributes(jsForm[formKeyName][iteration], appendTag, form);
            case BUTTON_TAG:
                setCommonTagAttributes(jsForm[formKeyName][iteration], appendTag);
            }        
            addNewLine(form);
        }
        appendChildTag(form, document.body);
    }
}