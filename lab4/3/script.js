var num = 1;
    function siriphum() {
        let table = document.getElementById("table");
        var row = table.insertRow(-1);
        var numcell = row.insertCell(0);
        var idcell = row.insertCell(1);
        var fnamecell = row.insertCell(2);
        var lnamecell = row.insertCell(3);

        numcell.innerHTML = num;
        num++;
        idcell.innerHTML = studentid.value;
        fnamecell.innerHTML = fname.value;
        lnamecell.innerHTML = lname.value;
    }