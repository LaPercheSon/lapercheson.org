const sections = document.querySelectorAll("main .main_section");

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        console.log("entering", entry.target.id);
        if (entry.isIntersecting) {

            document.querySelectorAll(".aside_element")
                .forEach(p => p.classList.remove("current_aside"));

            const id = "aside_"+entry.target.id//.replace("section", "aside_");

            document.getElementById(id).classList.add("current_aside");
        }
    });
}, {
    threshold: 0.5
});

sections.forEach(section => observer.observe(section));