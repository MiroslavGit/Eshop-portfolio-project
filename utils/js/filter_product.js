var doc = document;

var children = doc.querySelectorAll(".child");

children.forEach(function(child) {
    child.addEventListener("click", function() {
        var sibling = this.nextElementSibling;
        if (sibling.classList.contains("expanded")) {
            sibling.classList.remove("expanded");
        } else {
            sibling.classList.add("expanded");
        }
        console.dir(sibling);
    });
});