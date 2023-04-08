function validateForm() {
    let x = document.getElementById("username").value;
    let y = document.getElementById("password").value;
    const u_pattern = /^[a-zA-Z0-9_]+$/;
    const y_pattern = /^[ !\[\]~`:@$%^&+=*#?\-\.()_a-zA-Z0-9]+$/;
    var u_check, p_check;
    u_check = p_check = false;
    if (u_pattern.test(x)) u_check = true;
    else alert("Invalid username!");
    if (y_pattern.test(y)) p_check = true;
    else alert("Invalid password!");

    return (u_check && p_check);
}