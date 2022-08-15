function validateForm(){
    let ten = document.forms["f1"]["email"].value;
    let mk = document.forms["f1"]["password"].value;
    var hoTen = document.getElementById("mail")
    var pass = document.getElementById("pass")
    if (ten == "" & mk== "") {
        hoTen.classList.add("sai")
        pass.classList.add("sai")
        alert("Vui lòng nhập email và mật khẩu!");
        tenSP.focus();
        return false;
    }else{
        hoTen.classList.remove("sai")
        pass.classList.remove("sai")
    }
    if (ten == "") {
        hoTen.classList.add("sai")
        alert("Vui lòng nhập email!");
        tenSP.focus();
        return false;
    }else{
        hoTen.classList.remove("sai")
    }
    if (mk == "") {
        pass.classList.add("sai")
        alert("Vui lòng nhập mật khẩu!");
        tenSP.focus();
        return false;
    }else{
        pass.classList.remove("sai")
    }
    alert("Chúc mừng bạn đã nhập đúng");
}