document.addEventListener("DOMContentLoaded", () => {

    function updateSlantedMargin() {
        const certSection = document.querySelector(".section-container.certification");
        const slantedBg = document.querySelector(".slanted-bg");

        // Only run on smaller devices
        if (window.innerWidth > 767.98){
            slantedBg.style.marginTop = 0 + "px";
            return;
        };


        if (!certSection || !slantedBg) return;

        const height = certSection.offsetHeight + 20;

        // Apply CSS dynamically
        slantedBg.style.marginTop = height + "px";

        console.log("Slanted margin-top set to:", height + "px");
    }

    updateSlantedMargin();          // Run on initial load
    window.addEventListener("resize", updateSlantedMargin);  // Update on resize
});


const projects = [
    {
        title: "TERRALITH",
        image: "/assets/terralith.png",
        desc: `
            <strong>Terralith</strong> is an Android learning app designed for 10th-grade students to explore Lithosphere Dynamics independently through interactive materials, videos, and quizzes that enhance understanding and disaster awareness.
        `,
        colors: ["#001F3F", "#6A8EBB", "#B9D7EA", "#D6E6F2"],
        typography: [
            { label: "Heading L", size: "32px", weight: "Bold" },
            { label: "Heading M", size: "26px", weight: "Bold" },
            { label: "Body L", size: "18px", weight: "Bold" },
            { label: "Body M", size: "16px", weight: "Regular" },
        ]
    },

    {
        title: "REGISTER",
        image: "/assets/register.png",
        desc: `
            <strong>Register App</strong> is a mobile attendance app for educators to create classes, register students, track attendance, and export reports. Designed with a clean interface and intuitive flow to improve efficiency and reduce errors.
        `,
        colors: ["#0F2D47", "#3C566C", "#8796A3", "#FFFFFF"],
        typography: [
            { label: "Heading L", size: "32px", weight: "Bold" },
            { label: "Heading M", size: "26px", weight: "Bold" },
            { label: "Body L", size: "18px", weight: "Bold" },
            { label: "Body M", size: "16px", weight: "Regular" },
        ]
    },

    {
        title: "JSDT",
        image: "/assets/jsdt.png",
        desc: `
            <strong>JSDT Apps</strong> is a mobile learning platform that helps students prepare for IEB exams through notes, quizzes, activities, and exam collections. Designed with clear navigation to support independent and efficient learning.
        `,
        colors: ["#0F2D47", "#3C566C", "#D9D9D9", "#F4F4F4"],
        typography: [
            { label: "Heading L", size: "32px", weight: "Bold" },
            { label: "Heading M", size: "22px", weight: "Bold" },
            { label: "Body L", size: "16px", weight: "Bold" },
            { label: "Body M", size: "14px", weight: "Bold" },
        ]
    }
];

let currentIndex = 0;

function renderProject(index) {
    const p = projects[index];

    document.getElementById("project-title").textContent = p.title;
    document.getElementById("project-image").src = p.image;
    document.getElementById("project-desc").innerHTML = p.desc;

    // COLORS
    document.getElementById("project-colors").innerHTML =
        p.colors.map(color => `
            <div class="color-item text-start flex-fill">
                <div class="color-box" style="background:${color}; border:1px solid ${color};"></div>
                <div class="color-label">${color}</div>
            </div>
        `).join("");

    // TYPOGRAPHY
    document.getElementById("project-typography").innerHTML =
        p.typography.map(t => `
            <p class="typo-${t.label.replace(' ', '-').toLowerCase()}">
                ${t.label}<br><span>Size: ${t.size} • Weight: ${t.weight}</span>
            </p>
        `).join("");
}

// Initial load
renderProject(currentIndex);

// Buttons
document.querySelector(".carousel-btn:first-child").addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + projects.length) % projects.length;
    renderProject(currentIndex);
});

document.querySelector(".carousel-btn:last-child").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % projects.length;
    renderProject(currentIndex);
});