$(document).ready(function () {
    const utakmiceBody = $("#utakmice tbody");
    const baseURL = "http://127.0.0.1:8000";

    $.ajax({
        type: "GET",
        url: baseURL + "/api/utakmice/get",
        dataType: "json",
        success: function (res) {
            const utakmice = res.utakmice;
            utakmiceBody.html("");

            utakmice.forEach((utakmica) => {
                utakmiceBody.append(
                    `
                <tr>
                  <td>${utakmica.tim_domacin}</td>
                  <td>${utakmica.tim_gost}</td>
                  <td>
                  <a href="${baseURL + "/stadion/" + utakmica.stadion.id}" >${
                        utakmica.stadion.naziv
                    }</a></td>
                  <td>${utakmica.odrzava_se_at}</td>
                  <td>${utakmica.cena}</td>
                  
                  <td>
                  <a href="${
                      baseURL + "/utakmica/" + utakmica.id
                  }" class="btn btn-info btn-block">Pregledaj</a>
                  <button id=${
                      utakmica.id
                  } class="btn btn-danger btn-block destroy">Obrisi</button>
                 
                  </td>
              `
                );
            });
        },
    });
});
