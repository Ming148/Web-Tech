function gurenge(){
    let name = document.forms.myForm.FullName.value;
    if (name == ""){
        alert("Please enter your name");
        return false;
    }
    document.getElementById("cardName").innerHTML = name;

    let phone = document.forms.myForm.PhoneNumber.value;
    if (phone == ""){
        alert("Please enter your phone number");
        return false;
    }
    document.getElementById("cardPhone").innerHTML = phone;

    let email = document.forms.myForm.Email.value;
    if (email == ""){
        alert("Please enter your email");
        return false;
    }
    document.getElementById("cardEmail").innerHTML = email;

    let company = document.forms.myForm.Company.value;
    if (company == ""){
        alert("Please enter your company");
        return false;
    }
    document.getElementById("cardCompany").innerHTML = company;
}