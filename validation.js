document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const email = form.email.value.trim();
        const name = form.name.value.trim();
        const mobile = form.mobile.value.trim();
        const address = form.address.value.trim();
        const dob = form.dob.value.trim();

        if (!isValidEmail(email)) {
            alert("Please enter a valid email address.");
            return;
        }

        if (!isValidName(name)) {
            alert("Please enter a valid name.");
            return;
        }

        if (!isValidMobile(mobile)) {
            alert("Please enter a valid mobile number.");
            return;
        }

        if (!isValidAddress(address)) {
            alert("Please enter a valid address.");
            return;
        }

        if (!isValidDOB(dob)) {
            alert("Please enter a valid date of birth.");
            return;
        }


        form.submit();
    });

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function isValidName(name) {
        return /^[a-zA-Z\s]+$/.test(name);
    }

    function isValidMobile(mobile) {
        return /^[0-9]{10}$/.test(mobile);
    }

    function isValidAddress(address) {
        return address.length > 0;
    }

    function isValidDOB(dob) {
        return dob.length > 0;
    }
});
