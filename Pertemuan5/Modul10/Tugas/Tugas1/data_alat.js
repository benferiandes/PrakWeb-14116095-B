var data_alat = [
    "Buku Tulis ada 100","Spidol","kursi"];
function tampil(){
    var lis = document.getElementById("lis");
    lis.innerHTML = "";
    for(let i = 0; i < data_alat.length; i++){
        var btnEdit = "<a href='#' onclick='edit("+i+")'>Edit</a>";
        var btnHapus = "<a href='#' onclick='hapus("+i+")'>Hapus</a>";
        lis.innerHTML += "<li>" + data_alat[i] + " ["+btnEdit + " | "+ btnHapus +"]</li>";
  }
}
function tambah(){
    var input = document.querySelector("input[name=barang]");
    data_alat.push(input.value);
    tampil();
}
function edit(id){
    var baru = prompt("Nama baru", data_alat[id]);
    data_alat[id] = baru;
    tampil();
}
function hapus(id){
    data_alat.splice(id, 1);
    tampil();
}
tampil();
