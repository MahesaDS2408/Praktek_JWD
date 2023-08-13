$(document).ready(function () {
  // getProvinsi
  var url = "/mapprovinsi";
  var base_url = window.location.origin;
  url = base_url + url;
  console.log(url);
  $.ajax({
    url: url,
    type: "GET",
    dataType: "json",
    success: function (data) {
      $('select[name="provinsi"]').empty();
      $('select[name="provinsi"]').append(
        '<option value="" selected>- Pilih Provinsi -</option>'
      );

      $.each(data, function (div, value) {
        $('select[name="provinsi"]').append(
          '<option value="' +
            value.id +
            '" data-idProv="' +
            value.id +
            '" data-nama="' +
            value.nama +
            '">' +
            value.nama +
            "</option>"
        );
      });
    },
  });

  // getKabupatenByIDProvinsi
  $('select[name="provinsi"]').on("change", function () {
    var idProv = $(this).find("option:selected").attr("data-idProv");
    var url = "/mappingkabupaten/:id";
    url = url.replace(":id", idProv);
    var base_url = window.location.origin;
    url = base_url + url;
    if (idProv) {
      $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
          $('select[name="kabupaten"]').empty();
          $('select[name="kabupaten"]').append(
            '<option value="" selected>- Pilih Kabupaten -</option>'
          );

          $.each(data, function (div, value) {
            $('select[name="kabupaten"]').append(
              '<option value="' +
                value.nama +
                '" data-idKota="' +
                value.id +
                '" data-nama="' +
                value.nama +
                '">' +
                value.nama +
                "</option>"
            );
          });
        },
      });
    } else {
      $('select[name="kabupaten"]').empty();
    }
  });

  // getKecamatanByIDKota
  $('select[name="kabupaten"]').on("change", function () {
    var idKota = $(this).find("option:selected").attr("data-idKota");
    var url = "/mappingkecamatan/:id";
    url = url.replace(":id", idKota);
    var base_url = window.location.origin;
    url = base_url + url;
    if (idKota) {
      $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
          $('select[name="kecamatan"]').empty();
          $('select[name="kecamatan"]').append(
            '<option value="" selected>- Pilih Kecamatan -</option>'
          );

          $.each(data, function (div, value) {
            $('select[name="kecamatan"]').append(
              '<option value="' +
                value.nama +
                '" data-idKec="' +
                value.id +
                '" data-nama="' +
                value.nama +
                '">' +
                value.nama +
                "</option>"
            );
          });
        },
      });
    } else {
      $('select[name="kecamatan"]').empty();
    }
  });

  // getDesaByIDKecamatan
  $('select[name="kecamatan"]').on("change", function () {
    var idKec = $(this).find("option:selected").attr("data-idKec");
    var url = "/mappingdesa/:id";
    url = url.replace(":id", idKec);
    var base_url = window.location.origin;
    url = base_url + url;
    if (idKec) {
      $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
          $('select[name="desa"]').empty();
          $('select[name="desa"]').append(
            '<option value="" selected>- Pilih Desa -</option>'
          );

          $.each(data, function (div, value) {
            $('select[name="desa"]').append(
              '<option value="' +
                value.id +
                '" data-idDes="' +
                value.id +
                '" data-nama="' +
                value.nama +
                '">' +
                value.nama +
                "</option>"
            );
          });
        },
      });
    } else {
      $('select[name="desa"]').empty();
    }
  });

  $('select[name="desa"]').on("change", function () {
    var alamat = $("#alamat").val();
    var provinsi = $("#provinsi").val();
    var kabupaten = $("#kabupaten").val();
    var kecamatan = $("#kecamatan").val();
    var desa = $("#desa").val();

    var fullalamat =
      alamat +
      ", Desa " +
      desa +
      ", Kec." +
      kecamatan +
      ", " +
      kabupaten +
      ", " +
      provinsi;

    $("#fullalamat").val(fullalamat);
  });
});
