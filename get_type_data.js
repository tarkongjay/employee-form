
function insertData() {

        var action = '';

            action = "insertData.php";
        
        document.getElementById("myForm").action = action;

        this.submit();
    }


function updateData() {

    var action = '';

        action = "updateData.php";
    
    document.getElementById("myForm").action = action;

    this.submit();
}

function deleteData() {
 
    var action = '';

        action = "deleteData.php";
    
    document.getElementById("myForm").action = action;

    this.submit();
}

