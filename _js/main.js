function proibirNumeros(e) {
    let reg = /[0-9]/g
    if(!reg.test(e.value)) {
        e.value = e.value.slice(0, -1)
    }
}