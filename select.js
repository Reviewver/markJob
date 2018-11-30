function selectAll(select)
{
    for (var i=0 ; document.getElementsByTagName("input")[i] != undefined ; i++)
    {
        document.getElementsByTagName("input")[i].checked = select;
    }
    click();
}
 
function verifSelect()
{
    var select = false;
    for (var i=0 ; document.getElementsByTagName("input")[i] != undefined ; i++)
    {
        if(document.getElementsByTagName("input")[i].checked == true)
        {
            select = true;
        }
    }

    return select;
}

function click()
{
    var element = document.getElementById("export");
    if(!verifSelect())
    {
        console.log("disable");
        element.disabled = true;
    }
    else
    {
        console.log("enable");
        element.disabled = false;
    }
}

var element = document.getElementsByTagName("input");
for (var i = 0 ; element[i] != undefined ; i++)
{
    element[i].addEventListener("change",click);
}

click();


