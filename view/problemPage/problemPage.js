document.addEventListener('DOMContentLoaded', function() {
    var submitBtn=document.getElementById('buttomBtn');
    var fileselect=document.getElementById('selectFile');
    var fileData;
    fileselect.addEventListener('change', function(event) {
        var file = event.target.files[0]; // Get the selected file

        if (file) { // Check if a file is selected
            var reader = new FileReader();

            // Define the onload event for FileReader
            reader.onload = function(e) {
               // console.log(e.target.result); // Print file content to console
                fileData = e.target.result;
            };

            // Read the file as text
            reader.readAsText(file);
        } else {
            console.log("No file selected");
        }
    });
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
                var data = JSON.parse(xml.responseText);
                if (data.status === "success") {
                    event.preventDefault();
                    console.log();
                    console.log();
                    //window.location.href = "../statusPage/statusPage.php?code=" + data.code + "&language=" + data.language;
                } else {
                    alert("login failed");
                }
        }
    };

        var data = {
            "code": code,
            "language": language,
            "filE":fileData
        };
        console.log(data);
        xml.send(JSON.stringify(data));
    });
});