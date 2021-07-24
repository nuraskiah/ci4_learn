$(document).ready(function () {
  $("#provinsi").change(function () {
    let id = $(this).val();
    $.ajax({
      url:
        "https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=" + id,
      method: "GET",
      dataType: "json",
      success: function (data) {
        let options = `<option value="">Pilih kota</option>`;
        $.each(data.kota_kabupaten, function (i, d) {
          options += `<option value=${d.id}>${d.nama}</option>`;
        });
        $("#kota").html(options);
      },
    });
  });

  $("#provinsi_search").change(function () {
    let id = $(this).val();
    $.ajax({
      url:
        "https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=" + id,
      method: "GET",
      dataType: "json",
      success: function (data) {
        let options = `<option value="">Pilih kota</option>`;
        $.each(data.kota_kabupaten, function (i, d) {
          options += `<option value=${d.id}>${d.nama}</option>`;
        });
        $("#kota_search").html(options);
      },
    });
  });

  $(".btn-tambah").click(function () {
    $("#staticBackdropLabel").html("Tambah Data Faskes");
    let options = `<option value="">Pilih kota</option>`;

    $("#id").val("");
    $("#nama").val("");
    $("#alamat").val("");
    $("#provinsi").val("");
    $("#kota").html(options);
    $("#kota").val("");
    $("#telepon").val("");
    $("#status").val("");
    $("#btn-submit").html("Tambah");
  });

  $(".btn-ubah").click(function () {
    $("#staticBackdropLabel").html("Ubah Data Faskes");
    let id = $(this).data("id");
    $.ajax({
      url: baseURL + "/admin/faskes/" + id,
      method: "GET",
      dataType: "json",
      success: function (data) {
        $.ajax({
          url:
            "https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=" +
            data.provinsi,
          method: "GET",
          dataType: "json",
          success: function (data) {
            let options = "";
            $.each(data.kota_kabupaten, function (i, d) {
              options += `<option value=${d.id}>${d.nama}</option>`;
            });
            $("#kota").html(options);
          },
        });
        $("#id").val(data.id);
        $("#nama").val(data.nama);
        $("#alamat").val(data.alamat);
        $("#provinsi").val(data.provinsi);
        $("#kota").val(data.kota);
        $("#telepon").val(data.telepon);
        $("#status").val(data.status);

        $("#btn-submit").html("Ubah");
      },
    });
  });
});
