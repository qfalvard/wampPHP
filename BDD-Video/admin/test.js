function myFunction() {
                                let test = document.getElementById("password");
                                if (test.type === "password") {
        test.type = "text";
                                } else {
        test.type = "password";
}
}