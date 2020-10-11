let showSidebar = false;

function toggleSidebar() {
    const sidebar = document.getElementById('sidebarMenu');
    const overlay = document.getElementById('menuOverlay');

    showSidebar = !showSidebar;

    if (showSidebar) {
        sidebar.style.transform = 'translateX(0)';
        overlay.style.display = 'block';
    } else {
        sidebar.style.transform = 'translateX(70vw)';
        overlay.style.display = 'none';
    }

}
