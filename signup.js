function controllo(event){ 
    if(form.password.value!==form.conf_password.value){
        alert("Le password sono diverse.");	
        event.preventDefault();
    }
    
    if(form.username.value.lenght == 0 || form.name.value.length == 0 || form.surname.value.length == 0 || form.email.value.length == 0 || form.password.value.length == 0){
        alert("Compilare tutti i campi.");
        event.preventDefault();
    }
    if(form.email.value.indexOf('@') == -1){
        alert("L'email non è valida");
        event.preventDefault();
    }

    if(form.password.value.length < 8){
        alert("La password deve essere almeno di 8 caratteri");
        event.preventDefault();
    }
}

function onText(result){
    console.log(result);
    if(result==1){
        alert("Username già utilizzato, cambiarlo.");
        console.log(form.try);
        form.try.disable=true;
    }else{
        form.try.disable=false;
    }
}

function onResponse(res){
    return res.text();
}

function controllo_username(event){
    console.log(usr.value);
    const formData=new FormData();
    formData.append('username',usr.value);
	console.log(fetch('controllo_username.php',{
        method:'post',
        body:formData
    }).then(onResponse).then(onText));
	
}

const form = document.forms['nome_form'];
form.addEventListener('submit', controllo);
const usr=form.username;
usr.addEventListener('blur',controllo_username);