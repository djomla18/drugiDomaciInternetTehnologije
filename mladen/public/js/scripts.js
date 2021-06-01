$(document).ready(function () {
    $("#kupiUlaznicuForma").submit(function (e) {
        e.preventDefault();

        const ime_prezime = $("#ime_prezime").val();
        const numerisano_mesto = $("#numerisano_mesto").val();
        const utakmica_id = $("#utakmica_id").val();

        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/api/ulaznice/store",
            data: {
                ime_prezime,
                numerisano_mesto,
                utakmica_id,
            },
            dataType: "json",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                alert(response.message);
            },
        });
    });

    $("body").on("click", ".destroy", function (e) {
        let id = $(this).attr("id");
        $.ajax({
            type: "DELETE",
            url: "http://127.0.0.1:8000/api/utakmice/destroy/" + id,
            dataType: "json",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                alert(response.message);
            },
        });
    });
});
