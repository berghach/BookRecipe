// import './bootstrap';



// document.getElementById('search').addEventListener('input', function () {
//     console.log('done');
// });
document.addEventListener('click', function (event) {
    let $menuTrigger = event.target.closest('.menu-trigger');

    // Check if the clicked element is a '.menu-trigger' or is inside '.menu-trigger'
    if ($menuTrigger) {
        if ($menuTrigger.classList.contains('active')) {
            // Close the menu
            $menuTrigger.classList.remove('active');
            document.querySelector('.nav').style = "";
        } else {
            // Open the menu
            $menuTrigger.classList.add('active');
            document.querySelector('.nav').style.display = "block";
        }
    } else {
        // Click outside the menu, close if needed
        let $closeMenu = document.querySelector('.menu-trigger.active');
        if ($closeMenu) {
            $closeMenu.classList.remove('active');
            document.querySelector('.nav').style = "";
        }
    }
});

