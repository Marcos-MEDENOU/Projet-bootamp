

// Start Toggle Header profile
const toggleProfileNav = document.querySelector('#user_connect');
const showProfileNav = document.querySelector('#user_connect_navbar');
toggleProfileNav.addEventListener('click', () => {
    if(showProfileNav.classList=="show"){
        showProfileNav.classList.remove("show");
        console.log("shf");
    }else{
        showProfileNav.classList.add("show")
        console.log("ui");
    }
    // showProfileNav.classList.toggle('show');
});
// End Toggle Header profile
