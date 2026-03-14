const sections = document.querySelectorAll("main .main_section");

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {

            document.querySelectorAll(".aside_element")
                .forEach(p => p.classList.remove("current_aside"));

            const id = "aside_"+entry.target.id//.replace("section", "aside_");

            document.getElementById(id).classList.add("current_aside");
        }
    });
}, {
    rootMargin: "-50% 0px -50% 0px",
    threshold: [0,0.25,0.5,0.75,1]
});

sections.forEach(section => observer.observe(section));