$("#visitform")
  .submit(function (e) {
    e.preventDefault();
  })
  .validate({
    rules: {
      name: {
        required: true,
      },
      mail: {
        required: true,
        email: true,
        required: true,
      },
      contactnumber: {
        required: true,
        number: true,
        minlength: 10,
        maxlength: 10,
      },
      month: {
        required: true,
        number: true,
      },
      whoareyou: {
        required: true,
      },
    },
    messages: {
      name: "Kindly enter your name",
      mail: {
        required: "Kindly enter your email address",
        email: "Enter valid format",
      },
      contactnumber: {
        required: "Kindly enter your mobile number",
        number: "Enter valid mobile number",
        minlength: "Enter valid mobile number",
        maxlength: "Enter valid mobile number",
      },
      month: {
        required: "Fill this field",
        number: "Enter valid integer",
      },
      whoareyou: {
        required: "Kindly fill this field",
      },
    },
    submitHandler: function () {
      callApicall();
    },
  });

function callApicall() {
  let name = $("#name").val();
  let mail = $("#mail").val();
  let contactnumber = $("#contactnumber").val();
  let month = $("#month").val();
  let whoareyou = $("#whoareyou").val();

  let fordata = { name, mail, contactnumber, month, whoareyou };

  //Button load
  document.getElementById("submitbtn").disabled = true;
  $.post("backend/mail/visitfarms.php", fordata, function (sucdata) {
    Swal.fire('Form submitted');
    document.getElementById("visitform").reset();
    document.getElementById("submitbtn").disabled = false;
  });
}
