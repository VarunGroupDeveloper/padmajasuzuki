    // Function to apply the styles once the WhatsApp button is loaded
    function applyWhatsAppButtonStyles() {
        const waButton = document.querySelector(".chat360__wa__btn-container");
        if (waButton) {
            // Common styles for all screens
            waButton.style.position = "fixed";
            waButton.style.bottom = "184px";
            waButton.style.zIndex = "999";

            // Adjust button size
            waButton.style.width = "60px";
            waButton.style.height = "60px";

            if (window.innerWidth <= 768) {
                waButton.style.right = "35px"; // Mobile
            } else if (window.innerWidth <= 1024) {
                waButton.style.right = "45px"; // Tablet
            } else {
                waButton.style.right = "35px"; // Desktop
            }


            // Hide the WhatsApp support text if it's present
            const supportText = document.querySelector(".chat360__wa__support-text");
            if (supportText) {
                supportText.style.display = "none";
            }

            // Stop checking after applying the styles
            clearInterval(checkButton);
        }
    }

    // Check periodically for the WhatsApp button to load
    const checkButton = setInterval(applyWhatsAppButtonStyles, 500);
    window.addEventListener("resize", applyWhatsAppButtonStyles);