function  check_pass() {
    var x = document.forms["reg_form"]["n_passwd"].value;
    var y = document.forms["reg_form"]["re_passwd"].value;
    if (x === y) {
        return true;
    } else {
        alert("Not Matched");
        return false;
    }
}
function check_balance() {
    var x = document.forms["reg_form"]["ac_info"].value;
    if (x < 0) {
        alert("Enter Ammount Grater than Zero!");
        return false;
    } else {
        return true;
    }
}
function validate() {
    if (check_pass() && check_balance()) {
        return true;
        alert("some error");
    } else {
        return false;
    }
}
function add_cart() {
    alert("Item Added to Cart!");
}

