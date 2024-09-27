document.addEventListener('DOMContentLoaded', function() {
    var submitBtn=document.getElementById('buttomBtn');
    var fileselect=document.getElementById('selectFile');
    var fileData;

    submitBtn.addEventListener('click', function() {
        console.log('Submit button clicked');
        event.preventDefault();
        var code = document.getElementById('codeArea').value;
        var language = document.getElementById('selectLang').value;

        xml=new XMLHttpRequest();
        xml.open("POST",'../../control/submited.php',true);
        xml.setRequestHeader("Content-type", "application/json charset=UTF-8");
        xml.onload = function() {
        if (xml.status == 200) {
            console.log( " response: "+xml.responseText);
            console.log("hello");
                var data = JSON.parse(xml.responseText);
                if (data.status === "success") {
                    console.log(fileData);
                    window.location.href = "../statusPage/statusPage.php?code=" + code + "&language=" + language+"&fileData="+fileData;
                } else {
                    alert("login failed");
                }
        }
    };

        var data = {
            "code": code,
            "language": language,
        };
        console.log(data);
        xml.send(JSON.stringify(data));
    });
});