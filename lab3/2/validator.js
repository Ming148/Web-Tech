function validateForm() {
    let idcitizen = document.forms.myForm.citizen.value;
    if (idcitizen.length != 13 || checkchar(idcitizen)) {
        alert("กรุณาใส่เลขบัตรประชาขนจำนวน 13 หลัก");
        return false;
    }
    let namepreflix = document.forms.myForm.Namepreflix.value;
    if (namepreflix == "null") {
        alert("กรุณาเลือกคำนำหน้า");
        return false;
    }
    let firstname = document.forms.myForm.FirstName.value;
    if (firstname.length < 2 || firstname.length > 20 || !checkchar(firstname)) {
            alert("กรุณาใส่ชื่อความยาวระหว่าง 2-20 ตัวอักษร");
            return false;
    }
    let lastname = document.forms.myForm.LastName.value;
    if (lastname.length < 2 || lastname.length > 20 || !checkchar(lastname)) {
            alert("กรุณาใส่นามสกุลความยาวระหว่าง 2-20 ตัวอักษร");
            return false;
    }
    let homeaddress = document.forms.myForm.HomeAddress.value;
    if (homeaddress.length <= 5) {
        alert("กรุณาใส่ที่อยู่ของคุณความยาวไม่ตำ่กว่า 5 ตัวอักษร");
        return false;
    }
    let tambom= document.forms.myForm.Tambon.value;
    if (tambom.length <= 2 || !checkchar(tambom)) {
        alert("กรุณาใส่ตำบลของคุณความยาวไม่ตำ่กว่า 2 ตัวอักษร");
        return false;
    }
    let amphur = document.forms.myForm.Amphur.value;
    if (amphur.length <= 2 || !checkchar(amphur)) {
        alert("กรุณาใส่อำเภอของคุณความยาวไม่ตำ่กว่า 2 ตัวอักษร");
        return false;
    }
    let province = document.forms.myForm.Province.value;
    if (province == "null") {
        alert("กรุณาเลือกจังหวัด");
        return false;
    }
    let zipcode = document.forms.myForm.Zipcode.value;
    if (zipcode.length != 5 || checkchar(zipcode)) {
        alert("กรุณาใส่รหัสไปรษณีย์ความยาว 5 หลัก");
        return false;
    }
}
function checkchar(char){
    for (let i = 0; i < char.length; i++) {
        if (char[i] in ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']) {
            return false;
        }
    }
    return true;
}