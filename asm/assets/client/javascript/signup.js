function validateForm() {
  var hoTen = document.getElementById("hoTen");
  var mail = document.getElementById("mail");
    var gt = document.getElementById("gt")
    var radios = document.getElementsByName("sex");
    var st = document.getElementById("st")
    var hobbies = document.getElementsByName("hobbies");
    var dropdown = document.forms["f1"]["dropdown"];
    var description = document.getElementById("note");
    // gán input nhập masv vào biến masv
    let masv = document.forms["f1"]["id"].value;
    // gán input họ tên sinh viên vào biến ten
    let ten = document.forms["f1"]["usename"].value;
    // gán input nhập email vào biến email
    let email = document.forms["f1"]["email"].value;
    //gán thẻ chứ id result vào biến result
    var result = document.getElementById("result");
    //bắt lỗi và đặt nền màu vàng nếu

    if(masv == ""||ten == ""||email == ""||email==null||dropdown.value == "Chọn quốc tịch"||description.value.length >= 200||(!radios[0].checked && !radios[1].checked)||(!hobbies[0].checked && !hobbies[1].checked && !hobbies[2].checked && !hobbies[3].checked && !hobbies[4].checked)){
      result.classList.add('sai');
      hoTen.classList.add('sai');
      mail.classList.add('sai');
      gt.classList.add('sai');
      st.classList.add('sai')
      dropdown.classList.add("sai")
      description.classList.add("sai")
    }
        //bắt lỗi nếu không nhập masv
    if (masv == "") {
      alert("Hãy nhập mã sinh viên vào!");
      return false;
    } else {
      result.classList.remove('sai');
    }
    //bắt lỗi nếu không nhập họ tên sinh viên
    
    if (ten == "") {
      alert("Hãy nhập họ tên vào!");
      return false;
    }else {
      hoTen.classList.remove('sai');
    }
    //Bắt lỗi nếu ko nhập email
    
    if (email == "") {
      alert("Hãy nhập email vào!");
      return false;
    }else {
      mail.classList.remove('sai');
    }
    //bắt lỗi nếu không chọn giới tính
   
    if (!radios[0].checked && !radios[1].checked) {
      alert("Vui lòng chọn giới tính")
      return false;
    }else {
      gt.classList.remove('sai');
    }
    //bắt lỗi nếu không chọn sở thích
   
    if (!hobbies[0].checked && !hobbies[1].checked && !hobbies[2].checked && !hobbies[3].checked && !hobbies[4].checked) {
      alert("Vui lòng chọn sở thích!!")
      return false;
    }else {
      st.classList.remove('sai');
    }
    //bắt lỗi nếu không chọn quốc tịch
    
    if (dropdown.value == "Chọn quốc tịch") {
      alert("Vui lòng chọn quốc tịch!");
      dropdown.focus();
      return false;
    }else {
      dropdown.classList.remove('sai');
    }
    
    if (description.value.length >= 200) {
      alert("Ghi chú chỉ được nhập dưới 200 kí tự!");
      description.focus();
      return false;
    }else {
      description.classList.remove('sai');
    }
    alert("Chúc mừng bạn đã nhập thành công")
  }