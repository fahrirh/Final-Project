/*Buat button hijau merah kuning
 untuk ubah background-h1
 https://getbootstrap.com/docs/4.3/components/buttons/
 
 */
var item=1;
$("#button-biru").click(
    function () {
        $("h1").css('background-color','#ff66cc');
    }
);
$(".btn-danger").click(
    function () {
        $("h1").css('background-color','red');
    }
);

$(".btn-info").click(
    function () {
        $(".list-group").append("<li class='list-group-item'> Item Tambahan ke"+item+"</li>");
        item++;
    }
);

$("#submit").click(
    function () {
     var nama_peserta =  $("#nama-peserta").val();
     var nilai_peserta = $("#nilai-peserta").val();
     var hasilcek = cek_lulus(nilai_peserta);
     $(".list-group").append("<li class='list-group-item'> Nama Peserta "+nama_peserta+" -- Nilai Peserta "+nilai_peserta+" -- "+hasilcek+"</li>");

    }
);

function cek_lulus(nilai){
    var n = parseInt(nilai);
    if (n>50){
        return 'Lulus';
    }
    else{
        return 'Tidak lulus';
    }
}