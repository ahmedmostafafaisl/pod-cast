

/*****************************  Validate user data ******************************************/
function validation(e){

    if (!((/^[a-zA-Z]*$/).test(e.target.value)))
    {

        userName.className = "form-control is-invalid"
    }else{
        userName.className = "form-control is-valid"

    }
}






