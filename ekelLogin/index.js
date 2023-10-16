const form= document.getElementById('form');
const username= document.getElementById('username');
const password= document.getElementById('password');

form.addEventListener('login',function(e)
{
    e.preventDefault();
    if(username.value.trim()==="")
    {
        setError(username,"Username is required!!");
    }
    if(password.value.trim()==="")
    {
        setError(password,"password is required!!");
    }


});