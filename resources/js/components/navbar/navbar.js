function whenSidebarButtonClicked() {
    const sidebarStatus = document.documentElement.classList;

    if (sidebarStatus.contains("sidebar-collapsed")) {
        sidebarStatus.remove("sidebar-collapsed");
        localStorage.setItem("sidebar-collapsed", "false");
        return;
    }

    sidebarStatus.add("sidebar-collapsed");
    localStorage.setItem("sidebar-collapsed", "true");
}

document.addEventListener("DOMContentLoaded", function () {
    const sidebarButton = document.getElementById("navbar-sidebar-button");
    sidebarButton.addEventListener("click", whenSidebarButtonClicked);
});
