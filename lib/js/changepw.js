const changepw = () => {
    const userid = document.changeform.userid;
    if(userid.value == '') {
        alert('Please enter your ID.');
        userid.focus();
        return false;
    }

    const newuserpw = document.changeform.new_pw;
    if(newuserpw.value == '') {
        alert('Please enter your New Password.');
        newuserpw.focus();
        return false;
    }

    const newuserpw_ch = document.changeform.new_pw_ch;
    if(newuserpw_ch.value == '') {
        alert('Please enter your New Password Check.');
        newuserpw_ch.focus();
        return false;
    }

    if(newuserpw.value != newuserpw_ch.value) {
        alert('The password is different.');
        newuserpw_ch.focus();
        return false;
    }

    return true;
}