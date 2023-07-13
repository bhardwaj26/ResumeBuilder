//alert("loading");
document.body.style.zoom = 1.0;
console.log("Heeeeiieeeieieie");
var scale = 'scale(1)';
document.body.style.webkitTransform =  scale;    // Chrome, Opera, Safari
 document.body.style.msTransform =   scale;       // IE 9
 document.body.style.transform = scale;     // General
function addNewAcadField(){
    //console.log("adding new field");
    let newNode =  document.createElement('textarea');
    newNode.classList.add('from-control');
    newNode.classList.add('acadField');
    newNode.setAttribute("cols", 62);
    newNode.setAttribute("placeholder"," Enter here")

    let aqOb = document.getElementById("aq");
    let aqAddButtonOb = document.getElementById("aqAddButton");

    aqOb.insertBefore(newNode,aqAddButtonOb);
}

function addNewProjectField(){
    //console.log("adding new field");
    let newNode =  document.createElement('textarea');
    newNode.classList.add('from-control');
    newNode.classList.add('projtField');
    newNode.setAttribute("cols", 62);
    newNode.setAttribute("placeholder"," Enter here")

    let projOb = document.getElementById("proj");
    let projtAddButtonOb = document.getElementById("projtAddButton");

    projOb.insertBefore(newNode,projtAddButtonOb);
}

function addNewtechSkillField(){
    let newNode = document.createElement('input');
    newNode.classList.add('from-control');
    newNode.classList.add('techskillField');
    newNode.classList.add('mt-2');
    newNode.setAttribute("size",60);    
    newNode.setAttribute("placeholder","Enter here");

    let tsOb = document.getElementById("ts");
    let tsAddButtonOb = document.getElementById('tsAddButton');

    tsOb.insertBefore(newNode,tsAddButtonOb);
}

function addNewInterSkillField(){
    let newNode = document.createElement('input');
    newNode.classList.add('from-control');
    newNode.classList.add('interskillField');
    newNode.classList.add('mt-2');
    newNode.setAttribute("size",60);    
    newNode.setAttribute("placeholder","Enter here");

    let isOb = document.getElementById("is");
    let isAddButtonOb = document.getElementById('isAddButton');

    isOb.insertBefore(newNode,isAddButtonOb);
}

   // image upload
console.log("here in js");
   var inpt = document.getElementById('profilePic')
    inpt.addEventListener("change", () => {
        console.log("here in changed ");
        const selectedFile = inpt.files[0];
       
        var reader = new FileReader()
        reader.onload = function(e)  {
            var imgg = document.getElementById('profileTpic')
            imgg.src = e.target.result;
            
        }
        reader.readAsDataURL(selectedFile)       
            
        

    });
    
//generating cv
function generateResume(){
    //console.log("genrating")   
    let nameField = document.getElementById("nameField").value;
    let nameT1 = document.getElementById("nameT1");
    nameT1.innerHTML = nameField;

    document.getElementById("nameT2").innerHTML = nameField;

    document.getElementById("contactT").innerHTML = document.getElementById("contactField").value;

    document.getElementById("emailT").innerHTML = document.getElementById("emailField").value;

    document.getElementById("addressT").innerHTML = document.getElementById("addressField").value;

    document.getElementById("linkT").innerHTML = document.getElementById("lkdInField").value;

    document.getElementById("gfgT").innerHTML = document.getElementById("gfgField").value;

    document.getElementById("leetT").innerHTML = document.getElementById("leetField").value;

    document.getElementById("profT").innerHTML = document.getElementById("psummField").value;
    

   

    // acadimic field
    let aqs = document.getElementsByClassName("acadField");
    let str ="";
    for(let e of aqs){
        str = str + `<li> ${e.value}</li>`;
    }
    document.getElementById("aqT").innerHTML = str;
    
    // project

    let projss = document.getElementsByClassName("projtField");
    let str1 = "";
    for(let e of projss){
        str1 += `<li> ${e.value}</li>`;
    }
    document.getElementById('projT').innerHTML = str1;

    //technical skills
    let techss = document.getElementsByClassName("techskillField");
    let str2 = "";
    for(let e of techss){
        str2 += `<li> ${e.value}</li>`;
    }
    document.getElementById('techT').innerHTML = str2;

    // inerpersonal skills
    let interss = document.getElementsByClassName("interskillField");
    let str3 = "";
    for(let e of interss){
        str3 += `<li> ${e.value}</li>`;
    }
    document.getElementById('interT').innerHTML = str3;

    document.getElementById("cv-form").style.display = 'none';
    document.getElementById("cv-template").style.display = 'block';
    
}

function printResume(){
    window.print();
}

