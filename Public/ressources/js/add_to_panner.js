//code add to paner
window.addEventListener("DOMContentLoaded", function(elems){
        let form_submit=document.querySelectorAll("#product_form");
    //function encode form element at submit 
    function serialize(form){
        let requestArray=[];
        form.querySelectorAll('[name]').forEach((element) => {
            if(element.name!=="viewport" && element.name!=="submit" && element.name!=="add_to_cart"){
                requestArray.push(element.name+ '=' + element.value);
            }
        });
        if(requestArray.length>0){
            return requestArray.join('&');
        }else{
            return false;
        }
    }
    // onClick form=> ajax execute
form_submit.forEach(function(el, index){
    el.addEventListener('submit', function(event){
        console.log(el);
            event.preventDefault();
            let xhttp= new XMLHttpRequest();
            let form_url="/ProductsControllers/detectIfUserConnect";
            let parameters=serialize(el); 
            console.log(parameters);
            xhttp.open("POST", form_url, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange=function(){
                //En cas de succes
                 if(xhttp.readyState==4 && xhttp.status==200){
                //     if(xhttp.responseText=="connecté" ){
                //         console.log("connecté");
                //     }else if(xhttp.responseText=="Déconnecté"){
                //         console.log("disconnect");
                //     }      
                    console.log(xhttp.responseText);      
                }     
            }
        xhttp.send(parameters);        
    });
})

})

