function getJenis(e) {
    var str = e.target.value
    var str_array = str.split("|")

    document.getElementById("nama").value = str_array[0]
    document.getElementById("ketersediaan").value = str_array[1]

    jumlah_permohonan.setAttribute("max", str_array[1]);
}

$(document).ready(function() {
var i = 1;
$("#add").click(function(e) {
    var clone = $(".rows:eq(0)").clone();
    $(".rows:last").after(clone);
});
$(document).on('click', '.btn_remove', function() {
    var button_id = $(this).attr("id");
    $('#row' + button_id + '').remove();
});
$('#submit').click(function() {
    $.ajax({
        url: "testhelper.php",
        method: "POST",
        data: $('#add_name').serialize(),
        success: function(data) {
            alert(data);
            $('#add_name')[0].reset();
        }
    });
});
});