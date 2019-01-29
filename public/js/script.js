function validateEstimated(name, number, max, min) {
    let field = document.forms["calc-form"][name].value,
        validate = document.getElementsByClassName('validate');
    if (field === "") {
        validate[number].innerHTML = "Field is required";
    } else if (field > max) {
        validate[number].innerHTML = "Field must be less";
    } else if (field < min) {
        validate[number].innerHTML = "Field must be more";
    } else {
        validate[number].innerHTML = "";
    }
}