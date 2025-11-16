document.addEventListener("DOMContentLoaded", () => {

    function updateSlantedMargin() {
        // Only run on smaller devices
        if (window.innerWidth > 767.98) return;

        const certSection = document.querySelector(".section-container.certification");
        const slantedBg = document.querySelector(".slanted-bg");

        if (!certSection || !slantedBg) return;

        const height = certSection.offsetHeight + 20;

        // Apply CSS dynamically
        slantedBg.style.marginTop = height + "px";

        console.log("Slanted margin-top set to:", height + "px");
    }

    updateSlantedMargin();          // Run on initial load
    window.addEventListener("resize", updateSlantedMargin);  // Update on resize
});
