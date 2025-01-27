// Function to open popup
function openPopup(url) {
    console.log("Opening Popup with URL:", url);

    if (!url) {
        console.error("Invalid URL passed to openPopup");
        return;
    }

    const iframe = document.getElementById('popupFrame');
    iframe.src = url;
    iframe.style.display = 'block';

    const closeButton = document.getElementById('closeButton');
    closeButton.style.display = 'block';
}

// Function to close the popup
function closePopup() {
    const iframe = document.getElementById('popupFrame');
    iframe.style.display = 'none';

    const closeButton = document.getElementById('closeButton');
    closeButton.style.display = 'none';

    // Clear the iframe src to prevent memory leaks
    iframe.src = '';
}

// Function to ensure popup opens when the icon is clicked
function setupPopupListener() {
    const popupLinks = document.querySelectorAll('.svg_outer');

    popupLinks.forEach(link => {
        // Ensure no duplicate event listeners
        link.removeEventListener('click', handlePopupClick);

        // Attach the click event listener
        link.addEventListener('click', handlePopupClick);
    });
}

// Event handler for popup links
function handlePopupClick(event) {
    event.preventDefault();
    const url = this.getAttribute('data-url'); // Retrieve URL from the `data-url` attribute
    openPopup(url);
}

function handleScreenTransition() {
    const screens = document.querySelectorAll('.Screens');

    screens.forEach(screen => {
        screen.addEventListener('transitionend', function () {
            setupPopupListener(); // Re-setup listeners if needed after transitions
        });
    });
}

// Initialize everything on DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
    setupPopupListener();
    handleScreenTransition();

    // Close button listener
    document.getElementById('closeButton').addEventListener('click', closePopup);
});

// for flip functionality

jQuery(document).ready(function ($) {
    // Flip to back when arrow is clicked
    $('.arrow').on('click', function () {
        $(this).closest('.flip-image-wrapper').addClass('flip-active');
    });

    // Flip back to front when close button is clicked
    $('.close-flip').on('click', function () {
        $(this).closest('.flip-image-wrapper').removeClass('flip-active');
    });
});