function hello()
{
    document.getElementById("Text").style.fontSize = "24pt";
}

function bling()
{
    var x = document.getElementById("bling").checked;
    if(x)
    {
    document.getElementById("Text").style.color = "green";
    document.getElementById("Text").style.textDecoration = "Underline";
    }
}