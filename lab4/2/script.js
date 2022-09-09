function changelanguage() {
    let FirstName = document.getElementById('FirstName');
    let LastName = document.getElementById('LastName');
    let Country = document.getElementById('Country');
    let list = document.getElementById('list');
    let button = document.getElementById('btn');
    let encountries = [
        "Select a country",
        "Thai",
        "Vietnam",
        "Lao",
        "Malaysia",
        "Singapore",
        "Philippines",
        "Myanmar",
        "Cambodia",
        "Brunei"
    ]
    let thcountries = [
        "เลือกประเทศ",
        "ไทย",
        "เวียดนาม",
        "ลาว",
        "มาเลเซีย",
        "สิงคโปร์",
        "ฟิลิปปินส์",
        "เมียนมาร์",
        "กัมพูชา",
        "บรูไน"
    ]
    if (button.className == "th") {
        FirstName.textContent = "First Name : ";
        LastName.innerText = "Last Name : ";
        Country.innerText = "Country : ";
        button.innerText = "เปลี่ยนเป็นภาษาไทย";
        button.className = "en";
        list.innerText = encountries;
        for (let i = 0; i < 9; i++) {
            let op = document.createElement("option");
            let txtcountry = document.createTextNode(encountries[i]);
            op.appendChild(txtcountry);
            list.appendChild(op);
        }
    } else if (button.className == "en") {
        FirstName.textContent = "ชื่อ : ";
        LastName.innerText = "นามสกุล : ";
        Country.innerText = "ประเทศ : ";
        button.innerText = "Change to English";
        button.className = "th";
        list.innerText = thcountries;
        for (let i = 0; i < 9; i++) {
            let op = document.createElement("option");
            let txtcountry = document.createTextNode(thcountries[i]);
            op.appendChild(txtcountry);
            list.appendChild(op);
        }
    }

}