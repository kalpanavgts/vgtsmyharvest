$("#formvalidation")
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
      location: {
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
      location: {
        required: "Kindly choose location",
      },
    },
    submitHandler: function () {
      let name = $("#name").val();
      let mail = $("#mail").val();
      let contactnumber = $("#contactnumber").val();
      let location = $("#location").val();
      let formname = $("#formname").val();
      let fordata = { name, mail, contactnumber, location, formname };

      callApicall(fordata);
    },
  });

function callApicall(fordata) {
  //Button load
  document.getElementById("submitbtn").disabled = true;

  $.ajax({
    url: "backend/mail/sendmail.php",
    data: fordata,
    cache: false,
    contentType: false,
    processData: false,
    method: "POST",
    type: "POST",
    success: function (data) {
      document.getElementById("formvalidation").reset();
      document.getElementById("submitbtn").disabled = false;
      alert("File has been sent");
    },
  });
}
