function radioactive(el) {
    for (var i = 1; i <= 6; i++) {
        document.getElementById("btn" + i).style.backgroundColor = "#f7f7f7a1";
    }
    el.style.backgroundColor = "orange";
    document.getElementById("saldo_input").value = el.value;
}
