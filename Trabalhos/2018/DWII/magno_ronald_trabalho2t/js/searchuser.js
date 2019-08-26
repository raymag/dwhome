function searchUser(value){
    if(value.length == 0){
        document.getElementById("search-result").innerHTML = "Primeiro pesquise por um email.";
        return;
    }else{
        var params = "username="+value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState==4 && this.status == 200){
                // alert(params);
                document.getElementById("search-result").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "searchuser.php", true);
        xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xmlhttp.send(params);
    }        
}