$(document).ready(function () {
    const stadionBody = $("#stadioni tbody");
    const baseURL = "http://127.0.0.1:8000";

    $.ajax({
        type: "GET",
        url: baseURL + "/api/stadioni/get",
        dataType: "json",
        success: function (res) {
            const stadioni = res.stadioni;
            stadionBody.html("");

            stadioni.forEach((stadion) => {
                stadionBody.append(
                    `
                <tr>
                  <td>${stadion.naziv}</td>
                  <td>${stadion.grad}</td>
                  <td>${stadion.broj_mesta}</td>
                  
                  <td>
                  <a href="${
                      baseURL + "/stadion/" + stadion.id
                  }" class="btn btn-info btn-block pregled">Pregledaj</a>
                 
                  </td>
              `
                );
            });
        },
    });
});
