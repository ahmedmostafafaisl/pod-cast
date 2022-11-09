const elementRegex = {
  firstName: /^[a-zA-Z]{3,}$/,
  lastName: /^[a-zA-Z]{3,}$/,
  email: /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/,
  password: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/,
  phone: /01[0125][0-9]{8}$/,
  // ^((?:[+?0?0?966]+)(?:\s?\d{2})(?:\s?\d{7}))$
  age:/[0-9]$/
};
const confirmpassword_regex =
  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
window.onload = function () {
  const elements = document.querySelectorAll("input");

  elements.forEach((element) => {
    element.oninput = (e) => {
      if (e.target.value.match(elementRegex[element.id])) {
        element.className = "form-control is-valid";
        submit = false;
      } else {
        element.className = "form-control is-invalid";
      }
    };
  });

  confirmpassword.addEventListener("input", (e) => {
    if (
      confirmpassword.value == password.value &&
      confirmpassword.value.match(confirmpassword_regex)
    ) {
      console.log(1);
      confirmpassword.className = "form-control is-valid";
    } else {
      confirmpassword.className = "form-control is-invalid";
    }
  });
};
