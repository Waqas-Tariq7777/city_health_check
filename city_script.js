//Testimonials start here
const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let currentIndex = 0;
let autoSlideInterval;
let autoSlideTimeout;

function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}

function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlider();
    }, 5000);
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
    clearTimeout(autoSlideTimeout);
    autoSlideTimeout = setTimeout(() => {
        startAutoSlide();
    }, 5000);
}

prevBtn.addEventListener('click', () => {
    stopAutoSlide();
    currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
    updateSlider();
});

nextBtn.addEventListener('click', () => {
    stopAutoSlide();
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlider();
});

startAutoSlide();
//Testimonials Ends here

//Popup start here
const readMoreButtons = document.querySelectorAll('.read-more-btn');
const popup = document.getElementById('popup');
const closePopup = document.getElementById('closePopup');

readMoreButtons.forEach(button => {
    button.addEventListener('click', () => {
        popup.classList.add('show');
    });
});

const closePopupFunction = () => {
    popup.classList.remove('show');
};

closePopup.addEventListener('click', closePopupFunction);
//Popup ends here

//Contact form starts here
function validation(event) {
    event.preventDefault();
    let isValid = true;


    document.getElementById('first_name_error').innerHTML = "";
    document.getElementById('last_name_error').innerHTML = "";
    document.getElementById('email_error').innerHTML = "";
    document.getElementById('phone_error').innerHTML = "";
    document.getElementById('subject_error').innerHTML = "";
    document.getElementById('message_error').innerHTML = "";

    document.getElementById('first_name').style.borderColor = "";
    document.getElementById('last_name').style.borderColor = "";
    document.getElementById('email').style.borderColor = "";
    document.getElementById('phone').style.borderColor = "";
    document.getElementById('subject').style.borderColor = "";
    document.getElementById('feedback').style.borderColor = "";

    var first_name = document.getElementById('first_name').value;
    var last_name = document.getElementById('last_name').value;
    var email = document.getElementById('email').value;
    var phoneNo = document.getElementById('phone').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('feedback').value;

    if (first_name.trim() === "") {
        document.getElementById('first_name_error').innerHTML = "Error: First Name is required";
        document.getElementById('first_name_error').scrollIntoView({ behavior: "smooth", block: "center" });
        document.getElementById('first_name').style.borderColor = "red";
        isValid = false;
    } else if (first_name.length < 3) {
        document.getElementById('first_name_error').innerHTML = "Error: First Name must be greater than  or equal to 3 characters";
        document.getElementById('first_name_error').scrollIntoView({ behavior: "smooth", block: "center" });
        document.getElementById('first_name').style.borderColor = "red";
        isValid = false;
    }
    if (last_name.trim() === "") {
        document.getElementById('last_name_error').innerHTML = "Error: Last Name is required";
        document.getElementById('last_name_error').scrollIntoView({ behavior: "smooth", block: "center" });
        document.getElementById('last_name').style.borderColor = "red";
        isValid = false;
    }
    else if (last_name.length < 3) {
        document.getElementById('last_name_error').innerHTML = "Error: Last Name must be greater than or equal to 3 characters";
        document.getElementById('last_name_error').scrollIntoView({ behavior: "smooth", block: "center" });
        document.getElementById('last_name').style.borderColor = "red";
        isValid = false;
    }
    if (email.trim() === "") {
        document.getElementById('email_error').innerHTML = "Error: Email is required";
        document.getElementById('email_error').scrollIntoView({ behavior: "smooth", block: "center" });
        document.getElementById('email').style.borderColor = "red";
        isValid = false;
    }
    else if (email.indexOf('@') <= 0 ||
        email.lastIndexOf('.') >= email.length - 3) {
        document.getElementById('email_error').innerHTML = "Error: Invalid syntax";
        document.getElementById('email_error').scrollIntoView({ behavior: "smooth", block: "center" });
        document.getElementById('email').style.borderColor = "red";
        isValid = false;
    }

    if (phoneNo.trim() === "" || !/^\+92\d{10}$/.test(phoneNo)) {
        document.getElementById('phone_error').innerHTML = "Error: Enter a valid Pakistan phone number (+92 followed by 10 digits)";
        document.getElementById('phone_text').innerHTML = "";
        document.getElementById('phone_error').scrollIntoView({ behavior: "smooth", block: "center" });
        document.getElementById('phone').style.borderColor = "red";
        isValid = false;
    }
    if (subject.trim() === "") {
        document.getElementById('subject_error').innerHTML = "Error: Subject is required";
        document.getElementById('subject_error').scrollIntoView({ behavior: "smooth", block: "center" });
        document.getElementById('subject').style.borderColor = "red";
        isValid = false;
    }
    if (message.trim() === "") {
        document.getElementById('message_error').innerHTML = "Error: Message is required";
        document.getElementById('message_error').scrollIntoView({ behavior: "smooth", block: "center" });
        document.getElementById('feedback').style.borderColor = "red";
        isValid = false;    
    }
    if (isValid) {
        const summaryDetails = `
            First Name: ${first_name}\n
            Last Name: ${last_name}\n
            Email: ${email}\n
            Phone: ${phoneNo}\n
            Subject: ${subject}\n
            Message: ${message}\n
        `;
        alert("Form successfully submitted!\n\n" + summaryDetails);
        document.getElementById('myForm').reset();
    }
    else {
        alert("Please correct the errors and submit again.");
    }
}
