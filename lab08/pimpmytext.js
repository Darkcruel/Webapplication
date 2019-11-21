function hello()
{
    var x =document.getElementById("Text");
    var size = 12;
    var increasing = setInterval(function(){
        var max_size = 24;
        size = size + 2;
        x.style.fontSize = size+"pt";
        console.log(size)
        if(size === max_size){
            clearInterval(increasing);
        }
    },500)
}

function bling()
{
    document.getElementById("Text").style.color = "green";
    document.getElementById("Text").style.textDecoration = "Underline";
    document.getElementById("Text").style.fontWeight = "bold";
    document.body.style.backgroundImage = 'url("https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/8/hundred.jpg")'
}

function snoopify()
{
    var temp = document.getElementById("Text");
    var string = temp.value.toUpperCase();
    var temp = string.split(".");
    string = temp.join("-izzle");
    document.getElementById("Text").value = string;
}

function PigLatin()
{
    var text = document.getElementById("Text").value;
    var list = text.split(" ")
    var vowelcase = ['a','e','i','o','u']
    for(var i = 0;i<list.length;i++){
        var char = list[i].split("");
        while(!vowelcase.includes(char[i].charAt(0))){
            var vowel = char[0];
            char.shift();
            char.push(vowel);
        }
        list[i] = char.join("") + "ay";
    }
    document.getElementById("Text").value = list.join(" ");
}

function malkovitch()
{
    var sent = document.getElementById("Text").value
    var list = sent.split(" ")
    for(var i = 0;i<list.length;i++){
        if(list[i].length >= 5){
            list[i] = "Malkovitch";
        }
    }
    document.getElementById("Text").value = list.join('')
}
