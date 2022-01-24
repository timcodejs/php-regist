const sendit = () => {
    const userid = document.regiform.userid;
    if(userid.value == '') {
        alert('Please enter your ID.');
        userid.focus();
        return false;
    }

    const userpw = document.regiform.userpw;
    if(userpw.value == '') {
        alert('Please enter your Password.');
        userpw.focus();
        return false;
    }

    const userpw_ch = document.regiform.userpw_ch;
    if(userpw_ch.value == '') {
        alert('Please enter your Password Check.');
        userpw_ch.focus();
        return false;
    }

    if(userpw.value != userpw_ch.value) {
        alert('The password is different.');
        userpw_ch.focus();
        return false;
    }

    const username = document.regiform.username;
    if(username.value == '') {
        alert('Please enter your Name.');
        username.focus();
        return false;
    }

    const userphone = document.regiform.userphone;
    if(userphone.value == '') {
        alert('Please enter your Phone Number.');
        userphone.focus();
        return false;
    }
    
    const expHpText = /^\d{3}-\d{3,4}-\d{4}$/;
    if(!expHpText.test(userphone.value)) {
        alert('Please check the format your Phone Number.');
        hp.focus()
        return false;
    }

    const useremail = document.regiform.useremail;
    if(useremail.value == '') {
        alert('Please enter your E-mail.');
        useremail.focus();
        return false;
    }

    const expEmailText = /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;
    if(!expEmailText.test(useremail.value)) {
        alert('Please check the format your E-mail.');
        useremail.focus();
        return false;
    }
    
    const userhobby = document.regiform.hobby;
    let flag = false;
    for(let i=0; i < userhobby.length; i++) {
        if(userhobby[i].checked) {
            flag = true;
            break;
        }
        
    }
    if(!flag){
        alert('Please select one or more your Hobby.');
        return false;
    }

    return true;
}