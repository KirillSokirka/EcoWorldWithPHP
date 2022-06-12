const signInbutton = document.querySelector("#signIn-btn"),
    signUpbutton = document.querySelector("#signUp-btn"),
    signInModal = document.querySelector("#signIn-modal"),
    signUpModal = document.querySelector("#signUp-modal");

if (signUpModal !== null && signInModal !== null) {
    signUpModal.querySelector(".close").onclick = () => {
        signUpModal.style.display = "none";
    };

    signInbutton.onclick = () => {
        signInModal.style.display = 'flex';
    };

    signInModal.querySelector(".close").onclick = () => {
        signInModal.style.display = "none";
    };

    signUpbutton.onclick = () => {
        signUpModal.style.display = 'flex';
    };

    $('#form').submit(function(event) {
        if (!matchPassword()) {
            event.preventDefault();
        }
    });
}

function matchPassword() {
    var pw1 = document.getElementById("password").value;
    var pw2 = document.getElementById("confirmPassword").value;
    if(pw1 !== pw2)
    {
        alert("Passwords did not match");
        return false;
    } else {
        return true;
    }
}
