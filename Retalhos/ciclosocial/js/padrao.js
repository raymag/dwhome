var form = document.forms[0];
form.onsubmit = function(){
    return false;
}

var btAddPerson = document.getElementById("addPerson")
btAddPerson.addEventListener("click", function(){
    document.location.href='addperson.php';
});

var nameIn = document.getElementById("nameIn");
nameIn.addEventListener("keyup", function(){
    var dl = document.getElementById("namelist");
    var name = nameIn.value;
    name = name.split(" ");
    name = name.join("+");
    if(nameIn.length==0){
        // tb.border = "";
        dl.innerHTML = "";
    }else{
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState==4&&this.status==200){
                // dl.innerHTML = this.responseText;
                // console.log(dl.innerHTML);
                // console.log(this.responseText);
                if(dl.options.length==0){
                    document.getElementById("tb").innerHTML = "";
                    document.getElementById("tb").border = "0";
                }
                if(dl.innerHTML != this.responseText){
                    dl.innerHTML = this.responseText;
                }
            }
        }
        // console.log(name);
        xmlhttp.open("GET", "getNameList.php?nome="+name, true);
        xmlhttp.send();
    }
});
nameIn.onchange = function(){
    // console.log("Ok");
    var namev = document.getElementById("nameIn").value;
    namev = namev.split(" ");
    namev = namev.join("+");
    var tb = document.getElementById("tb");
    if(namev.length>0){
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = function(){
            if(this.readyState==4&&this.status==200){
                if(this.responseText!=""){
                    tb.border = "1";
                    tb.innerHTML = "<tr><th>Nome:</th><th>Idade:</th><th>Sexo:</th><th>Ocupação:</th></tr>"+this.responseText;
                    // console.log(this.responseText);
                }
            }
        }
        xml.open("GET", "getperson.php?nome="+namev, true);
        xml.send();
    }else{
        tb.border = "0";
        tb.innerHTML = "";
    }
}