$("#formvalidation")
  .submit(function (e) {
    e.preventDefault();
  })
  .validate({
    rules: {
      mail: {
        required: true,
        email: true,
        required: true,
      },
      password: {
        required: true,
      },
    },
    messages: {
      mail: {
        required: "Kindly enter your email address",
        email: "Enter valid format",
      },
      password: {
        required: "Kindly enter password",
      },
    },
    submitHandler: function () {
      let mail = $("#mail").val();
      let password = $("#password").val();

      let fordata = { mail, password };

      callApicall(fordata);
    },
  });

function callApicall(fordata) {
   $.post("../backend/controllers/index.php?login=true", fordata, function (sucdata) {
      window.location = "../admin/visitfarm.php";
   });
}