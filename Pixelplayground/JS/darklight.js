function lightdarkButton() {
   const element = document.body;
   element.classList.toggle("dark-mode");
   element.classList.toggle("box1")
   element.classList.toggle("box2")
   element.classList.toggle("main")
   element.classList.toggle("header")
   element.classList.toggle("footer")
   element.classList.toggle("a")


 const DarkMode = element.classList.contains("dark-mode");
    localStorage.setItem("darkMode", DarkMode ? "enabled" : "disabled");
}

window.onload = function() {
    const savedMode = localStorage.getItem("darkMode");
    if (savedMode === "enabled") {
        const element = document.body;
        element.classList.add("dark-mode", "box1", "box2", "main", "header", "footer", "a");
    }
};