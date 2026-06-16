function validasiForm() {

    let nama = document.getElementById("nama").value;
    if (nama.length < 3) {
        alert("Nama minimal 3 karakter!");
        return false;
    }

    let email = document.getElementById("email").value;
    let polaEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!polaEmail.test(email)) {
        alert("Email tidak valid!");
        return false;
    }

    let jk = document.getElementsByName("jk");
    let pilihJK = false;
    for (let i = 0; i < jk.length; i++) {
        if (jk[i].checked) {
            pilihJK = true;
        }
    }
    if (!pilihJK) {
        alert("Pilih jenis kelamin!");
        return false;
    }

    let hobi = document.getElementsByName("hobi");
    let pilihHobi = false;
    for (let i = 0; i < hobi.length; i++) {
        if (hobi[i].checked) {
            pilihHobi = true;
        }
    }
    if (!pilihHobi) {
        alert("Pilih minimal 1 hobi!");
        return false;
    }

    let prodi = document.getElementById("prodi").value;
    if (prodi == "") {
        alert("Pilih program studi!");
        return false;
    }

    let tgl = document.getElementById("tgl").value;
    if (tgl == "") {
        alert("Tanggal lahir harus diisi!");
        return false;
    }

    let komentar = document.getElementById("komentar").value;
    if (komentar.length < 10) {
        alert("Komentar minimal 10 karakter!");
        return false;
    }

    alert("Data berhasil dikirim!");
    return true;
}