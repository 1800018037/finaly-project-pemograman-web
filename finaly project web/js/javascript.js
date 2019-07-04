function cari() {//menampilkan fungsi dalam program
var kata = document.formcari.keyword.value;//menampilkan variabel keyword
var hasil = "http://www.google.com/search?q=" + kata ;//variabel hasil
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')//membuka jendela baru di browser
}

 var sayHello = () => alert("Cari Data...");//variabel data
    