function calculate() {
    var num1 = document.getElementById("value1").value;
    var num2 = document.getElementById("value2").value;
    var result = parseInt(num1) + parseInt(num2);
    document.getElementById("result").innerText = "Result : " + result;

    let nine = document.createElement("li");
    // nine.innerText = num1 + " + " + num2 + " = " + result;
    // document.getElementsByClassName("container")[0].appendChild(nine);

    // อาจารย์สอนว่าเป็นการเพิ่มลงในลิสต์ของหน้าต่างนี้ได้เลย
    let txt = document.createTextNode(num1 + " + " + num2 + " = " + result);
    nine.appendChild(txt);
    let history = document.getElementById("result");
    history.appendChild(nine);
    document.body.appendChild(nine);

}
