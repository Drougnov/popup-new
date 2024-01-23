/*
 * Popup Scripts.
 * Dependencies: main.js.
 * Version: 1.1.
 * Purpose: Handles popups on the website.
 * Author: Madlinks Coding.
 */

// If the variable is undefined, it means it haven't been run yet.
// If undefined run the script.
if (typeof scriptHasRun === "undefined") {
    // Set the variable to true to prevent the script from running multiple times.
    scriptHasRun = true;

    // Set global popup-time-delay variable.
    var popupTimeDelay;

    // Set global variable to check if popup is visible, for scroll trigger.
    var popupVisible = false;

    // Function to initiate the popup when the popup-open button is clicked.
    function initiate_popup(args) {
        // Set variables and extract the arguments.
        const popupTarget = args.target || false; // Get the target element for the popup, defaulting to false
        // If popupTarget is not provided, return.
        if (!popupTarget) {
            return false;
        }

        // Find the popup using its ID and store it as 'targetElement'.
        const targetElement = document.querySelector(popupTarget);

        // If popup not found, return.
        if (!targetElement) return;

        const popupOverlayColor =
            targetElement.getAttribute("data-popup-overlay-color") ||
            "rgba(0,0,0,0.65)"; // Get the overlay color for the popup, defaulting to semi-transparent black
        const popupType =
            targetElement.getAttribute("data-popup-type") || "default"; // Fallback value = "default"
        popupTimeDelay =
            parseFloat(targetElement.getAttribute("data-popup-time-delay")) ||
            0; // Fallback value = "0s"
        const popupScrollTrigger =
            targetElement.getAttribute("data-popup-scroll-trigger") || false; // Get the position to trigger popup, defaulting to false
        const popupAnimationType =
            targetElement.getAttribute("data-popup-animation-type") || false; // Get the popup animation type, defaulting to false
        var popupPosition =
            targetElement.getAttribute("data-popup-position") || false; //scrollable as default
        const popupOverPopup =
            targetElement.getAttribute("data-popup-over-popup") || false; // Check if current popup is placed over another popup, default value = "false"
        const popupMaxHeight =
            targetElement.getAttribute("data-popup-max-height") || "false"; // Get the popup's max-height, defaulting to false
        const popupFullWidthMode =
            targetElement.getAttribute("data-popup-full-width") || false; // Check if current popup has full-width mode, defaulting to false

        const bodyHeight =
            document.body.clientHeight ||
            document.documentElement.clientHeight ||
            window.innerHeight;

        // Set overlay background color.
        targetElement.style.backgroundColor = popupOverlayColor;

        // Set popup container's max-height.
        targetElement.querySelector(".ExGby").style.maxHeight = popupMaxHeight;

        // Add classes based on the popup type.
        if (popupType !== "default") {
            // Add the type class to the target element.
            targetElement.classList.add(popupType);

            // If the popup type is force-slidein, add classes for styling.
            if (popupType === "force-slidein-popup") {
                targetElement.classList.add("slidein-popup", "force-slide-in");
            }

            // If the popup type is alert or form, center it.
            if (popupType === "alert-popup" || popupType === "form-popup") {
                popupPosition = "centered";
            }

            // If the popup type is cookie.
            if (popupType === "cookie-popup") {
                // Set variables for cookie popups.
                const cookieName =
                    targetElement.getAttribute("data-popup-cookie-name") ||
                    "example_cookie";
                const cookieExpiration =
                    targetElement.getAttribute(
                        "data-popup-cookie-expiration"
                    ) || "Fri, 31 Dec 9999 23:59:59 GMT";
                const confirmButton = targetElement.querySelector(
                    "#confirmCookieButton"
                );
                const exitButton =
                    targetElement.querySelector("#exitCookieButton");

                // On click of confirm set cookie.
                confirmButton.addEventListener("click", () => {
                    document.cookie = `${cookieName}=true; expires=${cookieExpiration}; path=/`;

                    // Check if the cookie is set.
                    if (document.cookie.indexOf(`${cookieName}=true`) > -1) {
                        // If the cookie is set, close the popup.
                        closePopup(targetElement);
                    }
                });

                // On click of exit redirect to blank page.
                exitButton.addEventListener("click", () => {
                    window.location.href = "about:blank";
                });
            }
        }

        // Add a class to prevent closing the popup.
        if (targetElement.getAttribute("data-popup-prevent-close")) {
            targetElement.classList.add("prevent-close");

            // Find all the close icons/buttons.
            var closeButtons = targetElement.querySelectorAll(".AYaOY");

            closeButtons.forEach((closeButton) => {
                // On click of close icons/buttons, close the popup.
                closeButton.addEventListener("click", closePopupManually);
            });
        }

        // If popup position value is provided.
        if (popupPosition) {
            // Add the popupPosition argument's value as a class for styling.
            targetElement.classList.add(popupPosition);

            // If popup position is "centered" & "popup_max_height" value is provided.
            if (popupPosition === "centered") {
                if (targetElement.getAttribute("data-popup-max-height")) {
                    // Set the provided value as popup's max-height.
                    targetElement.querySelector(".ExGby").style.maxHeight =
                        popupMaxHeight;
                } else {
                    // Else set 500px as popup's max-height.
                    targetElement.querySelector(".ExGby").style.maxHeight =
                        "500px";
                }
            }
        }

        // If animation type is provided.
        if (popupAnimationType) {
            // Add the popupAnimation argument's value as a class for styling.
            targetElement.classList.add(popupAnimationType);
        }

        // If popupOverPopup is true (current popup is placed over another popup).
        if (popupOverPopup) {
            // Add the class 'popup-over-popup' for styling.
            targetElement.classList.add("popup-over-popup");
        }

        // Function to parse and convert the popupSpaceFromTop value based on its unit (px or %).
        function parseScrollPosition(value, bodyHeight) {
            if (typeof value === "string" && value.endsWith("%")) {
                // If has % convert string to number.
                const percentage = parseFloat(value);
                // Convert percentage to pixels.
                return (percentage / 100) * bodyHeight;
            } else if (typeof value === "string" && value.endsWith("px")) {
                // If has px convert string to number.
                return parseFloat(value);
            } else {
                // Set fallback value as 0.
                return 0;
            }
        }

        // Calculate the vertical space from the top of the page where the popup trigger is set to open.
        // If the 'popup_top_space' argument is provided, parse and convert its value; otherwise, default to 0.
        const popupSpaceFromTop =
            "popup_top_space" in args
                ? parseScrollPosition(
                      targetElement.getAttribute("data-popup-top-space"),
                      bodyHeight
                  )
                : 0;

        // If popup trigger on scroll down is true, set up a scroll event listener.
        if (popupScrollTrigger === true) {
            // Function to check the scroll position and open the popup.
            function checkScrollPosition() {
                // Get the current scroll position of the page.
                const scrollTop =
                    window.pageYOffset || document.documentElement.scrollTop;

                // If the popup is not opened already and the page is scrolled to the the trigger position.
                if (!popupVisible && scrollTop >= popupSpaceFromTop) {
                    // Set a flag to prevent the popup from opening multiple times.
                    popupVisible = true;

                    // Call the openPopup function with your targetElement and delay.
                    openPopup(targetElement, popupTimeDelay);
                }
            }
            window.addEventListener("scroll", checkScrollPosition);
        }

        // If popup has full-width view mode.
        if (popupFullWidthMode) {
            // Add class to the popup for styling.
            targetElement.classList.add("toggle-width-popup");

            // Get popup content's container.
            var popupContentContainer = targetElement.querySelector(".TImJU");

            // if popup content's container exist
            if (popupContentContainer) {
                // get full-width toggle icons/buttons
                const popupFullWidthButton =
                    popupContentContainer.querySelector(".popup__full-width");
                const popupNormalWidthButton =
                    popupContentContainer.querySelector(".popup__normal-width");

                // show full-width popup on full-width button/icon click, if exist
                if (popupFullWidthButton) {
                    popupFullWidthButton.addEventListener(
                        "click",
                        showFullWidthPopup
                    );
                }

                // show normal-width popup on normal-width button/icon click, if exist
                if (popupNormalWidthButton) {
                    popupNormalWidthButton.addEventListener(
                        "click",
                        showNormalWidthPopup
                    );
                }
            }
        }

        // If trigger on scroll is set to false, open the popup.
        if (!popupScrollTrigger) {
            openPopup(targetElement, popupTimeDelay);
        }

        // Create and dispatch a custom event when the popup opens.
        var popupOpenedEvent = new CustomEvent("popupOpened", {
            detail: { target: popupTarget },
        });
        document.dispatchEvent(popupOpenedEvent);

        // Set dragging state as false by default.
        let isDragging = false;

        // Set dragging state to true if dragging start.
        targetElement.addEventListener("mousedown", function (e) {
            isDragging = true;
        });

        // Set dragging state to false if dragging end.
        targetElement.addEventListener("mouseup", function (e) {
            isDragging = false;
        });

        // Close the popup when clicking on the overlay.
        targetElement.addEventListener("click", function (e) {
            // prevent popup from closing if has the class 'prevent-close'.
            if (targetElement.classList.contains("prevent-close")) {
                return;
            }

            // If the user is currently not dragging.
            if (!isDragging) {
                // If clicked on popup overlay (DuKSh) or close button(AYaOY).
                if (
                    e.target.classList.contains("DuKSh") ||
                    e.target.classList.contains("AYaOY")
                ) {
                    // If current popup is over another popup stop event bubbling.
                    if (popupOverPopup) {
                        e.stopPropagation();
                    }
                    closePopup(targetElement);
                    targetElement.classList.remove("opened");
                    // Check if the clicked element's parent is either the popup overlay (DuKSh) or a close button (AYaOY).
                } else if (
                    e.target.closest(".DuKSh") ||
                    e.target.closest(".AYaOY")
                ) {
                    e.stopPropagation(); // Prevent the click event from propagating to the parent div.
                }
            }
        });

        // Close the popup when clicking on elements with class 'AYaOY(close buttons)'.
        const closeButtonElements = targetElement.querySelectorAll(`.AYaOY`);
        closeButtonElements.forEach(function (element) {
            element.addEventListener("click", function () {
                // prevent popup from closing if has the class 'prevent-close'.
                if (targetElement.classList.contains("prevent-close")) {
                    return;
                }
                closePopup(element.closest(".DuKSh"));
            });
        });
    }

    // Function to open the popup (with an optional time delay).
    function openPopup(element, popupTimeDelay = 0) {
        // Delay time = 0s by default.
        // Use setTimeout to add delay time before openeing popup based on the provided 'popupTimeDelay' value.
        setTimeout(() => {
            // Open the popup by adding 'flex(display flex)' and 'opened' class.
            element.classList.add("flex");
            element.classList.add("opened");

            // If the current popup is on another popup.
            if (element.classList.contains("popup-over-popup")) {
                // Show the current popup.
                element.style.visibility = "visible";
                // Get the parent popup of the current popup.
                const parentPopup = element.parentElement.closest(".DuKSh");
                // Add class 'has-child-popup' to the parent popup.
                parentPopup.classList.add("has-child-popup");
            }

            // If the popup is slidein/force-slidein, return.
            if (element.classList.contains("slidein-popup")) {
                return;
            }

            // Disable scrolling if popup opens.
            document.body.style.overflow = "hidden";
        }, popupTimeDelay * 1000); // Convert delay from seconds to milliseconds.
    }

    // Function to close the popup.
    function closePopup(element) {
        // Close popup by removing 'flex(display flex)' and 'opened' class.
        element.classList.remove("flex");
        element.classList.remove("opened");

        // Create and dispatch a custom event when the popup closes.
        var popupClosedEvent = new CustomEvent("popupClosed", {
            detail: { target: element.id },
        });
        document.dispatchEvent(popupClosedEvent);

        // If popup has fade-in, remove transition while closing.
        if (element.classList.contains("animate-fade-in")) {
            element.classList.remove("animate-fade-in");
        }

        // If popup has bounce in animation, reset it (re-show animation while re-opening).
        if (element.classList.contains("animate-bounce-in")) {
            element.classList.remove("animate-bounce-in");
        }

        // If the popup is slidein/force-slidein, return.
        if (element.classList.contains("slidein-popup")) {
            return;
        }

        // Enable scrolling if popup closed.
        document.body.style.overflow = "auto";

        // If the current popup is on another popup.
        if (element.classList.contains("popup-over-popup")) {
            // Hide the current popup.
            element.style.visibility = "hidden";
            // Get the parent popup of the current popup.
            const parentPopup = element.parentElement.closest(".DuKSh");
            // Remove class from the parent popup.
            parentPopup.classList.remove("has-child-popup");
        }
    }

    // Function to close popups manually when 'prevent_close' argument value is true.
    function closePopupManually() {
        // Get the popup with the class 'prevent-close'.
        const openedPopup = document.querySelector(".prevent-close");

        // If exist, close it.
        if (openedPopup) {
            closePopup(openedPopup);
        }
    }

    // Function to show popup full width view mode.
    function showFullWidthPopup(event) {
        // Add class to the popup for styling.
        const popup = event.currentTarget.closest(".DuKSh");
        if (popup) {
            popup.classList.add("full-width");
        }
    }

    // Function to show popup normal width view mode.
    function showNormalWidthPopup(event) {
        // Add class to the popup for styling.
        const popup = event.currentTarget.closest(".DuKSh");
        if (popup) {
            popup.classList.remove("full-width");
        }
    }

    // Function to handle height exceeded.
    function handleHeightExceeded(popup, popupElementsContainer) {
        // Obtain the visible and scrollable heights of the container.
        let popupElementsContainerHeight = popupElementsContainer.offsetHeight; // Get the visible height.
        let popupElementsHeight = popupElementsContainer.scrollHeight; // Get the scrollable height.

        // Check if SimpleBar scroll is initialized.
        if (
            popupElementsContainer.classList.contains("simplebar-scrollable-y")
        ) {
            const simpleBarContent =
                popupElementsContainer.querySelector(".simplebar-content");
            // Adjust the scrollable height to the 'simplebar-content' div's height.
            popupElementsHeight = simpleBarContent.offsetHeight;
        }

        // Determine if the actual height exceeds the visible height.
        if (popupElementsHeight > popupElementsContainerHeight) {
            // Add 'exceeded' class if content overflows.
            popup.classList.add("exceeded");

            // Add SimpleBar stylesheet to the dom.
            addAssetsToDOM(
                [
                    "https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css",
                ],
                function () {
                    //console.log("Style sheet loaded successfully!");
                },
                "absolute",
                "style"
            );

            // Add SimpleBar script and initialize after it's loaded.
            addAssetsToDOM(
                [
                    "https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js",
                ],
                function () {
                    //console.log("SimpleBar script has been loaded and executed");
                    // Initialize SimpleBar after the script is fully loaded.
                    new SimpleBar(popupElementsContainer);
                },
                "absolute",
                "script"
            );
        } else {
            // Check if the 'exceeded' class exists.
            if (popup.classList.contains("exceeded")) {
                // Remove the 'exceeded' class if content no longer exceeds the container.
                popup.classList.remove("exceeded");

                // Destroy SimpleBar instance if content is no longer exceeded.
                const simpleBarInstance = SimpleBar.instances.get(
                    popupElementsContainer
                );
                if (simpleBarInstance) {
                    simpleBarInstance.unMount();
                }
            }
        }
    }

    // Add scrollbar via 'simplebar' dynamically added to DOM, when popup's height exceeds window height.
    // Store the timeout ID for delay handling.
    let timeoutId;

    // Listen for the 'popupOpened' event.
    document.addEventListener("popupOpened", function (e) {
        // Check if event detail and target exist.
        if (e.detail && e.detail.target) {
            // Clear the previous timeout if it exists.
            if (timeoutId) {
                clearTimeout(timeoutId);
            }

            // Get the popup overlay (.DukSh).
            const popup = document.querySelector(`${e.detail.target}`);

            // Set popup element's container variable.
            var popupElementsContainer;

            // If popup type is scroll or slidein, set 'elements-container' as popup container.
            if (
                popup.classList.contains("scroll-popup") ||
                popup.classList.contains("slidein-popup")
            ) {
                popupElementsContainer = popup.querySelector(
                    ".elements-container"
                );
            }

            // If elements-container is not found or popup type is not scroll or slidein, set 'ExGby' as popup container.
            if (!popupElementsContainer) {
                popupElementsContainer = popup.querySelector(".ExGby");
            }

            // Set a new delay for certain actions.
            timeoutId = setTimeout(() => {
                // Call the function to handle height exceeded.
                handleHeightExceeded(popup, popupElementsContainer);
            }, 100); // Set a delay of 100 milliseconds.
        }
    });

    /*
     * Single Menu Dropdown Scripts.
     * Dependencies: None.
     * Version: 1.1.
     * Purpose: Handles popups on the website.
     * Author: Madlinks Coding.
     */
    function singleMenu() {
        // Check if the dropdown overlay already exists.
        let dropdownOverlay = document.querySelector(".dropdown-menu-overlay");

        // If the overlay doesn't exist, create it.
        if (!dropdownOverlay) {
            dropdownOverlay = document.createElement("div");
            dropdownOverlay.classList.add("dropdown-menu-overlay");
            document.body.appendChild(dropdownOverlay);
        }

        // Find all elements with the class 'target-id-button'.
        const targetElements = document.querySelectorAll(".target-id-button");

        // Create a map to associate target elements with menu elements based on data attributes.
        const targetMenuMap = new Map();

        // Iterate through target elements and handle click events.
        targetElements.forEach((targetElement) => {
            // Get the associated menu element using the data-menu attribute.
            const associatedMenu = document.querySelector(
                `[data-menu="${targetElement.getAttribute("data-target")}"]`
            );

            // Check if the associated menu exists.
            if (associatedMenu) {
                // Map the target element to its associated menu.
                targetMenuMap.set(targetElement, associatedMenu);
                targetElement.show = false; // Initialize the 'show' property for each target.
                // Handle click events on the dropdown target element.
                targetElement.addEventListener("click", (event) => {
                    event.stopPropagation(); // Prevent this click event from propagating to the document click handler.
                    targetElement.show = !targetElement.show;

                    // Toggle the visibility of the associated menu and overlay based on the 'show' property.
                    if (targetElement.show) {
                        associatedMenu.style.display = "block";
                        targetElement.classList.add("active");
                        dropdownOverlay.style.display = "block";
                    } else {
                        associatedMenu.style.display = "none";
                        targetElement.classList.remove("active");
                        dropdownOverlay.style.display = "none";
                    }
                });
            }
        });

        // Function to close all single menu dropdowns.
        function closeAllSingleMenuDropdowns() {
            // Loop through all the dropdowns.
            targetMenuMap.forEach((menu, targetElement) => {
                // Hide the dropdown menu and overlay.
                menu.style.display = "none";
                targetElement.classList.remove("active");
                targetElement.show = false;
                dropdownOverlay.style.display = "none";
            });
        }

        // On click of overlay close all single menu dropdowns.
        dropdownOverlay.addEventListener("click", (event) => {
            closeAllSingleMenuDropdowns();
        });

        // Close single menu dropdown on closing of any popup.
        const popups = document.querySelectorAll(".DuKSh");
        // Loop through all the popups.
        popups.forEach((popup) => {
            // On click of popup.
            popup.addEventListener("click", () => {
                // If the popup is already opened.
                if (popup.classList.contains("opened")) {
                    closeAllSingleMenuDropdowns();
                }
            });
        });

        // Check the position of containers to determine if menus should be aligned to the right.
        const dropdownContainers = document.querySelectorAll(".target-id");

        // Iterate through each 'target-id' container.
        dropdownContainers.forEach((container) => {
            // Get the bounding rectangle (position and size) of the container.
            const rect = container.getBoundingClientRect();

            // Get the width of the viewport (the visible part of the browser window).
            const viewportWidth = window.innerWidth;

            // Find the dropdown menu element within this container.
            const dropdownMenu = container.querySelector(".menu-id");

            // Calculate half of the width of the parent element of the target element.
            const targetHalfWidth = container.offsetWidth / 2;

            // Set a CSS variable with the calculated half width value.
            container.style.setProperty(
                "--target-half-width",
                targetHalfWidth + "px"
            );

            // Add a 'right' class to the dropdown menu if it's close to the right edge of the screen.
            if (rect.right > viewportWidth - 300) {
                dropdownMenu.classList.add("right");
            }
        });
    }

    // Find all the dropdown target elements.
    const dropdownElements = document.querySelectorAll(".target-id-button");

    // Loop through the dropdown target elements.
    dropdownElements.forEach((element) => {
        element.addEventListener("click", (e) => {
            // initialise the singleMenu function
            singleMenu();

            // Add a manual click event to open the clicked dropdown.
            element.click();
        });
    });
}

/*
 * Toast Notification Scripts.
 * Dependencies: None
 * Version: 1.1.
 * Purpose: Handles popups on the website.
 * Author: Madlinks Coding
 * Reference:
 */
